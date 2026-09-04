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
 * Schedule settings that can be updated on a subscription.
 */
class SubscriptionUpdateScheduleSettings implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $terminationMode = SubscriptionTerminationMode::IMMEDIATE;

    /**
     * @var \DateTime|null
     */
    private $startOn;

    /**
     * @var bool|null
     */
    private $preserveEndOfMonth;

    /**
     * @var string|null
     */
    private $retryInterval;

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
     * Returns Start On.
     * Subscription start date (YYYY-MM-DD). Used to change the first actual charge date for subscriptions
     * that initially only registered a payment method. Must be in the future; only available before the
     * subscription has more than one paid payment.
     */
    public function getStartOn(): ?\DateTime
    {
        return $this->startOn;
    }

    /**
     * Sets Start On.
     * Subscription start date (YYYY-MM-DD). Used to change the first actual charge date for subscriptions
     * that initially only registered a payment method. Must be in the future; only available before the
     * subscription has more than one paid payment.
     *
     * @maps start_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setStartOn(?\DateTime $startOn): void
    {
        $this->startOn = $startOn;
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
     * ISO-8601 Duration for retry interval if payment fails  (e.g., P3D for 3 days, PT48H for 48 hours).
     */
    public function getRetryInterval(): ?string
    {
        return $this->retryInterval;
    }

    /**
     * Sets Retry Interval.
     * ISO-8601 Duration for retry interval if payment fails  (e.g., P3D for 3 days, PT48H for 48 hours).
     *
     * @maps retry_interval
     */
    public function setRetryInterval(?string $retryInterval): void
    {
        $this->retryInterval = $retryInterval;
    }

    /**
     * Converts the SubscriptionUpdateScheduleSettings object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionUpdateScheduleSettings object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionUpdateScheduleSettings',
            [
                'terminationMode' => $this->terminationMode,
                'startOn' => $this->startOn,
                'preserveEndOfMonth' => $this->preserveEndOfMonth,
                'retryInterval' => $this->retryInterval,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['termination_mode', 'start_on', 'preserve_end_of_month', 'retry_interval'];

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
        if (isset($this->terminationMode)) {
            $json['termination_mode']      = SubscriptionTerminationMode::checkValue($this->terminationMode);
        }
        if (isset($this->startOn)) {
            $json['start_on']              = DateTimeHelper::toSimpleDate($this->startOn);
        }
        if (isset($this->preserveEndOfMonth)) {
            $json['preserve_end_of_month'] = $this->preserveEndOfMonth;
        }
        if (isset($this->retryInterval)) {
            $json['retry_interval']        = $this->retryInterval;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
