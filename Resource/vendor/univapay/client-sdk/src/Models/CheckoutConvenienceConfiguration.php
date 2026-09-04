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
 * Convenience-store (konbini) payment settings applied to checkout.
 */
class CheckoutConvenienceConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var string|null
     */
    private $expiration;

    /**
     * @var ExpirationTimeShift|null
     */
    private $expirationTimeShift;

    /**
     * Returns Enabled.
     * Whether convenience-store payments are enabled.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Whether convenience-store payments are enabled.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Expiration.
     * ISO-8601 duration before a convenience-store payment expires.
     */
    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    /**
     * Sets Expiration.
     * ISO-8601 duration before a convenience-store payment expires.
     *
     * @maps expiration
     */
    public function setExpiration(?string $expiration): void
    {
        $this->expiration = $expiration;
    }

    /**
     * Returns Expiration Time Shift.
     * Time-of-day override applied when calculating expirations, shared by convenience-store and bank-
     * transfer configuration.
     */
    public function getExpirationTimeShift(): ?ExpirationTimeShift
    {
        return $this->expirationTimeShift;
    }

    /**
     * Sets Expiration Time Shift.
     * Time-of-day override applied when calculating expirations, shared by convenience-store and bank-
     * transfer configuration.
     *
     * @maps expiration_time_shift
     */
    public function setExpirationTimeShift(?ExpirationTimeShift $expirationTimeShift): void
    {
        $this->expirationTimeShift = $expirationTimeShift;
    }

    /**
     * Converts the CheckoutConvenienceConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutConvenienceConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutConvenienceConfiguration',
            [
                'enabled' => $this->enabled,
                'expiration' => $this->expiration,
                'expirationTimeShift' => $this->expirationTimeShift,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'expiration', 'expiration_time_shift'];

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
            $json['enabled']               = $this->enabled;
        }
        if (isset($this->expiration)) {
            $json['expiration']            = $this->expiration;
        }
        if (isset($this->expirationTimeShift)) {
            $json['expiration_time_shift'] = $this->expirationTimeShift;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
