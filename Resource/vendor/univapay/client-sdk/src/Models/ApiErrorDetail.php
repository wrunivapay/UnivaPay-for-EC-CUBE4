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
 * Structured detail entry describing a single API validation or business error.
 */
class ApiErrorDetail implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $field;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Returns Field.
     * The field name of the parameter that caused the error (lower_snake_case).
     */
    public function getField(): ?string
    {
        return $this->field;
    }

    /**
     * Sets Field.
     * The field name of the parameter that caused the error (lower_snake_case).
     *
     * @maps field
     */
    public function setField(?string $field): void
    {
        $this->field = $field;
    }

    /**
     * Returns Reason.
     * Detailed reason for the nested error (UPPER_SNAKE_CASE or English description).
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * Detailed reason for the nested error (UPPER_SNAKE_CASE or English description).
     *
     * @maps reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Converts the ApiErrorDetail object to a human-readable string representation.
     *
     * @return string The string representation of the ApiErrorDetail object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApiErrorDetail',
            [
                'field' => $this->field,
                'reason' => $this->reason,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['field', 'reason'];

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
        if (isset($this->field)) {
            $json['field']  = $this->field;
        }
        if (isset($this->reason)) {
            $json['reason'] = $this->reason;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
