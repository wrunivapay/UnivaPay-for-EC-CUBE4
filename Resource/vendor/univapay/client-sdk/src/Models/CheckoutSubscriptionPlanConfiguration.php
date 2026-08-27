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
 * Univapay-side subscription plan configuration applied to checkout.
 */
class CheckoutSubscriptionPlanConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var bool|null
     */
    private $fixedCycle;

    /**
     * @var bool|null
     */
    private $fixedCycleAmount;

    /**
     * @var string[]|null
     */
    private $supportedPaymentTypes;

    /**
     * @var array
     */
    private $minChargeAmount = [];

    /**
     * @var array
     */
    private $maxPayoutPeriod = [];

    /**
     * Returns Enabled.
     * Whether subscription plans are enabled.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Whether subscription plans are enabled.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Fixed Cycle.
     * Whether fixed-cycle subscription plans are allowed.
     */
    public function getFixedCycle(): ?bool
    {
        return $this->fixedCycle;
    }

    /**
     * Sets Fixed Cycle.
     * Whether fixed-cycle subscription plans are allowed.
     *
     * @maps fixed_cycle
     */
    public function setFixedCycle(?bool $fixedCycle): void
    {
        $this->fixedCycle = $fixedCycle;
    }

    /**
     * Returns Fixed Cycle Amount.
     * Whether fixed-cycle-amount subscription plans are allowed.
     */
    public function getFixedCycleAmount(): ?bool
    {
        return $this->fixedCycleAmount;
    }

    /**
     * Sets Fixed Cycle Amount.
     * Whether fixed-cycle-amount subscription plans are allowed.
     *
     * @maps fixed_cycle_amount
     */
    public function setFixedCycleAmount(?bool $fixedCycleAmount): void
    {
        $this->fixedCycleAmount = $fixedCycleAmount;
    }

    /**
     * Returns Supported Payment Types.
     * Payment types eligible for subscription plans.
     *
     * @return string[]|null
     */
    public function getSupportedPaymentTypes(): ?array
    {
        return $this->supportedPaymentTypes;
    }

    /**
     * Sets Supported Payment Types.
     * Payment types eligible for subscription plans.
     *
     * @maps supported_payment_types
     * @factory \UnivaPay\Models\CheckoutPaymentType::checkValue
     *
     * @param string[]|null $supportedPaymentTypes
     */
    public function setSupportedPaymentTypes(?array $supportedPaymentTypes): void
    {
        $this->supportedPaymentTypes = $supportedPaymentTypes;
    }

    /**
     * Returns Min Charge Amount.
     * Minimum charge amount eligible for subscription plans. `null` when unrestricted.
     */
    public function getMinChargeAmount(): ?CheckoutMoneyAmount
    {
        if (count($this->minChargeAmount) == 0) {
            return null;
        }
        return $this->minChargeAmount['value'];
    }

    /**
     * Sets Min Charge Amount.
     * Minimum charge amount eligible for subscription plans. `null` when unrestricted.
     *
     * @maps min_charge_amount
     */
    public function setMinChargeAmount(?CheckoutMoneyAmount $minChargeAmount): void
    {
        $this->minChargeAmount['value'] = $minChargeAmount;
    }

    /**
     * Unsets Min Charge Amount.
     * Minimum charge amount eligible for subscription plans. `null` when unrestricted.
     */
    public function unsetMinChargeAmount(): void
    {
        $this->minChargeAmount = [];
    }

    /**
     * Returns Max Payout Period.
     * ISO-8601 period bounding the maximum payout delay for subscription settlements. `null` when
     * unrestricted.
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
     * ISO-8601 period bounding the maximum payout delay for subscription settlements. `null` when
     * unrestricted.
     *
     * @maps max_payout_period
     */
    public function setMaxPayoutPeriod(?string $maxPayoutPeriod): void
    {
        $this->maxPayoutPeriod['value'] = $maxPayoutPeriod;
    }

    /**
     * Unsets Max Payout Period.
     * ISO-8601 period bounding the maximum payout delay for subscription settlements. `null` when
     * unrestricted.
     */
    public function unsetMaxPayoutPeriod(): void
    {
        $this->maxPayoutPeriod = [];
    }

    /**
     * Converts the CheckoutSubscriptionPlanConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutSubscriptionPlanConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutSubscriptionPlanConfiguration',
            [
                'enabled' => $this->enabled,
                'fixedCycle' => $this->fixedCycle,
                'fixedCycleAmount' => $this->fixedCycleAmount,
                'supportedPaymentTypes' => $this->supportedPaymentTypes,
                'minChargeAmount' => $this->getMinChargeAmount(),
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
        if (isset($this->enabled)) {
            $json['enabled']                 = $this->enabled;
        }
        if (isset($this->fixedCycle)) {
            $json['fixed_cycle']             = $this->fixedCycle;
        }
        if (isset($this->fixedCycleAmount)) {
            $json['fixed_cycle_amount']      = $this->fixedCycleAmount;
        }
        if (isset($this->supportedPaymentTypes)) {
            $json['supported_payment_types'] = CheckoutPaymentType::checkValue($this->supportedPaymentTypes);
        }
        if (!empty($this->minChargeAmount)) {
            $json['min_charge_amount']       = $this->minChargeAmount['value'];
        }
        if (!empty($this->maxPayoutPeriod)) {
            $json['max_payout_period']       = $this->maxPayoutPeriod['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
