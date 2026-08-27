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
 * CVV confirmation rules for recurring token charges.
 */
class MerchantWebhookRecurringCvvConfirmationConfig implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $threshold = [];

    /**
     * Returns Enabled.
     * Enables recurring-charge CVV confirmation checks.
     */
    public function getEnabled(): ?bool
    {
        if (count($this->enabled) == 0) {
            return null;
        }
        return $this->enabled['value'];
    }

    /**
     * Sets Enabled.
     * Enables recurring-charge CVV confirmation checks.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables recurring-charge CVV confirmation checks.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Threshold.
     * Amount thresholds that trigger CVV confirmation.
     *
     * @return MerchantWebhookMoneyAmount[]|null
     */
    public function getThreshold(): ?array
    {
        if (count($this->threshold) == 0) {
            return null;
        }
        return $this->threshold['value'];
    }

    /**
     * Sets Threshold.
     * Amount thresholds that trigger CVV confirmation.
     *
     * @maps threshold
     *
     * @param MerchantWebhookMoneyAmount[]|null $threshold
     */
    public function setThreshold(?array $threshold): void
    {
        $this->threshold['value'] = $threshold;
    }

    /**
     * Unsets Threshold.
     * Amount thresholds that trigger CVV confirmation.
     */
    public function unsetThreshold(): void
    {
        $this->threshold = [];
    }

    /**
     * Converts the MerchantWebhookRecurringCvvConfirmationConfig object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookRecurringCvvConfirmationConfig object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookRecurringCvvConfirmationConfig',
            [
                'enabled' => $this->getEnabled(),
                'threshold' => $this->getThreshold(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'threshold'];

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
        if (!empty($this->enabled)) {
            $json['enabled']   = $this->enabled['value'];
        }
        if (!empty($this->threshold)) {
            $json['threshold'] = $this->threshold['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
