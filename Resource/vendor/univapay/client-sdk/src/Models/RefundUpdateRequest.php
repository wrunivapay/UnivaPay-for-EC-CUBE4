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
 * Request body for updating a refund. All fields are optional. Omitted fields are left unchanged.
 */
class RefundUpdateRequest implements \JsonSerializable
{
    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var array
     */
    private $message = [];

    /**
     * @var array
     */
    private $reason = [];

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
     * Returns Message.
     * Update or clear the refund note. Send `null` to remove.
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
     * Update or clear the refund note. Send `null` to remove.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message['value'] = $message;
    }

    /**
     * Unsets Message.
     * Update or clear the refund note. Send `null` to remove.
     */
    public function unsetMessage(): void
    {
        $this->message = [];
    }

    /**
     * Returns Reason.
     * Merchant-settable refund reason, or `null` to remove it during update.
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
     * Merchant-settable refund reason, or `null` to remove it during update.
     *
     * @maps reason
     * @factory \UnivaPay\Models\RefundReasonRequest::checkValue
     */
    public function setReason(?string $reason): void
    {
        $this->reason['value'] = $reason;
    }

    /**
     * Unsets Reason.
     * Merchant-settable refund reason, or `null` to remove it during update.
     */
    public function unsetReason(): void
    {
        $this->reason = [];
    }

    /**
     * Converts the RefundUpdateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the RefundUpdateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RefundUpdateRequest',
            [
                'metadata' => $this->metadata,
                'message' => $this->getMessage(),
                'reason' => $this->getReason(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['metadata', 'message', 'reason'];

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
        if (isset($this->metadata)) {
            $json['metadata'] = $this->metadata;
        }
        if (!empty($this->message)) {
            $json['message']  = $this->message['value'];
        }
        if (!empty($this->reason)) {
            $json['reason']   = RefundReasonRequest::checkValue($this->reason['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
