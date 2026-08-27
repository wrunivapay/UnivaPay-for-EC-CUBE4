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
 * IP restriction policy applied after repeated failed charges.
 */
class RestrictIpAfterFailedChargeConfig implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $count = [];

    /**
     * @var array
     */
    private $cooldown = [];

    /**
     * Returns Enabled.
     * Enables temporary IP restrictions after repeated failures.
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
     * Enables temporary IP restrictions after repeated failures.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables temporary IP restrictions after repeated failures.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Count.
     * Number of failed charges allowed before restriction starts.
     */
    public function getCount(): ?int
    {
        if (count($this->count) == 0) {
            return null;
        }
        return $this->count['value'];
    }

    /**
     * Sets Count.
     * Number of failed charges allowed before restriction starts.
     *
     * @maps count
     */
    public function setCount(?int $count): void
    {
        $this->count['value'] = $count;
    }

    /**
     * Unsets Count.
     * Number of failed charges allowed before restriction starts.
     */
    public function unsetCount(): void
    {
        $this->count = [];
    }

    /**
     * Returns Cooldown.
     * ISO-8601 duration that the IP restriction remains active.
     */
    public function getCooldown(): ?string
    {
        if (count($this->cooldown) == 0) {
            return null;
        }
        return $this->cooldown['value'];
    }

    /**
     * Sets Cooldown.
     * ISO-8601 duration that the IP restriction remains active.
     *
     * @maps cooldown
     */
    public function setCooldown(?string $cooldown): void
    {
        $this->cooldown['value'] = $cooldown;
    }

    /**
     * Unsets Cooldown.
     * ISO-8601 duration that the IP restriction remains active.
     */
    public function unsetCooldown(): void
    {
        $this->cooldown = [];
    }

    /**
     * Converts the RestrictIpAfterFailedChargeConfig object to a human-readable string representation.
     *
     * @return string The string representation of the RestrictIpAfterFailedChargeConfig object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RestrictIpAfterFailedChargeConfig',
            [
                'enabled' => $this->getEnabled(),
                'count' => $this->getCount(),
                'cooldown' => $this->getCooldown(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['enabled', 'count', 'cooldown'];

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
            $json['enabled']  = $this->enabled['value'];
        }
        if (!empty($this->count)) {
            $json['count']    = $this->count['value'];
        }
        if (!empty($this->cooldown)) {
            $json['cooldown'] = $this->cooldown['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
