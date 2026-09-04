<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookMoneyAmount;
use UnivaPay\Models\MerchantWebhookRecurringCvvConfirmationConfig;

/**
 * Builder for model MerchantWebhookRecurringCvvConfirmationConfig
 *
 * @see MerchantWebhookRecurringCvvConfirmationConfig
 */
class MerchantWebhookRecurringCvvConfirmationConfigBuilder
{
    /**
     * @var MerchantWebhookRecurringCvvConfirmationConfig
     */
    private $instance;

    private function __construct(MerchantWebhookRecurringCvvConfirmationConfig $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Recurring Cvv Confirmation Config Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookRecurringCvvConfirmationConfig());
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
     * Sets threshold field.
     *
     * @param MerchantWebhookMoneyAmount[]|null $value
     */
    public function threshold(?array $value): self
    {
        $this->instance->setThreshold($value);
        return $this;
    }

    /**
     * Unsets threshold field.
     */
    public function unsetThreshold(): self
    {
        $this->instance->unsetThreshold();
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
     * Initializes a new Merchant Webhook Recurring Cvv Confirmation Config object.
     */
    public function build(): MerchantWebhookRecurringCvvConfirmationConfig
    {
        return CoreHelper::clone($this->instance);
    }
}
