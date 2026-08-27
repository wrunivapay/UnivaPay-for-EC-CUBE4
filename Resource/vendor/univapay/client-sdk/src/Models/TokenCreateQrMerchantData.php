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
 * Token Create Qr Merchant Data schema.
 */
class TokenCreateQrMerchantData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $brand;

    /**
     * @param string $brand
     */
    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    /**
     * Returns Brand.
     * The QR-MPM brand to generate a merchant-presented-mode code for. Validated strictly server-side
     * against a supported brand list. Common values include `rakuten_pay_merchant`, `alipay_merchant_qr`,
     * `pay_pay_merchant`, `d_barai_mpm`, `we_chat_mpm`. Treat this as an open value set — the server may
     * add brands over time.
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * The QR-MPM brand to generate a merchant-presented-mode code for. Validated strictly server-side
     * against a supported brand list. Common values include `rakuten_pay_merchant`, `alipay_merchant_qr`,
     * `pay_pay_merchant`, `d_barai_mpm`, `we_chat_mpm`. Treat this as an open value set — the server may
     * add brands over time.
     *
     * @required
     * @maps brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Converts the TokenCreateQrMerchantData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenCreateQrMerchantData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenCreateQrMerchantData',
            ['brand' => $this->brand, 'additionalProperties' => $this->additionalProperties]
        );
    }

    protected $propertyNames = ['brand'];

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
        $json['brand'] = $this->brand;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
