<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionPatchTokenRequest;

/**
 * Builder for model SubscriptionPatchTokenRequest
 *
 * @see SubscriptionPatchTokenRequest
 */
class SubscriptionPatchTokenRequestBuilder
{
    /**
     * @var SubscriptionPatchTokenRequest
     */
    private $instance;

    private function __construct(SubscriptionPatchTokenRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Patch Token Request Builder object.
     *
     * @param string $transactionTokenId
     */
    public static function init(string $transactionTokenId): self
    {
        return new self(new SubscriptionPatchTokenRequest($transactionTokenId));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Subscription Patch Token Request object.
     */
    public function build(): SubscriptionPatchTokenRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
