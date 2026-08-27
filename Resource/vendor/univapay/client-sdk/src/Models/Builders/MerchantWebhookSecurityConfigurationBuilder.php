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
use UnivaPay\Models\MerchantWebhookLimitRefundBySalesConfiguration;
use UnivaPay\Models\MerchantWebhookSecurityConfiguration;
use UnivaPay\Models\RestrictIpAfterFailedChargeConfig;

/**
 * Builder for model MerchantWebhookSecurityConfiguration
 *
 * @see MerchantWebhookSecurityConfiguration
 */
class MerchantWebhookSecurityConfigurationBuilder
{
    /**
     * @var MerchantWebhookSecurityConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookSecurityConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Security Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookSecurityConfiguration());
    }

    /**
     * Sets card charge cooldown field.
     *
     * @param string|null $value
     */
    public function cardChargeCooldown(?string $value): self
    {
        $this->instance->setCardChargeCooldown($value);
        return $this;
    }

    /**
     * Unsets card charge cooldown field.
     */
    public function unsetCardChargeCooldown(): self
    {
        $this->instance->unsetCardChargeCooldown();
        return $this;
    }

    /**
     * Sets subscription cooldown field.
     *
     * @param string|null $value
     */
    public function subscriptionCooldown(?string $value): self
    {
        $this->instance->setSubscriptionCooldown($value);
        return $this;
    }

    /**
     * Unsets subscription cooldown field.
     */
    public function unsetSubscriptionCooldown(): self
    {
        $this->instance->unsetSubscriptionCooldown();
        return $this;
    }

    /**
     * Sets idempotent card charge cooldown field.
     *
     * @param string|null $value
     */
    public function idempotentCardChargeCooldown(?string $value): self
    {
        $this->instance->setIdempotentCardChargeCooldown($value);
        return $this;
    }

    /**
     * Unsets idempotent card charge cooldown field.
     */
    public function unsetIdempotentCardChargeCooldown(): self
    {
        $this->instance->unsetIdempotentCardChargeCooldown();
        return $this;
    }

    /**
     * Sets idempotent subscription cooldown field.
     *
     * @param string|null $value
     */
    public function idempotentSubscriptionCooldown(?string $value): self
    {
        $this->instance->setIdempotentSubscriptionCooldown($value);
        return $this;
    }

    /**
     * Unsets idempotent subscription cooldown field.
     */
    public function unsetIdempotentSubscriptionCooldown(): self
    {
        $this->instance->unsetIdempotentSubscriptionCooldown();
        return $this;
    }

    /**
     * Sets restrict ip after failed charge field.
     *
     * @param RestrictIpAfterFailedChargeConfig|null $value
     */
    public function restrictIpAfterFailedCharge(?RestrictIpAfterFailedChargeConfig $value): self
    {
        $this->instance->setRestrictIpAfterFailedCharge($value);
        return $this;
    }

    /**
     * Sets inspect suspicious login after field.
     *
     * @param string|null $value
     */
    public function inspectSuspiciousLoginAfter(?string $value): self
    {
        $this->instance->setInspectSuspiciousLoginAfter($value);
        return $this;
    }

    /**
     * Unsets inspect suspicious login after field.
     */
    public function unsetInspectSuspiciousLoginAfter(): self
    {
        $this->instance->unsetInspectSuspiciousLoginAfter();
        return $this;
    }

    /**
     * Sets refund percent limit field.
     *
     * @param float|null $value
     */
    public function refundPercentLimit(?float $value): self
    {
        $this->instance->setRefundPercentLimit($value);
        return $this;
    }

    /**
     * Unsets refund percent limit field.
     */
    public function unsetRefundPercentLimit(): self
    {
        $this->instance->unsetRefundPercentLimit();
        return $this;
    }

    /**
     * Sets limit charge by card configuration field.
     *
     * @param MerchantWebhookLimitChargeByCardConfiguration|null $value
     */
    public function limitChargeByCardConfiguration(?MerchantWebhookLimitChargeByCardConfiguration $value): self
    {
        $this->instance->setLimitChargeByCardConfiguration($value);
        return $this;
    }

    /**
     * Sets confirmation required field.
     *
     * @param bool|null $value
     */
    public function confirmationRequired(?bool $value): self
    {
        $this->instance->setConfirmationRequired($value);
        return $this;
    }

    /**
     * Unsets confirmation required field.
     */
    public function unsetConfirmationRequired(): self
    {
        $this->instance->unsetConfirmationRequired();
        return $this;
    }

    /**
     * Sets min refund threshold field.
     *
     * @param int|null $value
     */
    public function minRefundThreshold(?int $value): self
    {
        $this->instance->setMinRefundThreshold($value);
        return $this;
    }

    /**
     * Unsets min refund threshold field.
     */
    public function unsetMinRefundThreshold(): self
    {
        $this->instance->unsetMinRefundThreshold();
        return $this;
    }

    /**
     * Sets limit refund by sales field.
     *
     * @param MerchantWebhookLimitRefundBySalesConfiguration|null $value
     */
    public function limitRefundBySales(?MerchantWebhookLimitRefundBySalesConfiguration $value): self
    {
        $this->instance->setLimitRefundBySales($value);
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
     * Initializes a new Merchant Webhook Security Configuration object.
     */
    public function build(): MerchantWebhookSecurityConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
