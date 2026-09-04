<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use stdClass;
use UnivaPay\ApiHelper;
use UnivaPay\Utils\NumberHelper;

/**
 * Merchant-level fraud and refund safety settings.
 */
class MerchantWebhookSecurityConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $cardChargeCooldown = [];

    /**
     * @var array
     */
    private $subscriptionCooldown = [];

    /**
     * @var array
     */
    private $idempotentCardChargeCooldown = [];

    /**
     * @var array
     */
    private $idempotentSubscriptionCooldown = [];

    /**
     * @var RestrictIpAfterFailedChargeConfig|null
     */
    private $restrictIpAfterFailedCharge;

    /**
     * @var array
     */
    private $inspectSuspiciousLoginAfter = [];

    /**
     * @var array
     */
    private $refundPercentLimit = [];

    /**
     * @var MerchantWebhookLimitChargeByCardConfiguration|null
     */
    private $limitChargeByCardConfiguration;

    /**
     * @var array
     */
    private $confirmationRequired = [];

    /**
     * @var array
     */
    private $minRefundThreshold = [];

    /**
     * @var MerchantWebhookLimitRefundBySalesConfiguration|null
     */
    private $limitRefundBySales;

    /**
     * Returns Card Charge Cooldown.
     * ISO-8601 duration between card charge attempts.
     */
    public function getCardChargeCooldown(): ?string
    {
        if (count($this->cardChargeCooldown) == 0) {
            return null;
        }
        return $this->cardChargeCooldown['value'];
    }

    /**
     * Sets Card Charge Cooldown.
     * ISO-8601 duration between card charge attempts.
     *
     * @maps card_charge_cooldown
     */
    public function setCardChargeCooldown(?string $cardChargeCooldown): void
    {
        $this->cardChargeCooldown['value'] = $cardChargeCooldown;
    }

    /**
     * Unsets Card Charge Cooldown.
     * ISO-8601 duration between card charge attempts.
     */
    public function unsetCardChargeCooldown(): void
    {
        $this->cardChargeCooldown = [];
    }

    /**
     * Returns Subscription Cooldown.
     * ISO-8601 duration between subscription charge attempts.
     */
    public function getSubscriptionCooldown(): ?string
    {
        if (count($this->subscriptionCooldown) == 0) {
            return null;
        }
        return $this->subscriptionCooldown['value'];
    }

    /**
     * Sets Subscription Cooldown.
     * ISO-8601 duration between subscription charge attempts.
     *
     * @maps subscription_cooldown
     */
    public function setSubscriptionCooldown(?string $subscriptionCooldown): void
    {
        $this->subscriptionCooldown['value'] = $subscriptionCooldown;
    }

    /**
     * Unsets Subscription Cooldown.
     * ISO-8601 duration between subscription charge attempts.
     */
    public function unsetSubscriptionCooldown(): void
    {
        $this->subscriptionCooldown = [];
    }

    /**
     * Returns Idempotent Card Charge Cooldown.
     * ISO-8601 duration for reusing an idempotent card charge key.
     */
    public function getIdempotentCardChargeCooldown(): ?string
    {
        if (count($this->idempotentCardChargeCooldown) == 0) {
            return null;
        }
        return $this->idempotentCardChargeCooldown['value'];
    }

    /**
     * Sets Idempotent Card Charge Cooldown.
     * ISO-8601 duration for reusing an idempotent card charge key.
     *
     * @maps idempotent_card_charge_cooldown
     */
    public function setIdempotentCardChargeCooldown(?string $idempotentCardChargeCooldown): void
    {
        $this->idempotentCardChargeCooldown['value'] = $idempotentCardChargeCooldown;
    }

    /**
     * Unsets Idempotent Card Charge Cooldown.
     * ISO-8601 duration for reusing an idempotent card charge key.
     */
    public function unsetIdempotentCardChargeCooldown(): void
    {
        $this->idempotentCardChargeCooldown = [];
    }

    /**
     * Returns Idempotent Subscription Cooldown.
     * ISO-8601 duration for reusing an idempotent subscription key.
     */
    public function getIdempotentSubscriptionCooldown(): ?string
    {
        if (count($this->idempotentSubscriptionCooldown) == 0) {
            return null;
        }
        return $this->idempotentSubscriptionCooldown['value'];
    }

    /**
     * Sets Idempotent Subscription Cooldown.
     * ISO-8601 duration for reusing an idempotent subscription key.
     *
     * @maps idempotent_subscription_cooldown
     */
    public function setIdempotentSubscriptionCooldown(?string $idempotentSubscriptionCooldown): void
    {
        $this->idempotentSubscriptionCooldown['value'] = $idempotentSubscriptionCooldown;
    }

    /**
     * Unsets Idempotent Subscription Cooldown.
     * ISO-8601 duration for reusing an idempotent subscription key.
     */
    public function unsetIdempotentSubscriptionCooldown(): void
    {
        $this->idempotentSubscriptionCooldown = [];
    }

    /**
     * Returns Restrict Ip After Failed Charge.
     * IP restriction policy applied after repeated failed charges.
     */
    public function getRestrictIpAfterFailedCharge(): ?RestrictIpAfterFailedChargeConfig
    {
        return $this->restrictIpAfterFailedCharge;
    }

    /**
     * Sets Restrict Ip After Failed Charge.
     * IP restriction policy applied after repeated failed charges.
     *
     * @maps restrict_ip_after_failed_charge
     */
    public function setRestrictIpAfterFailedCharge(
        ?RestrictIpAfterFailedChargeConfig $restrictIpAfterFailedCharge
    ): void {
        $this->restrictIpAfterFailedCharge = $restrictIpAfterFailedCharge;
    }

    /**
     * Returns Inspect Suspicious Login After.
     * Look-back period used to review suspicious login activity.
     */
    public function getInspectSuspiciousLoginAfter(): ?string
    {
        if (count($this->inspectSuspiciousLoginAfter) == 0) {
            return null;
        }
        return $this->inspectSuspiciousLoginAfter['value'];
    }

    /**
     * Sets Inspect Suspicious Login After.
     * Look-back period used to review suspicious login activity.
     *
     * @maps inspect_suspicious_login_after
     */
    public function setInspectSuspiciousLoginAfter(?string $inspectSuspiciousLoginAfter): void
    {
        $this->inspectSuspiciousLoginAfter['value'] = $inspectSuspiciousLoginAfter;
    }

    /**
     * Unsets Inspect Suspicious Login After.
     * Look-back period used to review suspicious login activity.
     */
    public function unsetInspectSuspiciousLoginAfter(): void
    {
        $this->inspectSuspiciousLoginAfter = [];
    }

    /**
     * Returns Refund Percent Limit.
     * Maximum refund-to-sales percentage allowed before restriction.
     */
    public function getRefundPercentLimit(): ?float
    {
        if (count($this->refundPercentLimit) == 0) {
            return null;
        }
        return $this->refundPercentLimit['value'];
    }

    /**
     * Sets Refund Percent Limit.
     * Maximum refund-to-sales percentage allowed before restriction.
     *
     * @maps refund_percent_limit
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setRefundPercentLimit(?float $refundPercentLimit): void
    {
        $this->refundPercentLimit['value'] = $refundPercentLimit;
    }

    /**
     * Unsets Refund Percent Limit.
     * Maximum refund-to-sales percentage allowed before restriction.
     */
    public function unsetRefundPercentLimit(): void
    {
        $this->refundPercentLimit = [];
    }

    /**
     * Returns Limit Charge by Card Configuration.
     * Per-card velocity limit configuration.
     */
    public function getLimitChargeByCardConfiguration(): ?MerchantWebhookLimitChargeByCardConfiguration
    {
        return $this->limitChargeByCardConfiguration;
    }

    /**
     * Sets Limit Charge by Card Configuration.
     * Per-card velocity limit configuration.
     *
     * @maps limit_charge_by_card_configuration
     */
    public function setLimitChargeByCardConfiguration(
        ?MerchantWebhookLimitChargeByCardConfiguration $limitChargeByCardConfiguration
    ): void {
        $this->limitChargeByCardConfiguration = $limitChargeByCardConfiguration;
    }

    /**
     * Returns Confirmation Required.
     * Requires confirmation before protected refund actions proceed.
     */
    public function getConfirmationRequired(): ?bool
    {
        if (count($this->confirmationRequired) == 0) {
            return null;
        }
        return $this->confirmationRequired['value'];
    }

    /**
     * Sets Confirmation Required.
     * Requires confirmation before protected refund actions proceed.
     *
     * @maps confirmation_required
     */
    public function setConfirmationRequired(?bool $confirmationRequired): void
    {
        $this->confirmationRequired['value'] = $confirmationRequired;
    }

    /**
     * Unsets Confirmation Required.
     * Requires confirmation before protected refund actions proceed.
     */
    public function unsetConfirmationRequired(): void
    {
        $this->confirmationRequired = [];
    }

    /**
     * Returns Min Refund Threshold.
     * Minimum refund amount, in minor units, subject to confirmation checks.
     */
    public function getMinRefundThreshold(): ?int
    {
        if (count($this->minRefundThreshold) == 0) {
            return null;
        }
        return $this->minRefundThreshold['value'];
    }

    /**
     * Sets Min Refund Threshold.
     * Minimum refund amount, in minor units, subject to confirmation checks.
     *
     * @maps min_refund_threshold
     */
    public function setMinRefundThreshold(?int $minRefundThreshold): void
    {
        $this->minRefundThreshold['value'] = $minRefundThreshold;
    }

    /**
     * Unsets Min Refund Threshold.
     * Minimum refund amount, in minor units, subject to confirmation checks.
     */
    public function unsetMinRefundThreshold(): void
    {
        $this->minRefundThreshold = [];
    }

    /**
     * Returns Limit Refund by Sales.
     * Refund-limiting configuration based on sales history.
     */
    public function getLimitRefundBySales(): ?MerchantWebhookLimitRefundBySalesConfiguration
    {
        return $this->limitRefundBySales;
    }

    /**
     * Sets Limit Refund by Sales.
     * Refund-limiting configuration based on sales history.
     *
     * @maps limit_refund_by_sales
     */
    public function setLimitRefundBySales(?MerchantWebhookLimitRefundBySalesConfiguration $limitRefundBySales): void
    {
        $this->limitRefundBySales = $limitRefundBySales;
    }

    /**
     * Converts the MerchantWebhookSecurityConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the MerchantWebhookSecurityConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookSecurityConfiguration',
            [
                'cardChargeCooldown' => $this->getCardChargeCooldown(),
                'subscriptionCooldown' => $this->getSubscriptionCooldown(),
                'idempotentCardChargeCooldown' => $this->getIdempotentCardChargeCooldown(),
                'idempotentSubscriptionCooldown' => $this->getIdempotentSubscriptionCooldown(),
                'restrictIpAfterFailedCharge' => $this->restrictIpAfterFailedCharge,
                'inspectSuspiciousLoginAfter' => $this->getInspectSuspiciousLoginAfter(),
                'refundPercentLimit' => $this->getRefundPercentLimit(),
                'limitChargeByCardConfiguration' => $this->limitChargeByCardConfiguration,
                'confirmationRequired' => $this->getConfirmationRequired(),
                'minRefundThreshold' => $this->getMinRefundThreshold(),
                'limitRefundBySales' => $this->limitRefundBySales,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'card_charge_cooldown',
        'subscription_cooldown',
        'idempotent_card_charge_cooldown',
        'idempotent_subscription_cooldown',
        'restrict_ip_after_failed_charge',
        'inspect_suspicious_login_after',
        'refund_percent_limit',
        'limit_charge_by_card_configuration',
        'confirmation_required',
        'min_refund_threshold',
        'limit_refund_by_sales'
    ];

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        if (in_array($name, $this->propertyNames, true)) {
            throw new \InvalidArgumentException(
                "The additional property key, '$name' conflicts with one of the model's properties"
            );
        }

        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->cardChargeCooldown)) {
            $json['card_charge_cooldown']               = $this->cardChargeCooldown['value'];
        }
        if (!empty($this->subscriptionCooldown)) {
            $json['subscription_cooldown']              = $this->subscriptionCooldown['value'];
        }
        if (!empty($this->idempotentCardChargeCooldown)) {
            $json['idempotent_card_charge_cooldown']    = $this->idempotentCardChargeCooldown['value'];
        }
        if (!empty($this->idempotentSubscriptionCooldown)) {
            $json['idempotent_subscription_cooldown']   = $this->idempotentSubscriptionCooldown['value'];
        }
        if (isset($this->restrictIpAfterFailedCharge)) {
            $json['restrict_ip_after_failed_charge']    = $this->restrictIpAfterFailedCharge;
        }
        if (!empty($this->inspectSuspiciousLoginAfter)) {
            $json['inspect_suspicious_login_after']     = $this->inspectSuspiciousLoginAfter['value'];
        }
        if (!empty($this->refundPercentLimit)) {
            $json['refund_percent_limit']               = $this->refundPercentLimit['value'];
        }
        if (isset($this->limitChargeByCardConfiguration)) {
            $json['limit_charge_by_card_configuration'] = $this->limitChargeByCardConfiguration;
        }
        if (!empty($this->confirmationRequired)) {
            $json['confirmation_required']              = $this->confirmationRequired['value'];
        }
        if (!empty($this->minRefundThreshold)) {
            $json['min_refund_threshold']               = $this->minRefundThreshold['value'];
        }
        if (isset($this->limitRefundBySales)) {
            $json['limit_refund_by_sales']              = $this->limitRefundBySales;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
