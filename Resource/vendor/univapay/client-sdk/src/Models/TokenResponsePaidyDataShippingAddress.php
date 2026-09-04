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
 * Shipping address returned for a Paidy token.
 */
class TokenResponsePaidyDataShippingAddress implements \JsonSerializable
{
    /**
     * @var array
     */
    private $zip = [];

    /**
     * @var array
     */
    private $line1 = [];

    /**
     * @var array
     */
    private $line2 = [];

    /**
     * @var array
     */
    private $city = [];

    /**
     * @var array
     */
    private $state = [];

    /**
     * Returns Zip.
     * Japanese postal code.
     */
    public function getZip(): ?string
    {
        if (count($this->zip) == 0) {
            return null;
        }
        return $this->zip['value'];
    }

    /**
     * Sets Zip.
     * Japanese postal code.
     *
     * @maps zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip['value'] = $zip;
    }

    /**
     * Unsets Zip.
     * Japanese postal code.
     */
    public function unsetZip(): void
    {
        $this->zip = [];
    }

    /**
     * Returns Line 1.
     * Primary street address line.
     */
    public function getLine1(): ?string
    {
        if (count($this->line1) == 0) {
            return null;
        }
        return $this->line1['value'];
    }

    /**
     * Sets Line 1.
     * Primary street address line.
     *
     * @maps line1
     */
    public function setLine1(?string $line1): void
    {
        $this->line1['value'] = $line1;
    }

    /**
     * Unsets Line 1.
     * Primary street address line.
     */
    public function unsetLine1(): void
    {
        $this->line1 = [];
    }

    /**
     * Returns Line 2.
     * Secondary street address line.
     */
    public function getLine2(): ?string
    {
        if (count($this->line2) == 0) {
            return null;
        }
        return $this->line2['value'];
    }

    /**
     * Sets Line 2.
     * Secondary street address line.
     *
     * @maps line2
     */
    public function setLine2(?string $line2): void
    {
        $this->line2['value'] = $line2;
    }

    /**
     * Unsets Line 2.
     * Secondary street address line.
     */
    public function unsetLine2(): void
    {
        $this->line2 = [];
    }

    /**
     * Returns City.
     * City or locality.
     */
    public function getCity(): ?string
    {
        if (count($this->city) == 0) {
            return null;
        }
        return $this->city['value'];
    }

    /**
     * Sets City.
     * City or locality.
     *
     * @maps city
     */
    public function setCity(?string $city): void
    {
        $this->city['value'] = $city;
    }

    /**
     * Unsets City.
     * City or locality.
     */
    public function unsetCity(): void
    {
        $this->city = [];
    }

    /**
     * Returns State.
     * State or prefecture.
     */
    public function getState(): ?string
    {
        if (count($this->state) == 0) {
            return null;
        }
        return $this->state['value'];
    }

    /**
     * Sets State.
     * State or prefecture.
     *
     * @maps state
     */
    public function setState(?string $state): void
    {
        $this->state['value'] = $state;
    }

    /**
     * Unsets State.
     * State or prefecture.
     */
    public function unsetState(): void
    {
        $this->state = [];
    }

    /**
     * Converts the TokenResponsePaidyDataShippingAddress object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponsePaidyDataShippingAddress object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponsePaidyDataShippingAddress',
            [
                'zip' => $this->getZip(),
                'line1' => $this->getLine1(),
                'line2' => $this->getLine2(),
                'city' => $this->getCity(),
                'state' => $this->getState(),
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
        if (!empty($this->zip)) {
            $json['zip']   = $this->zip['value'];
        }
        if (!empty($this->line1)) {
            $json['line1'] = $this->line1['value'];
        }
        if (!empty($this->line2)) {
            $json['line2'] = $this->line2['value'];
        }
        if (!empty($this->city)) {
            $json['city']  = $this->city['value'];
        }
        if (!empty($this->state)) {
            $json['state'] = $this->state['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
