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
 * Request body for updating a customs declaration. Backend patch handling keeps the original `customs`,
 * `certificate_id`, and `certificate_name` values and only accepts a new `merchant_customs_no`.
 */
class CustomsDeclarationPatchRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $merchantCustomsNo;

    /**
     * @param string $merchantCustomsNo
     */
    public function __construct(string $merchantCustomsNo)
    {
        $this->merchantCustomsNo = $merchantCustomsNo;
    }

    /**
     * Returns Merchant Customs No.
     * Updated merchant customs registration number.
     */
    public function getMerchantCustomsNo(): string
    {
        return $this->merchantCustomsNo;
    }

    /**
     * Sets Merchant Customs No.
     * Updated merchant customs registration number.
     *
     * @required
     * @maps merchant_customs_no
     */
    public function setMerchantCustomsNo(string $merchantCustomsNo): void
    {
        $this->merchantCustomsNo = $merchantCustomsNo;
    }

    /**
     * Converts the CustomsDeclarationPatchRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CustomsDeclarationPatchRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CustomsDeclarationPatchRequest',
            [
                'merchantCustomsNo' => $this->merchantCustomsNo,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['merchant_customs_no'];

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
        $json['merchant_customs_no'] = $this->merchantCustomsNo;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
