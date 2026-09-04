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
 * Represents a webhook subscription. Webhooks send event notifications to a specified URL when
 * triggered by payment events.
 */
class Webhook implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var array
     */
    private $storeId = [];

    /**
     * @var array
     */
    private $merchantId = [];

    /**
     * @var string[]|null
     */
    private $triggers;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var array
     */
    private $authToken = [];

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var bool|null
     */
    private $isIntegration;

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
     * Unique identifier for the webhook.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier for the webhook.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Store Id.
     * ID of the store this webhook belongs to (null for merchant-level webhooks).
     */
    public function getStoreId(): ?string
    {
        if (count($this->storeId) == 0) {
            return null;
        }
        return $this->storeId['value'];
    }

    /**
     * Sets Store Id.
     * ID of the store this webhook belongs to (null for merchant-level webhooks).
     *
     * @maps store_id
     */
    public function setStoreId(?string $storeId): void
    {
        $this->storeId['value'] = $storeId;
    }

    /**
     * Unsets Store Id.
     * ID of the store this webhook belongs to (null for merchant-level webhooks).
     */
    public function unsetStoreId(): void
    {
        $this->storeId = [];
    }

    /**
     * Returns Merchant Id.
     * ID of the merchant this webhook belongs to.
     */
    public function getMerchantId(): ?string
    {
        if (count($this->merchantId) == 0) {
            return null;
        }
        return $this->merchantId['value'];
    }

    /**
     * Sets Merchant Id.
     * ID of the merchant this webhook belongs to.
     *
     * @maps merchant_id
     */
    public function setMerchantId(?string $merchantId): void
    {
        $this->merchantId['value'] = $merchantId;
    }

    /**
     * Unsets Merchant Id.
     * ID of the merchant this webhook belongs to.
     */
    public function unsetMerchantId(): void
    {
        $this->merchantId = [];
    }

    /**
     * Returns Triggers.
     * List of event types that trigger this webhook.
     *
     * @return string[]|null
     */
    public function getTriggers(): ?array
    {
        return $this->triggers;
    }

    /**
     * Sets Triggers.
     * List of event types that trigger this webhook.
     *
     * @maps triggers
     * @factory \UnivaPay\Models\WebhookTrigger::checkValue
     *
     * @param string[]|null $triggers
     */
    public function setTriggers(?array $triggers): void
    {
        $this->triggers = $triggers;
    }

    /**
     * Returns Url.
     * The endpoint URL that receives webhook POST requests.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     * The endpoint URL that receives webhook POST requests.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Auth Token.
     * Optional bearer token included in the `Authorization` header of webhook requests. Used to
     * authenticate the webhook receiver.
     */
    public function getAuthToken(): ?string
    {
        if (count($this->authToken) == 0) {
            return null;
        }
        return $this->authToken['value'];
    }

    /**
     * Sets Auth Token.
     * Optional bearer token included in the `Authorization` header of webhook requests. Used to
     * authenticate the webhook receiver.
     *
     * @maps auth_token
     */
    public function setAuthToken(?string $authToken): void
    {
        $this->authToken['value'] = $authToken;
    }

    /**
     * Unsets Auth Token.
     * Optional bearer token included in the `Authorization` header of webhook requests. Used to
     * authenticate the webhook receiver.
     */
    public function unsetAuthToken(): void
    {
        $this->authToken = [];
    }

    /**
     * Returns Active.
     * Whether this webhook is currently active and receiving events.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * Whether this webhook is currently active and receiving events.
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Is Integration.
     * Admin-only flag. Indicates this webhook is used for platform integration purposes. Not settable by
     * merchants.
     */
    public function getIsIntegration(): ?bool
    {
        return $this->isIntegration;
    }

    /**
     * Sets Is Integration.
     * Admin-only flag. Indicates this webhook is used for platform integration purposes. Not settable by
     * merchants.
     *
     * @maps is_integration
     */
    public function setIsIntegration(?bool $isIntegration): void
    {
        $this->isIntegration = $isIntegration;
    }

    /**
     * Returns Created On.
     * Timestamp when the webhook was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the webhook was created.
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
     * Timestamp when the webhook was last updated.
     */
    public function getUpdatedOn(): ?\DateTime
    {
        return $this->updatedOn;
    }

    /**
     * Sets Updated On.
     * Timestamp when the webhook was last updated.
     *
     * @maps updated_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedOn(?\DateTime $updatedOn): void
    {
        $this->updatedOn = $updatedOn;
    }

    /**
     * Converts the Webhook object to a human-readable string representation.
     *
     * @return string The string representation of the Webhook object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Webhook',
            [
                'id' => $this->id,
                'storeId' => $this->getStoreId(),
                'merchantId' => $this->getMerchantId(),
                'triggers' => $this->triggers,
                'url' => $this->url,
                'authToken' => $this->getAuthToken(),
                'active' => $this->active,
                'isIntegration' => $this->isIntegration,
                'createdOn' => $this->createdOn,
                'updatedOn' => $this->updatedOn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'store_id',
        'merchant_id',
        'triggers',
        'url',
        'auth_token',
        'active',
        'is_integration',
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
            $json['id']             = $this->id;
        }
        if (!empty($this->storeId)) {
            $json['store_id']       = $this->storeId['value'];
        }
        if (!empty($this->merchantId)) {
            $json['merchant_id']    = $this->merchantId['value'];
        }
        if (isset($this->triggers)) {
            $json['triggers']       = WebhookTrigger::checkValue($this->triggers);
        }
        if (isset($this->url)) {
            $json['url']            = $this->url;
        }
        if (!empty($this->authToken)) {
            $json['auth_token']     = $this->authToken['value'];
        }
        if (isset($this->active)) {
            $json['active']         = $this->active;
        }
        if (isset($this->isIntegration)) {
            $json['is_integration'] = $this->isIntegration;
        }
        if (isset($this->createdOn)) {
            $json['created_on']     = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->updatedOn)) {
            $json['updated_on']     = DateTimeHelper::toRfc3339DateTime($this->updatedOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
