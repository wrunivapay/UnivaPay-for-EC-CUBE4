<?php
namespace Plugin\UnivaPay\Util;

use Univapay\UnivapayClient;
use Univapay\UnivapayClientOptions;
use Univapay\Resources\Authentication\AppJWT;

class SDK {
    private $token;
    private $client;

    /**
     * SDK constructor.
     */
    public function __construct(\Plugin\UnivaPay\Entity\Config $Config)
    {
        // init client
        $clientOptions = new UnivapayClientOptions($Config->getApiUrl());
        $this->token = AppJWT::createToken($Config->getAppId(), $Config->getAppSecret());
        $this->client = new UnivapayClient($this->token, $clientOptions);
    }

    // get charge
    public function getCharge($chargeId) {
        return $this->client->getCharge($this->token->storeId, $chargeId);
    }

    // get current charge from subscriptionId
    public function getchargeBySubscriptionId($subscriptionId) {
        return current($this->client->getSubscription($this->token->storeId, $subscriptionId)->listCharges()->items);
    }

    // get subscription
    public function getSubscriptionByChargeId($chargeId) {
        return $this->client->getSubscription($this->token->storeId, $this->getCharge($chargeId)->subscriptionId);
    }
}
