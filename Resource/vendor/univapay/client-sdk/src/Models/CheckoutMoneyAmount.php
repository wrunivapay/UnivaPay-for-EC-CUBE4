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
 * Monetary amount used by checkout configuration limits and thresholds.
 */
class CheckoutMoneyAmount implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var float|null
     */
    private $amountFormatted;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * Returns Amount.
     * Amount in the smallest unit of the currency.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount in the smallest unit of the currency.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Amount Formatted.
     * Amount formatted for display.
     */
    public function getAmountFormatted(): ?float
    {
        return $this->amountFormatted;
    }

    /**
     * Sets Amount Formatted.
     * Amount formatted for display.
     *
     * @maps amount_formatted
     */
    public function setAmountFormatted(?float $amountFormatted): void
    {
        $this->amountFormatted = $amountFormatted;
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Converts the CheckoutMoneyAmount object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutMoneyAmount object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutMoneyAmount',
            [
                'amount' => $this->amount,
                'amountFormatted' => $this->amountFormatted,
                'currency' => $this->currency,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['amount', 'amount_formatted', 'currency'];

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
            $json['amount']           = $this->amount;
        }
        if (isset($this->amountFormatted)) {
            $json['amount_formatted'] = $this->amountFormatted;
        }
        if (isset($this->currency)) {
            $json['currency']         = $this->currency;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
