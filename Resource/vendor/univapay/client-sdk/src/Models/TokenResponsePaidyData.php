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
 * Token Response Paidy Data schema.
 */
class TokenResponsePaidyData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paidyToken;

    /**
     * @var array
     */
    private $phoneNumber = [];

    /**
     * @var TokenResponsePaidyDataShippingAddress|null
     */
    private $shippingAddress;

    /**
     * @param string $paidyToken
     */
    public function __construct(string $paidyToken)
    {
        $this->paidyToken = $paidyToken;
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
     * Returns Phone Number.
     * Consumer phone number in Japanese format.
     */
    public function getPhoneNumber(): ?string
    {
        if (count($this->phoneNumber) == 0) {
            return null;
        }
        return $this->phoneNumber['value'];
    }

    /**
     * Sets Phone Number.
     * Consumer phone number in Japanese format.
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?string $phoneNumber): void
    {
        $this->phoneNumber['value'] = $phoneNumber;
    }

    /**
     * Unsets Phone Number.
     * Consumer phone number in Japanese format.
     */
    public function unsetPhoneNumber(): void
    {
        $this->phoneNumber = [];
    }

    /**
     * Returns Shipping Address.
     * Shipping address returned for a Paidy token.
     */
    public function getShippingAddress(): ?TokenResponsePaidyDataShippingAddress
    {
        return $this->shippingAddress;
    }

    /**
     * Sets Shipping Address.
     * Shipping address returned for a Paidy token.
     *
     * @maps shipping_address
     */
    public function setShippingAddress(?TokenResponsePaidyDataShippingAddress $shippingAddress): void
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * Converts the TokenResponsePaidyData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponsePaidyData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponsePaidyData',
            [
                'paidyToken' => $this->paidyToken,
                'phoneNumber' => $this->getPhoneNumber(),
                'shippingAddress' => $this->shippingAddress,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['paidy_token', 'phone_number', 'shipping_address'];

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
        $json['paidy_token']          = $this->paidyToken;
        if (!empty($this->phoneNumber)) {
            $json['phone_number']     = $this->phoneNumber['value'];
        }
        if (isset($this->shippingAddress)) {
            $json['shipping_address'] = $this->shippingAddress;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
