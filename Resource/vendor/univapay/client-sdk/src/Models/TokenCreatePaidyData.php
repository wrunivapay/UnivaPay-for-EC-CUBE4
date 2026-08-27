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
 * Token Create Paidy Data schema.
 */
class TokenCreatePaidyData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paidyToken;

    /**
     * @var TokenCreatePaidyDataShippingAddress
     */
    private $shippingAddress;

    /**
     * @var string|null
     */
    private $phoneNumber;

    /**
     * @param string $paidyToken
     * @param TokenCreatePaidyDataShippingAddress $shippingAddress
     */
    public function __construct(string $paidyToken, TokenCreatePaidyDataShippingAddress $shippingAddress)
    {
        $this->paidyToken = $paidyToken;
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Paidy Token.
     * One-time token issued by the Paidy SDK/widget on the client side.
     */
    public function getPaidyToken(): string
    {
        return $this->paidyToken;
    }

    /**
     * Sets Paidy Token.
     * One-time token issued by the Paidy SDK/widget on the client side.
     *
     * @required
     * @maps paidy_token
     */
    public function setPaidyToken(string $paidyToken): void
    {
        $this->paidyToken = $paidyToken;
    }

    /**
     * Returns Shipping Address.
     * Shipping address for a Paidy token. `zip` is required; the server additionally requires at least one
     * of `line1`, `line2`, `city`, or `state` to be present (not enforceable at the schema level).
     */
    public function getShippingAddress(): TokenCreatePaidyDataShippingAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     * Shipping address for a Paidy token. `zip` is required; the server additionally requires at least one
     * of `line1`, `line2`, `city`, or `state` to be present (not enforceable at the schema level).
     *
     * @required
     * @maps shipping_address
     */
    public function setShippingAddress(TokenCreatePaidyDataShippingAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Returns Phone Number.
     * Consumer phone number in Japanese format (e.g., '08012341234').
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * Consumer phone number in Japanese format (e.g., '08012341234').
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Converts the TokenCreatePaidyData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenCreatePaidyData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenCreatePaidyData',
            [
                'paidyToken' => $this->paidyToken,
                'shippingAddress' => $this->shippingAddress,
                'phoneNumber' => $this->phoneNumber,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['paidy_token', 'shipping_address', 'phone_number'];

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
        $json['paidy_token']      = $this->paidyToken;
        $json['shipping_address'] = $this->shippingAddress;
        if (isset($this->phoneNumber)) {
            $json['phone_number'] = $this->phoneNumber;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
