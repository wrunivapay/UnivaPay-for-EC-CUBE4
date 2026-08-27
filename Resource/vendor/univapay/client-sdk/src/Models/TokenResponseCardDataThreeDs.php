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
 * Token Response Card Data Three Ds schema.
 */
class TokenResponseCardDataThreeDs implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var array
     */
    private $redirectEndpoint = [];

    /**
     * @var array
     */
    private $redirectId = [];

    /**
     * @var bool|null
     */
    private $exempted;

    /**
     * @var array
     */
    private $error = [];

    /**
     * Returns Enabled.
     * Enabled value.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Enabled value.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Status.
     * Token Response Card Data Three Ds Status schema.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Token Response Card Data Three Ds Status schema.
     *
     * @maps status
     * @factory \UnivaPay\Models\TokenResponseCardDataThreeDsStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Redirect Endpoint.
     * Redirect endpoint URL.
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
     * Redirect endpoint URL.
     *
     * @maps redirect_endpoint
     */
    public function setRedirectEndpoint(?string $redirectEndpoint): void
    {
        $this->redirectEndpoint['value'] = $redirectEndpoint;
    }

    /**
     * Unsets Redirect Endpoint.
     * Redirect endpoint URL.
     */
    public function unsetRedirectEndpoint(): void
    {
        $this->redirectEndpoint = [];
    }

    /**
     * Returns Redirect Id.
     * Redirect identifier.
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
     * Redirect identifier.
     *
     * @maps redirect_id
     */
    public function setRedirectId(?string $redirectId): void
    {
        $this->redirectId['value'] = $redirectId;
    }

    /**
     * Unsets Redirect Id.
     * Redirect identifier.
     */
    public function unsetRedirectId(): void
    {
        $this->redirectId = [];
    }

    /**
     * Returns Exempted.
     * Indicates if the 3DS check was exempted. When creating charge 3DS check will not be required.
     */
    public function getExempted(): ?bool
    {
        return $this->exempted;
    }

    /**
     * Sets Exempted.
     * Indicates if the 3DS check was exempted. When creating charge 3DS check will not be required.
     *
     * @maps exempted
     */
    public function setExempted(?bool $exempted): void
    {
        $this->exempted = $exempted;
    }

    /**
     * Returns Error.
     * Payment error details, or null if successful.
     */
    public function getError(): ?PaymentError
    {
        if (count($this->error) == 0) {
            return null;
        }
        return $this->error['value'];
    }

    /**
     * Sets Error.
     * Payment error details, or null if successful.
     *
     * @maps error
     */
    public function setError(?PaymentError $error): void
    {
        $this->error['value'] = $error;
    }

    /**
     * Unsets Error.
     * Payment error details, or null if successful.
     */
    public function unsetError(): void
    {
        $this->error = [];
    }

    /**
     * Converts the TokenResponseCardDataThreeDs object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponseCardDataThreeDs object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponseCardDataThreeDs',
            [
                'enabled' => $this->enabled,
                'status' => $this->status,
                'redirectEndpoint' => $this->getRedirectEndpoint(),
                'redirectId' => $this->getRedirectId(),
                'exempted' => $this->exempted,
                'error' => $this->getError(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'status', 'redirect_endpoint', 'redirect_id', 'exempted', 'error'];

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
        if (isset($this->enabled)) {
            $json['enabled']           = $this->enabled;
        }
        if (isset($this->status)) {
            $json['status']            = TokenResponseCardDataThreeDsStatus::checkValue($this->status);
        }
        if (!empty($this->redirectEndpoint)) {
            $json['redirect_endpoint'] = $this->redirectEndpoint['value'];
        }
        if (!empty($this->redirectId)) {
            $json['redirect_id']       = $this->redirectId['value'];
        }
        if (isset($this->exempted)) {
            $json['exempted']          = $this->exempted;
        }
        if (!empty($this->error)) {
            $json['error']             = $this->error['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
