<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookCheckoutConfiguration;
use UnivaPay\Models\MerchantWebhookCheckoutToggle;

/**
 * Builder for model MerchantWebhookCheckoutConfiguration
 *
 * @see MerchantWebhookCheckoutConfiguration
 */
class MerchantWebhookCheckoutConfigurationBuilder
{
    /**
     * @var MerchantWebhookCheckoutConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookCheckoutConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Checkout Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookCheckoutConfiguration());
    }

    /**
     * Sets ec email field.
     *
     * @param MerchantWebhookCheckoutToggle|null $value
     */
    public function ecEmail(?MerchantWebhookCheckoutToggle $value): self
    {
        $this->instance->setEcEmail($value);
        return $this;
    }

    /**
     * Sets ec products field.
     *
     * @param MerchantWebhookCheckoutToggle|null $value
     */
    public function ecProducts(?MerchantWebhookCheckoutToggle $value): self
    {
        $this->instance->setEcProducts($value);
        return $this;
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
     * Initializes a new Merchant Webhook Checkout Configuration object.
     */
    public function build(): MerchantWebhookCheckoutConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
