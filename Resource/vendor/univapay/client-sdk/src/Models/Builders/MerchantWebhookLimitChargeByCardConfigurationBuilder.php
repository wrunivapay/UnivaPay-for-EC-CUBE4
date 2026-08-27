<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookLimitChargeByCardConfiguration;

/**
 * Builder for model MerchantWebhookLimitChargeByCardConfiguration
 *
 * @see MerchantWebhookLimitChargeByCardConfiguration
 */
class MerchantWebhookLimitChargeByCardConfigurationBuilder
{
    /**
     * @var MerchantWebhookLimitChargeByCardConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookLimitChargeByCardConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Limit Charge By Card Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookLimitChargeByCardConfiguration());
    }

    /**
     * Sets quantity of charges field.
     *
     * @param int|null $value
     */
    public function quantityOfCharges(?int $value): self
    {
        $this->instance->setQuantityOfCharges($value);
        return $this;
    }

    /**
     * Sets duration window field.
     *
     * @param string|null $value
     */
    public function durationWindow(?string $value): self
    {
        $this->instance->setDurationWindow($value);
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
     * Initializes a new Merchant Webhook Limit Charge By Card Configuration object.
     */
    public function build(): MerchantWebhookLimitChargeByCardConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
