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
 * Request body for creating a refund against a successful charge. Konbini and bank transfer charges
 * cannot be refunded.
 */
class RefundCreateRequest implements \JsonSerializable
{
    /**
     * @var int
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string|null
     */
    private $reason;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @param int $amount
     * @param string $currency
     */
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    /**
     * Returns Amount.
     * Amount to refund in the smallest currency unit. Must be greater than 0 and not exceed the charged
     * amount. Partial refunds are supported for most payment methods.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount to refund in the smallest currency unit. Must be greater than 0 and not exceed the charged
     * amount. Partial refunds are supported for most payment methods.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code. Must exactly match the currency of the original charge.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code. Must exactly match the currency of the original charge.
     *
     * @required
     * @maps currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Reason.
     * The reason for the refund (merchant-settable values). `duplicate`: A duplicate charge was made.
     * `fraud`: The charge is fraudulent. `customer_request`: The customer requested the refund.
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * The reason for the refund (merchant-settable values). `duplicate`: A duplicate charge was made.
     * `fraud`: The charge is fraudulent. `customer_request`: The customer requested the refund.
     *
     * @maps reason
     * @factory \UnivaPay\Models\RefundReasonRequest::checkValue
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Message.
     * Optional free-text note about the reason for the refund.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     * Optional free-text note about the reason for the refund.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Metadata.
     * A free-form dictionary for custom metadata.
     */
    public function getMetadata(): ?GenericMetadata
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * A free-form dictionary for custom metadata.
     *
     * @maps metadata
     */
    public function setMetadata(?GenericMetadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Converts the RefundCreateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the RefundCreateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RefundCreateRequest',
            [
                'amount' => $this->amount,
                'currency' => $this->currency,
                'reason' => $this->reason,
                'message' => $this->message,
                'metadata' => $this->metadata,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['amount', 'currency', 'reason', 'message', 'metadata'];

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
        $json['amount']       = $this->amount;
        $json['currency']     = $this->currency;
        if (isset($this->reason)) {
            $json['reason']   = RefundReasonRequest::checkValue($this->reason);
        }
        if (isset($this->message)) {
            $json['message']  = $this->message;
        }
        if (isset($this->metadata)) {
            $json['metadata'] = $this->metadata;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
