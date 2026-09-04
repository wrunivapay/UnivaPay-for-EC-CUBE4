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
 * Transaction Token List Item User Data schema.
 */
class TransactionTokenListItemUserData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cardholderName;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $brand;

    /**
     * Returns Cardholder Name.
     * Cardholder name value.
     */
    public function getCardholderName(): ?string
    {
        return $this->cardholderName;
    }

    /**
     * Sets Cardholder Name.
     * Cardholder name value.
     *
     * @maps cardholder_name
     */
    public function setCardholderName(?string $cardholderName): void
    {
        $this->cardholderName = $cardholderName;
    }

    /**
     * Returns Email.
     * Customer email address.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * Customer email address.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Brand.
     * Brand or network name.
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * Brand or network name.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Converts the TransactionTokenListItemUserData object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionTokenListItemUserData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionTokenListItemUserData',
            [
                'cardholderName' => $this->cardholderName,
                'email' => $this->email,
                'brand' => $this->brand,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['cardholder_name', 'email', 'brand'];

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
        if (isset($this->cardholderName)) {
            $json['cardholder_name'] = $this->cardholderName;
        }
        if (isset($this->email)) {
            $json['email']           = $this->email;
        }
        if (isset($this->brand)) {
            $json['brand']           = $this->brand;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
