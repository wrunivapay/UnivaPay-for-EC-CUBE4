<?php

namespace Plugin\UnivaPay\Util;

use Eccube\Application;
use Plugin\UnivaPay\Entity\Config;
use Psr\Log\LoggerInterface;
use UnivaPay\Authentication\BearerAuthCredentialsBuilder;
use UnivaPay\Logging\LoggingConfigurationBuilder;
use UnivaPay\Logging\RequestLoggingConfigurationBuilder;
use UnivaPay\Logging\ResponseLoggingConfigurationBuilder;
use UnivaPay\Models\Charge;
use UnivaPay\Models\ChargeCaptureRequest;
use UnivaPay\Models\RefundCreateRequest;
use UnivaPay\UnivapayClientSdkClient;
use UnivaPay\UnivapayClientSdkClientBuilder;

class SDK
{
    // @UnivapayClientSdkClient 
    private $client;
    // @LoggerInterface
    private $logger;

    public function __construct(Config $config)
    {
        $this->logger = Application::getInstance()['eccube.logger'];
        $this->client = UnivapayClientSdkClientBuilder::init()
            ->bearerAuthCredentials(
                BearerAuthCredentialsBuilder::init(
                    $config->getAppSecret(),
                    $config->getAppId()
                )
            )
            ->baseUrl($config->getApiUrl())
            ->loggingConfiguration(
                LoggingConfigurationBuilder::init()->logger($this->logger)
                    ->level(\Psr\Log\LogLevel::INFO)
                    ->requestConfiguration(RequestLoggingConfigurationBuilder::init()
                        ->headers(true)
                        ->body(true)
                    )
                    ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()
                        ->body(true)
                    )
            )
            ->build();
    }

    private function execute(string $resource, string $id, callable $apiCall)
    {
        try {
            $resp = $apiCall();
        } catch (\Throwable $e) {
            $this->logger->error(sprintf('UnivaPay request failed: %s %s - %s', $resource, $id, $e->getMessage()));
            throw new UnivaPayApiException(sprintf('Failed to %s %s: request error - %s', $resource, $id, $e->getMessage()), 0, $e);
        }

        if (!$resp->isSuccess()) {
            $this->throwApiError($resource, $id, $resp);
        }

        return $resp->getResult();
    }

    private function throwApiError(string $resource, string $id, $resp)
    {
        $result = $resp->getResult();
        $detail = is_array($result) ? json_encode($result) : $resp->getBody();

        throw new UnivaPayApiException(sprintf('Failed to %s %s: HTTP %d %s - %s', $resource, $id, $resp->getStatusCode(), $resp->getReasonPhrase(), $detail));
    }

    public function getCharge(string $chargeId)
    {
        return $this->execute('get charge', $chargeId, function () use ($chargeId) {
            return $this->client->getChargesApi()->getCharge(
                $this->client->getCurrentStoreId(),
                $chargeId
            );
        });
    }

    public function captureCharge(Charge $charge)
    {
        return $this->execute('capture charge', $charge->getId(), function () use ($charge) {
            return $this->client->getChargesApi()->captureCharge(
                $this->client->getCurrentStoreId(),
                $charge->getId(),
                null,
                new ChargeCaptureRequest(
                    $charge->getChargedAmount(),
                    $charge->getChargedCurrency()
                )
            );
        });
    }

    public function getRefunds(string $chargeId)
    {
        return $this->execute('get refunds', $chargeId, function () use ($chargeId) {
            return $this->client->getRefundsApi()->listRefunds($this->client->getCurrentStoreId(), $chargeId);
        });
    }

    public function createRefund(Charge $charge)
    {
        $refund = $this->execute('create refund', $charge->getId(), function () use ($charge) {
            return $this->client->getRefundsApi()->createRefund(
                $this->client->getCurrentStoreId(),
                $charge->getId(),
                new RefundCreateRequest(
                    $charge->getChargedAmount(),
                    $charge->getChargedCurrency()
                )
            );
        });

        return $this->execute('poll refund', $refund->getId(), function () use ($charge, $refund) {
            return $this->client->getRefundsApi()->getRefund(
                $this->client->getCurrentStoreId(),
                $charge->getId(),
                $refund->getId(),
                true
            );
        });
    }
    
    public function createCancel(Charge $charge)
    {
        $cancel = $this->execute('create cancel', $charge->getId(), function () use ($charge) {
            return $this->client->getCancelsApi()->createCancel(
                $this->client->getCurrentStoreId(),
                $charge->getId()
            );
        });

        return $this->execute('poll cancel', $cancel->getId(), function () use ($charge, $cancel) {
            return $this->client->getCancelsApi()->getCancel(
                $this->client->getCurrentStoreId(),
                $charge->getId(),
                $cancel->getId(),
                true
            );
        });
    }

    public function getChargeBySubscriptionId(string $subscriptionId)
    {
        $result = $this->execute('get subscription by subscription id', $subscriptionId, function () use ($subscriptionId) {
            return $this->client->getSubscriptionsApi()->getSubscription($this->client->getCurrentStoreId(), $subscriptionId);
        });

        return current($result);
    }

    public function getSubscriptionByChargeId($chargeId)
    {
        return $this->execute('get subscription by charge', $chargeId, function () use ($chargeId) {
            return $this->client->getChargesApi()->getCharge($this->client->getCurrentStoreId(), $chargeId);
        });
    }

    public function getSubscription($subscriptionId)
    {
        return $this->execute('get subscription', $subscriptionId, function () use ($subscriptionId) {
            return $this->client->getSubscriptionsApi()->getSubscription($this->client->getCurrentStoreId(), $subscriptionId);
        });
    }
}
