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
use UnivaPay\Models\MerchantWebhookSubscriptionPlanConfiguration;

/**
 * Builder for model MerchantWebhookSubscriptionPlanConfiguration
 *
 * @see MerchantWebhookSubscriptionPlanConfiguration
 */
class MerchantWebhookSubscriptionPlanConfigurationBuilder
{
    /**
     * @var MerchantWebhookSubscriptionPlanConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookSubscriptionPlanConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Subscription Plan Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookSubscriptionPlanConfiguration());
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
     * Sets fixed cycle field.
     *
     * @param bool|null $value
     */
    public function fixedCycle(?bool $value): self
    {
        $this->instance->setFixedCycle($value);
        return $this;
    }

    /**
     * Unsets fixed cycle field.
     */
    public function unsetFixedCycle(): self
    {
        $this->instance->unsetFixedCycle();
        return $this;
    }

    /**
     * Sets fixed cycle amount field.
     *
     * @param bool|null $value
     */
    public function fixedCycleAmount(?bool $value): self
    {
        $this->instance->setFixedCycleAmount($value);
        return $this;
    }

    /**
     * Unsets fixed cycle amount field.
     */
    public function unsetFixedCycleAmount(): self
    {
        $this->instance->unsetFixedCycleAmount();
        return $this;
    }

    /**
     * Sets supported payment types field.
     *
     * @param string[]|null $value
     */
    public function supportedPaymentTypes(?array $value): self
    {
        $this->instance->setSupportedPaymentTypes($value);
        return $this;
    }

    /**
     * Unsets supported payment types field.
     */
    public function unsetSupportedPaymentTypes(): self
    {
        $this->instance->unsetSupportedPaymentTypes();
        return $this;
    }

    /**
     * Sets min charge amount field.
     *
     * @param MerchantWebhookMoneyAmount|null $value
     */
    public function minChargeAmount(?MerchantWebhookMoneyAmount $value): self
    {
        $this->instance->setMinChargeAmount($value);
        return $this;
    }

    /**
     * Sets max payout period field.
     *
     * @param string|null $value
     */
    public function maxPayoutPeriod(?string $value): self
    {
        $this->instance->setMaxPayoutPeriod($value);
        return $this;
    }

    /**
     * Unsets max payout period field.
     */
    public function unsetMaxPayoutPeriod(): self
    {
        $this->instance->unsetMaxPayoutPeriod();
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
     * Initializes a new Merchant Webhook Subscription Plan Configuration object.
     */
    public function build(): MerchantWebhookSubscriptionPlanConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
