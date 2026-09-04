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
 * Request payload for capturing an authorized charge. Both fields are optional; omit the entire body
 * to capture the full outstanding amount.
 */
class ChargeCaptureRequest implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * Returns Amount.
     * The amount to capture. Must be less than or equal to the authorized amount. If omitted, the full
     * outstanding authorized amount is captured.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The amount to capture. Must be less than or equal to the authorized amount. If omitted, the full
     * outstanding authorized amount is captured.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code. Must exactly match the currency used during authorization. If omitted,
     * defaults to the currency originally requested on the charge.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code. Must exactly match the currency used during authorization. If omitted,
     * defaults to the currency originally requested on the charge.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Converts the ChargeCaptureRequest object to a human-readable string representation.
     *
     * @return string The string representation of the ChargeCaptureRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChargeCaptureRequest',
            [
                'amount' => $this->amount,
                'currency' => $this->currency,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['amount', 'currency'];

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
        if (isset($this->amount)) {
            $json['amount']   = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency'] = $this->currency;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
