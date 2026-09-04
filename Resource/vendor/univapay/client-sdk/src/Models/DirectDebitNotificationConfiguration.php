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
 * Which direct debit email notifications the merchant has opted into.
 */
class DirectDebitNotificationConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $notifyDeadlineMailing;

    /**
     * @var bool|null
     */
    private $notifyDeadlineDebit;

    /**
     * @var bool|null
     */
    private $notifyDebitUpdate;

    /**
     * Returns Notify Deadline Mailing.
     * Notify when the deadline for the bank to receive the signed mandate approaches (郵送期限の通知).
     */
    public function getNotifyDeadlineMailing(): ?bool
    {
        return $this->notifyDeadlineMailing;
    }

    /**
     * Sets Notify Deadline Mailing.
     * Notify when the deadline for the bank to receive the signed mandate approaches (郵送期限の通知).
     *
     * @maps notify_deadline_mailing
     */
    public function setNotifyDeadlineMailing(?bool $notifyDeadlineMailing): void
    {
        $this->notifyDeadlineMailing = $notifyDeadlineMailing;
    }

    /**
     * Returns Notify Deadline Debit.
     * Notify when the transfer registration cutoff approaches (締切日の通知).
     */
    public function getNotifyDeadlineDebit(): ?bool
    {
        return $this->notifyDeadlineDebit;
    }

    /**
     * Sets Notify Deadline Debit.
     * Notify when the transfer registration cutoff approaches (締切日の通知).
     *
     * @maps notify_deadline_debit
     */
    public function setNotifyDeadlineDebit(?bool $notifyDeadlineDebit): void
    {
        $this->notifyDeadlineDebit = $notifyDeadlineDebit;
    }

    /**
     * Returns Notify Debit Update.
     * Notify when transfer results are reflected (振替結果の通知).
     */
    public function getNotifyDebitUpdate(): ?bool
    {
        return $this->notifyDebitUpdate;
    }

    /**
     * Sets Notify Debit Update.
     * Notify when transfer results are reflected (振替結果の通知).
     *
     * @maps notify_debit_update
     */
    public function setNotifyDebitUpdate(?bool $notifyDebitUpdate): void
    {
        $this->notifyDebitUpdate = $notifyDebitUpdate;
    }

    /**
     * Converts the DirectDebitNotificationConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the DirectDebitNotificationConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DirectDebitNotificationConfiguration',
            [
                'notifyDeadlineMailing' => $this->notifyDeadlineMailing,
                'notifyDeadlineDebit' => $this->notifyDeadlineDebit,
                'notifyDebitUpdate' => $this->notifyDebitUpdate,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['notify_deadline_mailing', 'notify_deadline_debit', 'notify_debit_update'];

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
        if (isset($this->notifyDeadlineMailing)) {
            $json['notify_deadline_mailing'] = $this->notifyDeadlineMailing;
        }
        if (isset($this->notifyDeadlineDebit)) {
            $json['notify_deadline_debit']   = $this->notifyDeadlineDebit;
        }
        if (isset($this->notifyDebitUpdate)) {
            $json['notify_debit_update']     = $this->notifyDebitUpdate;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
