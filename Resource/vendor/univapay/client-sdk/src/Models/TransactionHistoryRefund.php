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
 * A single refund issued against the charge this row describes.
 */
class TransactionHistoryRefund implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $refundId;

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
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * Returns Refund Id.
     * Unique identifier of the refund.
     */
    public function getRefundId(): ?string
    {
        return $this->refundId;
    }

    /**
     * Sets Refund Id.
     * Unique identifier of the refund.
     *
     * @maps refund_id
     */
    public function setRefundId(?string $refundId): void
    {
        $this->refundId = $refundId;
    }

    /**
     * Returns Amount.
     * Refunded amount, in the currency's minor unit.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Refunded amount, in the currency's minor unit.
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
     * Refunded amount, formatted per the currency's display scale.
     */
    public function getAmountFormatted(): ?float
    {
        return $this->amountFormatted;
    }

    /**
     * Sets Amount Formatted.
     * Refunded amount, formatted per the currency's display scale.
     *
     * @maps amount_formatted
     */
    public function setAmountFormatted(?float $amountFormatted): void
    {
        $this->amountFormatted = $amountFormatted;
    }

    /**
     * Returns Status.
     * Status of a single refund entry.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status of a single refund entry.
     *
     * @maps status
     * @factory \UnivaPay\Models\TransactionHistoryRefundStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Reason.
     * Reason code for a refund.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * Reason code for a refund.
     *
     * @maps reason
     * @factory \UnivaPay\Models\TransactionHistoryRefundReason::checkValue
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Converts the TransactionHistoryRefund object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionHistoryRefund object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionHistoryRefund',
            [
                'refundId' => $this->refundId,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'amountFormatted' => $this->amountFormatted,
                'status' => $this->status,
                'reason' => $this->reason,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['refund_id', 'amount', 'currency', 'amount_formatted', 'status', 'reason'];

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
        if (isset($this->refundId)) {
            $json['refund_id']        = $this->refundId;
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
        if (isset($this->status)) {
            $json['status']           = TransactionHistoryRefundStatus::checkValue($this->status);
        }
        if (isset($this->reason)) {
            $json['reason']           = TransactionHistoryRefundReason::checkValue($this->reason);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
