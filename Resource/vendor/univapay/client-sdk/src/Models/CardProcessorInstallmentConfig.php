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
class CardProcessorInstallmentConfig implements \JsonSerializable
{
    /**
     * @var array
     */
    private $revolving = [];

    /**
     * @var array
     */
    private $fixedCycle = [];

    /**
     * Returns Revolving.
     * Allows revolving payments through supported processors.
     */
    public function getRevolving(): ?bool
    {
        if (count($this->revolving) == 0) {
            return null;
        }
        return $this->revolving['value'];
    }

    /**
     * Sets Revolving.
     * Allows revolving payments through supported processors.
     *
     * @maps revolving
     */
    public function setRevolving(?bool $revolving): void
    {
        $this->revolving['value'] = $revolving;
    }

    /**
     * Unsets Revolving.
     * Allows revolving payments through supported processors.
     */
    public function unsetRevolving(): void
    {
        $this->revolving = [];
    }

    /**
     * Returns Fixed Cycle.
     * Allows fixed-cycle installment payments through supported processors.
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
     * Allows fixed-cycle installment payments through supported processors.
     *
     * @maps fixed_cycle
     */
    public function setFixedCycle(?bool $fixedCycle): void
    {
        $this->fixedCycle['value'] = $fixedCycle;
    }

    /**
     * Unsets Fixed Cycle.
     * Allows fixed-cycle installment payments through supported processors.
     */
    public function unsetFixedCycle(): void
    {
        $this->fixedCycle = [];
    }

    /**
     * Converts the CardProcessorInstallmentConfig object to a human-readable string representation.
     *
     * @return string The string representation of the CardProcessorInstallmentConfig object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CardProcessorInstallmentConfig',
            [
                'revolving' => $this->getRevolving(),
                'fixedCycle' => $this->getFixedCycle(),
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
        if (!empty($this->revolving)) {
            $json['revolving']   = $this->revolving['value'];
        }
        if (!empty($this->fixedCycle)) {
            $json['fixed_cycle'] = $this->fixedCycle['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
