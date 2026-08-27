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
 * Request body for updating a scheduled payment. All fields are optional. Omitted fields are left
 * unchanged.
 */
class SubscriptionPatchPaymentRequest implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $dueDate;

    /**
     * @var bool|null
     */
    private $isPaid;

    /**
     * @var array
     */
    private $terminateWithStatus = [];

    /**
     * @var array
     */
    private $retryInterval = [];

    /**
     * Returns Due Date.
     * New due date for this payment (YYYY-MM-DD).  Only available to merchants with permission to edit
     * payment dates.
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     * New due date for this payment (YYYY-MM-DD).  Only available to merchants with permission to edit
     * payment dates.
     *
     * @maps due_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDueDate(?\DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns Is Paid.
     * Mark this payment as paid. Setting to `true` will trigger scheduling  of the next payment in the
     * cycle.
     */
    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    /**
     * Sets Is Paid.
     * Mark this payment as paid. Setting to `true` will trigger scheduling  of the next payment in the
     * cycle.
     *
     * @maps is_paid
     */
    public function setIsPaid(?bool $isPaid): void
    {
        $this->isPaid = $isPaid;
    }

    /**
     * Returns Terminate With Status.
     * Schedule a status transition on a payment's due date. Set to `suspended` or `canceled` to schedule
     * termination. Send `null` to cancel a previously scheduled transition.
     */
    public function getTerminateWithStatus(): ?string
    {
        if (count($this->terminateWithStatus) == 0) {
            return null;
        }
        return $this->terminateWithStatus['value'];
    }

    /**
     * Sets Terminate With Status.
     * Schedule a status transition on a payment's due date. Set to `suspended` or `canceled` to schedule
     * termination. Send `null` to cancel a previously scheduled transition.
     *
     * @maps terminate_with_status
     * @factory \UnivaPay\Models\SubscriptionTerminateWithStatus::checkValue
     */
    public function setTerminateWithStatus(?string $terminateWithStatus): void
    {
        $this->terminateWithStatus['value'] = $terminateWithStatus;
    }

    /**
     * Unsets Terminate With Status.
     * Schedule a status transition on a payment's due date. Set to `suspended` or `canceled` to schedule
     * termination. Send `null` to cancel a previously scheduled transition.
     */
    public function unsetTerminateWithStatus(): void
    {
        $this->terminateWithStatus = [];
    }

    /**
     * Returns Retry Interval.
     * ISO-8601 Duration override for the retry interval on a scheduled payment (for example `P3D`). Send
     * `null` to clear.
     */
    public function getRetryInterval(): ?string
    {
        if (count($this->retryInterval) == 0) {
            return null;
        }
        return $this->retryInterval['value'];
    }

    /**
     * Sets Retry Interval.
     * ISO-8601 Duration override for the retry interval on a scheduled payment (for example `P3D`). Send
     * `null` to clear.
     *
     * @maps retry_interval
     */
    public function setRetryInterval(?string $retryInterval): void
    {
        $this->retryInterval['value'] = $retryInterval;
    }

    /**
     * Unsets Retry Interval.
     * ISO-8601 Duration override for the retry interval on a scheduled payment (for example `P3D`). Send
     * `null` to clear.
     */
    public function unsetRetryInterval(): void
    {
        $this->retryInterval = [];
    }

    /**
     * Converts the SubscriptionPatchPaymentRequest object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionPatchPaymentRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionPatchPaymentRequest',
            [
                'dueDate' => $this->dueDate,
                'isPaid' => $this->isPaid,
                'terminateWithStatus' => $this->getTerminateWithStatus(),
                'retryInterval' => $this->getRetryInterval(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['due_date', 'is_paid', 'terminate_with_status', 'retry_interval'];

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
        if (isset($this->dueDate)) {
            $json['due_date']              = DateTimeHelper::toSimpleDate($this->dueDate);
        }
        if (isset($this->isPaid)) {
            $json['is_paid']               = $this->isPaid;
        }
        if (!empty($this->terminateWithStatus)) {
            $json['terminate_with_status'] =
                SubscriptionTerminateWithStatus::checkValue(
                    $this->terminateWithStatus['value']
                );
        }
        if (!empty($this->retryInterval)) {
            $json['retry_interval']        = $this->retryInterval['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
