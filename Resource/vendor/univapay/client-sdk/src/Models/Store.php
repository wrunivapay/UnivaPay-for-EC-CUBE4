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
 * Store resource returned by the backend `FullStore` formatter. It combines core store identity with
 * the resolved configuration snapshot used for runtime policy evaluation.
 */
class Store implements \JsonSerializable
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
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var MerchantWebhookConfiguration|null
     */
    private $configuration;

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
     * Returns Configuration.
     * Store-scoped configuration snapshot serialized by gyron-payments-api. It uses the same flattened
     * serializer as merchant configuration, but omits `transfer_schedule`.
     */
    public function getConfiguration(): ?MerchantWebhookConfiguration
    {
        return $this->configuration;
    }

    /**
     * Sets Configuration.
     * Store-scoped configuration snapshot serialized by gyron-payments-api. It uses the same flattened
     * serializer as merchant configuration, but omits `transfer_schedule`.
     *
     * @maps configuration
     */
    public function setConfiguration(?MerchantWebhookConfiguration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * Converts the Store object to a human-readable string representation.
     *
     * @return string The string representation of the Store object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Store',
            [
                'id' => $this->id,
                'name' => $this->name,
                'createdOn' => $this->createdOn,
                'configuration' => $this->configuration,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['id', 'name', 'created_on', 'configuration'];

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
        if (isset($this->createdOn)) {
            $json['created_on']    = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->configuration)) {
            $json['configuration'] = $this->configuration;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
