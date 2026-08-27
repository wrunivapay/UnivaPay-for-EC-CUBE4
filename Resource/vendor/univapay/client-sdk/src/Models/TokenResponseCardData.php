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
 * Token Response Card Data schema.
 */
class TokenResponseCardData implements \JsonSerializable
{
    /**
     * @var TokenResponseCardDataCard|null
     */
    private $card;

    /**
     * @var TokenResponseCardDataBilling|null
     */
    private $billing;

    /**
     * @var TokenResponseCardDataCvvAuthorize|null
     */
    private $cvvAuthorize;

    /**
     * @var TokenResponseCardDataCvvAuthorizeCheck|null
     */
    private $cvvAuthorizeCheck;

    /**
     * @var TokenResponseCardDataThreeDs|null
     */
    private $threeDs;

    /**
     * Returns Card.
     * Token Response Card Data Card schema.
     */
    public function getCard(): ?TokenResponseCardDataCard
    {
        return $this->card;
    }

    /**
     * Sets Card.
     * Token Response Card Data Card schema.
     *
     * @maps card
     */
    public function setCard(?TokenResponseCardDataCard $card): void
    {
        $this->card = $card;
    }

    /**
     * Returns Billing.
     * Token Response Card Data Billing schema.
     */
    public function getBilling(): ?TokenResponseCardDataBilling
    {
        return $this->billing;
    }

    /**
     * Sets Billing.
     * Token Response Card Data Billing schema.
     *
     * @maps billing
     */
    public function setBilling(?TokenResponseCardDataBilling $billing): void
    {
        $this->billing = $billing;
    }

    /**
     * Returns Cvv Authorize.
     * Token Response Card Data Cvv Authorize schema.
     */
    public function getCvvAuthorize(): ?TokenResponseCardDataCvvAuthorize
    {
        return $this->cvvAuthorize;
    }

    /**
     * Sets Cvv Authorize.
     * Token Response Card Data Cvv Authorize schema.
     *
     * @maps cvv_authorize
     */
    public function setCvvAuthorize(?TokenResponseCardDataCvvAuthorize $cvvAuthorize): void
    {
        $this->cvvAuthorize = $cvvAuthorize;
    }

    /**
     * Returns Cvv Authorize Check.
     * Token Response Card Data Cvv Authorize Check schema.
     */
    public function getCvvAuthorizeCheck(): ?TokenResponseCardDataCvvAuthorizeCheck
    {
        return $this->cvvAuthorizeCheck;
    }

    /**
     * Sets Cvv Authorize Check.
     * Token Response Card Data Cvv Authorize Check schema.
     *
     * @maps cvv_authorize_check
     */
    public function setCvvAuthorizeCheck(?TokenResponseCardDataCvvAuthorizeCheck $cvvAuthorizeCheck): void
    {
        $this->cvvAuthorizeCheck = $cvvAuthorizeCheck;
    }

    /**
     * Returns Three Ds.
     * Token Response Card Data Three Ds schema.
     */
    public function getThreeDs(): ?TokenResponseCardDataThreeDs
    {
        return $this->threeDs;
    }

    /**
     * Sets Three Ds.
     * Token Response Card Data Three Ds schema.
     *
     * @maps three_ds
     */
    public function setThreeDs(?TokenResponseCardDataThreeDs $threeDs): void
    {
        $this->threeDs = $threeDs;
    }

    /**
     * Converts the TokenResponseCardData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponseCardData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponseCardData',
            [
                'card' => $this->card,
                'billing' => $this->billing,
                'cvvAuthorize' => $this->cvvAuthorize,
                'cvvAuthorizeCheck' => $this->cvvAuthorizeCheck,
                'threeDs' => $this->threeDs,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['card', 'billing', 'cvv_authorize', 'cvv_authorize_check', 'three_ds'];

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
        if (isset($this->card)) {
            $json['card']                = $this->card;
        }
        if (isset($this->billing)) {
            $json['billing']             = $this->billing;
        }
        if (isset($this->cvvAuthorize)) {
            $json['cvv_authorize']       = $this->cvvAuthorize;
        }
        if (isset($this->cvvAuthorizeCheck)) {
            $json['cvv_authorize_check'] = $this->cvvAuthorizeCheck;
        }
        if (isset($this->threeDs)) {
            $json['three_ds']            = $this->threeDs;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
