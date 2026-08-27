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
 * Request payload for updating a registered bank account. Omitted fields are left unchanged.
 */
class DirectDebitBankAccountUpdateRequest implements \JsonSerializable
{
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
     * Converts the DirectDebitBankAccountUpdateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the DirectDebitBankAccountUpdateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DirectDebitBankAccountUpdateRequest',
            [
                'userNumber' => $this->userNumber,
                'bankCode' => $this->bankCode,
                'bankName' => $this->bankName,
                'branchCode' => $this->branchCode,
                'bankAccountType' => $this->bankAccountType,
                'bankAccountName' => $this->bankAccountName,
                'bankAccountNumber' => $this->bankAccountNumber,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'user_number',
        'bank_code',
        'bank_name',
        'branch_code',
        'bank_account_type',
        'bank_account_name',
        'bank_account_number'
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
        if (isset($this->userNumber)) {
            $json['user_number']         = $this->userNumber;
        }
        if (isset($this->bankCode)) {
            $json['bank_code']           = $this->bankCode;
        }
        if (isset($this->bankName)) {
            $json['bank_name']           = $this->bankName;
        }
        if (isset($this->branchCode)) {
            $json['branch_code']         = $this->branchCode;
        }
        if (isset($this->bankAccountType)) {
            $json['bank_account_type']   = DirectDebitBankAccountType::checkValue($this->bankAccountType);
        }
        if (isset($this->bankAccountName)) {
            $json['bank_account_name']   = $this->bankAccountName;
        }
        if (isset($this->bankAccountNumber)) {
            $json['bank_account_number'] = $this->bankAccountNumber;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
