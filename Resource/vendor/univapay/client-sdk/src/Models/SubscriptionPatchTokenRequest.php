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
 * Request body for updating the payment method (transaction token) of a subscription. The new token
 * must belong to the same store, be active, and match the subscription's mode.
 */
class SubscriptionPatchTokenRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $transactionTokenId;

    /**
     * @param string $transactionTokenId
     */
    public function __construct(string $transactionTokenId)
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * Returns Transaction Token Id.
     * The ID of the new transaction token to use for future subscription payments. Must be a recurring or
     * subscription-type token for the same store.
     */
    public function getTransactionTokenId(): string
    {
        return $this->transactionTokenId;
    }

    /**
     * Sets Transaction Token Id.
     * The ID of the new transaction token to use for future subscription payments. Must be a recurring or
     * subscription-type token for the same store.
     *
     * @required
     * @maps transaction_token_id
     */
    public function setTransactionTokenId(string $transactionTokenId): void
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * Converts the SubscriptionPatchTokenRequest object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionPatchTokenRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionPatchTokenRequest',
            [
                'transactionTokenId' => $this->transactionTokenId,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['transaction_token_id'];

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
        $json['transaction_token_id'] = $this->transactionTokenId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
