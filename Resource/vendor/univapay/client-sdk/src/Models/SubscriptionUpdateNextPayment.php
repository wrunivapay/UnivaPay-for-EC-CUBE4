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
 * Fields that can be updated on the next scheduled payment.
 */
class SubscriptionUpdateNextPayment implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    private $dueDate;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var array
     */
    private $terminateWithStatus = [];

    /**
     * Returns Due Date.
     * Next payment date (YYYY-MM-DD).  Note: Only available for merchants permitted to edit next payment
     * dates.
     */
    public function getDueDate(): ?\DateTime
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     * Next payment date (YYYY-MM-DD).  Note: Only available for merchants permitted to edit next payment
     * dates.
     *
     * @maps due_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDueDate(?\DateTime $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns Amount.
     * Next payment amount. Not available for limited-cycle subscriptions.  Only available for permitted
     * merchants.  This does not change subsequent cycle amounts.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Next payment amount. Not available for limited-cycle subscriptions.  Only available for permitted
     * merchants.  This does not change subsequent cycle amounts.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
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
     * Converts the SubscriptionUpdateNextPayment object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionUpdateNextPayment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionUpdateNextPayment',
            [
                'dueDate' => $this->dueDate,
                'amount' => $this->amount,
                'terminateWithStatus' => $this->getTerminateWithStatus(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['due_date', 'amount', 'terminate_with_status'];

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
        if (isset($this->amount)) {
            $json['amount']                = $this->amount;
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
