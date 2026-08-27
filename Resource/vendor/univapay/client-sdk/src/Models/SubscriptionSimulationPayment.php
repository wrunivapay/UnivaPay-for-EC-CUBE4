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
 * A single scheduled payment produced by the subscription plan simulation.
 */
class SubscriptionSimulationPayment implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $dueDate;

    /**
     * @var string|null
     */
    private $zoneId;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var bool|null
     */
    private $isPaid;

    /**
     * @var bool|null
     */
    private $isLastPayment;

    /**
     * @var array
     */
    private $successfulPaymentDate = [];

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
     * Scheduled due date for this simulated payment (YYYY-MM-DD).
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     * Scheduled due date for this simulated payment (YYYY-MM-DD).
     *
     * @maps due_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDueDate(?\DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns Zone Id.
     * IANA timezone identifier used to resolve the due date.
     */
    public function getZoneId(): ?string
    {
        return $this->zoneId;
    }

    /**
     * Sets Zone Id.
     * IANA timezone identifier used to resolve the due date.
     *
     * @maps zone_id
     */
    public function setZoneId(?string $zoneId): void
    {
        $this->zoneId = $zoneId;
    }

    /**
     * Returns Amount.
     * Amount to be charged on this cycle, in the smallest currency unit.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount to be charged on this cycle, in the smallest currency unit.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
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
     * Returns Is Paid.
     * Always `false` for simulated payments — no real payment has been made.
     */
    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    /**
     * Sets Is Paid.
     * Always `false` for simulated payments — no real payment has been made.
     *
     * @maps is_paid
     */
    public function setIsPaid(?bool $isPaid): void
    {
        $this->isPaid = $isPaid;
    }

    /**
     * Returns Is Last Payment.
     * Whether this is the final payment in the simulated schedule.
     */
    public function getIsLastPayment(): ?bool
    {
        return $this->isLastPayment;
    }

    /**
     * Sets Is Last Payment.
     * Whether this is the final payment in the simulated schedule.
     *
     * @maps is_last_payment
     */
    public function setIsLastPayment(?bool $isLastPayment): void
    {
        $this->isLastPayment = $isLastPayment;
    }

    /**
     * Returns Successful Payment Date.
     * Always `null` for simulated payments — populated only once a real payment settles.
     */
    public function getSuccessfulPaymentDate(): ?\DateTime
    {
        if (count($this->successfulPaymentDate) == 0) {
            return null;
        }
        return $this->successfulPaymentDate['value'];
    }

    /**
     * Sets Successful Payment Date.
     * Always `null` for simulated payments — populated only once a real payment settles.
     *
     * @maps successful_payment_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setSuccessfulPaymentDate(?\DateTime $successfulPaymentDate): void
    {
        $this->successfulPaymentDate['value'] = $successfulPaymentDate;
    }

    /**
     * Unsets Successful Payment Date.
     * Always `null` for simulated payments — populated only once a real payment settles.
     */
    public function unsetSuccessfulPaymentDate(): void
    {
        $this->successfulPaymentDate = [];
    }

    /**
     * Returns Terminate With Status.
     * The status the subscription would transition to on this payment's due date, if a termination is
     * scheduled. `null` when no termination applies.
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
     * The status the subscription would transition to on this payment's due date, if a termination is
     * scheduled. `null` when no termination applies.
     *
     * @maps terminate_with_status
     * @factory \UnivaPay\Models\TerminateWithStatus::checkValue
     */
    public function setTerminateWithStatus(?string $terminateWithStatus): void
    {
        $this->terminateWithStatus['value'] = $terminateWithStatus;
    }

    /**
     * Unsets Terminate With Status.
     * The status the subscription would transition to on this payment's due date, if a termination is
     * scheduled. `null` when no termination applies.
     */
    public function unsetTerminateWithStatus(): void
    {
        $this->terminateWithStatus = [];
    }

    /**
     * Returns Retry Interval.
     * ISO-8601 Duration for the retry interval applied if this payment fails (e.g., P5D). `null` if no
     * retry interval is configured.
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
     * ISO-8601 Duration for the retry interval applied if this payment fails (e.g., P5D). `null` if no
     * retry interval is configured.
     *
     * @maps retry_interval
     */
    public function setRetryInterval(?string $retryInterval): void
    {
        $this->retryInterval['value'] = $retryInterval;
    }

    /**
     * Unsets Retry Interval.
     * ISO-8601 Duration for the retry interval applied if this payment fails (e.g., P5D). `null` if no
     * retry interval is configured.
     */
    public function unsetRetryInterval(): void
    {
        $this->retryInterval = [];
    }

    /**
     * Converts the SubscriptionSimulationPayment object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionSimulationPayment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionSimulationPayment',
            [
                'dueDate' => $this->dueDate,
                'zoneId' => $this->zoneId,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'isPaid' => $this->isPaid,
                'isLastPayment' => $this->isLastPayment,
                'successfulPaymentDate' => $this->getSuccessfulPaymentDate(),
                'terminateWithStatus' => $this->getTerminateWithStatus(),
                'retryInterval' => $this->getRetryInterval(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'due_date',
        'zone_id',
        'amount',
        'currency',
        'is_paid',
        'is_last_payment',
        'successful_payment_date',
        'terminate_with_status',
        'retry_interval'
    ];

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
            $json['due_date']                = DateTimeHelper::toSimpleDate($this->dueDate);
        }
        if (isset($this->zoneId)) {
            $json['zone_id']                 = $this->zoneId;
        }
        if (isset($this->amount)) {
            $json['amount']                  = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']                = $this->currency;
        }
        if (isset($this->isPaid)) {
            $json['is_paid']                 = $this->isPaid;
        }
        if (isset($this->isLastPayment)) {
            $json['is_last_payment']         = $this->isLastPayment;
        }
        if (!empty($this->successfulPaymentDate)) {
            $json['successful_payment_date'] = DateTimeHelper::toSimpleDate($this->successfulPaymentDate['value']);
        }
        if (!empty($this->terminateWithStatus)) {
            $json['terminate_with_status']   = TerminateWithStatus::checkValue($this->terminateWithStatus['value']);
        }
        if (!empty($this->retryInterval)) {
            $json['retry_interval']          = $this->retryInterval['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
