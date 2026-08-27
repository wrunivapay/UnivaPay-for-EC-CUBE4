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
 * Token Response Qr Merchant Data schema.
 */
class TokenResponseQrMerchantData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $qrImageUrl;

    /**
     * @var array
     */
    private $brand = [];

    /**
     * Returns Qr Image Url.
     * QR code payload to be rendered by the consumer (content varies by brand — may be a URL or an opaque
     * code). Some brands return an image URL; others (e.g. convenience-store QR brands) return an opaque
     * numeric code with no URL structure. Populated asynchronously shortly after token/charge creation —
     * `null` until then.
     */
    public function getQrImageUrl(): ?string
    {
        return $this->qrImageUrl;
    }

    /**
     * Sets Qr Image Url.
     * QR code payload to be rendered by the consumer (content varies by brand — may be a URL or an opaque
     * code). Some brands return an image URL; others (e.g. convenience-store QR brands) return an opaque
     * numeric code with no URL structure. Populated asynchronously shortly after token/charge creation —
     * `null` until then.
     *
     * @maps qr_image_url
     */
    public function setQrImageUrl(?string $qrImageUrl): void
    {
        $this->qrImageUrl = $qrImageUrl;
    }

    /**
     * Returns Brand.
     * The QR-MPM brand this code was generated for.
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
     * The QR-MPM brand this code was generated for.
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand['value'] = $brand;
    }

    /**
     * Unsets Brand.
     * The QR-MPM brand this code was generated for.
     */
    public function unsetBrand(): void
    {
        $this->brand = [];
    }

    /**
     * Converts the TokenResponseQrMerchantData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponseQrMerchantData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponseQrMerchantData',
            [
                'qrImageUrl' => $this->qrImageUrl,
                'brand' => $this->getBrand(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['qr_image_url', 'brand'];

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
        $json['qr_image_url'] = $this->qrImageUrl;
        if (!empty($this->brand)) {
            $json['brand']    = $this->brand['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
