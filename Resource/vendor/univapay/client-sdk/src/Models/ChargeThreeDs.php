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
 * Charge Three Ds schema.
 */
class ChargeThreeDs implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $redirectEndpoint;

    /**
     * @var string|null
     */
    private $mode;

    /**
     * Returns Redirect Endpoint.
     * Redirect endpoint URL.
     */
    public function getRedirectEndpoint(): ?string
    {
        return $this->redirectEndpoint;
    }

    /**
     * Sets Redirect Endpoint.
     * Redirect endpoint URL.
     *
     * @maps redirect_endpoint
     */
    public function setRedirectEndpoint(?string $redirectEndpoint): void
    {
        $this->redirectEndpoint = $redirectEndpoint;
    }

    /**
     * Returns Mode.
     * Processing mode for the resource.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Processing mode for the resource.
     *
     * @maps mode
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * Converts the ChargeThreeDs object to a human-readable string representation.
     *
     * @return string The string representation of the ChargeThreeDs object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChargeThreeDs',
            [
                'redirectEndpoint' => $this->redirectEndpoint,
                'mode' => $this->mode,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['redirect_endpoint', 'mode'];

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
        if (isset($this->redirectEndpoint)) {
            $json['redirect_endpoint'] = $this->redirectEndpoint;
        }
        if (isset($this->mode)) {
            $json['mode']              = $this->mode;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
