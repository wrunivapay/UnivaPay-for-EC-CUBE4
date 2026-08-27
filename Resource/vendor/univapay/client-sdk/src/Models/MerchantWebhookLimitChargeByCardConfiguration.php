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
 * Per-card velocity limit configuration.
 */
class MerchantWebhookLimitChargeByCardConfiguration implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $quantityOfCharges;

    /**
     * @var string|null
     */
    private $durationWindow;

    /**
     * Returns Quantity of Charges.
     * Maximum number of charges allowed in the time window.
     */
    public function getQuantityOfCharges(): ?int
    {
        return $this->quantityOfCharges;
    }

    /**
     * Sets Quantity of Charges.
     * Maximum number of charges allowed in the time window.
     *
     * @maps quantity_of_charges
     */
    public function setQuantityOfCharges(?int $quantityOfCharges): void
    {
        $this->quantityOfCharges = $quantityOfCharges;
    }

    /**
     * Returns Duration Window.
     * ISO-8601 duration for the rolling window.
     */
    public function getDurationWindow(): ?string
    {
        return $this->durationWindow;
    }

    /**
     * Sets Duration Window.
     * ISO-8601 duration for the rolling window.
     *
     * @maps duration_window
     */
    public function setDurationWindow(?string $durationWindow): void
    {
        $this->durationWindow = $durationWindow;
    }

    /**
     * Converts the MerchantWebhookLimitChargeByCardConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookLimitChargeByCardConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookLimitChargeByCardConfiguration',
            [
                'quantityOfCharges' => $this->quantityOfCharges,
                'durationWindow' => $this->durationWindow,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['quantity_of_charges', 'duration_window'];

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
        if (isset($this->quantityOfCharges)) {
            $json['quantity_of_charges'] = $this->quantityOfCharges;
        }
        if (isset($this->durationWindow)) {
            $json['duration_window']     = $this->durationWindow;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
