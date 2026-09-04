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
 * Token Create Konbini Data schema.
 */
class TokenCreateKonbiniData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $customerName;

    /**
     * @var string
     */
    private $convenienceStore;

    /**
     * @var string|null
     */
    private $expirationPeriod;

    /**
     * @var TokenCreatePhoneNumber
     */
    private $phoneNumber;

    /**
     * @var string|null
     */
    private $expirationTimeShift;

    /**
     * @param string $customerName
     * @param string $convenienceStore
     * @param TokenCreatePhoneNumber $phoneNumber
     */
    public function __construct(string $customerName, string $convenienceStore, TokenCreatePhoneNumber $phoneNumber)
    {
        $this->customerName = $customerName;
        $this->convenienceStore = $convenienceStore;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Customer Name.
     * Customer name.
     */
    public function getCustomerName(): string
    {
        return $this->customerName;
    }

    /**
     * Sets Customer Name.
     * Customer name.
     *
     * @required
     * @maps customer_name
     */
    public function setCustomerName(string $customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * Returns Convenience Store.
     * Base Konbini Data Convenience Store schema.
     */
    public function getConvenienceStore(): string
    {
        return $this->convenienceStore;
    }

    /**
     * Sets Convenience Store.
     * Base Konbini Data Convenience Store schema.
     *
     * @required
     * @maps convenience_store
     * @factory \UnivaPay\Models\BaseKonbiniDataConvenienceStore::checkValue
     */
    public function setConvenienceStore(string $convenienceStore): void
    {
        $this->convenienceStore = $convenienceStore;
    }

    /**
     * Returns Expiration Period.
     * ISO-8601 Duration (e.g., 'P7D'). Default is 30 days.
     */
    public function getExpirationPeriod(): ?string
    {
        return $this->expirationPeriod;
    }

    /**
     * Sets Expiration Period.
     * ISO-8601 Duration (e.g., 'P7D'). Default is 30 days.
     *
     * @maps expiration_period
     */
    public function setExpirationPeriod(?string $expirationPeriod): void
    {
        $this->expirationPeriod = $expirationPeriod;
    }

    /**
     * Returns Phone Number.
     * Token Create Phone Number schema.
     */
    public function getPhoneNumber(): TokenCreatePhoneNumber
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * Token Create Phone Number schema.
     *
     * @required
     * @maps phone_number
     */
    public function setPhoneNumber(TokenCreatePhoneNumber $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Returns Expiration Time Shift.
     * Expiration time shift value.
     */
    public function getExpirationTimeShift(): ?string
    {
        return $this->expirationTimeShift;
    }

    /**
     * Sets Expiration Time Shift.
     * Expiration time shift value.
     *
     * @maps expiration_time_shift
     */
    public function setExpirationTimeShift(?string $expirationTimeShift): void
    {
        $this->expirationTimeShift = $expirationTimeShift;
    }

    /**
     * Converts the TokenCreateKonbiniData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenCreateKonbiniData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenCreateKonbiniData',
            [
                'customerName' => $this->customerName,
                'convenienceStore' => $this->convenienceStore,
                'expirationPeriod' => $this->expirationPeriod,
                'phoneNumber' => $this->phoneNumber,
                'expirationTimeShift' => $this->expirationTimeShift,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'customer_name',
        'convenience_store',
        'expiration_period',
        'phone_number',
        'expiration_time_shift'
    ];

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
        $json['customer_name']             = $this->customerName;
        $json['convenience_store']         = BaseKonbiniDataConvenienceStore::checkValue($this->convenienceStore);
        if (isset($this->expirationPeriod)) {
            $json['expiration_period']     = $this->expirationPeriod;
        }
        $json['phone_number']              = $this->phoneNumber;
        if (isset($this->expirationTimeShift)) {
            $json['expiration_time_shift'] = $this->expirationTimeShift;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
