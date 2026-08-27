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
 * Transaction Token Update Request Data Phone Number schema.
 */
class TransactionTokenUpdateRequestDataPhoneNumber implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $countryCode;

    /**
     * @var string|null
     */
    private $localNumber;

    /**
     * Returns Country Code.
     * Telephone country code.
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Sets Country Code.
     * Telephone country code.
     *
     * @maps country_code
     */
    public function setCountryCode(?string $countryCode): void
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Returns Local Number.
     * Local phone number.
     */
    public function getLocalNumber(): ?string
    {
        return $this->localNumber;
    }

    /**
     * Sets Local Number.
     * Local phone number.
     *
     * @maps local_number
     */
    public function setLocalNumber(?string $localNumber): void
    {
        $this->localNumber = $localNumber;
    }

    /**
     * Converts the TransactionTokenUpdateRequestDataPhoneNumber object to a human-readable string
     * representation.
     *
     * @return string The string representation of the TransactionTokenUpdateRequestDataPhoneNumber object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionTokenUpdateRequestDataPhoneNumber',
            [
                'countryCode' => $this->countryCode,
                'localNumber' => $this->localNumber,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['country_code', 'local_number'];

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
        if (isset($this->countryCode)) {
            $json['country_code'] = $this->countryCode;
        }
        if (isset($this->localNumber)) {
            $json['local_number'] = $this->localNumber;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
