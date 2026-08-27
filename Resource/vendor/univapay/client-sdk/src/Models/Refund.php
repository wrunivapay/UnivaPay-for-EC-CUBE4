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
 * Represents a refund issued against a charge.
 */
class Refund implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $storeId;

    /**
     * @var string|null
     */
    private $chargeId;

    /**
     * @var string|null
     */
    private $status;

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
     * @var array
     */
    private $reason = [];

    /**
     * @var array
     */
    private $message = [];

    /**
     * @var array
     */
    private $error = [];

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var string|null
     */
    private $mode;

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
     * Returns Store Id.
     * Store identifier.
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    /**
     * Sets Store Id.
     * Store identifier.
     *
     * @maps store_id
     */
    public function setStoreId(?string $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * Returns Charge Id.
     * Charge identifier.
     */
    public function getChargeId(): ?string
    {
        return $this->chargeId;
    }

    /**
     * Sets Charge Id.
     * Charge identifier.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId = $chargeId;
    }

    /**
     * Returns Status.
     * Current status of the refund. `pending`: The refund has been created and is being processed.
     * `successful`: The refund was processed successfully. `failed`: The refund was rejected by the
     * gateway. `error`: An unexpected error occurred during processing.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current status of the refund. `pending`: The refund has been created and is being processed.
     * `successful`: The refund was processed successfully. `failed`: The refund was rejected by the
     * gateway. `error`: An unexpected error occurred during processing.
     *
     * @maps status
     * @factory \UnivaPay\Models\RefundStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Amount.
     * Refund amount in the smallest currency unit (e.g., cents for USD, yen for JPY).
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Refund amount in the smallest currency unit (e.g., cents for USD, yen for JPY).
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code. Must match the charged currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code. Must match the charged currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Amount Formatted.
     * Refund amount formatted for display.
     */
    public function getAmountFormatted(): ?float
    {
        return $this->amountFormatted;
    }

    /**
     * Sets Amount Formatted.
     * Refund amount formatted for display.
     *
     * @maps amount_formatted
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setAmountFormatted(?float $amountFormatted): void
    {
        $this->amountFormatted = $amountFormatted;
    }

    /**
     * Returns Reason.
     * Refund reason returned by the API, or `null` when unset.
     */
    public function getReason(): ?string
    {
        if (count($this->reason) == 0) {
            return null;
        }
        return $this->reason['value'];
    }

    /**
     * Sets Reason.
     * Refund reason returned by the API, or `null` when unset.
     *
     * @maps reason
     * @factory \UnivaPay\Models\RefundReasonResponse::checkValue
     */
    public function setReason(?string $reason): void
    {
        $this->reason['value'] = $reason;
    }

    /**
     * Unsets Reason.
     * Refund reason returned by the API, or `null` when unset.
     */
    public function unsetReason(): void
    {
        $this->reason = [];
    }

    /**
     * Returns Message.
     * Optional free-text note about the refund.
     */
    public function getMessage(): ?string
    {
        if (count($this->message) == 0) {
            return null;
        }
        return $this->message['value'];
    }

    /**
     * Sets Message.
     * Optional free-text note about the refund.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message['value'] = $message;
    }

    /**
     * Unsets Message.
     * Optional free-text note about the refund.
     */
    public function unsetMessage(): void
    {
        $this->message = [];
    }

    /**
     * Returns Error.
     * Payment error details, or null if successful.
     */
    public function getError(): ?PaymentError
    {
        if (count($this->error) == 0) {
            return null;
        }
        return $this->error['value'];
    }

    /**
     * Sets Error.
     * Payment error details, or null if successful.
     *
     * @maps error
     */
    public function setError(?PaymentError $error): void
    {
        $this->error['value'] = $error;
    }

    /**
     * Unsets Error.
     * Payment error details, or null if successful.
     */
    public function unsetError(): void
    {
        $this->error = [];
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
     * Returns Mode.
     * Charge Mode schema.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Charge Mode schema.
     *
     * @maps mode
     * @factory \UnivaPay\Models\ChargeMode::checkValue
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
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
     * Converts the Refund object to a human-readable string representation.
     *
     * @return string The string representation of the Refund object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Refund',
            [
                'id' => $this->id,
                'storeId' => $this->storeId,
                'chargeId' => $this->chargeId,
                'status' => $this->status,
                'amount' => $this->amount,
                'currency' => $this->currency,
                'amountFormatted' => $this->amountFormatted,
                'reason' => $this->getReason(),
                'message' => $this->getMessage(),
                'error' => $this->getError(),
                'metadata' => $this->metadata,
                'mode' => $this->mode,
                'createdOn' => $this->createdOn,
                'updatedOn' => $this->updatedOn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'store_id',
        'charge_id',
        'status',
        'amount',
        'currency',
        'amount_formatted',
        'reason',
        'message',
        'error',
        'metadata',
        'mode',
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
        if (isset($this->storeId)) {
            $json['store_id']         = $this->storeId;
        }
        if (isset($this->chargeId)) {
            $json['charge_id']        = $this->chargeId;
        }
        if (isset($this->status)) {
            $json['status']           = RefundStatus::checkValue($this->status);
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
        if (!empty($this->reason)) {
            $json['reason']           = RefundReasonResponse::checkValue($this->reason['value']);
        }
        if (!empty($this->message)) {
            $json['message']          = $this->message['value'];
        }
        if (!empty($this->error)) {
            $json['error']            = $this->error['value'];
        }
        if (isset($this->metadata)) {
            $json['metadata']         = $this->metadata;
        }
        if (isset($this->mode)) {
            $json['mode']             = ChargeMode::checkValue($this->mode);
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
