<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookRecurringCvvConfirmationConfig;
use UnivaPay\Models\MerchantWebhookRecurringTokenConfiguration;

/**
 * Builder for model MerchantWebhookRecurringTokenConfiguration
 *
 * @see MerchantWebhookRecurringTokenConfiguration
 */
class MerchantWebhookRecurringTokenConfigurationBuilder
{
    /**
     * @var MerchantWebhookRecurringTokenConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookRecurringTokenConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Recurring Token Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookRecurringTokenConfiguration());
    }

    /**
     * Sets recurring type field.
     *
     * @param string|null $value
     */
    public function recurringType(?string $value): self
    {
        $this->instance->setRecurringType($value);
        return $this;
    }

    /**
     * Unsets recurring type field.
     */
    public function unsetRecurringType(): self
    {
        $this->instance->unsetRecurringType();
        return $this;
    }

    /**
     * Sets charge wait period field.
     *
     * @param string|null $value
     */
    public function chargeWaitPeriod(?string $value): self
    {
        $this->instance->setChargeWaitPeriod($value);
        return $this;
    }

    /**
     * Unsets charge wait period field.
     */
    public function unsetChargeWaitPeriod(): self
    {
        $this->instance->unsetChargeWaitPeriod();
        return $this;
    }

    /**
     * Sets card charge cvv confirmation field.
     *
     * @param MerchantWebhookRecurringCvvConfirmationConfig|null $value
     */
    public function cardChargeCvvConfirmation(?MerchantWebhookRecurringCvvConfirmationConfig $value): self
    {
        $this->instance->setCardChargeCvvConfirmation($value);
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
     * Initializes a new Merchant Webhook Recurring Token Configuration object.
     */
    public function build(): MerchantWebhookRecurringTokenConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
