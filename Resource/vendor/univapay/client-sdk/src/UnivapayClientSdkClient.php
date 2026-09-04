<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay;

use Core\ClientBuilder;
use Core\Request\Parameters\TemplateParam;
use Core\Utils\CoreHelper;
use Unirest\Configuration;
use Unirest\HttpClient;
use UnivaPay\Apis\CancelsApi;
use UnivaPay\Apis\ChargesApi;
use UnivaPay\Apis\CheckoutApi;
use UnivaPay\Apis\DirectDebitApi;
use UnivaPay\Apis\MerchantsApi;
use UnivaPay\Apis\RefundsApi;
use UnivaPay\Apis\StoresApi;
use UnivaPay\Apis\SubscriptionsApi;
use UnivaPay\Apis\TransactionHistoryApi;
use UnivaPay\Apis\TransactionTokensApi;
use UnivaPay\Apis\WebhooksApi;
use UnivaPay\Authentication\BearerAuthCredentialsBuilder;
use UnivaPay\Authentication\BearerAuthManager;
use UnivaPay\Http\ApiResponse;
use UnivaPay\Logging\LoggingConfigurationBuilder;
use UnivaPay\Logging\RequestLoggingConfigurationBuilder;
use UnivaPay\Logging\ResponseLoggingConfigurationBuilder;
use UnivaPay\Proxy\ProxyConfigurationBuilder;
use UnivaPay\Utils\CompatibilityConverter;

/**
 * Hand-authored customization — adds an Idempotency-Key header to mutating
 * requests. Kept above the generated class, where codegen never edits, so it
 * does not conflict on regeneration.
 */
class IdempotencyCallback extends \Core\Types\Sdk\CoreCallback
{
    private $userCallback;

    public function __construct(?\Core\Types\Sdk\CoreCallback $userCallback)
    {
        $this->userCallback = $userCallback;
        parent::__construct(
            [$this, 'onBeforeRequest'],
            [$this, 'onAfterRequest']
        );
    }

    private function injectIdempotencyHeader($request): void
    {
        if ($request !== null && method_exists($request, 'getHttpMethod') && method_exists($request, 'addHeader')) {
            $method = strtoupper($request->getHttpMethod());
            if (in_array($method, ['POST', 'PUT', 'PATCH'], true)) {
                $headers = [];
                if (method_exists($request, 'getHeaders')) {
                    $headers = $request->getHeaders();
                }
                $hasIdempotency = false;
                foreach ($headers as $key => $val) {
                    if (strtolower($key) === 'idempotency-key') {
                        $hasIdempotency = true;
                        break;
                    }
                }
                if (!$hasIdempotency) {
                    $uuid = $this->generateUuidV4();
                    $request->addHeader('Idempotency-Key', $uuid);
                }
            }
        }
    }

    public function onBeforeRequest($request): void
    {
        $this->injectIdempotencyHeader($request);
        if ($this->userCallback !== null) {
            $this->userCallback->callOnBeforeRequest($request);
        }
    }

    public function callOnBeforeWithConversion(\CoreInterfaces\Core\Request\RequestInterface $request, \CoreInterfaces\Sdk\ConverterInterface $converter)
    {
        $this->injectIdempotencyHeader($request);
        if ($this->userCallback !== null) {
            $this->userCallback->callOnBeforeWithConversion($request, $converter);
        } else {
            parent::callOnBeforeWithConversion($request, $converter);
        }
    }

    public function onAfterRequest($context): void
    {
        if ($this->userCallback !== null) {
            $this->userCallback->callOnAfterRequest($context);
        }
    }

    public function callOnAfterWithConversion(\CoreInterfaces\Core\ContextInterface $context, \CoreInterfaces\Sdk\ConverterInterface $converter)
    {
        if ($this->userCallback !== null) {
            $this->userCallback->callOnAfterWithConversion($context, $converter);
        } else {
            parent::callOnAfterWithConversion($context, $converter);
        }
    }

    private function generateUuidV4(): string
    {
        $data = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}

class UnivapayClientSdkClient implements ConfigurationInterface
{
    private $charges;

    private $transactionTokens;

    private $refunds;

    private $subscriptions;

    private $cancels;

    private $merchants;

    private $stores;

    private $webhooks;

    private $directDebit;

    private $checkout;

    private $transactionHistory;

    private $bearerAuthManager;

    private $loggingConfigurationBuilder;

    private $proxyConfiguration;

    private $config;

    private $client;

