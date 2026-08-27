<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookPaidyConfiguration;

/**
 * Builder for model MerchantWebhookPaidyConfiguration
 *
 * @see MerchantWebhookPaidyConfiguration
 */
class MerchantWebhookPaidyConfigurationBuilder
{
    /**
     * @var MerchantWebhookPaidyConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookPaidyConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Paidy Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookPaidyConfiguration());
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
     * Initializes a new Merchant Webhook Paidy Configuration object.
     */
    public function build(): MerchantWebhookPaidyConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
