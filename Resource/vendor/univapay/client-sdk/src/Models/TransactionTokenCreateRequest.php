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
 * Request payload for creating a transaction token, which represents a payment method to charge
 * against.
 */
class TransactionTokenCreateRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $usageLimit;

    /**
     * @var string|null
     */
    private $ipAddress;

    /**
     * @var TransactionTokenCreateRequestMetadata|null
     */
    private $metadata;

    /**
     * @var TokenCreateCardData|TokenCreateKonbiniData|TokenCreateOnlineData|TokenCreateBankTransferData|TokenCreatePaidyData|TokenCreateQrScanData|TokenCreateQrMerchantData
     */
    private $data;

    /**
     * @param string $paymentType
     * @param string $type
     * @param TokenCreateCardData|TokenCreateKonbiniData|TokenCreateOnlineData|TokenCreateBankTransferData|TokenCreatePaidyData|TokenCreateQrScanData|TokenCreateQrMerchantData $data
     */
    public function __construct(string $paymentType, string $type, $data)
    {
        $this->paymentType = $paymentType;
        $this->type = $type;
        $this->data = $data;
    }

    /**
     * Returns Payment Type.
     * Transaction Token Create Request Payment Type schema.
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * Transaction Token Create Request Payment Type schema.
     *
     * @required
     * @maps payment_type
     * @factory \UnivaPay\Models\TransactionTokenCreateRequestPaymentType::checkValue
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Type.
     * Transaction Token Create Request Type schema.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Transaction Token Create Request Type schema.
     *
     * @required
     * @maps type
     * @factory \UnivaPay\Models\TransactionTokenCreateRequestType::checkValue
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
     * Returns Usage Limit.
     * Usage limit applied to the token.
     */
    public function getUsageLimit(): ?string
    {
        return $this->usageLimit;
    }

    /**
     * Sets Usage Limit.
     * Usage limit applied to the token.
     *
     * @maps usage_limit
     */
    public function setUsageLimit(?string $usageLimit): void
    {
        $this->usageLimit = $usageLimit;
    }

    /**
     * Returns Ip Address.
     * Consumer's IPv4 address. **Required** when `data.brand` is `we_chat_online` and `data.call_method`
     * is `web` or `http_get`.
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * Sets Ip Address.
     * Consumer's IPv4 address. **Required** when `data.brand` is `we_chat_online` and `data.call_method`
     * is `web` or `http_get`.
     *
     * @maps ip_address
     */
    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Returns Metadata.
     * A free-form dictionary for custom metadata.
     */
    public function getMetadata(): ?TransactionTokenCreateRequestMetadata
    {
        return $this->metadata;
    }

    /**
     * Sets Metadata.
     * A free-form dictionary for custom metadata.
     *
     * @maps metadata
     */
    public function setMetadata(?TransactionTokenCreateRequestMetadata $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * Returns Data.
     * Transaction Token Create Request Data schema.
     *
     * @return TokenCreateCardData|TokenCreateKonbiniData|TokenCreateOnlineData|TokenCreateBankTransferData|TokenCreatePaidyData|TokenCreateQrScanData|TokenCreateQrMerchantData
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * Transaction Token Create Request Data schema.
     *
     * @required
     * @maps data
     * @mapsBy anyOf(TokenCreateCardData,TokenCreateKonbiniData,TokenCreateOnlineData,TokenCreateBankTransferData,TokenCreatePaidyData,TokenCreateQrScanData,TokenCreateQrMerchantData)
     *
     * @param TokenCreateCardData|TokenCreateKonbiniData|TokenCreateOnlineData|TokenCreateBankTransferData|TokenCreatePaidyData|TokenCreateQrScanData|TokenCreateQrMerchantData $data
     */
    public function setData($data): void
    {
        $this->data = $data;
    }

    /**
     * Converts the TransactionTokenCreateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionTokenCreateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionTokenCreateRequest',
            [
                'paymentType' => $this->paymentType,
                'type' => $this->type,
                'email' => $this->email,
                'usageLimit' => $this->usageLimit,
                'ipAddress' => $this->ipAddress,
                'metadata' => $this->metadata,
                'data' => $this->data,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['payment_type', 'type', 'email', 'usage_limit', 'ip_address', 'metadata', 'data'];

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
        $json['payment_type']    = TransactionTokenCreateRequestPaymentType::checkValue($this->paymentType);
        $json['type']            = TransactionTokenCreateRequestType::checkValue($this->type);
        if (isset($this->email)) {
            $json['email']       = $this->email;
        }
        if (isset($this->usageLimit)) {
            $json['usage_limit'] = $this->usageLimit;
        }
        if (isset($this->ipAddress)) {
            $json['ip_address']  = $this->ipAddress;
        }
        if (isset($this->metadata)) {
            $json['metadata']    = $this->metadata;
        }
        $json['data']            =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->data,
                'anyOf(TokenCreateCardData,TokenCreateKonbiniData,TokenCreateOnlineData,TokenCreateBa' .
                'nkTransferData,TokenCreatePaidyData,TokenCreateQrScanData,TokenCreateQrMerchantData)'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
