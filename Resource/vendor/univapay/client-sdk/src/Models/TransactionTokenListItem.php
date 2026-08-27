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
 * Transaction token entry returned in list responses.
 */
class TransactionTokenListItem implements \JsonSerializable
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
    private $merchantName;

    /**
     * @var string|null
     */
    private $storeName;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var string|null
     */
    private $mode;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var \DateTime|null
     */
    private $updatedOn;

    /**
     * @var TransactionTokenListItemUserData|null
     */
    private $userData;

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
     * Returns Merchant Name.
     * Merchant display name.
     */
    public function getMerchantName(): ?string
    {
        return $this->merchantName;
    }

    /**
     * Sets Merchant Name.
     * Merchant display name.
     *
     * @maps merchant_name
     */
    public function setMerchantName(?string $merchantName): void
    {
        $this->merchantName = $merchantName;
    }

    /**
     * Returns Store Name.
     * Store display name.
     */
    public function getStoreName(): ?string
    {
        return $this->storeName;
    }

    /**
     * Sets Store Name.
     * Store display name.
     *
     * @maps store_name
     */
    public function setStoreName(?string $storeName): void
    {
        $this->storeName = $storeName;
    }

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
     * Returns Payment Type.
     * Payment method type.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * Payment method type.
     *
     * @maps payment_type
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Active.
     * Whether the resource is active.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * Whether the resource is active.
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Mode.
     * Processing mode for the resource.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Processing mode for the resource.
     *
     * @maps mode
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * Returns Type.
     * Type of the resource.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Type of the resource.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
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
     * Returns User Data.
     * Transaction Token List Item User Data schema.
     */
    public function getUserData(): ?TransactionTokenListItemUserData
    {
        return $this->userData;
    }

    /**
     * Sets User Data.
     * Transaction Token List Item User Data schema.
     *
     * @maps user_data
     */
    public function setUserData(?TransactionTokenListItemUserData $userData): void
    {
        $this->userData = $userData;
    }

    /**
     * Converts the TransactionTokenListItem object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionTokenListItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionTokenListItem',
            [
                'id' => $this->id,
                'storeId' => $this->storeId,
                'merchantName' => $this->merchantName,
                'storeName' => $this->storeName,
                'email' => $this->email,
                'paymentType' => $this->paymentType,
                'active' => $this->active,
                'mode' => $this->mode,
                'type' => $this->type,
                'createdOn' => $this->createdOn,
                'updatedOn' => $this->updatedOn,
                'userData' => $this->userData,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'store_id',
        'merchant_name',
        'store_name',
        'email',
        'payment_type',
        'active',
        'mode',
        'type',
        'created_on',
        'updated_on',
        'user_data'
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
            $json['id']            = $this->id;
        }
        if (isset($this->storeId)) {
            $json['store_id']      = $this->storeId;
        }
        if (isset($this->merchantName)) {
            $json['merchant_name'] = $this->merchantName;
        }
        if (isset($this->storeName)) {
            $json['store_name']    = $this->storeName;
        }
        if (isset($this->email)) {
            $json['email']         = $this->email;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']  = $this->paymentType;
        }
        if (isset($this->active)) {
            $json['active']        = $this->active;
        }
        if (isset($this->mode)) {
            $json['mode']          = $this->mode;
        }
        if (isset($this->type)) {
            $json['type']          = $this->type;
        }
        if (isset($this->createdOn)) {
            $json['created_on']    = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->updatedOn)) {
            $json['updated_on']    = DateTimeHelper::toRfc3339DateTime($this->updatedOn);
        }
        if (isset($this->userData)) {
            $json['user_data']     = $this->userData;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
