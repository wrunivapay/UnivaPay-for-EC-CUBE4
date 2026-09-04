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
 * Represents a cancellation request for a charge.
 */
class Cancel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $chargeId;

    /**
     * @var string|null
     */
    private $storeId;

    /**
     * @var string|null
     */
    private $status;

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
     * Unique identifier for the cancel.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier for the cancel.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Charge Id.
     * ID of the charge this cancel is associated with.
     */
    public function getChargeId(): ?string
    {
        return $this->chargeId;
    }

    /**
     * Sets Charge Id.
     * ID of the charge this cancel is associated with.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId = $chargeId;
    }

    /**
     * Returns Store Id.
     * ID of the store.
     */
    public function getStoreId(): ?string
    {
        return $this->storeId;
    }

    /**
     * Sets Store Id.
     * ID of the store.
     *
     * @maps store_id
     */
    public function setStoreId(?string $storeId): void
    {
        $this->storeId = $storeId;
    }

    /**
     * Returns Status.
     * Current status of the cancel operation.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Current status of the cancel operation.
     *
     * @maps status
     * @factory \UnivaPay\Models\CancelStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
     * Timestamp when the cancel was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the cancel was created.
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
     * Timestamp when the cancel was last updated.
     */
    public function getUpdatedOn(): ?\DateTime
    {
        return $this->updatedOn;
    }

    /**
     * Sets Updated On.
     * Timestamp when the cancel was last updated.
     *
     * @maps updated_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedOn(?\DateTime $updatedOn): void
    {
        $this->updatedOn = $updatedOn;
    }

    /**
     * Converts the Cancel object to a human-readable string representation.
     *
     * @return string The string representation of the Cancel object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Cancel',
            [
                'id' => $this->id,
                'chargeId' => $this->chargeId,
                'storeId' => $this->storeId,
                'status' => $this->status,
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
        'charge_id',
        'store_id',
        'status',
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
            $json['id']         = $this->id;
        }
        if (isset($this->chargeId)) {
            $json['charge_id']  = $this->chargeId;
        }
        if (isset($this->storeId)) {
            $json['store_id']   = $this->storeId;
        }
        if (isset($this->status)) {
            $json['status']     = CancelStatus::checkValue($this->status);
        }
        if (!empty($this->error)) {
            $json['error']      = $this->error['value'];
        }
        if (isset($this->metadata)) {
            $json['metadata']   = $this->metadata;
        }
        if (isset($this->mode)) {
            $json['mode']       = ChargeMode::checkValue($this->mode);
        }
        if (isset($this->createdOn)) {
            $json['created_on'] = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->updatedOn)) {
            $json['updated_on'] = DateTimeHelper::toRfc3339DateTime($this->updatedOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
