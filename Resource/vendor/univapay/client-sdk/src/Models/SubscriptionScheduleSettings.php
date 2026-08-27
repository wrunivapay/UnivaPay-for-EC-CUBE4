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
use UnivaPay\Utils\DateTimeHelper;

/**
 * Schedule settings applied to a subscription.
 */
class SubscriptionScheduleSettings implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $startOn;

    /**
     * @var string|null
     */
    private $zoneId;

    /**
     * @var bool|null
     */
    private $preserveEndOfMonth;

    /**
     * @var string|null
     */
    private $retryInterval;

    /**
     * @var string|null
     */
    private $terminationMode = SubscriptionTerminationMode::IMMEDIATE;

    /**
     * Returns Start On.
     * Date when the recurring schedule starts (YYYY-MM-DD).
     */
    public function getStartOn(): ?\DateTime
    {
        return $this->startOn;
    }

    /**
     * Sets Start On.
     * Date when the recurring schedule starts (YYYY-MM-DD).
     *
     * @maps start_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setStartOn(?\DateTime $startOn): void
    {
        $this->startOn = $startOn;
    }

    /**
     * Returns Zone Id.
     * IANA Timezone ID.
     */
    public function getZoneId(): ?string
    {
        return $this->zoneId;
    }

    /**
     * Sets Zone Id.
     * IANA Timezone ID.
     *
     * @maps zone_id
     */
    public function setZoneId(?string $zoneId): void
    {
        $this->zoneId = $zoneId;
    }

    /**
     * Returns Preserve End of Month.
     * If true, subsequent charges will always occur on the last day of the month.
     */
    public function getPreserveEndOfMonth(): ?bool
    {
        return $this->preserveEndOfMonth;
    }

    /**
     * Sets Preserve End of Month.
     * If true, subsequent charges will always occur on the last day of the month.
     *
     * @maps preserve_end_of_month
     */
    public function setPreserveEndOfMonth(?bool $preserveEndOfMonth): void
    {
        $this->preserveEndOfMonth = $preserveEndOfMonth;
    }

    /**
     * Returns Retry Interval.
     * ISO-8601 Duration for retry interval if payment fails (e.g., P5D).
     */
    public function getRetryInterval(): ?string
    {
        return $this->retryInterval;
    }

    /**
     * Sets Retry Interval.
     * ISO-8601 Duration for retry interval if payment fails (e.g., P5D).
     *
     * @maps retry_interval
     */
    public function setRetryInterval(?string $retryInterval): void
    {
        $this->retryInterval = $retryInterval;
    }

    /**
     * Returns Termination Mode.
     * Subscription Termination Mode schema.
     */
    public function getTerminationMode(): ?string
    {
        return $this->terminationMode;
    }

    /**
     * Sets Termination Mode.
     * Subscription Termination Mode schema.
     *
     * @maps termination_mode
     * @factory \UnivaPay\Models\SubscriptionTerminationMode::checkValue
     */
    public function setTerminationMode(?string $terminationMode): void
    {
        $this->terminationMode = $terminationMode;
    }

    /**
     * Converts the SubscriptionScheduleSettings object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionScheduleSettings object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionScheduleSettings',
            [
                'startOn' => $this->startOn,
                'zoneId' => $this->zoneId,
                'preserveEndOfMonth' => $this->preserveEndOfMonth,
                'retryInterval' => $this->retryInterval,
                'terminationMode' => $this->terminationMode,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['start_on', 'zone_id', 'preserve_end_of_month', 'retry_interval', 'termination_mode'];

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
        if (isset($this->startOn)) {
            $json['start_on']              = DateTimeHelper::toSimpleDate($this->startOn);
        }
        if (isset($this->zoneId)) {
            $json['zone_id']               = $this->zoneId;
        }
        if (isset($this->preserveEndOfMonth)) {
            $json['preserve_end_of_month'] = $this->preserveEndOfMonth;
        }
        if (isset($this->retryInterval)) {
            $json['retry_interval']        = $this->retryInterval;
        }
        if (isset($this->terminationMode)) {
            $json['termination_mode']      = SubscriptionTerminationMode::checkValue($this->terminationMode);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
