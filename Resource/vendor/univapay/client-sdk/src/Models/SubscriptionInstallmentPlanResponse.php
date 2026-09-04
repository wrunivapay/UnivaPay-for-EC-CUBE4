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
 * Installment plan applied to the subscription, as returned by the API. Covers both card-network
 * installment plans (`revolving`, `fixed_cycles`) and legacy fixed-amount installment plans
 * (`fixed_cycle_amount`).
 */
class SubscriptionInstallmentPlanResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $planType;

    /**
     * @var array
     */
    private $fixedCycles = [];

    /**
     * @var array
     */
    private $fixedCyclesAmount = [];

    /**
     * Returns Plan Type.
     * Plan type selector.
     */
    public function getPlanType(): ?string
    {
        return $this->planType;
    }

    /**
     * Sets Plan Type.
     * Plan type selector.
     *
     * @maps plan_type
     * @factory \UnivaPay\Models\CombinedPlanType::checkValue
     */
    public function setPlanType(?string $planType): void
    {
        $this->planType = $planType;
    }

    /**
     * Returns Fixed Cycles.
     * Number of installment cycles. Present when plan_type is fixed_cycles.
     */
    public function getFixedCycles(): ?int
    {
        if (count($this->fixedCycles) == 0) {
            return null;
        }
        return $this->fixedCycles['value'];
    }

    /**
     * Sets Fixed Cycles.
     * Number of installment cycles. Present when plan_type is fixed_cycles.
     *
     * @maps fixed_cycles
     * @factory \UnivaPay\Models\CombinedInstallmentFixedCycles::checkValue
     */
    public function setFixedCycles(?int $fixedCycles): void
    {
        $this->fixedCycles['value'] = $fixedCycles;
    }

    /**
     * Unsets Fixed Cycles.
     * Number of installment cycles. Present when plan_type is fixed_cycles.
     */
    public function unsetFixedCycles(): void
    {
        $this->fixedCycles = [];
    }

    /**
     * Returns Fixed Cycles Amount.
     * Total target amount for the fixed_cycle_amount plan type, in the smallest currency unit. Present
     * when plan_type is fixed_cycle_amount. Note the plural `fixed_cycles_amount` key differs from
     * `subscription_plan`'s singular `fixed_cycle_amount`.
     */
    public function getFixedCyclesAmount(): ?int
    {
        if (count($this->fixedCyclesAmount) == 0) {
            return null;
        }
        return $this->fixedCyclesAmount['value'];
    }

    /**
     * Sets Fixed Cycles Amount.
     * Total target amount for the fixed_cycle_amount plan type, in the smallest currency unit. Present
     * when plan_type is fixed_cycle_amount. Note the plural `fixed_cycles_amount` key differs from
     * `subscription_plan`'s singular `fixed_cycle_amount`.
     *
     * @maps fixed_cycles_amount
     */
    public function setFixedCyclesAmount(?int $fixedCyclesAmount): void
    {
        $this->fixedCyclesAmount['value'] = $fixedCyclesAmount;
    }

    /**
     * Unsets Fixed Cycles Amount.
     * Total target amount for the fixed_cycle_amount plan type, in the smallest currency unit. Present
     * when plan_type is fixed_cycle_amount. Note the plural `fixed_cycles_amount` key differs from
     * `subscription_plan`'s singular `fixed_cycle_amount`.
     */
    public function unsetFixedCyclesAmount(): void
    {
        $this->fixedCyclesAmount = [];
    }

    /**
     * Converts the SubscriptionInstallmentPlanResponse object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionInstallmentPlanResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionInstallmentPlanResponse',
            [
                'planType' => $this->planType,
                'fixedCycles' => $this->getFixedCycles(),
                'fixedCyclesAmount' => $this->getFixedCyclesAmount(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['plan_type', 'fixed_cycles', 'fixed_cycles_amount'];

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
        if (isset($this->planType)) {
            $json['plan_type']           = CombinedPlanType::checkValue($this->planType);
        }
        if (!empty($this->fixedCycles)) {
            $json['fixed_cycles']        = CombinedInstallmentFixedCycles::checkValue($this->fixedCycles['value']);
        }
        if (!empty($this->fixedCyclesAmount)) {
            $json['fixed_cycles_amount'] = $this->fixedCyclesAmount['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
