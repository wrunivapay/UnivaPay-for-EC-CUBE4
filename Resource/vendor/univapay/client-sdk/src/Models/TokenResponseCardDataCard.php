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
 * Token Response Card Data Card schema.
 */
class TokenResponseCardDataCard implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cardholder;

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
    private $cardBin;

    /**
     * @var string|null
     */
    private $lastFour;

    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var string|null
     */
    private $cardType;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var array
     */
    private $category = [];

    /**
     * @var array
     */
    private $issuer = [];

    /**
     * @var string|null
     */
    private $subBrand;

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
     * Returns Card Bin.
     * Card bin value.
     */
    public function getCardBin(): ?string
    {
        return $this->cardBin;
    }

    /**
     * Sets Card Bin.
     * Card bin value.
     *
     * @maps card_bin
     */
    public function setCardBin(?string $cardBin): void
    {
        $this->cardBin = $cardBin;
    }

    /**
     * Returns Last Four.
     * Last four value.
     */
    public function getLastFour(): ?string
    {
        return $this->lastFour;
    }

    /**
     * Sets Last Four.
     * Last four value.
     *
     * @maps last_four
     */
    public function setLastFour(?string $lastFour): void
    {
        $this->lastFour = $lastFour;
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
     * Returns Card Type.
     * Card type value.
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * Sets Card Type.
     * Card type value.
     *
     * @maps card_type
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
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
     * Returns Category.
     * Category value.
     */
    public function getCategory(): ?string
    {
        if (count($this->category) == 0) {
            return null;
        }
        return $this->category['value'];
    }

    /**
     * Sets Category.
     * Category value.
     *
     * @maps category
     */
    public function setCategory(?string $category): void
    {
        $this->category['value'] = $category;
    }

    /**
     * Unsets Category.
     * Category value.
     */
    public function unsetCategory(): void
    {
        $this->category = [];
    }

    /**
     * Returns Issuer.
     * Issuer value.
     */
    public function getIssuer(): ?string
    {
        if (count($this->issuer) == 0) {
            return null;
        }
        return $this->issuer['value'];
    }

    /**
     * Sets Issuer.
     * Issuer value.
     *
     * @maps issuer
     */
    public function setIssuer(?string $issuer): void
    {
        $this->issuer['value'] = $issuer;
    }

    /**
     * Unsets Issuer.
     * Issuer value.
     */
    public function unsetIssuer(): void
    {
        $this->issuer = [];
    }

    /**
     * Returns Sub Brand.
     * Sub brand value.
     */
    public function getSubBrand(): ?string
    {
        return $this->subBrand;
    }

    /**
     * Sets Sub Brand.
     * Sub brand value.
     *
     * @maps sub_brand
     */
    public function setSubBrand(?string $subBrand): void
    {
        $this->subBrand = $subBrand;
    }

    /**
     * Converts the TokenResponseCardDataCard object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponseCardDataCard object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponseCardDataCard',
            [
                'cardholder' => $this->cardholder,
                'expMonth' => $this->expMonth,
                'expYear' => $this->expYear,
                'cardBin' => $this->cardBin,
                'lastFour' => $this->lastFour,
                'brand' => $this->brand,
                'cardType' => $this->cardType,
                'country' => $this->country,
                'category' => $this->getCategory(),
                'issuer' => $this->getIssuer(),
                'subBrand' => $this->subBrand,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'cardholder',
        'exp_month',
        'exp_year',
        'card_bin',
        'last_four',
        'brand',
        'card_type',
        'country',
        'category',
        'issuer',
        'sub_brand'
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
        if (isset($this->cardholder)) {
            $json['cardholder'] = $this->cardholder;
        }
        if (isset($this->expMonth)) {
            $json['exp_month']  = $this->expMonth;
        }
        if (isset($this->expYear)) {
            $json['exp_year']   = $this->expYear;
        }
        if (isset($this->cardBin)) {
            $json['card_bin']   = $this->cardBin;
        }
        if (isset($this->lastFour)) {
            $json['last_four']  = $this->lastFour;
        }
        if (isset($this->brand)) {
            $json['brand']      = $this->brand;
        }
        if (isset($this->cardType)) {
            $json['card_type']  = $this->cardType;
        }
        if (isset($this->country)) {
            $json['country']    = $this->country;
        }
        if (!empty($this->category)) {
            $json['category']   = $this->category['value'];
        }
        if (!empty($this->issuer)) {
            $json['issuer']     = $this->issuer['value'];
        }
        if (isset($this->subBrand)) {
            $json['sub_brand']  = $this->subBrand;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
