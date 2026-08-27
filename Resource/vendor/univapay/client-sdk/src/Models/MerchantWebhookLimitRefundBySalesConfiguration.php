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
 * Refund-limiting configuration based on sales history.
 */
class MerchantWebhookLimitRefundBySalesConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $period = [];

    /**
     * @var array
     */
    private $rollingWindow = [];

    /**
     * Returns Enabled.
     * Enables sales-based refund limit checks.
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
     * Enables sales-based refund limit checks.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables sales-based refund limit checks.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Period.
     * Sales aggregation period used to evaluate refund limits.
     */
    public function getPeriod(): ?string
    {
        if (count($this->period) == 0) {
            return null;
        }
        return $this->period['value'];
    }

    /**
     * Sets Period.
     * Sales aggregation period used to evaluate refund limits.
     *
     * @maps period
     */
    public function setPeriod(?string $period): void
    {
        $this->period['value'] = $period;
    }

    /**
     * Unsets Period.
     * Sales aggregation period used to evaluate refund limits.
     */
    public function unsetPeriod(): void
    {
        $this->period = [];
    }

    /**
     * Returns Rolling Window.
     * Uses a rolling window instead of fixed calendar periods.
     */
    public function getRollingWindow(): ?bool
    {
        if (count($this->rollingWindow) == 0) {
            return null;
        }
        return $this->rollingWindow['value'];
    }

    /**
     * Sets Rolling Window.
     * Uses a rolling window instead of fixed calendar periods.
     *
     * @maps rolling_window
     */
    public function setRollingWindow(?bool $rollingWindow): void
    {
        $this->rollingWindow['value'] = $rollingWindow;
    }

    /**
     * Unsets Rolling Window.
     * Uses a rolling window instead of fixed calendar periods.
     */
    public function unsetRollingWindow(): void
    {
        $this->rollingWindow = [];
    }

    /**
     * Converts the MerchantWebhookLimitRefundBySalesConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookLimitRefundBySalesConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookLimitRefundBySalesConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'period' => $this->getPeriod(),
                'rollingWindow' => $this->getRollingWindow(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'period', 'rolling_window'];

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
            $json['enabled']        = $this->enabled['value'];
        }
        if (!empty($this->period)) {
            $json['period']         = $this->period['value'];
        }
        if (!empty($this->rollingWindow)) {
            $json['rolling_window'] = $this->rollingWindow['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
