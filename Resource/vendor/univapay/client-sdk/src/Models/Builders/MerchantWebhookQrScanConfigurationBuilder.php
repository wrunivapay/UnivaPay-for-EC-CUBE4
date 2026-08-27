<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookQrScanConfiguration;

/**
 * Builder for model MerchantWebhookQrScanConfiguration
 *
 * @see MerchantWebhookQrScanConfiguration
 */
class MerchantWebhookQrScanConfigurationBuilder
{
    /**
     * @var MerchantWebhookQrScanConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookQrScanConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Qr Scan Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookQrScanConfiguration());
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Unsets enabled field.
     */
    public function unsetEnabled(): self
    {
        $this->instance->unsetEnabled();
        return $this;
    }

    /**
     * Sets forbidden qr scan gateways field.
     *
     * @param string[]|null $value
     */
    public function forbiddenQrScanGateways(?array $value): self
    {
        $this->instance->setForbiddenQrScanGateways($value);
        return $this;
    }

    /**
     * Unsets forbidden qr scan gateways field.
     */
    public function unsetForbiddenQrScanGateways(): self
    {
        $this->instance->unsetForbiddenQrScanGateways();
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
     * Initializes a new Merchant Webhook Qr Scan Configuration object.
     */
    public function build(): MerchantWebhookQrScanConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
