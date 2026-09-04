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
 * Bank-transfer-specific webhook payload extension.
 */
class BankTransferStatusWebhookCallbackExtension implements \JsonSerializable
{
    /**
     * @var BankTransferStatusData|null
     */
    private $data;

    /**
     * Returns Data.
     * Data payload for `bank_transfer_status_updated` webhook events. Contains the bank transfer extension
     * fields inlined alongside amount and metadata.
     */
    public function getData(): ?BankTransferStatusData
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * Data payload for `bank_transfer_status_updated` webhook events. Contains the bank transfer extension
     * fields inlined alongside amount and metadata.
     *
     * @maps data
     */
    public function setData(?BankTransferStatusData $data): void
    {
        $this->data = $data;
    }

    /**
     * Converts the BankTransferStatusWebhookCallbackExtension object to a human-readable string
     * representation.
     *
     * @return string The string representation of the BankTransferStatusWebhookCallbackExtension object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankTransferStatusWebhookCallbackExtension',
            ['data' => $this->data, 'additionalProperties' => $this->additionalProperties]
        );
    }

    protected $propertyNames = ['data'];

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
        if (isset($this->data)) {
            $json['data'] = $this->data;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
