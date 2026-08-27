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
 * Charge Redirect schema.
 */
class ChargeRedirect implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $endpoint;

    /**
     * @var string|null
     */
    private $redirectId;

    /**
     * Returns Endpoint.
     * Endpoint value.
     */
    public function getEndpoint(): ?string
    {
        return $this->endpoint;
    }

    /**
     * Sets Endpoint.
     * Endpoint value.
     *
     * @maps endpoint
     */
    public function setEndpoint(?string $endpoint): void
    {
        $this->endpoint = $endpoint;
    }

    /**
     * Returns Redirect Id.
     * Redirect identifier.
     */
    public function getRedirectId(): ?string
    {
        return $this->redirectId;
    }

    /**
     * Sets Redirect Id.
     * Redirect identifier.
     *
     * @maps redirect_id
     */
    public function setRedirectId(?string $redirectId): void
    {
        $this->redirectId = $redirectId;
    }

    /**
     * Converts the ChargeRedirect object to a human-readable string representation.
     *
     * @return string The string representation of the ChargeRedirect object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChargeRedirect',
            [
                'endpoint' => $this->endpoint,
                'redirectId' => $this->redirectId,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['endpoint', 'redirect_id'];

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
            $json['endpoint']    = $this->endpoint;
        }
        if (isset($this->redirectId)) {
            $json['redirect_id'] = $this->redirectId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
