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
use UnivaPay\Utils\NumberHelper;

/**
 * Charge resource returned by the payments API.
 */
class Charge implements \JsonSerializable
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
    private $transactionTokenId;

    /**
     * @var string|null
     */
    private $transactionTokenType;

    /**
     * @var array
     */
    private $subscriptionId = [];

    /**
     * @var array
     */
    private $merchantTransactionId = [];

    /**
     * @var int|null
     */
    private $requestedAmount;

    /**
     * @var string|null
     */
    private $requestedCurrency;

    /**
     * @var float|null
     */
    private $requestedAmountFormatted;

    /**
     * @var array
     */
    private $chargedAmount = [];

    /**
     * @var array
     */
    private $chargedCurrency = [];

    /**
     * @var array
     */
    private $chargedAmountFormatted = [];

    /**
     * @var array
     */
    private $feeAmount = [];

    /**
     * @var array
     */
    private $feeCurrency = [];

    /**
     * @var array
     */
    private $feeAmountFormatted = [];

    /**
     * @var bool|null
     */
    private $onlyDirectCurrency;

    /**
     * @var array
     */
    private $captureAt = [];

    /**
     * @var array
     */
    private $descriptor = [];

    /**
     * @var array
     */
    private $descriptorPhoneNumber = [];

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
     * @var string|null
     */
    private $merchantName;

    /**
     * @var string|null
     */
    private $storeName;

    /**
     * @var ChargeRedirect|null
     */
    private $redirect;

    /**
     * @var ChargeThreeDs|null
     */
    private $threeDs;

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
     * Returns Transaction Token Id.
     * Transaction token identifier.
     */
    public function getTransactionTokenId(): ?string
    {
        return $this->transactionTokenId;
    }

    /**
     * Sets Transaction Token Id.
     * Transaction token identifier.
     *
     * @maps transaction_token_id
     */
    public function setTransactionTokenId(?string $transactionTokenId): void
    {
        $this->transactionTokenId = $transactionTokenId;
    }

    /**
     * Returns Transaction Token Type.
     * Charge Transaction Token Type schema.
     */
    public function getTransactionTokenType(): ?string
    {
        return $this->transactionTokenType;
    }

    /**
     * Sets Transaction Token Type.
     * Charge Transaction Token Type schema.
     *
     * @maps transaction_token_type
     * @factory \UnivaPay\Models\ChargeTransactionTokenType::checkValue
     */
    public function setTransactionTokenType(?string $transactionTokenType): void
    {
        $this->transactionTokenType = $transactionTokenType;
    }

    /**
     * Returns Subscription Id.
     * Subscription identifier.
     */
    public function getSubscriptionId(): ?string
    {
        if (count($this->subscriptionId) == 0) {
            return null;
        }
        return $this->subscriptionId['value'];
    }

    /**
     * Sets Subscription Id.
     * Subscription identifier.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?string $subscriptionId): void
    {
        $this->subscriptionId['value'] = $subscriptionId;
    }

    /**
     * Unsets Subscription Id.
     * Subscription identifier.
     */
    public function unsetSubscriptionId(): void
    {
        $this->subscriptionId = [];
    }

    /**
     * Returns Merchant Transaction Id.
     * Merchant-defined transaction identifier.
     */
    public function getMerchantTransactionId(): ?string
    {
        if (count($this->merchantTransactionId) == 0) {
            return null;
        }
        return $this->merchantTransactionId['value'];
    }

    /**
     * Sets Merchant Transaction Id.
     * Merchant-defined transaction identifier.
     *
     * @maps merchant_transaction_id
     */
    public function setMerchantTransactionId(?string $merchantTransactionId): void
    {
        $this->merchantTransactionId['value'] = $merchantTransactionId;
    }

    /**
     * Unsets Merchant Transaction Id.
     * Merchant-defined transaction identifier.
     */
    public function unsetMerchantTransactionId(): void
    {
        $this->merchantTransactionId = [];
    }

    /**
     * Returns Requested Amount.
     * Requested amount in the smallest currency unit.
     */
    public function getRequestedAmount(): ?int
    {
        return $this->requestedAmount;
    }

    /**
     * Sets Requested Amount.
     * Requested amount in the smallest currency unit.
     *
     * @maps requested_amount
     */
    public function setRequestedAmount(?int $requestedAmount): void
    {
        $this->requestedAmount = $requestedAmount;
    }

    /**
     * Returns Requested Currency.
     * Requested ISO-4217 currency code.
     */
    public function getRequestedCurrency(): ?string
    {
        return $this->requestedCurrency;
    }

    /**
     * Sets Requested Currency.
     * Requested ISO-4217 currency code.
     *
     * @maps requested_currency
     */
    public function setRequestedCurrency(?string $requestedCurrency): void
    {
        $this->requestedCurrency = $requestedCurrency;
    }

    /**
     * Returns Requested Amount Formatted.
     * Requested amount formatted for display.
     */
    public function getRequestedAmountFormatted(): ?float
    {
        return $this->requestedAmountFormatted;
    }

    /**
     * Sets Requested Amount Formatted.
     * Requested amount formatted for display.
     *
     * @maps requested_amount_formatted
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setRequestedAmountFormatted(?float $requestedAmountFormatted): void
    {
        $this->requestedAmountFormatted = $requestedAmountFormatted;
    }

    /**
     * Returns Charged Amount.
     * Charged amount in the smallest currency unit.
     */
    public function getChargedAmount(): ?int
    {
        if (count($this->chargedAmount) == 0) {
            return null;
        }
        return $this->chargedAmount['value'];
    }

    /**
     * Sets Charged Amount.
     * Charged amount in the smallest currency unit.
     *
     * @maps charged_amount
     */
    public function setChargedAmount(?int $chargedAmount): void
    {
        $this->chargedAmount['value'] = $chargedAmount;
    }

    /**
     * Unsets Charged Amount.
     * Charged amount in the smallest currency unit.
     */
    public function unsetChargedAmount(): void
    {
        $this->chargedAmount = [];
    }

    /**
     * Returns Charged Currency.
     * Charged ISO-4217 currency code.
     */
    public function getChargedCurrency(): ?string
    {
        if (count($this->chargedCurrency) == 0) {
            return null;
        }
        return $this->chargedCurrency['value'];
    }

    /**
     * Sets Charged Currency.
     * Charged ISO-4217 currency code.
     *
     * @maps charged_currency
     */
    public function setChargedCurrency(?string $chargedCurrency): void
    {
        $this->chargedCurrency['value'] = $chargedCurrency;
    }

    /**
     * Unsets Charged Currency.
     * Charged ISO-4217 currency code.
     */
    public function unsetChargedCurrency(): void
    {
        $this->chargedCurrency = [];
    }

    /**
     * Returns Charged Amount Formatted.
     * Charged amount formatted for display.
     */
    public function getChargedAmountFormatted(): ?float
    {
        if (count($this->chargedAmountFormatted) == 0) {
            return null;
        }
        return $this->chargedAmountFormatted['value'];
    }

    /**
     * Sets Charged Amount Formatted.
     * Charged amount formatted for display.
     *
     * @maps charged_amount_formatted
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setChargedAmountFormatted(?float $chargedAmountFormatted): void
    {
        $this->chargedAmountFormatted['value'] = $chargedAmountFormatted;
    }

    /**
     * Unsets Charged Amount Formatted.
     * Charged amount formatted for display.
     */
    public function unsetChargedAmountFormatted(): void
    {
        $this->chargedAmountFormatted = [];
    }

    /**
     * Returns Fee Amount.
     * Fee amount in the smallest currency unit.
     */
    public function getFeeAmount(): ?int
    {
        if (count($this->feeAmount) == 0) {
            return null;
        }
        return $this->feeAmount['value'];
    }

    /**
     * Sets Fee Amount.
     * Fee amount in the smallest currency unit.
     *
     * @maps fee_amount
     */
    public function setFeeAmount(?int $feeAmount): void
    {
        $this->feeAmount['value'] = $feeAmount;
    }

    /**
     * Unsets Fee Amount.
     * Fee amount in the smallest currency unit.
     */
    public function unsetFeeAmount(): void
    {
        $this->feeAmount = [];
    }

    /**
     * Returns Fee Currency.
     * Fee ISO-4217 currency code.
     */
    public function getFeeCurrency(): ?string
    {
        if (count($this->feeCurrency) == 0) {
            return null;
        }
        return $this->feeCurrency['value'];
    }

    /**
     * Sets Fee Currency.
     * Fee ISO-4217 currency code.
     *
     * @maps fee_currency
     */
    public function setFeeCurrency(?string $feeCurrency): void
    {
        $this->feeCurrency['value'] = $feeCurrency;
    }

    /**
     * Unsets Fee Currency.
     * Fee ISO-4217 currency code.
     */
    public function unsetFeeCurrency(): void
    {
        $this->feeCurrency = [];
    }

    /**
     * Returns Fee Amount Formatted.
     * Fee amount formatted for display.
     */
    public function getFeeAmountFormatted(): ?float
    {
        if (count($this->feeAmountFormatted) == 0) {
            return null;
        }
        return $this->feeAmountFormatted['value'];
    }

    /**
     * Sets Fee Amount Formatted.
     * Fee amount formatted for display.
     *
     * @maps fee_amount_formatted
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setFeeAmountFormatted(?float $feeAmountFormatted): void
    {
        $this->feeAmountFormatted['value'] = $feeAmountFormatted;
    }

    /**
     * Unsets Fee Amount Formatted.
     * Fee amount formatted for display.
     */
    public function unsetFeeAmountFormatted(): void
    {
        $this->feeAmountFormatted = [];
    }

    /**
     * Returns Only Direct Currency.
     * Whether only direct currency processing is allowed.
     */
    public function getOnlyDirectCurrency(): ?bool
    {
        return $this->onlyDirectCurrency;
    }

    /**
     * Sets Only Direct Currency.
     * Whether only direct currency processing is allowed.
     *
     * @maps only_direct_currency
     */
    public function setOnlyDirectCurrency(?bool $onlyDirectCurrency): void
    {
        $this->onlyDirectCurrency = $onlyDirectCurrency;
    }

    /**
     * Returns Capture At.
     * Timestamp when capture should occur.
     */
    public function getCaptureAt(): ?\DateTime
    {
        if (count($this->captureAt) == 0) {
            return null;
        }
        return $this->captureAt['value'];
    }

    /**
     * Sets Capture At.
     * Timestamp when capture should occur.
     *
     * @maps capture_at
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCaptureAt(?\DateTime $captureAt): void
    {
        $this->captureAt['value'] = $captureAt;
    }

    /**
     * Unsets Capture At.
     * Timestamp when capture should occur.
     */
    public function unsetCaptureAt(): void
    {
        $this->captureAt = [];
    }

    /**
     * Returns Descriptor.
     * Billing descriptor.
     */
    public function getDescriptor(): ?string
    {
        if (count($this->descriptor) == 0) {
            return null;
        }
        return $this->descriptor['value'];
    }

    /**
     * Sets Descriptor.
     * Billing descriptor.
     *
     * @maps descriptor
     */
    public function setDescriptor(?string $descriptor): void
    {
        $this->descriptor['value'] = $descriptor;
    }

    /**
     * Unsets Descriptor.
     * Billing descriptor.
     */
    public function unsetDescriptor(): void
    {
        $this->descriptor = [];
    }

    /**
     * Returns Descriptor Phone Number.
     * Billing descriptor phone number.
     */
    public function getDescriptorPhoneNumber(): ?string
    {
        if (count($this->descriptorPhoneNumber) == 0) {
            return null;
        }
        return $this->descriptorPhoneNumber['value'];
    }

    /**
     * Sets Descriptor Phone Number.
     * Billing descriptor phone number.
     *
     * @maps descriptor_phone_number
     */
    public function setDescriptorPhoneNumber(?string $descriptorPhoneNumber): void
    {
        $this->descriptorPhoneNumber['value'] = $descriptorPhoneNumber;
    }

    /**
     * Unsets Descriptor Phone Number.
     * Billing descriptor phone number.
     */
    public function unsetDescriptorPhoneNumber(): void
    {
        $this->descriptorPhoneNumber = [];
    }

    /**
     * Returns Status.
     * Charge Status schema.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Charge Status schema.
     *
     * @maps status
     * @factory \UnivaPay\Models\ChargeStatus::checkValue
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
     * Returns Redirect.
     * Charge Redirect schema.
     */
    public function getRedirect(): ?ChargeRedirect
    {
        return $this->redirect;
    }

    /**
     * Sets Redirect.
     * Charge Redirect schema.
     *
     * @maps redirect
     */
    public function setRedirect(?ChargeRedirect $redirect): void
    {
        $this->redirect = $redirect;
    }

    /**
     * Returns Three Ds.
     * Charge Three Ds schema.
     */
    public function getThreeDs(): ?ChargeThreeDs
    {
        return $this->threeDs;
    }

    /**
     * Sets Three Ds.
     * Charge Three Ds schema.
     *
     * @maps three_ds
     */
    public function setThreeDs(?ChargeThreeDs $threeDs): void
    {
        $this->threeDs = $threeDs;
    }

    /**
     * Converts the Charge object to a human-readable string representation.
     *
     * @return string The string representation of the Charge object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Charge',
            [
                'id' => $this->id,
                'storeId' => $this->storeId,
                'transactionTokenId' => $this->transactionTokenId,
                'transactionTokenType' => $this->transactionTokenType,
                'subscriptionId' => $this->getSubscriptionId(),
                'merchantTransactionId' => $this->getMerchantTransactionId(),
                'requestedAmount' => $this->requestedAmount,
                'requestedCurrency' => $this->requestedCurrency,
                'requestedAmountFormatted' => $this->requestedAmountFormatted,
                'chargedAmount' => $this->getChargedAmount(),
                'chargedCurrency' => $this->getChargedCurrency(),
                'chargedAmountFormatted' => $this->getChargedAmountFormatted(),
                'feeAmount' => $this->getFeeAmount(),
                'feeCurrency' => $this->getFeeCurrency(),
                'feeAmountFormatted' => $this->getFeeAmountFormatted(),
                'onlyDirectCurrency' => $this->onlyDirectCurrency,
                'captureAt' => $this->getCaptureAt(),
                'descriptor' => $this->getDescriptor(),
                'descriptorPhoneNumber' => $this->getDescriptorPhoneNumber(),
                'status' => $this->status,
                'error' => $this->getError(),
                'metadata' => $this->metadata,
                'mode' => $this->mode,
                'createdOn' => $this->createdOn,
                'merchantName' => $this->merchantName,
                'storeName' => $this->storeName,
                'redirect' => $this->redirect,
                'threeDs' => $this->threeDs,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'store_id',
        'transaction_token_id',
        'transaction_token_type',
        'subscription_id',
        'merchant_transaction_id',
        'requested_amount',
        'requested_currency',
        'requested_amount_formatted',
        'charged_amount',
        'charged_currency',
        'charged_amount_formatted',
        'fee_amount',
        'fee_currency',
        'fee_amount_formatted',
        'only_direct_currency',
        'capture_at',
        'descriptor',
        'descriptor_phone_number',
        'status',
        'error',
        'metadata',
        'mode',
        'created_on',
        'merchant_name',
        'store_name',
        'redirect',
        'three_ds'
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
            $json['id']                         = $this->id;
        }
        if (isset($this->storeId)) {
            $json['store_id']                   = $this->storeId;
        }
        if (isset($this->transactionTokenId)) {
            $json['transaction_token_id']       = $this->transactionTokenId;
        }
        if (isset($this->transactionTokenType)) {
            $json['transaction_token_type']     = ChargeTransactionTokenType::checkValue($this->transactionTokenType);
        }
        if (!empty($this->subscriptionId)) {
            $json['subscription_id']            = $this->subscriptionId['value'];
        }
        if (!empty($this->merchantTransactionId)) {
            $json['merchant_transaction_id']    = $this->merchantTransactionId['value'];
        }
        if (isset($this->requestedAmount)) {
            $json['requested_amount']           = $this->requestedAmount;
        }
        if (isset($this->requestedCurrency)) {
            $json['requested_currency']         = $this->requestedCurrency;
        }
        if (isset($this->requestedAmountFormatted)) {
            $json['requested_amount_formatted'] = $this->requestedAmountFormatted;
        }
        if (!empty($this->chargedAmount)) {
            $json['charged_amount']             = $this->chargedAmount['value'];
        }
        if (!empty($this->chargedCurrency)) {
            $json['charged_currency']           = $this->chargedCurrency['value'];
        }
        if (!empty($this->chargedAmountFormatted)) {
            $json['charged_amount_formatted']   = $this->chargedAmountFormatted['value'];
        }
        if (!empty($this->feeAmount)) {
            $json['fee_amount']                 = $this->feeAmount['value'];
        }
        if (!empty($this->feeCurrency)) {
            $json['fee_currency']               = $this->feeCurrency['value'];
        }
        if (!empty($this->feeAmountFormatted)) {
            $json['fee_amount_formatted']       = $this->feeAmountFormatted['value'];
        }
        if (isset($this->onlyDirectCurrency)) {
            $json['only_direct_currency']       = $this->onlyDirectCurrency;
        }
        if (!empty($this->captureAt)) {
            $json['capture_at']                 = DateTimeHelper::toRfc3339DateTime($this->captureAt['value']);
        }
        if (!empty($this->descriptor)) {
            $json['descriptor']                 = $this->descriptor['value'];
        }
        if (!empty($this->descriptorPhoneNumber)) {
            $json['descriptor_phone_number']    = $this->descriptorPhoneNumber['value'];
        }
        if (isset($this->status)) {
            $json['status']                     = ChargeStatus::checkValue($this->status);
        }
        if (!empty($this->error)) {
            $json['error']                      = $this->error['value'];
        }
        if (isset($this->metadata)) {
            $json['metadata']                   = $this->metadata;
        }
        if (isset($this->mode)) {
            $json['mode']                       = ChargeMode::checkValue($this->mode);
        }
        if (isset($this->createdOn)) {
            $json['created_on']                 = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->merchantName)) {
            $json['merchant_name']              = $this->merchantName;
        }
        if (isset($this->storeName)) {
            $json['store_name']                 = $this->storeName;
        }
        if (isset($this->redirect)) {
            $json['redirect']                   = $this->redirect;
        }
        if (isset($this->threeDs)) {
            $json['three_ds']                   = $this->threeDs;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
