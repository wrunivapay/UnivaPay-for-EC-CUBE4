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
 * Customs declaration payload delivered in `customs_declaration_finished` webhooks. Platform-level
 * deliveries may include `platform_id` and `updated_on`.
 */
class CustomsDeclarationWebhookData implements \JsonSerializable
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
    private $merchantId;

    /**
     * @var string|null
     */
    private $storeId;

    /**
     * @var array
     */
    private $platformId = [];

    /**
     * @var string|null
     */
    private $mode;

    /**
     * @var string|null
     */
    private $gateway;

    /**
     * @var CustomsDeclarationWebhookDeclaration|null
     */
    private $declaration;

    /**
     * @var array
     */
    private $declarationResult = [];

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var array
     */
    private $error = [];

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var array
     */
    private $updatedOn = [];

    /**
     * Returns Id.
     * Customs declaration identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Customs declaration identifier.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Charge Id.
     * Charge identifier associated with the declaration.
     */
    public function getChargeId(): ?string
    {
        return $this->chargeId;
    }

    /**
     * Sets Charge Id.
     * Charge identifier associated with the declaration.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId = $chargeId;
    }

    /**
     * Returns Merchant Id.
     * Merchant identifier.
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * Sets Merchant Id.
     * Merchant identifier.
     *
     * @maps merchant_id
     */
    public function setMerchantId(?string $merchantId): void
    {
        $this->merchantId = $merchantId;
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
     * Returns Platform Id.
     * Platform identifier, included on platform-level deliveries.
     */
    public function getPlatformId(): ?string
    {
        if (count($this->platformId) == 0) {
            return null;
        }
        return $this->platformId['value'];
    }

    /**
     * Sets Platform Id.
     * Platform identifier, included on platform-level deliveries.
     *
     * @maps platform_id
     */
    public function setPlatformId(?string $platformId): void
    {
        $this->platformId['value'] = $platformId;
    }

    /**
     * Unsets Platform Id.
     * Platform identifier, included on platform-level deliveries.
     */
    public function unsetPlatformId(): void
    {
        $this->platformId = [];
    }

    /**
     * Returns Mode.
     * Processing mode.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Processing mode.
     *
     * @maps mode
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * Returns Gateway.
     * Gateway that processed the declaration.
     */
    public function getGateway(): ?string
    {
        return $this->gateway;
    }

    /**
     * Sets Gateway.
     * Gateway that processed the declaration.
     *
     * @maps gateway
     */
    public function setGateway(?string $gateway): void
    {
        $this->gateway = $gateway;
    }

    /**
     * Returns Declaration.
     * WeChat customs declaration payload returned by the backend formatter.
     */
    public function getDeclaration(): ?CustomsDeclarationWebhookDeclaration
    {
        return $this->declaration;
    }

    /**
     * Sets Declaration.
     * WeChat customs declaration payload returned by the backend formatter.
     *
     * @maps declaration
     */
    public function setDeclaration(?CustomsDeclarationWebhookDeclaration $declaration): void
    {
        $this->declaration = $declaration;
    }

    /**
     * Returns Declaration Result.
     * Result payload returned by the customs declaration formatter.
     */
    public function getDeclarationResult(): ?CustomsDeclarationWebhookResult
    {
        if (count($this->declarationResult) == 0) {
            return null;
        }
        return $this->declarationResult['value'];
    }

    /**
     * Sets Declaration Result.
     * Result payload returned by the customs declaration formatter.
     *
     * @maps declaration_result
     */
    public function setDeclarationResult(?CustomsDeclarationWebhookResult $declarationResult): void
    {
        $this->declarationResult['value'] = $declarationResult;
    }

    /**
     * Unsets Declaration Result.
     * Result payload returned by the customs declaration formatter.
     */
    public function unsetDeclarationResult(): void
    {
        $this->declarationResult = [];
    }

    /**
     * Returns Status.
     * Customs declaration status returned by the backend.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Customs declaration status returned by the backend.
     *
     * @maps status
     * @factory \UnivaPay\Models\CustomsDeclarationWebhookStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Error.
     * Error payload returned when customs declaration processing fails.
     */
    public function getError(): ?CustomsDeclarationWebhookError
    {
        if (count($this->error) == 0) {
            return null;
        }
        return $this->error['value'];
    }

    /**
     * Sets Error.
     * Error payload returned when customs declaration processing fails.
     *
     * @maps error
     */
    public function setError(?CustomsDeclarationWebhookError $error): void
    {
        $this->error['value'] = $error;
    }

    /**
     * Unsets Error.
     * Error payload returned when customs declaration processing fails.
     */
    public function unsetError(): void
    {
        $this->error = [];
    }

    /**
     * Returns Created On.
     * Timestamp when the declaration was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the declaration was created.
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
     * Timestamp when the declaration was last updated, included on platform-level deliveries.
     */
    public function getUpdatedOn(): ?\DateTime
    {
        if (count($this->updatedOn) == 0) {
            return null;
        }
        return $this->updatedOn['value'];
    }

    /**
     * Sets Updated On.
     * Timestamp when the declaration was last updated, included on platform-level deliveries.
     *
     * @maps updated_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedOn(?\DateTime $updatedOn): void
    {
        $this->updatedOn['value'] = $updatedOn;
    }

    /**
     * Unsets Updated On.
     * Timestamp when the declaration was last updated, included on platform-level deliveries.
     */
    public function unsetUpdatedOn(): void
    {
        $this->updatedOn = [];
    }

    /**
     * Converts the CustomsDeclarationWebhookData object to a human-readable string representation.
     *
     * @return string The string representation of the CustomsDeclarationWebhookData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CustomsDeclarationWebhookData',
            [
                'id' => $this->id,
                'chargeId' => $this->chargeId,
                'merchantId' => $this->merchantId,
                'storeId' => $this->storeId,
                'platformId' => $this->getPlatformId(),
                'mode' => $this->mode,
                'gateway' => $this->gateway,
                'declaration' => $this->declaration,
                'declarationResult' => $this->getDeclarationResult(),
                'status' => $this->status,
                'error' => $this->getError(),
                'createdOn' => $this->createdOn,
                'updatedOn' => $this->getUpdatedOn(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'charge_id',
        'merchant_id',
        'store_id',
        'platform_id',
        'mode',
        'gateway',
        'declaration',
        'declaration_result',
        'status',
        'error',
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
            $json['id']                 = $this->id;
        }
        if (isset($this->chargeId)) {
            $json['charge_id']          = $this->chargeId;
        }
        if (isset($this->merchantId)) {
            $json['merchant_id']        = $this->merchantId;
        }
        if (isset($this->storeId)) {
            $json['store_id']           = $this->storeId;
        }
        if (!empty($this->platformId)) {
            $json['platform_id']        = $this->platformId['value'];
        }
        if (isset($this->mode)) {
            $json['mode']               = $this->mode;
        }
        if (isset($this->gateway)) {
            $json['gateway']            = $this->gateway;
        }
        if (isset($this->declaration)) {
            $json['declaration']        = $this->declaration;
        }
        if (!empty($this->declarationResult)) {
            $json['declaration_result'] = $this->declarationResult['value'];
        }
        if (isset($this->status)) {
            $json['status']             = CustomsDeclarationWebhookStatus::checkValue($this->status);
        }
        if (!empty($this->error)) {
            $json['error']              = $this->error['value'];
        }
        if (isset($this->createdOn)) {
            $json['created_on']         = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (!empty($this->updatedOn)) {
            $json['updated_on']         = DateTimeHelper::toRfc3339DateTime($this->updatedOn['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
