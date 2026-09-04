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
 * Card-processor capabilities available for installment payments.
 */
class CheckoutInstallmentCardProcessor implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $revolving;

    /**
     * @var bool|null
     */
    private $fixedCycle;

    /**
     * Returns Revolving.
     * Whether revolving installment payments are allowed.
     */
    public function getRevolving(): ?bool
    {
        return $this->revolving;
    }

    /**
     * Sets Revolving.
     * Whether revolving installment payments are allowed.
     *
     * @maps revolving
     */
    public function setRevolving(?bool $revolving): void
    {
        $this->revolving = $revolving;
    }

    /**
     * Returns Fixed Cycle.
     * Whether fixed-cycle installment payments are allowed.
     */
    public function getFixedCycle(): ?bool
    {
        return $this->fixedCycle;
    }

    /**
     * Sets Fixed Cycle.
     * Whether fixed-cycle installment payments are allowed.
     *
     * @maps fixed_cycle
     */
    public function setFixedCycle(?bool $fixedCycle): void
    {
        $this->fixedCycle = $fixedCycle;
    }

    /**
     * Converts the CheckoutInstallmentCardProcessor object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutInstallmentCardProcessor object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutInstallmentCardProcessor',
            [
                'revolving' => $this->revolving,
                'fixedCycle' => $this->fixedCycle,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['revolving', 'fixed_cycle'];

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
        if (isset($this->revolving)) {
            $json['revolving']   = $this->revolving;
        }
        if (isset($this->fixedCycle)) {
            $json['fixed_cycle'] = $this->fixedCycle;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
