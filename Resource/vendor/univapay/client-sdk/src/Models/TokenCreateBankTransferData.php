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
 * Token Create Bank Transfer Data schema.
 */
class TokenCreateBankTransferData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $brand;

    /**
     * @var string|null
     */
    private $expirationPeriod;

    /**
     * @var string|null
     */
    private $expirationTimeShift;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @param string $brand
     */
    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Returns Brand.
     * The bank brand identifier (e.g., 'aozora_bank').
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * The bank brand identifier (e.g., 'aozora_bank').
     *
     * @required
     * @maps brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Expiration Period.
     * ISO 8601 duration format (e.g., 'PT168H').
     */
    public function getExpirationPeriod(): ?string
    {
        return $this->expirationPeriod;
    }

    /**
     * Sets Expiration Period.
     * ISO 8601 duration format (e.g., 'PT168H').
     *
     * @maps expiration_period
     */
    public function setExpirationPeriod(?string $expirationPeriod): void
    {
        $this->expirationPeriod = $expirationPeriod;
    }

    /**
     * Returns Expiration Time Shift.
     * Time shift applied to the expiration, typically pushing it to the end of the day  in a specific
     * timezone (e.g., '23:59:59+09:00').
     */
    public function getExpirationTimeShift(): ?string
    {
        return $this->expirationTimeShift;
    }

    /**
     * Sets Expiration Time Shift.
     * Time shift applied to the expiration, typically pushing it to the end of the day  in a specific
     * timezone (e.g., '23:59:59+09:00').
     *
     * @maps expiration_time_shift
     */
    public function setExpirationTimeShift(?string $expirationTimeShift): void
    {
        $this->expirationTimeShift = $expirationTimeShift;
    }

    /**
     * Returns Name.
     * The name of the customer initiating the transfer.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The name of the customer initiating the transfer.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Converts the TokenCreateBankTransferData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenCreateBankTransferData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenCreateBankTransferData',
            [
                'brand' => $this->brand,
                'expirationPeriod' => $this->expirationPeriod,
                'expirationTimeShift' => $this->expirationTimeShift,
                'name' => $this->name,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['brand', 'expiration_period', 'expiration_time_shift', 'name'];

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
        $json['brand']                     = $this->brand;
        if (isset($this->expirationPeriod)) {
            $json['expiration_period']     = $this->expirationPeriod;
        }
        if (isset($this->expirationTimeShift)) {
            $json['expiration_time_shift'] = $this->expirationTimeShift;
        }
        if (isset($this->name)) {
            $json['name']                  = $this->name;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
