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
 * 3-D Secure configuration and redirect details applied to the subscription's payments.
 */
class SubscriptionThreeDs implements \JsonSerializable
{
    /**
     * @var array
     */
    private $mode = [];

    /**
     * @var array
     */
    private $redirectEndpoint = [];

    /**
     * @var array
     */
    private $redirectId = [];

    /**
     * Returns Mode.
     * 3-D Secure authentication mode applied to the subscription's payments. `if_available` enforces 3DS
     * only if credentials are available for the recurring token and it has not already completed 3DS.
     * `provided` indicates externally supplied MPI authentication data was used.
     */
    public function getMode(): ?string
    {
        if (count($this->mode) == 0) {
            return null;
        }
        return $this->mode['value'];
    }

    /**
     * Sets Mode.
     * 3-D Secure authentication mode applied to the subscription's payments. `if_available` enforces 3DS
     * only if credentials are available for the recurring token and it has not already completed 3DS.
     * `provided` indicates externally supplied MPI authentication data was used.
     *
     * @maps mode
     * @factory \UnivaPay\Models\SubscriptionThreeDsMode::checkValue
     */
    public function setMode(?string $mode): void
    {
        $this->mode['value'] = $mode;
    }

    /**
     * Unsets Mode.
     * 3-D Secure authentication mode applied to the subscription's payments. `if_available` enforces 3DS
     * only if credentials are available for the recurring token and it has not already completed 3DS.
     * `provided` indicates externally supplied MPI authentication data was used.
     */
    public function unsetMode(): void
    {
        $this->mode = [];
    }

    /**
     * Returns Redirect Endpoint.
     * URL the customer is redirected to for 3-D Secure authentication.
     */
    public function getRedirectEndpoint(): ?string
    {
        if (count($this->redirectEndpoint) == 0) {
            return null;
        }
        return $this->redirectEndpoint['value'];
    }

    /**
     * Sets Redirect Endpoint.
     * URL the customer is redirected to for 3-D Secure authentication.
     *
     * @maps redirect_endpoint
     */
    public function setRedirectEndpoint(?string $redirectEndpoint): void
    {
        $this->redirectEndpoint['value'] = $redirectEndpoint;
    }

    /**
     * Unsets Redirect Endpoint.
     * URL the customer is redirected to for 3-D Secure authentication.
     */
    public function unsetRedirectEndpoint(): void
    {
        $this->redirectEndpoint = [];
    }

    /**
     * Returns Redirect Id.
     * Identifier of the 3-D Secure redirect.
     */
    public function getRedirectId(): ?string
    {
        if (count($this->redirectId) == 0) {
            return null;
        }
        return $this->redirectId['value'];
    }

    /**
     * Sets Redirect Id.
     * Identifier of the 3-D Secure redirect.
     *
     * @maps redirect_id
     */
    public function setRedirectId(?string $redirectId): void
    {
        $this->redirectId['value'] = $redirectId;
    }

    /**
     * Unsets Redirect Id.
     * Identifier of the 3-D Secure redirect.
     */
    public function unsetRedirectId(): void
    {
        $this->redirectId = [];
    }

    /**
     * Converts the SubscriptionThreeDs object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionThreeDs object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionThreeDs',
            [
                'mode' => $this->getMode(),
                'redirectEndpoint' => $this->getRedirectEndpoint(),
                'redirectId' => $this->getRedirectId(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['mode', 'redirect_endpoint', 'redirect_id'];

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
        if (!empty($this->mode)) {
            $json['mode']              = SubscriptionThreeDsMode::checkValue($this->mode['value']);
        }
        if (!empty($this->redirectEndpoint)) {
            $json['redirect_endpoint'] = $this->redirectEndpoint['value'];
        }
        if (!empty($this->redirectId)) {
            $json['redirect_id']       = $this->redirectId['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
