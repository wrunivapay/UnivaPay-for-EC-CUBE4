<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CardProcessorInstallmentConfig;
use UnivaPay\Models\MerchantWebhookInstallmentPlanConfiguration;
use UnivaPay\Models\MerchantWebhookMoneyAmount;

/**
 * Builder for model MerchantWebhookInstallmentPlanConfiguration
 *
 * @see MerchantWebhookInstallmentPlanConfiguration
 */
class MerchantWebhookInstallmentPlanConfigurationBuilder
{
    /**
     * @var MerchantWebhookInstallmentPlanConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookInstallmentPlanConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Installment Plan Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookInstallmentPlanConfiguration());
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
     * Sets card processor field.
     *
     * @param CardProcessorInstallmentConfig|null $value
     */
    public function cardProcessor(?CardProcessorInstallmentConfig $value): self
    {
        $this->instance->setCardProcessor($value);
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
     * Sets only with processor field.
     *
     * @param bool|null $value
     */
    public function onlyWithProcessor(?bool $value): self
    {
        $this->instance->setOnlyWithProcessor($value);
        return $this;
    }

    /**
     * Unsets only with processor field.
     */
    public function unsetOnlyWithProcessor(): self
    {
        $this->instance->unsetOnlyWithProcessor();
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
     * Initializes a new Merchant Webhook Installment Plan Configuration object.
     */
    public function build(): MerchantWebhookInstallmentPlanConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
