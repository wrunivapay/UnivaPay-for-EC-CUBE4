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
 * Charge Create Request Redirect schema.
 */
class ChargeCreateRequestRedirect implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $endpoint;

    /**
     * Returns Endpoint.
     * URL to redirect the customer to after payment completion.
     */
    public function getEndpoint(): ?string
    {
        return $this->endpoint;
    }

    /**
     * Sets Endpoint.
     * URL to redirect the customer to after payment completion.
     *
     * @maps endpoint
     */
    public function setEndpoint(?string $endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Converts the ChargeCreateRequestRedirect object to a human-readable string representation.
     *
     * @return string The string representation of the ChargeCreateRequestRedirect object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChargeCreateRequestRedirect',
            ['endpoint' => $this->endpoint, 'additionalProperties' => $this->additionalProperties]
        );
    }

    protected $propertyNames = ['endpoint'];

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
        if (isset($this->endpoint)) {
            $json['endpoint'] = $this->endpoint;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