    /**
     * @see UnivapayClientSdkClientBuilder::init()
     * @see UnivapayClientSdkClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $userCallback = $this->config['httpCallback'] ?? null;
        if (!($userCallback instanceof IdempotencyCallback)) {
            $this->config['httpCallback'] = new IdempotencyCallback($userCallback);
        }
        $this->bearerAuthManager = new BearerAuthManager($this->config);
        $loggingConfiguration = null;
        if ($this->config['loggingConfiguration'] instanceof LoggingConfigurationBuilder) {
            $this->loggingConfigurationBuilder = $this->config['loggingConfiguration'];
            $loggingConfiguration = $this->loggingConfigurationBuilder->build();
        }
        $this->proxyConfiguration = $this->config['proxyConfiguration'] ?? ConfigurationDefaults::PROXY_CONFIGURATION;
        $this->client = ClientBuilder::init(
            new HttpClient(Configuration::init($this)->proxyConfiguration($this->proxyConfiguration))
        )
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('PHP-SDK/1.2.2 (OS: {os-info}, Engine: {engine}/{engine-version})')
            ->globalConfig($this->getGlobalConfiguration())
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->authManagers(['JWT_TOKEN' => $this->bearerAuthManager])
            ->loggingConfiguration($loggingConfiguration)
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return UnivapayClientSdkClientBuilder UnivapayClientSdkClientBuilder instance
     */
    public function toBuilder(): UnivapayClientSdkClientBuilder
    {
        $builder = UnivapayClientSdkClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->baseUrl($this->getBaseUrl())
            ->directDebitBaseUrl($this->getDirectDebitBaseUrl())
            ->httpCallback($this->config['httpCallback'] ?? null)
            ->proxyConfiguration($this->getProxyConfigurationBuilder());

        $bearerAuth = $this->getBearerAuthCredentialsBuilder();
        if ($bearerAuth != null) {
            $builder->bearerAuthCredentials($bearerAuth);
        }
        $loggingConfigurationBuilder = $this->getLoggingConfigurationBuilder();
        if ($loggingConfigurationBuilder != null) {
            $builder->loggingConfiguration($loggingConfigurationBuilder);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getBaseUrl(): string
    {
        return $this->config['baseUrl'] ?? ConfigurationDefaults::BASE_URL;
    }

    public function getDirectDebitBaseUrl(): string
    {
        return $this->config['directDebitBaseUrl'] ?? ConfigurationDefaults::DIRECT_DEBIT_BASE_URL;
    }

    public function getBearerAuthCredentials(): BearerAuthCredentials
    {
        return $this->bearerAuthManager;
    }

    public function getBearerAuthCredentialsBuilder(): ?BearerAuthCredentialsBuilder
    {
        if (empty($this->bearerAuthManager->getSecretKey()) || empty($this->bearerAuthManager->getJwtToken())) {
            return null;
        }
        return BearerAuthCredentialsBuilder::init(
            $this->bearerAuthManager->getSecretKey(),
            $this->bearerAuthManager->getJwtToken()
        );
    }

    /**
     * The merchant this client's app token was issued for, decoded from the
     * configured JWT.
     *
     * Both merchant-level and store-level app tokens carry a merchant, so this
     * is set for either kind of token.
     *
     * @return string|null The merchant id as a UUID string, or null if no JWT is
     *         configured or its `merchant_id` claim is absent or not a UUID.
     */
    public function getCurrentMerchantId(): ?string
    {
        return AppJwt::readUuidClaim($this->bearerAuthManager->getJwtToken(), 'merchant_id');
    }

    /**
     * The store this client's app token was issued for, decoded from the
     * configured JWT.
     *
     * Only store-level app tokens are scoped to a store. A merchant-level token
     * carries no `store_id` claim, so this returns null for one -- use
     * `getStoresApi()` to list the merchant's stores instead.
     *
     * @return string|null The store id as a UUID string, or null if no JWT is
     *         configured or its `store_id` claim is absent or not a UUID.
     */
    public function getCurrentStoreId(): ?string
    {
        return AppJwt::readUuidClaim($this->bearerAuthManager->getJwtToken(), 'store_id');
    }

    /**
     * Retrieves a charge without being given a store id.
     *
     * `/stores/{storeId}/charges/{id}` needs a store, which callers would
     * otherwise have to persist alongside every charge id -- but a store-level
     * app token already carries one, so this reads it from the configured token
     * and then behaves exactly like ChargesApi::getCharge().
     *
     * @param string    $chargeId The unique identifier of the charge.
     * @param bool|null $polling  If true, instructs the API to internally poll
     *                            the charge status until it leaves 'pending'.
     *
     * @return ApiResponse The controller's response, untouched.
     *
     * @throws \RuntimeException When the configured token carries no `store_id`
     *                           claim -- a merchant-level token, or none at all.
     *                           Thrown before any request is built. Resolve the
     *                           store yourself (see getStoresApi()) and use
     *                           ChargesApi::getCharge() instead.
     */
    public function getCharge(string $chargeId, ?bool $polling = null): ApiResponse
    {
        // Guard first, controller second: PHP evaluates the object expression
        // before the arguments, so calling getChargesApi() inline would build a
        // controller even on the failure path.
        $storeId = AppJwt::requireStoreId($this->getCurrentStoreId());
        return $this->getChargesApi()->getCharge($storeId, $chargeId, $polling);
    }

    public function getLoggingConfigurationBuilder(): ?LoggingConfigurationBuilder
    {
        if (is_null($this->loggingConfigurationBuilder)) {
            return null;
        }
        $config = $this->loggingConfigurationBuilder->getConfiguration();
        return LoggingConfigurationBuilder::init()
            ->level($config['level'])
            ->logger($config['logger'])
            ->maskSensitiveHeaders($config['maskSensitiveHeaders'])
            ->requestConfiguration(RequestLoggingConfigurationBuilder::init()
                ->includeQueryInPath($config['requestConfiguration']['includeQueryInPath'])
                ->body($config['requestConfiguration']['body'])
                ->headers($config['requestConfiguration']['headers'])
                ->includeHeaders(...$config['requestConfiguration']['includeHeaders'])
                ->excludeHeaders(...$config['requestConfiguration']['excludeHeaders'])
                ->unmaskHeaders(...$config['requestConfiguration']['unmaskHeaders']))
            ->responseConfiguration(ResponseLoggingConfigurationBuilder::init()
                ->body($config['responseConfiguration']['body'])
                ->headers($config['responseConfiguration']['headers'])
                ->includeHeaders(...$config['responseConfiguration']['includeHeaders'])
                ->excludeHeaders(...$config['responseConfiguration']['excludeHeaders'])
                ->unmaskHeaders(...$config['responseConfiguration']['unmaskHeaders']));
    }

    /**
     * Get the proxy configuration builder
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder
    {
        return ProxyConfigurationBuilder::init($this->proxyConfiguration['address'])
            ->port($this->proxyConfiguration['port'])
            ->tunnel($this->proxyConfiguration['tunnel'])
            ->auth($this->proxyConfiguration['auth']['user'], $this->proxyConfiguration['auth']['pass'])
            ->authMethod($this->proxyConfiguration['auth']['method']);
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see UnivapayClientSdkClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see UnivapayClientSdkClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Charges Api
     */
    public function getChargesApi(): ChargesApi
    {
        if ($this->charges == null) {
            $this->charges = new ChargesApi($this->client);
        }
        return $this->charges;
    }

    /**
     * Returns Transaction Tokens Api
     */
    public function getTransactionTokensApi(): TransactionTokensApi
    {
        if ($this->transactionTokens == null) {
            $this->transactionTokens = new TransactionTokensApi($this->client);
        }
        return $this->transactionTokens;
    }

    /**
     * Returns Refunds Api
     */
    public function getRefundsApi(): RefundsApi
    {
        if ($this->refunds == null) {
            $this->refunds = new RefundsApi($this->client);
        }
        return $this->refunds;
    }

    /**
     * Returns Subscriptions Api
     */
    public function getSubscriptionsApi(): SubscriptionsApi
    {
        if ($this->subscriptions == null) {
            $this->subscriptions = new SubscriptionsApi($this->client);
        }
        return $this->subscriptions;
    }

    /**
     * Returns Cancels Api
     */
    public function getCancelsApi(): CancelsApi
    {
        if ($this->cancels == null) {
            $this->cancels = new CancelsApi($this->client);
        }
        return $this->cancels;
    }

    /**
     * Returns Merchants Api
     */
    public function getMerchantsApi(): MerchantsApi
    {
        if ($this->merchants == null) {
            $this->merchants = new MerchantsApi($this->client);
        }
        return $this->merchants;
    }

    /**
     * Returns Stores Api
     */
    public function getStoresApi(): StoresApi
    {
        if ($this->stores == null) {
            $this->stores = new StoresApi($this->client);
        }
        return $this->stores;
    }

    /**
     * Returns Webhooks Api
     */
    public function getWebhooksApi(): WebhooksApi
    {
        if ($this->webhooks == null) {
            $this->webhooks = new WebhooksApi($this->client);
        }
        return $this->webhooks;
    }

    /**
     * Returns Direct Debit Api
     */
    public function getDirectDebitApi(): DirectDebitApi
    {
        if ($this->directDebit == null) {
            $this->directDebit = new DirectDebitApi($this->client);
        }
        return $this->directDebit;
    }

    /**
     * Returns Checkout Api
     */
    public function getCheckoutApi(): CheckoutApi
    {
        if ($this->checkout == null) {
            $this->checkout = new CheckoutApi($this->client);
        }
        return $this->checkout;
    }

    /**
     * Returns Transaction History Api
     */
    public function getTransactionHistoryApi(): TransactionHistoryApi
    {
        if ($this->transactionHistory == null) {
            $this->transactionHistory = new TransactionHistoryApi($this->client);
        }
        return $this->transactionHistory;
    }

    /**
     * Get the defined global configurations
     */
    private function getGlobalConfiguration(): array
    {
        return [
            TemplateParam::init('baseUrl', $this->getBaseUrl())->dontEncode(),
            TemplateParam::init('directDebitBaseUrl', $this->getDirectDebitBaseUrl())->dontEncode()
        ];
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP =
        [
            Environment::PRODUCTION => [
                Server::DEFAULT_ => '{baseUrl}',
                Server::DIRECTDEBIT => '{directDebitBaseUrl}'
            ]
        ];
}
