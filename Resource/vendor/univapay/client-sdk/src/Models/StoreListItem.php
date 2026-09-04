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
 * Store row returned by store list queries.
 */
class StoreListItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $merchantName;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * Returns Id.
     * Store identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Store identifier.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * Store display name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Store display name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Merchant Name.
     * Merchant display name associated with the store row.
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }

    /**
     * Sets Merchant Name.
     * Merchant display name associated with the store row.
     *
     * @maps merchant_name
     */
    public function setMerchantName(?string $merchantName): void
    {
        $this->merchantName = $merchantName;
    }

    /**
     * Returns Created On.
     * Timestamp when the store was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the store was created.
     *
     * @maps created_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Converts the StoreListItem object to a human-readable string representation.
     *
     * @return string The string representation of the StoreListItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'StoreListItem',
            [
                'id' => $this->id,
                'name' => $this->name,
                'merchantName' => $this->merchantName,
                'createdOn' => $this->createdOn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['id', 'name', 'merchant_name', 'created_on'];

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
            $json['id']            = $this->id;
        }
        if (isset($this->name)) {
            $json['name']          = $this->name;
        }
        if (isset($this->merchantName)) {
            $json['merchant_name'] = $this->merchantName;
        }
        if (isset($this->createdOn)) {
            $json['created_on']    = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
