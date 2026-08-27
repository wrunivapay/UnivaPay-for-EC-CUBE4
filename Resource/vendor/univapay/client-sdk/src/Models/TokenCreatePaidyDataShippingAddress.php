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
 * Shipping address for a Paidy token. `zip` is required; the server additionally requires at least one
 * of `line1`, `line2`, `city`, or `state` to be present (not enforceable at the schema level).
 */
class TokenCreatePaidyDataShippingAddress implements \JsonSerializable
{
    /**
     * @var string
     */
    private $zip;

    /**
     * @var string|null
     */
    private $line1;

    /**
     * @var string|null
     */
    private $line2;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $state;

    /**
     * @param string $zip
     */
    public function __construct(string $zip)
    {
        $this->zip = $zip;
    }

    /**
     * Returns Zip.
     * Japanese postal code (e.g., '105-0011').
     */
    public function getZip(): string
    {
        return $this->zip;
    }

    /**
     * Sets Zip.
     * Japanese postal code (e.g., '105-0011').
     *
     * @required
     * @maps zip
     */
    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * Returns Line 1.
     * Primary street address line.
     */
    public function getLine1(): ?string
    {
        return $this->line1;
    }

    /**
     * Sets Line 1.
     * Primary street address line.
     *
     * @maps line1
     */
    public function setLine1(?string $line1): void
    {
        $this->line1 = $line1;
    }

    /**
     * Returns Line 2.
     * Secondary street address line.
     */
    public function getLine2(): ?string
    {
        return $this->line2;
    }

    /**
     * Sets Line 2.
     * Secondary street address line.
     *
     * @maps line2
     */
    public function setLine2(?string $line2): void
    {
        $this->line2 = $line2;
    }

    /**
     * Returns City.
     * City or locality.
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Sets City.
     * City or locality.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * Returns State.
     * State or prefecture.
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * Sets State.
     * State or prefecture.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    /**
     * Converts the TokenCreatePaidyDataShippingAddress object to a human-readable string representation.
     *
     * @return string The string representation of the TokenCreatePaidyDataShippingAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenCreatePaidyDataShippingAddress',
            [
                'zip' => $this->zip,
                'line1' => $this->line1,
                'line2' => $this->line2,
                'city' => $this->city,
                'state' => $this->state,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['zip', 'line1', 'line2', 'city', 'state'];

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
        $json['zip']       = $this->zip;
        if (isset($this->line1)) {
            $json['line1'] = $this->line1;
        }
        if (isset($this->line2)) {
            $json['line2'] = $this->line2;
        }
        if (isset($this->city)) {
            $json['city']  = $this->city;
        }
        if (isset($this->state)) {
            $json['state'] = $this->state;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
