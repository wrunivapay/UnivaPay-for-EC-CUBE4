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
 * Token Create Qr Scan Data schema.
 */
class TokenCreateQrScanData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $scannedQr;

    /**
     * @param string $scannedQr
     */
    public function __construct(string $scannedQr)
    {
        $this->scannedQr = $scannedQr;
    }

    /**
     * Returns Scanned Qr.
     * The QR/barcode payload scanned from the customer's payment app (Customer-Presented Mode). Only valid
     * when `type` is `one_time` — the server rejects `subscription`/`recurring` token types for this
     * payment type.
     */
    public function getScannedQr(): string
    {
        return $this->scannedQr;
    }

    /**
     * Sets Scanned Qr.
     * The QR/barcode payload scanned from the customer's payment app (Customer-Presented Mode). Only valid
     * when `type` is `one_time` — the server rejects `subscription`/`recurring` token types for this
     * payment type.
     *
     * @required
     * @maps scanned_qr
     */
    public function setScannedQr(string $scannedQr): void
    {
        $this->scannedQr = $scannedQr;
    }

    /**
     * Converts the TokenCreateQrScanData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenCreateQrScanData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenCreateQrScanData',
            ['scannedQr' => $this->scannedQr, 'additionalProperties' => $this->additionalProperties]
        );
    }

    protected $propertyNames = ['scanned_qr'];

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
        $json['scanned_qr'] = $this->scannedQr;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
