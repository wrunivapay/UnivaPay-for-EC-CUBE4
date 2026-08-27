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
use UnivaPay\Utils\NumberHelper;

/**
 * Next scheduled payment details for a subscription.
 */
class SubscriptionNextPayment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

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
     * @var float|null
     */
    private $amountFormatted;

    /**
     * @var bool|null
     */
    private $isPaid;

    /**
     * @var bool|null
     */
    private $isLastPayment;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     */
    private $updatedOn;

    /**
     * @var array
     */
    private $retryDate = [];

    /**
     * @var array
     */
    private $terminateWithStatus = [];

    /**
     * Returns Id.
     * Unique identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Due Date.
     * Scheduled due date.
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     * Scheduled due date.
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
     * IANA timezone identifier.
     */
    public function getZoneId(): ?string
    {
        return $this->zoneId;
    }

    /**
     * Sets Zone Id.
     * IANA timezone identifier.
     *
     * @maps zone_id
     */
    public function setZoneId(?string $zoneId): void
    {
        $this->zoneId = $zoneId;
    }

    /**
     * Returns Amount.
     * Amount in the smallest currency unit.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount in the smallest currency unit.
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
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setAmountFormatted(?float $amountFormatted): void
    {
        $this->amountFormatted = $amountFormatted;
    }

    /**
     * Returns Is Paid.
     * Whether the payment has been paid.
     */
    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    /**
     * Sets Is Paid.
     * Whether the payment has been paid.
     *
     * @maps is_paid
     */
    public function setIsPaid(?bool $isPaid): void
    {
        $this->isPaid = $isPaid;
    }

    /**
     * Returns Is Last Payment.
     * Whether this is the final payment in the schedule.
     */
    public function getIsLastPayment(): ?bool
    {
        return $this->isLastPayment;
    }

    /**
     * Sets Is Last Payment.
     * Whether this is the final payment in the schedule.
     *
     * @maps is_last_payment
     */
    public function setIsLastPayment(?bool $isLastPayment): void
    {
        $this->isLastPayment = $isLastPayment;
    }

    /**
     * Returns Created On.
     * Timestamp when the resource was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the resource was created.
     *
     * @maps created_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Updated On.
     * Timestamp when the resource was last updated.
     */
    public function getUpdatedOn(): ?\DateTime
    {
        return $this->updatedOn;
    }

    /**
     * Sets Updated On.
     * Timestamp when the resource was last updated.
     *
     * @maps updated_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedOn(?\DateTime $updatedOn): void
    {
        $this->updatedOn = $updatedOn;
    }

    /**
     * Returns Retry Date.
     * Scheduled retry date.
     */
    public function getRetryDate(): ?\DateTime
    {
        if (count($this->retryDate) == 0) {
            return null;
        }
        return $this->retryDate['value'];
    }

    /**
     * Sets Retry Date.
     * Scheduled retry date.
     *
     * @maps retry_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setRetryDate(?\DateTime $retryDate): void
    {
        $this->retryDate['value'] = $retryDate;
    }

    /**
     * Unsets Retry Date.
     * Scheduled retry date.
     */
    public function unsetRetryDate(): void
    {
        $this->retryDate = [];
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
     * Converts the SubscriptionNextPayment object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionNextPayment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionNextPayment',
            [
                'id' => $this->id,
                'dueDate' => $this->dueDate,
                'zoneId' => $this->zoneId,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'amountFormatted' => $this->amountFormatted,
                'isPaid' => $this->isPaid,
                'isLastPayment' => $this->isLastPayment,
                'createdOn' => $this->createdOn,
                'updatedOn' => $this->updatedOn,
                'retryDate' => $this->getRetryDate(),
                'terminateWithStatus' => $this->getTerminateWithStatus(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'due_date',
        'zone_id',
        'amount',
        'currency',
        'amount_formatted',
        'is_paid',
        'is_last_payment',
        'created_on',
        'updated_on',
        'retry_date',
        'terminate_with_status'
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
        if (isset($this->id)) {
            $json['id']                    = $this->id;
        }
        if (isset($this->dueDate)) {
            $json['due_date']              = DateTimeHelper::toSimpleDate($this->dueDate);
        }
        if (isset($this->zoneId)) {
            $json['zone_id']               = $this->zoneId;
        }
        if (isset($this->amount)) {
            $json['amount']                = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']              = $this->currency;
        }
        if (isset($this->amountFormatted)) {
            $json['amount_formatted']      = $this->amountFormatted;
        }
        if (isset($this->isPaid)) {
            $json['is_paid']               = $this->isPaid;
        }
        if (isset($this->isLastPayment)) {
            $json['is_last_payment']       = $this->isLastPayment;
        }
        if (isset($this->createdOn)) {
            $json['created_on']            = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->updatedOn)) {
            $json['updated_on']            = DateTimeHelper::toRfc3339DateTime($this->updatedOn);
        }
        if (!empty($this->retryDate)) {
            $json['retry_date']            = DateTimeHelper::toSimpleDate($this->retryDate['value']);
        }
        if (!empty($this->terminateWithStatus)) {
            $json['terminate_with_status'] =
                SubscriptionTerminateWithStatus::checkValue(
                    $this->terminateWithStatus['value']
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
