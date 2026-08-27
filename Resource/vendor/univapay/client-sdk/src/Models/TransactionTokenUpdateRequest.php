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
 * Request payload for updating a transaction token.
 */
class TransactionTokenUpdateRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $email;

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var TransactionTokenUpdateRequestData|null
     */
    private $data;

    /**
     * Returns Email.
     * Customer email address.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * Customer email address.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
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
     * Returns Data.
     * Transaction Token Update Request Data schema.
     */
    public function getData(): ?TransactionTokenUpdateRequestData
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * Transaction Token Update Request Data schema.
     *
     * @maps data
     */
    public function setData(?TransactionTokenUpdateRequestData $data): void
    {
        $this->data = $data;
    }

    /**
     * Converts the TransactionTokenUpdateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionTokenUpdateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionTokenUpdateRequest',
            [
                'email' => $this->email,
                'metadata' => $this->metadata,
                'data' => $this->data,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['email', 'metadata', 'data'];

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
        if (isset($this->email)) {
            $json['email']    = $this->email;
        }
        if (isset($this->metadata)) {
            $json['metadata'] = $this->metadata;
        }
        if (isset($this->data)) {
            $json['data']     = $this->data;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
