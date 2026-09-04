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
 * Customer-facing payment method summary data.
 */
class SubscriptionUserData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $type;

    /**
     * @var array
     */
    private $cardholderName = [];

    /**
     * @var array
     */
    private $email = [];

    /**
     * @var array
     */
    private $brand = [];

    /**
     * @var array
     */
    private $gateway = [];

    /**
     * @var array
     */
    private $serviceProvider = [];

    /**
     * Returns Type.
     * Type of the resource.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Type of the resource.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Cardholder Name.
     * Cardholder name value.
     */
    public function getCardholderName(): ?string
    {
        if (count($this->cardholderName) == 0) {
            return null;
        }
        return $this->cardholderName['value'];
    }

    /**
     * Sets Cardholder Name.
     * Cardholder name value.
     *
     * @maps cardholder_name
     */
    public function setCardholderName(?string $cardholderName): void
    {
        $this->cardholderName['value'] = $cardholderName;
    }

    /**
     * Unsets Cardholder Name.
     * Cardholder name value.
     */
    public function unsetCardholderName(): void
    {
        $this->cardholderName = [];
    }

    /**
     * Returns Email.
     * Customer email address.
     */
    public function getEmail(): ?string
    {
        if (count($this->email) == 0) {
            return null;
        }
        return $this->email['value'];
    }

    /**
     * Sets Email.
     * Customer email address.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email['value'] = $email;
    }

    /**
     * Unsets Email.
     * Customer email address.
     */
    public function unsetEmail(): void
    {
        $this->email = [];
    }

    /**
     * Returns Brand.
     * Brand or network name.
     */
    public function getBrand(): ?string
    {
        if (count($this->brand) == 0) {
            return null;
        }
        return $this->brand['value'];
    }

    /**
     * Sets Brand.
     * Brand or network name.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand['value'] = $brand;
    }

    /**
     * Unsets Brand.
     * Brand or network name.
     */
    public function unsetBrand(): void
    {
        $this->brand = [];
    }

    /**
     * Returns Gateway.
     * Gateway identifier.
     */
    public function getGateway(): ?string
    {
        if (count($this->gateway) == 0) {
            return null;
        }
        return $this->gateway['value'];
    }

    /**
     * Sets Gateway.
     * Gateway identifier.
     *
     * @maps gateway
     */
    public function setGateway(?string $gateway): void
    {
        $this->gateway['value'] = $gateway;
    }

    /**
     * Unsets Gateway.
     * Gateway identifier.
     */
    public function unsetGateway(): void
    {
        $this->gateway = [];
    }

    /**
     * Returns Service Provider.
     * Service provider identifier.
     */
    public function getServiceProvider(): ?string
    {
        if (count($this->serviceProvider) == 0) {
            return null;
        }
        return $this->serviceProvider['value'];
    }

    /**
     * Sets Service Provider.
     * Service provider identifier.
     *
     * @maps service_provider
     */
    public function setServiceProvider(?string $serviceProvider): void
    {
        $this->serviceProvider['value'] = $serviceProvider;
    }

    /**
     * Unsets Service Provider.
     * Service provider identifier.
     */
    public function unsetServiceProvider(): void
    {
        $this->serviceProvider = [];
    }

    /**
     * Converts the SubscriptionUserData object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionUserData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionUserData',
            [
                'type' => $this->type,
                'cardholderName' => $this->getCardholderName(),
                'email' => $this->getEmail(),
                'brand' => $this->getBrand(),
                'gateway' => $this->getGateway(),
                'serviceProvider' => $this->getServiceProvider(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['type', 'cardholder_name', 'email', 'brand', 'gateway', 'service_provider'];

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
        if (isset($this->type)) {
            $json['type']             = $this->type;
        }
        if (!empty($this->cardholderName)) {
            $json['cardholder_name']  = $this->cardholderName['value'];
        }
        if (!empty($this->email)) {
            $json['email']            = $this->email['value'];
        }
        if (!empty($this->brand)) {
            $json['brand']            = $this->brand['value'];
        }
        if (!empty($this->gateway)) {
            $json['gateway']          = $this->gateway['value'];
        }
        if (!empty($this->serviceProvider)) {
            $json['service_provider'] = $this->serviceProvider['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
