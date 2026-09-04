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
 * CVV re-confirmation policy applied to recurring card charges (subscriptions and tokens with
 * recurring privilege).
 */
class RecurringCvvConfirmation implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var array
     */
    private $threshold = [];

    /**
     * Returns Enabled.
     * Whether CVV re-confirmation is required for recurring card charges. Resolves to `false` when not
     * configured.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Whether CVV re-confirmation is required for recurring card charges. Resolves to `false` when not
     * configured.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Threshold.
     * Amount thresholds above which CVV re-confirmation is required. `null` when no threshold is
     * configured.
     *
     * @return CheckoutMoneyAmount[]|null
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
     * Amount thresholds above which CVV re-confirmation is required. `null` when no threshold is
     * configured.
     *
     * @maps threshold
     *
     * @param CheckoutMoneyAmount[]|null $threshold
     */
    public function setThreshold(?array $threshold): void
    {
        $this->threshold['value'] = $threshold;
    }

    /**
     * Unsets Threshold.
     * Amount thresholds above which CVV re-confirmation is required. `null` when no threshold is
     * configured.
     */
    public function unsetThreshold(): void
    {
        $this->threshold = [];
    }

    /**
     * Converts the RecurringCvvConfirmation object to a human-readable string representation.
     *
     * @return string The string representation of the RecurringCvvConfirmation object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RecurringCvvConfirmation',
            [
                'enabled' => $this->enabled,
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
        if (isset($this->enabled)) {
            $json['enabled']   = $this->enabled;
        }
        if (!empty($this->threshold)) {
            $json['threshold'] = $this->threshold['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
