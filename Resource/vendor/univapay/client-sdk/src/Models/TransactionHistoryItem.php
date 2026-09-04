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
 * A single charge or refund row in the merchant's transaction history.
 */
class TransactionHistoryItem implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $storeId;

    /**
     * @var string|null
     */
    private $resourceId;

    /**
     * @var array
     */
    private $chargeId = [];

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var float|null
     */
    private $amountFormatted;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var GenericMetadata|null
     */
    private $metadata;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * @var string|null
     */
    private $mode;

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
    private $paymentType;

    /**
     * @var TransactionHistoryUserData|null
     */
    private $userData;

    /**
     * @var array
     */
    private $bankTransferPaymentStatus = [];

    /**
     * @var array
     */
    private $bankTransferLatestDepositDate = [];

    /**
     * @var array
     */
    private $mcpTokenId = [];

    /**
     * @var array
     */
    private $chargeType = [];

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
     * Returns Resource Id.
     * ID of the underlying resource — a charge ID for charge rows, a refund ID for refund rows.
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    /**
     * Sets Resource Id.
     * ID of the underlying resource — a charge ID for charge rows, a refund ID for refund rows.
     *
     * @maps resource_id
     */
    public function setResourceId(?string $resourceId): void
    {
        $this->resourceId = $resourceId;
    }

    /**
     * Returns Charge Id.
     * ID of the originating charge. `null` for charge rows; set for refund rows.
     */
    public function getChargeId(): ?string
    {
        if (count($this->chargeId) == 0) {
            return null;
        }
        return $this->chargeId['value'];
    }

    /**
     * Sets Charge Id.
     * ID of the originating charge. `null` for charge rows; set for refund rows.
     *
     * @maps charge_id
     */
    public function setChargeId(?string $chargeId): void
    {
        $this->chargeId['value'] = $chargeId;
    }

    /**
     * Unsets Charge Id.
     * ID of the originating charge. `null` for charge rows; set for refund rows.
     */
    public function unsetChargeId(): void
    {
        $this->chargeId = [];
    }

    /**
     * Returns Amount.
     * Amount, in the currency's minor unit.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount, in the currency's minor unit.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Currency.
     * ISO-4217 currency code.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * ISO-4217 currency code.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Amount Formatted.
     * Amount, formatted per the currency's display scale.
     */
    public function getAmountFormatted(): ?float
    {
        return $this->amountFormatted;
    }

    /**
     * Sets Amount Formatted.
     * Amount, formatted per the currency's display scale.
     *
     * @maps amount_formatted
     */
    public function setAmountFormatted(?float $amountFormatted): void
    {
        $this->amountFormatted = $amountFormatted;
    }

    /**
     * Returns Type.
     * Whether this row represents a charge or a refund.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Whether this row represents a charge or a refund.
     *
     * @maps type
     * @factory \UnivaPay\Models\TransactionHistoryType::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Status.
     * Status of the underlying resource. Charge rows use the full set of values; refund rows only ever
     * report `pending`, `successful`, `failed`, or `error`.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status of the underlying resource. Charge rows use the full set of values; refund rows only ever
     * report `pending`, `successful`, `failed`, or `error`.
     *
     * @maps status
     * @factory \UnivaPay\Models\TransactionHistoryStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
     * Returns Created On.
     * Timestamp when the underlying resource was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the underlying resource was created.
     *
     * @maps created_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Mode.
     * Environment mode: `live` and `test` reflect the credential used to authenticate, while `live_test`
     * is reserved for privileged callers testing against live-mode data.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Environment mode: `live` and `test` reflect the credential used to authenticate, while `live_test`
     * is reserved for privileged callers testing against live-mode data.
     *
     * @maps mode
     * @factory \UnivaPay\Models\TransactionHistoryMode::checkValue
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
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
     * Returns Payment Type.
     * The payment method used for the underlying charge.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     * The payment method used for the underlying charge.
     *
     * @maps payment_type
     * @factory \UnivaPay\Models\TransactionHistoryPaymentType::checkValue
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns User Data.
     * Payment-type-specific details for this row. This is a single flat object covering every payment type
     * — the fields actually populated depend on `payment_type` (documented per field below). Fields not
     * applicable to a given payment type are omitted.
     */
    public function getUserData(): ?TransactionHistoryUserData
    {
        return $this->userData;
    }

    /**
     * Sets User Data.
     * Payment-type-specific details for this row. This is a single flat object covering every payment type
     * — the fields actually populated depend on `payment_type` (documented per field below). Fields not
     * applicable to a given payment type are omitted.
     *
     * @maps user_data
     */
    public function setUserData(?TransactionHistoryUserData $userData): void
    {
        $this->userData = $userData;
    }

    /**
     * Returns Bank Transfer Payment Status.
     * Bank transfer payment status, or `null` when not applicable.
     */
    public function getBankTransferPaymentStatus(): ?string
    {
        if (count($this->bankTransferPaymentStatus) == 0) {
            return null;
        }
        return $this->bankTransferPaymentStatus['value'];
    }

    /**
     * Sets Bank Transfer Payment Status.
     * Bank transfer payment status, or `null` when not applicable.
     *
     * @maps bank_transfer_payment_status
     * @factory \UnivaPay\Models\BankTransferPaymentStatus::checkValue
     */
    public function setBankTransferPaymentStatus(?string $bankTransferPaymentStatus): void
    {
        $this->bankTransferPaymentStatus['value'] = $bankTransferPaymentStatus;
    }

    /**
     * Unsets Bank Transfer Payment Status.
     * Bank transfer payment status, or `null` when not applicable.
     */
    public function unsetBankTransferPaymentStatus(): void
    {
        $this->bankTransferPaymentStatus = [];
    }

    /**
     * Returns Bank Transfer Latest Deposit Date.
     * Timestamp of the most recent deposit matched against a bank transfer charge. `null` when not
     * applicable.
     */
    public function getBankTransferLatestDepositDate(): ?\DateTime
    {
        if (count($this->bankTransferLatestDepositDate) == 0) {
            return null;
        }
        return $this->bankTransferLatestDepositDate['value'];
    }

    /**
     * Sets Bank Transfer Latest Deposit Date.
     * Timestamp of the most recent deposit matched against a bank transfer charge. `null` when not
     * applicable.
     *
     * @maps bank_transfer_latest_deposit_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setBankTransferLatestDepositDate(?\DateTime $bankTransferLatestDepositDate): void
    {
        $this->bankTransferLatestDepositDate['value'] = $bankTransferLatestDepositDate;
    }

    /**
     * Unsets Bank Transfer Latest Deposit Date.
     * Timestamp of the most recent deposit matched against a bank transfer charge. `null` when not
     * applicable.
     */
    public function unsetBankTransferLatestDepositDate(): void
    {
        $this->bankTransferLatestDepositDate = [];
    }

    /**
     * Returns Mcp Token Id.
     * ID of the multi-currency-pricing token used, when applicable. `null` when not applicable.
     */
    public function getMcpTokenId(): ?string
    {
        if (count($this->mcpTokenId) == 0) {
            return null;
        }
        return $this->mcpTokenId['value'];
    }

    /**
     * Sets Mcp Token Id.
     * ID of the multi-currency-pricing token used, when applicable. `null` when not applicable.
     *
     * @maps mcp_token_id
     */
    public function setMcpTokenId(?string $mcpTokenId): void
    {
        $this->mcpTokenId['value'] = $mcpTokenId;
    }

    /**
     * Unsets Mcp Token Id.
     * ID of the multi-currency-pricing token used, when applicable. `null` when not applicable.
     */
    public function unsetMcpTokenId(): void
    {
        $this->mcpTokenId = [];
    }

    /**
     * Returns Charge Type.
     * Charge type, or `null` when not applicable.
     */
    public function getChargeType(): ?string
    {
        if (count($this->chargeType) == 0) {
            return null;
        }
        return $this->chargeType['value'];
    }

    /**
     * Sets Charge Type.
     * Charge type, or `null` when not applicable.
     *
     * @maps charge_type
     * @factory \UnivaPay\Models\TransactionHistoryChargeType::checkValue
     */
    public function setChargeType(?string $chargeType): void
    {
        $this->chargeType['value'] = $chargeType;
    }

    /**
     * Unsets Charge Type.
     * Charge type, or `null` when not applicable.
     */
    public function unsetChargeType(): void
    {
        $this->chargeType = [];
    }

    /**
     * Converts the TransactionHistoryItem object to a human-readable string representation.
     *
     * @return string The string representation of the TransactionHistoryItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TransactionHistoryItem',
            [
                'storeId' => $this->storeId,
                'resourceId' => $this->resourceId,
                'chargeId' => $this->getChargeId(),
                'amount' => $this->amount,
                'currency' => $this->currency,
                'amountFormatted' => $this->amountFormatted,
                'type' => $this->type,
                'status' => $this->status,
                'metadata' => $this->metadata,
                'createdOn' => $this->createdOn,
                'mode' => $this->mode,
                'merchantName' => $this->merchantName,
                'storeName' => $this->storeName,
                'paymentType' => $this->paymentType,
                'userData' => $this->userData,
                'bankTransferPaymentStatus' => $this->getBankTransferPaymentStatus(),
                'bankTransferLatestDepositDate' => $this->getBankTransferLatestDepositDate(),
                'mcpTokenId' => $this->getMcpTokenId(),
                'chargeType' => $this->getChargeType(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'store_id',
        'resource_id',
        'charge_id',
        'amount',
        'currency',
        'amount_formatted',
        'type',
        'status',
        'metadata',
        'created_on',
        'mode',
        'merchant_name',
        'store_name',
        'payment_type',
        'user_data',
        'bank_transfer_payment_status',
        'bank_transfer_latest_deposit_date',
        'mcp_token_id',
        'charge_type'
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
        if (isset($this->storeId)) {
            $json['store_id']                          = $this->storeId;
        }
        if (isset($this->resourceId)) {
            $json['resource_id']                       = $this->resourceId;
        }
        if (!empty($this->chargeId)) {
            $json['charge_id']                         = $this->chargeId['value'];
        }
        if (isset($this->amount)) {
            $json['amount']                            = $this->amount;
        }
        if (isset($this->currency)) {
            $json['currency']                          = $this->currency;
        }
        if (isset($this->amountFormatted)) {
            $json['amount_formatted']                  = $this->amountFormatted;
        }
        if (isset($this->type)) {
            $json['type']                              = TransactionHistoryType::checkValue($this->type);
        }
        if (isset($this->status)) {
            $json['status']                            = TransactionHistoryStatus::checkValue($this->status);
        }
        if (isset($this->metadata)) {
            $json['metadata']                          = $this->metadata;
        }
        if (isset($this->createdOn)) {
            $json['created_on']                        = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->mode)) {
            $json['mode']                              = TransactionHistoryMode::checkValue($this->mode);
        }
        if (isset($this->merchantName)) {
            $json['merchant_name']                     = $this->merchantName;
        }
        if (isset($this->storeName)) {
            $json['store_name']                        = $this->storeName;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']                      = TransactionHistoryPaymentType::checkValue($this->paymentType);
        }
        if (isset($this->userData)) {
            $json['user_data']                         = $this->userData;
        }
        if (!empty($this->bankTransferPaymentStatus)) {
            $json['bank_transfer_payment_status']      =
                BankTransferPaymentStatus::checkValue(
                    $this->bankTransferPaymentStatus['value']
                );
        }
        if (!empty($this->bankTransferLatestDepositDate)) {
            $json['bank_transfer_latest_deposit_date'] =
                DateTimeHelper::toRfc3339DateTime(
                    $this->bankTransferLatestDepositDate['value']
                );
        }
        if (!empty($this->mcpTokenId)) {
            $json['mcp_token_id']                      = $this->mcpTokenId['value'];
        }
        if (!empty($this->chargeType)) {
            $json['charge_type']                       =
                TransactionHistoryChargeType::checkValue(
                    $this->chargeType['value']
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
