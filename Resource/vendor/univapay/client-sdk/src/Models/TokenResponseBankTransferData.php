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
 * Token Response Bank Transfer Data schema.
 */
class TokenResponseBankTransferData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $brand;

    /**
     * @var string|null
     */
    private $expirationPeriod;

    /**
     * @var string|null
     */
    private $expirationTimeShift;

    /**
     * @var array
     */
    private $bankCode = [];

    /**
     * @var array
     */
    private $bankName = [];

    /**
     * @var array
     */
    private $branchCode = [];

    /**
     * @var array
     */
    private $branchName = [];

    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var array
     */
    private $accountHolderName = [];

    /**
     * Returns Brand.
     * The bank brand identifier (e.g., 'aozora_bank').
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * Sets Brand.
     * The bank brand identifier (e.g., 'aozora_bank').
     *
     * @maps brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * Returns Expiration Period.
     * ISO 8601 duration format (e.g., 'PT168H').
     */
    public function getExpirationPeriod(): ?string
    {
        return $this->expirationPeriod;
    }

    /**
     * Sets Expiration Period.
     * ISO 8601 duration format (e.g., 'PT168H').
     *
     * @maps expiration_period
     */
    public function setExpirationPeriod(?string $expirationPeriod): void
    {
        $this->expirationPeriod = $expirationPeriod;
    }

    /**
     * Returns Expiration Time Shift.
     * Time shift applied to the expiration, typically pushing it to the end of the day  in a specific
     * timezone (e.g., '23:59:59+09:00').
     */
    public function getExpirationTimeShift(): ?string
    {
        return $this->expirationTimeShift;
    }

    /**
     * Sets Expiration Time Shift.
     * Time shift applied to the expiration, typically pushing it to the end of the day  in a specific
     * timezone (e.g., '23:59:59+09:00').
     *
     * @maps expiration_time_shift
     */
    public function setExpirationTimeShift(?string $expirationTimeShift): void
    {
        $this->expirationTimeShift = $expirationTimeShift;
    }

    /**
     * Returns Bank Code.
     * Bank code value.
     */
    public function getBankCode(): ?string
    {
        if (count($this->bankCode) == 0) {
            return null;
        }
        return $this->bankCode['value'];
    }

    /**
     * Sets Bank Code.
     * Bank code value.
     *
     * @maps bank_code
     */
    public function setBankCode(?string $bankCode): void
    {
        $this->bankCode['value'] = $bankCode;
    }

    /**
     * Unsets Bank Code.
     * Bank code value.
     */
    public function unsetBankCode(): void
    {
        $this->bankCode = [];
    }

    /**
     * Returns Bank Name.
     * Bank name value.
     */
    public function getBankName(): ?string
    {
        if (count($this->bankName) == 0) {
            return null;
        }
        return $this->bankName['value'];
    }

    /**
     * Sets Bank Name.
     * Bank name value.
     *
     * @maps bank_name
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName['value'] = $bankName;
    }

    /**
     * Unsets Bank Name.
     * Bank name value.
     */
    public function unsetBankName(): void
    {
        $this->bankName = [];
    }

    /**
     * Returns Branch Code.
     * Bank branch code.
     */
    public function getBranchCode(): ?string
    {
        if (count($this->branchCode) == 0) {
            return null;
        }
        return $this->branchCode['value'];
    }

    /**
     * Sets Branch Code.
     * Bank branch code.
     *
     * @maps branch_code
     */
    public function setBranchCode(?string $branchCode): void
    {
        $this->branchCode['value'] = $branchCode;
    }

    /**
     * Unsets Branch Code.
     * Bank branch code.
     */
    public function unsetBranchCode(): void
    {
        $this->branchCode = [];
    }

    /**
     * Returns Branch Name.
     * Bank branch name.
     */
    public function getBranchName(): ?string
    {
        if (count($this->branchName) == 0) {
            return null;
        }
        return $this->branchName['value'];
    }

    /**
     * Sets Branch Name.
     * Bank branch name.
     *
     * @maps branch_name
     */
    public function setBranchName(?string $branchName): void
    {
        $this->branchName['value'] = $branchName;
    }

    /**
     * Unsets Branch Name.
     * Bank branch name.
     */
    public function unsetBranchName(): void
    {
        $this->branchName = [];
    }

    /**
     * Returns Account Number.
     * Bank account number.
     */
    public function getAccountNumber(): ?string
    {
        if (count($this->accountNumber) == 0) {
            return null;
        }
        return $this->accountNumber['value'];
    }

    /**
     * Sets Account Number.
     * Bank account number.
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Bank account number.
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Account Holder Name.
     * Bank account holder name.
     */
    public function getAccountHolderName(): ?string
    {
        if (count($this->accountHolderName) == 0) {
            return null;
        }
        return $this->accountHolderName['value'];
    }

    /**
     * Sets Account Holder Name.
     * Bank account holder name.
     *
     * @maps account_holder_name
     */
    public function setAccountHolderName(?string $accountHolderName): void
    {
        $this->accountHolderName['value'] = $accountHolderName;
    }

    /**
     * Unsets Account Holder Name.
     * Bank account holder name.
     */
    public function unsetAccountHolderName(): void
    {
        $this->accountHolderName = [];
    }

    /**
     * Converts the TokenResponseBankTransferData object to a human-readable string representation.
     *
     * @return string The string representation of the TokenResponseBankTransferData object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenResponseBankTransferData',
            [
                'brand' => $this->brand,
                'expirationPeriod' => $this->expirationPeriod,
                'expirationTimeShift' => $this->expirationTimeShift,
                'bankCode' => $this->getBankCode(),
                'bankName' => $this->getBankName(),
                'branchCode' => $this->getBranchCode(),
                'branchName' => $this->getBranchName(),
                'accountNumber' => $this->getAccountNumber(),
                'accountHolderName' => $this->getAccountHolderName(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'brand',
        'expiration_period',
        'expiration_time_shift',
        'bank_code',
        'bank_name',
        'branch_code',
        'branch_name',
        'account_number',
        'account_holder_name'
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
        if (isset($this->brand)) {
            $json['brand']                 = $this->brand;
        }
        if (isset($this->expirationPeriod)) {
            $json['expiration_period']     = $this->expirationPeriod;
        }
        if (isset($this->expirationTimeShift)) {
            $json['expiration_time_shift'] = $this->expirationTimeShift;
        }
        if (!empty($this->bankCode)) {
            $json['bank_code']             = $this->bankCode['value'];
        }
        if (!empty($this->bankName)) {
            $json['bank_name']             = $this->bankName['value'];
        }
        if (!empty($this->branchCode)) {
            $json['branch_code']           = $this->branchCode['value'];
        }
        if (!empty($this->branchName)) {
            $json['branch_name']           = $this->branchName['value'];
        }
        if (!empty($this->accountNumber)) {
            $json['account_number']        = $this->accountNumber['value'];
        }
        if (!empty($this->accountHolderName)) {
            $json['account_holder_name']   = $this->accountHolderName['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
