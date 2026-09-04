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
 * A single scheduled pull of funds from a registered bank account. The bank account details are copied
 * onto the transfer at registration time, so later edits to the account do not change past transfers.
 */
class DirectDebitBankTransfer implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $legacyStoreId;

    /**
     * @var string|null
     */
    private $merchantId;

    /**
     * @var string|null
     */
    private $bankAccountId;

    /**
     * @var string|null
     */
    private $userNumber;

    /**
     * @var string|null
     */
    private $bankCode;

    /**
     * @var string|null
     */
    private $bankName;

    /**
     * @var string|null
     */
    private $branchCode;

    /**
     * @var string|null
     */
    private $bankAccountType;

    /**
     * @var string|null
     */
    private $bankAccountName;

    /**
     * @var string|null
     */
    private $bankAccountNumber;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var string|null
     */
    private $debitDate;

    /**
     * @var \DateTime|null
     */
    private $calculatedDebitDate;

    /**
     * @var string|null
     */
    private $lock;

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
     * @var \DateTime|null
     */
    private $updatedOn;

    /**
     * Returns Id.
     * Unique identifier of a direct debit bank transfer (振替ID).
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier of a direct debit bank transfer (振替ID).
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Legacy Store Id.
     * Identifier of the merchant in the legacy direct debit system.
     */
    public function getLegacyStoreId(): ?string
    {
        return $this->legacyStoreId;
    }

    /**
     * Sets Legacy Store Id.
     * Identifier of the merchant in the legacy direct debit system.
     *
     * @maps legacy_store_id
     */
    public function setLegacyStoreId(?string $legacyStoreId): void
    {
        $this->legacyStoreId = $legacyStoreId;
    }

    /**
     * Returns Merchant Id.
     * The merchant that owns this transfer.
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     * Sets Merchant Id.
     * The merchant that owns this transfer.
     *
     * @maps merchant_id
     */
    public function setMerchantId(?string $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    /**
     * Returns Bank Account Id.
     * Unique identifier of a direct debit bank account (銀行口座ID).
     */
    public function getBankAccountId(): ?string
    {
        return $this->bankAccountId;
    }

    /**
     * Sets Bank Account Id.
     * Unique identifier of a direct debit bank account (銀行口座ID).
     *
     * @maps bank_account_id
     */
    public function setBankAccountId(?string $bankAccountId): void
    {
        $this->bankAccountId = $bankAccountId;
    }

    /**
     * Returns User Number.
     * The merchant's own membership number for the consumer (会員番号). Alphanumeric.
     */
    public function getUserNumber(): ?string
    {
        return $this->userNumber;
    }

    /**
     * Sets User Number.
     * The merchant's own membership number for the consumer (会員番号). Alphanumeric.
     *
     * @maps user_number
     */
    public function setUserNumber(?string $userNumber): void
    {
        $this->userNumber = $userNumber;
    }

    /**
     * Returns Bank Code.
     * Four-digit code identifying the consumer's bank (銀行コード).
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * Sets Bank Code.
     * Four-digit code identifying the consumer's bank (銀行コード).
     *
     * @maps bank_code
     */
    public function setBankCode(?string $bankCode): void
    {
        $this->bankCode = $bankCode;
    }

    /**
     * Returns Bank Name.
     * Bank name in half-width katakana (銀行名).
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Sets Bank Name.
     * Bank name in half-width katakana (銀行名).
     *
     * @maps bank_name
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns Branch Code.
     * Three-digit code identifying the bank branch (支店コード).
     */
    public function getBranchCode(): ?string
    {
        return $this->branchCode;
    }

    /**
     * Sets Branch Code.
     * Three-digit code identifying the bank branch (支店コード).
     *
     * @maps branch_code
     */
    public function setBranchCode(?string $branchCode): void
    {
        $this->branchCode = $branchCode;
    }

    /**
     * Returns Bank Account Type.
     * Deposit account type (預金種類) — `regular` (普通), `current` (当座), `savings` (貯蓄) or `others` (その他).
     */
    public function getBankAccountType(): ?string
    {
        return $this->bankAccountType;
    }

    /**
     * Sets Bank Account Type.
     * Deposit account type (預金種類) — `regular` (普通), `current` (当座), `savings` (貯蓄) or `others` (その他).
     *
     * @maps bank_account_type
     * @factory \UnivaPay\Models\DirectDebitBankAccountType::checkValue
     */
    public function setBankAccountType(?string $bankAccountType): void
    {
        $this->bankAccountType = $bankAccountType;
    }

    /**
     * Returns Bank Account Name.
     * Account holder name (口座名義), in half-width katakana. Full-width characters are rejected by the bank.
     */
    public function getBankAccountName(): ?string
    {
        return $this->bankAccountName;
    }

    /**
     * Sets Bank Account Name.
     * Account holder name (口座名義), in half-width katakana. Full-width characters are rejected by the bank.
     *
     * @maps bank_account_name
     */
    public function setBankAccountName(?string $bankAccountName): void
    {
        $this->bankAccountName = $bankAccountName;
    }

    /**
     * Returns Bank Account Number.
     * Seven-digit account number (口座番号).
     */
    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    /**
     * Sets Bank Account Number.
     * Seven-digit account number (口座番号).
     *
     * @maps bank_account_number
     */
    public function setBankAccountNumber(?string $bankAccountNumber): void
    {
        $this->bankAccountNumber = $bankAccountNumber;
    }

    /**
     * Returns Amount.
     * Transfer amount in JPY. Must be a positive, non-zero whole number.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Transfer amount in JPY. Must be a positive, non-zero whole number.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Debit Date.
     * Monthly debit cycle — funds are pulled on either the 14th or the 27th.
     */
    public function getDebitDate(): ?string
    {
        return $this->debitDate;
    }

    /**
     * Sets Debit Date.
     * Monthly debit cycle — funds are pulled on either the 14th or the 27th.
     *
     * @maps debit_date
     * @factory \UnivaPay\Models\DirectDebitDebitDate::checkValue
     */
    public function setDebitDate(?string $debitDate): void
    {
        $this->debitDate = $debitDate;
    }

    /**
     * Returns Calculated Debit Date.
     * The actual business day on which funds are pulled (計算された振替日), derived from the debit cycle.
     */
    public function getCalculatedDebitDate(): ?\DateTime
    {
        return $this->calculatedDebitDate;
    }

    /**
     * Sets Calculated Debit Date.
     * The actual business day on which funds are pulled (計算された振替日), derived from the debit cycle.
     *
     * @maps calculated_debit_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setCalculatedDebitDate(?\DateTime $calculatedDebitDate): void
    {
        $this->calculatedDebitDate = $calculatedDebitDate;
    }

    /**
     * Returns Lock.
     * Whether the transfer can still be edited. Transfers are `unlocked` until the upload deadline for
     * their debit cycle passes, after which they are `locked` and can no longer be changed or deleted.
     */
    public function getLock(): ?string
    {
        return $this->lock;
    }

    /**
     * Sets Lock.
     * Whether the transfer can still be edited. Transfers are `unlocked` until the upload deadline for
     * their debit cycle passes, after which they are `locked` and can no longer be changed or deleted.
     *
     * @maps lock
     * @factory \UnivaPay\Models\DirectDebitBankTransferLock::checkValue
     */
    public function setLock(?string $lock): void
    {
        $this->lock = $lock;
    }

    /**
     * Returns Status.
     * Transfer state. `awaiting` until the bank reports back, then `successful` or `failed`. Results are
     * reflected days after the debit date, not immediately.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Transfer state. `awaiting` until the bank reports back, then `successful` or `failed`. Results are
     * reflected days after the debit date, not immediately.
     *
     * @maps status
     * @factory \UnivaPay\Models\DirectDebitBankTransferStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Error.
     * Failure reason, or null while the transfer is awaiting a result or has succeeded.
     */
    public function getError(): ?string
    {
        if (count($this->error) == 0) {
            return null;
        }
        return $this->error['value'];
    }

    /**
     * Sets Error.
     * Failure reason, or null while the transfer is awaiting a result or has succeeded.
     *
     * @maps error
     * @factory \UnivaPay\Models\DirectDebitBankTransferError::checkValue
     */
    public function setError(?string $error): void
    {
        $this->error['value'] = $error;
    }

    /**
     * Unsets Error.
     * Failure reason, or null while the transfer is awaiting a result or has succeeded.
     */
    public function unsetError(): void
    {
        $this->error = [];
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
     * Converts the DirectDebitBankTransfer object to a human-readable string representation.
     *
     * @return string The string representation of the DirectDebitBankTransfer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DirectDebitBankTransfer',
            [
                'id' => $this->id,
                'legacyStoreId' => $this->legacyStoreId,
                'merchantId' => $this->merchantId,
                'bankAccountId' => $this->bankAccountId,
                'userNumber' => $this->userNumber,
                'bankCode' => $this->bankCode,
                'bankName' => $this->bankName,
                'branchCode' => $this->branchCode,
                'bankAccountType' => $this->bankAccountType,
                'bankAccountName' => $this->bankAccountName,
                'bankAccountNumber' => $this->bankAccountNumber,
                'amount' => $this->amount,
                'debitDate' => $this->debitDate,
                'calculatedDebitDate' => $this->calculatedDebitDate,
                'lock' => $this->lock,
                'status' => $this->status,
                'error' => $this->getError(),
                'createdOn' => $this->createdOn,
                'updatedOn' => $this->updatedOn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'legacy_store_id',
        'merchant_id',
        'bank_account_id',
        'user_number',
        'bank_code',
        'bank_name',
        'branch_code',
        'bank_account_type',
        'bank_account_name',
        'bank_account_number',
        'amount',
        'debit_date',
        'calculated_debit_date',
        'lock',
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
            $json['id']                    = $this->id;
        }
        if (isset($this->legacyStoreId)) {
            $json['legacy_store_id']       = $this->legacyStoreId;
        }
        if (isset($this->merchantId)) {
            $json['merchant_id']           = $this->merchantId;
        }
        if (isset($this->bankAccountId)) {
            $json['bank_account_id']       = $this->bankAccountId;
        }
        if (isset($this->userNumber)) {
            $json['user_number']           = $this->userNumber;
        }
        if (isset($this->bankCode)) {
            $json['bank_code']             = $this->bankCode;
        }
        if (isset($this->bankName)) {
            $json['bank_name']             = $this->bankName;
        }
        if (isset($this->branchCode)) {
            $json['branch_code']           = $this->branchCode;
        }
        if (isset($this->bankAccountType)) {
            $json['bank_account_type']     = DirectDebitBankAccountType::checkValue($this->bankAccountType);
        }
        if (isset($this->bankAccountName)) {
            $json['bank_account_name']     = $this->bankAccountName;
        }
        if (isset($this->bankAccountNumber)) {
            $json['bank_account_number']   = $this->bankAccountNumber;
        }
        if (isset($this->amount)) {
            $json['amount']                = $this->amount;
        }
        if (isset($this->debitDate)) {
            $json['debit_date']            = DirectDebitDebitDate::checkValue($this->debitDate);
        }
        if (isset($this->calculatedDebitDate)) {
            $json['calculated_debit_date'] = DateTimeHelper::toSimpleDate($this->calculatedDebitDate);
        }
        if (isset($this->lock)) {
            $json['lock']                  = DirectDebitBankTransferLock::checkValue($this->lock);
        }
        if (isset($this->status)) {
            $json['status']                = DirectDebitBankTransferStatus::checkValue($this->status);
        }
        if (!empty($this->error)) {
            $json['error']                 = DirectDebitBankTransferError::checkValue($this->error['value']);
        }
        if (isset($this->createdOn)) {
            $json['created_on']            = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        if (isset($this->updatedOn)) {
            $json['updated_on']            = DateTimeHelper::toRfc3339DateTime($this->updatedOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
