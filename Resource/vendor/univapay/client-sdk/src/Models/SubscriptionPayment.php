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
 * Represents a single scheduled or historical payment for a subscription.
 */
class SubscriptionPayment implements \JsonSerializable
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
     * Indicates whether this specific payment cycle has been successfully charged.
     */
    public function getIsPaid(): ?bool
    {
        return $this->isPaid;
    }

    /**
     * Sets Is Paid.
     * Indicates whether this specific payment cycle has been successfully charged.
     *
     * @maps is_paid
     */
    public function setIsPaid(?bool $isPaid): void
    {
        $this->isPaid = $isPaid;
    }

    /**
     * Returns Is Last Payment.
     * Indicates if this is the final payment in a limited-cycle subscription.
     */
    public function getIsLastPayment(): ?bool
    {
        return $this->isLastPayment;
    }

    /**
     * Sets Is Last Payment.
     * Indicates if this is the final payment in a limited-cycle subscription.
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
     * Converts the SubscriptionPayment object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionPayment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionPayment',
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
        'updated_on'
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
            $json['id']               = $this->id;
        }
        if (isset($this->dueDate)) {
            $json['due_date']         = DateTimeHelper::toSimpleDate($this->dueDate);
        }
        if (isset($this->zoneId)) {
            $json['zone_id']          = $this->zoneId;
        }
        if (isset($this->amount)) {
            $json['amount']           = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']         = $this->currency;
        }
        if (isset($this->amountFormatted)) {
            $json['amount_formatted'] = $this->amountFormatted;
        }
        if (isset($this->isPaid)) {
            $json['is_paid']          = $this->isPaid;
        }
        if (isset($this->isLastPayment)) {
            $json['is_last_payment']  = $this->isLastPayment;
        }
        if (isset($this->createdOn)) {
            $json['created_on']       = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->updatedOn)) {
            $json['updated_on']       = DateTimeHelper::toRfc3339DateTime($this->updatedOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
