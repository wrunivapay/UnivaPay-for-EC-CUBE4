<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookCustomerManagementConfiguration;

/**
 * Builder for model MerchantWebhookCustomerManagementConfiguration
 *
 * @see MerchantWebhookCustomerManagementConfiguration
 */
class MerchantWebhookCustomerManagementConfigurationBuilder
{
    /**
     * @var MerchantWebhookCustomerManagementConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookCustomerManagementConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Customer Management Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookCustomerManagementConfiguration());
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
     * Sets default roles field.
     *
     * @param string[]|null $value
     */
    public function defaultRoles(?array $value): self
    {
        $this->instance->setDefaultRoles($value);
        return $this;
    }

    /**
     * Unsets default roles field.
     */
    public function unsetDefaultRoles(): self
    {
        $this->instance->unsetDefaultRoles();
        return $this;
    }

    /**
     * Sets default mode field.
     *
     * @param string|null $value
     */
    public function defaultMode(?string $value): self
    {
        $this->instance->setDefaultMode($value);
        return $this;
    }

    /**
     * Unsets default mode field.
     */
    public function unsetDefaultMode(): self
    {
        $this->instance->unsetDefaultMode();
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
     * Initializes a new Merchant Webhook Customer Management Configuration object.
     */
    public function build(): MerchantWebhookCustomerManagementConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
