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
 * Request payload for enabling 3DS on a recurring token. Both the body and `redirect_endpoint` are
 * optional.
 */
class EnableTokenThreeDsRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $redirectEndpoint;

    /**
     * Returns Redirect Endpoint.
     * URL to redirect the customer to after 3DS authentication.
     */
    public function getRedirectEndpoint(): ?string
    {
        return $this->redirectEndpoint;
    }

    /**
     * Sets Redirect Endpoint.
     * URL to redirect the customer to after 3DS authentication.
     *
     * @maps redirect_endpoint
     */
    public function setRedirectEndpoint(?string $redirectEndpoint): void
    {
        $this->redirectEndpoint = $redirectEndpoint;
    }

    /**
     * Converts the EnableTokenThreeDsRequest object to a human-readable string representation.
     *
     * @return string The string representation of the EnableTokenThreeDsRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'EnableTokenThreeDsRequest',
            ['redirectEndpoint' => $this->redirectEndpoint, 'additionalProperties' => $this->additionalProperties]
        );
    }

    protected $propertyNames = ['redirect_endpoint'];

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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
