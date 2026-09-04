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

/**
 * Subscription plan configuration.
 */
class MerchantWebhookSubscriptionPlanConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $fixedCycle = [];

    /**
     * @var array
     */
    private $fixedCycleAmount = [];

    /**
     * @var array
     */
    private $supportedPaymentTypes = [];

    /**
     * @var MerchantWebhookMoneyAmount|null
     */
    private $minChargeAmount;

    /**
     * @var array
     */
    private $maxPayoutPeriod = [];

    /**
     * Returns Enabled.
     * Enables limited-cycle subscription plans.
     */
    public function getEnabled(): ?bool
    {
        if (count($this->enabled) == 0) {
            return null;
        }
        return $this->enabled['value'];
    }

    /**
     * Sets Enabled.
     * Enables limited-cycle subscription plans.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables limited-cycle subscription plans.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Fixed Cycle.
     * Allows plans limited by a fixed number of cycles.
     */
    public function getFixedCycle(): ?bool
    {
        if (count($this->fixedCycle) == 0) {
            return null;
        }
        return $this->fixedCycle['value'];
    }

    /**
     * Sets Fixed Cycle.
     * Allows plans limited by a fixed number of cycles.
     *
     * @maps fixed_cycle
     */
    public function setFixedCycle(?bool $fixedCycle): void
    {
        $this->fixedCycle['value'] = $fixedCycle;
    }

    /**
     * Unsets Fixed Cycle.
     * Allows plans limited by a fixed number of cycles.
     */
    public function unsetFixedCycle(): void
    {
        $this->fixedCycle = [];
    }

    /**
     * Returns Fixed Cycle Amount.
     * Allows plans limited by a total target amount.
     */
    public function getFixedCycleAmount(): ?bool
    {
        if (count($this->fixedCycleAmount) == 0) {
            return null;
        }
        return $this->fixedCycleAmount['value'];
    }

    /**
     * Sets Fixed Cycle Amount.
     * Allows plans limited by a total target amount.
     *
     * @maps fixed_cycle_amount
     */
    public function setFixedCycleAmount(?bool $fixedCycleAmount): void
    {
        $this->fixedCycleAmount['value'] = $fixedCycleAmount;
    }

    /**
     * Unsets Fixed Cycle Amount.
     * Allows plans limited by a total target amount.
     */
    public function unsetFixedCycleAmount(): void
    {
        $this->fixedCycleAmount = [];
    }

    /**
     * Returns Supported Payment Types.
     * Payment types that can use subscription plans.
     *
     * @return string[]|null
     */
    public function getSupportedPaymentTypes(): ?array
    {
        if (count($this->supportedPaymentTypes) == 0) {
            return null;
        }
        return $this->supportedPaymentTypes['value'];
    }

    /**
     * Sets Supported Payment Types.
     * Payment types that can use subscription plans.
     *
     * @maps supported_payment_types
     *
     * @param string[]|null $supportedPaymentTypes
     */
    public function setSupportedPaymentTypes(?array $supportedPaymentTypes): void
    {
        $this->supportedPaymentTypes['value'] = $supportedPaymentTypes;
    }

    /**
     * Unsets Supported Payment Types.
     * Payment types that can use subscription plans.
     */
    public function unsetSupportedPaymentTypes(): void
    {
        $this->supportedPaymentTypes = [];
    }

    /**
     * Returns Min Charge Amount.
     * Monetary amount object serialized by backend config models.
     */
    public function getMinChargeAmount(): ?MerchantWebhookMoneyAmount
    {
        return $this->minChargeAmount;
    }

    /**
     * Sets Min Charge Amount.
     * Monetary amount object serialized by backend config models.
     *
     * @maps min_charge_amount
     */
    public function setMinChargeAmount(?MerchantWebhookMoneyAmount $minChargeAmount): void
    {
        $this->minChargeAmount = $minChargeAmount;
    }

    /**
     * Returns Max Payout Period.
     * Maximum payout delay allowed for subscription plan settlements.
     */
    public function getMaxPayoutPeriod(): ?string
    {
        if (count($this->maxPayoutPeriod) == 0) {
            return null;
        }
        return $this->maxPayoutPeriod['value'];
    }

    /**
     * Sets Max Payout Period.
     * Maximum payout delay allowed for subscription plan settlements.
     *
     * @maps max_payout_period
     */
    public function setMaxPayoutPeriod(?string $maxPayoutPeriod): void
    {
        $this->maxPayoutPeriod['value'] = $maxPayoutPeriod;
    }

    /**
     * Unsets Max Payout Period.
     * Maximum payout delay allowed for subscription plan settlements.
     */
    public function unsetMaxPayoutPeriod(): void
    {
        $this->maxPayoutPeriod = [];
    }

    /**
     * Converts the MerchantWebhookSubscriptionPlanConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookSubscriptionPlanConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookSubscriptionPlanConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'fixedCycle' => $this->getFixedCycle(),
                'fixedCycleAmount' => $this->getFixedCycleAmount(),
                'supportedPaymentTypes' => $this->getSupportedPaymentTypes(),
                'minChargeAmount' => $this->minChargeAmount,
                'maxPayoutPeriod' => $this->getMaxPayoutPeriod(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'enabled',
        'fixed_cycle',
        'fixed_cycle_amount',
        'supported_payment_types',
        'min_charge_amount',
        'max_payout_period'
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
        if (!empty($this->enabled)) {
            $json['enabled']                 = $this->enabled['value'];
        }
        if (!empty($this->fixedCycle)) {
            $json['fixed_cycle']             = $this->fixedCycle['value'];
        }
        if (!empty($this->fixedCycleAmount)) {
            $json['fixed_cycle_amount']      = $this->fixedCycleAmount['value'];
        }
        if (!empty($this->supportedPaymentTypes)) {
            $json['supported_payment_types'] = $this->supportedPaymentTypes['value'];
        }
        if (isset($this->minChargeAmount)) {
            $json['min_charge_amount']       = $this->minChargeAmount;
        }
        if (!empty($this->maxPayoutPeriod)) {
            $json['max_payout_period']       = $this->maxPayoutPeriod['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
