<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookLimitRefundBySalesConfiguration;

/**
 * Builder for model MerchantWebhookLimitRefundBySalesConfiguration
 *
 * @see MerchantWebhookLimitRefundBySalesConfiguration
 */
class MerchantWebhookLimitRefundBySalesConfigurationBuilder
{
    /**
     * @var MerchantWebhookLimitRefundBySalesConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookLimitRefundBySalesConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Limit Refund By Sales Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookLimitRefundBySalesConfiguration());
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
     * Sets period field.
     *
     * @param string|null $value
     */
    public function period(?string $value): self
    {
        $this->instance->setPeriod($value);
        return $this;
    }

    /**
     * Unsets period field.
     */
    public function unsetPeriod(): self
    {
        $this->instance->unsetPeriod();
        return $this;
    }

    /**
     * Sets rolling window field.
     *
     * @param bool|null $value
     */
    public function rollingWindow(?bool $value): self
    {
        $this->instance->setRollingWindow($value);
        return $this;
    }

    /**
     * Unsets rolling window field.
     */
    public function unsetRollingWindow(): self
    {
        $this->instance->unsetRollingWindow();
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
     * Initializes a new Merchant Webhook Limit Refund By Sales Configuration object.
     */
    public function build(): MerchantWebhookLimitRefundBySalesConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
