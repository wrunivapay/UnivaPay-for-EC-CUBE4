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
 * QR-scan (CPM) payment settings applied to checkout.
 */
class CheckoutQrScanConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var array
     */
    private $forbiddenQrScanGateways = [];

    /**
     * Returns Enabled.
     * Whether QR-scan payments are enabled.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Whether QR-scan payments are enabled.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Forbidden Qr Scan Gateways.
     * QR-scan gateways disabled for the merchant. Common values include `alipay`, `alipay_plus`, `pay_pay`,
     * `we_chat`, `univapay`, and `test`. `null` when no gateway is forbidden.
     *
     * @return string[]|null
     */
    public function getForbiddenQrScanGateways(): ?array
    {
        if (count($this->forbiddenQrScanGateways) == 0) {
            return null;
        }
        return $this->forbiddenQrScanGateways['value'];
    }

    /**
     * Sets Forbidden Qr Scan Gateways.
     * QR-scan gateways disabled for the merchant. Common values include `alipay`, `alipay_plus`, `pay_pay`,
     * `we_chat`, `univapay`, and `test`. `null` when no gateway is forbidden.
     *
     * @maps forbidden_qr_scan_gateways
     *
     * @param string[]|null $forbiddenQrScanGateways
     */
    public function setForbiddenQrScanGateways(?array $forbiddenQrScanGateways): void
    {
        $this->forbiddenQrScanGateways['value'] = $forbiddenQrScanGateways;
    }

    /**
     * Unsets Forbidden Qr Scan Gateways.
     * QR-scan gateways disabled for the merchant. Common values include `alipay`, `alipay_plus`, `pay_pay`,
     * `we_chat`, `univapay`, and `test`. `null` when no gateway is forbidden.
     */
    public function unsetForbiddenQrScanGateways(): void
    {
        $this->forbiddenQrScanGateways = [];
    }

    /**
     * Converts the CheckoutQrScanConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutQrScanConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutQrScanConfiguration',
            [
                'enabled' => $this->enabled,
                'forbiddenQrScanGateways' => $this->getForbiddenQrScanGateways(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'forbidden_qr_scan_gateways'];

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
        if (isset($this->enabled)) {
            $json['enabled']                    = $this->enabled;
        }
        if (!empty($this->forbiddenQrScanGateways)) {
            $json['forbidden_qr_scan_gateways'] = $this->forbiddenQrScanGateways['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
