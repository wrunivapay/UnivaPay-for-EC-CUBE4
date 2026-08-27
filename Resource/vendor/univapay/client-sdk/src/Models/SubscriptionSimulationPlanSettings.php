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
 * Cycle-limiting plan configuration used to simulate an installment plan or a Univapay-side
 * subscription plan.
 */
class SubscriptionSimulationPlanSettings implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $planType;

    /**
     * @var int|null
     */
    private $fixedCycles;

    /**
     * @var int|null
     */
    private $fixedCycleAmount;

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
     * @factory \UnivaPay\Models\SimulationPlanSettingsType::checkValue
     */
    public function setPlanType(?string $planType): void
    {
        $this->planType = $planType;
    }

    /**
     * Returns Fixed Cycles.
     * Number of cycles for the fixed_cycles plan. Must be greater than 1.
     */
    public function getFixedCycles(): ?int
    {
        return $this->fixedCycles;
    }

    /**
     * Sets Fixed Cycles.
     * Number of cycles for the fixed_cycles plan. Must be greater than 1.
     *
     * @maps fixed_cycles
     */
    public function setFixedCycles(?int $fixedCycles): void
    {
        $this->fixedCycles = $fixedCycles;
    }

    /**
     * Returns Fixed Cycle Amount.
     * Total target amount for the fixed_cycle_amount plan. Must not exceed the requested amount.
     */
    public function getFixedCycleAmount(): ?int
    {
        return $this->fixedCycleAmount;
    }

    /**
     * Sets Fixed Cycle Amount.
     * Total target amount for the fixed_cycle_amount plan. Must not exceed the requested amount.
     *
     * @maps fixed_cycle_amount
     */
    public function setFixedCycleAmount(?int $fixedCycleAmount): void
    {
        $this->fixedCycleAmount = $fixedCycleAmount;
    }

    /**
     * Converts the SubscriptionSimulationPlanSettings object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionSimulationPlanSettings object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionSimulationPlanSettings',
            [
                'planType' => $this->planType,
                'fixedCycles' => $this->fixedCycles,
                'fixedCycleAmount' => $this->fixedCycleAmount,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['plan_type', 'fixed_cycles', 'fixed_cycle_amount'];

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
            $json['plan_type']          = SimulationPlanSettingsType::checkValue($this->planType);
        }
        if (isset($this->fixedCycles)) {
            $json['fixed_cycles']       = $this->fixedCycles;
        }
        if (isset($this->fixedCycleAmount)) {
            $json['fixed_cycle_amount'] = $this->fixedCycleAmount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
