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
 * Response payload returned after deriving a deterministic customer ID.
 */
class CreateCustomerIdResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $customerId;

    /**
     * Returns Customer Id.
     * Deterministic UUID derived from the store and the supplied local `customer_id`. Identical for
     * repeated calls with the same inputs.
     */
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * Deterministic UUID derived from the store and the supplied local `customer_id`. Identical for
     * repeated calls with the same inputs.
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Converts the CreateCustomerIdResponse object to a human-readable string representation.
     *
     * @return string The string representation of the CreateCustomerIdResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateCustomerIdResponse',
            ['customerId' => $this->customerId, 'additionalProperties' => $this->additionalProperties]
        );
    }

    protected $propertyNames = ['customer_id'];

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
        if (isset($this->customerId)) {
            $json['customer_id'] = $this->customerId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
