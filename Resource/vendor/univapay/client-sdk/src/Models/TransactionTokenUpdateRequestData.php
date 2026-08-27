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
 * Transaction Token Update Request Data schema.
 */
class TransactionTokenUpdateRequestData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cvv;

    /**
     * @var string|null
     */
    private $cardholder;

    /**
     * @var string|null
     */
    private $cardNumber;

    /**
     * @var int|null
     */
    private $expMonth;

    /**
     * @var int|null
     */
    private $expYear;

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
    private $state;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @var TransactionTokenUpdateRequestDataPhoneNumber|null
     */
    private $phoneNumber;

    /**
     * Returns Cvv.
     * Update if RECURRING_USAGE_REQUIRES_CVV error occurs.
     */
    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    /**
     * Sets Cvv.
     * Update if RECURRING_USAGE_REQUIRES_CVV error occurs.
     *
     * @maps cvv
     */
    public function setCvv(?string $cvv): void
    {
        $this->cvv = $cvv;
    }

    /**
     * Returns Cardholder.
     * Cardholder name.
     */
    public function getCardholder(): ?string
    {
        return $this->cardholder;
    }

    /**
     * Sets Cardholder.
     * Cardholder name.
     *
     * @maps cardholder
     */
    public function setCardholder(?string $cardholder): void
    {
        $this->cardholder = $cardholder;
    }

    /**
     * Returns Card Number.
     * Card number.
     */
    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    /**
     * Sets Card Number.
     * Card number.
     *
     * @maps card_number
     */
    public function setCardNumber(?string $cardNumber): void
    {
        $this->cardNumber = $cardNumber;
    }

    /**
     * Returns Exp Month.
     * Card expiration month.
     */
    public function getExpMonth(): ?int
    {
        return $this->expMonth;
    }

    /**
     * Sets Exp Month.
     * Card expiration month.
     *
     * @maps exp_month
     */
    public function setExpMonth(?int $expMonth): void
    {
        $this->expMonth = $expMonth;
    }

    /**
     * Returns Exp Year.
     * Card expiration year.
     */
    public function getExpYear(): ?int
    {
        return $this->expYear;
    }

    /**
     * Sets Exp Year.
     * Card expiration year.
     *
     * @maps exp_year
     */
    public function setExpYear(?int $expYear): void
    {
        $this->expYear = $expYear;
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
     * Returns Country.
     * Country code.
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * Sets Country.
     * Country code.
     *
     * @maps country
     */
    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    /**
     * Returns Zip.
     * Postal code.
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * Sets Zip.
     * Postal code.
     *
     * @maps zip
     */
    public function setZip(?string $zip): void
    {
        $this->zip = $zip;
    }

    /**
     * Returns Phone Number.
     * Transaction Token Update Request Data Phone Number schema.
     */
    public function getPhoneNumber(): ?TransactionTokenUpdateRequestDataPhoneNumber
    {
        return $this->phoneNumber;
    }

    /**
     * Sets Phone Number.
     * Transaction Token Update Request Data Phone Number schema.
     *
     * @maps phone_number
     */
    public function setPhoneNumber(?TransactionTokenUpdateRequestDataPhoneNumber $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Converts the TransactionTokenUpdateRequestData object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionTokenUpdateRequestData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionTokenUpdateRequestData',
            [
                'cvv' => $this->cvv,
                'cardholder' => $this->cardholder,
                'cardNumber' => $this->cardNumber,
                'expMonth' => $this->expMonth,
                'expYear' => $this->expYear,
                'line1' => $this->line1,
                'line2' => $this->line2,
                'state' => $this->state,
                'city' => $this->city,
                'country' => $this->country,
                'zip' => $this->zip,
                'phoneNumber' => $this->phoneNumber,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'cvv',
        'cardholder',
        'card_number',
        'exp_month',
        'exp_year',
        'line1',
        'line2',
        'state',
        'city',
        'country',
        'zip',
        'phone_number'
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
        if (isset($this->cvv)) {
            $json['cvv']          = $this->cvv;
        }
        if (isset($this->cardholder)) {
            $json['cardholder']   = $this->cardholder;
        }
        if (isset($this->cardNumber)) {
            $json['card_number']  = $this->cardNumber;
        }
        if (isset($this->expMonth)) {
            $json['exp_month']    = $this->expMonth;
        }
        if (isset($this->expYear)) {
            $json['exp_year']     = $this->expYear;
        }
        if (isset($this->line1)) {
            $json['line1']        = $this->line1;
        }
        if (isset($this->line2)) {
            $json['line2']        = $this->line2;
        }
        if (isset($this->state)) {
            $json['state']        = $this->state;
        }
        if (isset($this->city)) {
            $json['city']         = $this->city;
        }
        if (isset($this->country)) {
            $json['country']      = $this->country;
        }
        if (isset($this->zip)) {
            $json['zip']          = $this->zip;
        }
        if (isset($this->phoneNumber)) {
            $json['phone_number'] = $this->phoneNumber;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
