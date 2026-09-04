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
 * Single bank transfer ledger entry associated with a charge.
 */
class BankTransferLedger implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bankLedgerType;

    /**
     * @var int|null
     */
    private $amount;

    /**
     * @var int|null
     */
    private $balance;

    /**
     * @var string|null
     */
    private $virtualBankAccountHolderName;

    /**
     * @var string|null
     */
    private $virtualBankAccountNumber;

    /**
     * @var string|null
     */
    private $virtualAccountId;

    /**
     * @var \DateTime|null
     */
    private $transactionDate;

    /**
     * @var \DateTime|null
     */
    private $transactionTimestamp;

    /**
     * @var string|null
     */
    private $mode;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * Returns Bank Ledger Type.
     * Bank Transfer Ledger Bank Ledger Type schema.
     */
    public function getBankLedgerType(): ?string
    {
        return $this->bankLedgerType;
    }

    /**
     * Sets Bank Ledger Type.
     * Bank Transfer Ledger Bank Ledger Type schema.
     *
     * @maps bank_ledger_type
     * @factory \UnivaPay\Models\BankTransferLedgerBankLedgerType::checkValue
     */
    public function setBankLedgerType(?string $bankLedgerType): void
    {
        $this->bankLedgerType = $bankLedgerType;
    }

    /**
     * Returns Amount.
     * Amount in the smallest currency unit.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Amount in the smallest currency unit.
     *
     * @maps amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Balance.
     * Current balance in the smallest currency unit.
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * Sets Balance.
     * Current balance in the smallest currency unit.
     *
     * @maps balance
     */
    public function setBalance(?int $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * Returns Virtual Bank Account Holder Name.
     * Virtual bank account holder name.
     */
    public function getVirtualBankAccountHolderName(): ?string
    {
        return $this->virtualBankAccountHolderName;
    }

    /**
     * Sets Virtual Bank Account Holder Name.
     * Virtual bank account holder name.
     *
     * @maps virtual_bank_account_holder_name
     */
    public function setVirtualBankAccountHolderName(?string $virtualBankAccountHolderName): void
    {
        $this->virtualBankAccountHolderName = $virtualBankAccountHolderName;
    }

    /**
     * Returns Virtual Bank Account Number.
     * Virtual bank account number.
     */
    public function getVirtualBankAccountNumber(): ?string
    {
        return $this->virtualBankAccountNumber;
    }

    /**
     * Sets Virtual Bank Account Number.
     * Virtual bank account number.
     *
     * @maps virtual_bank_account_number
     */
    public function setVirtualBankAccountNumber(?string $virtualBankAccountNumber): void
    {
        $this->virtualBankAccountNumber = $virtualBankAccountNumber;
    }

    /**
     * Returns Virtual Account Id.
     * Virtual account id value.
     */
    public function getVirtualAccountId(): ?string
    {
        return $this->virtualAccountId;
    }

    /**
     * Sets Virtual Account Id.
     * Virtual account id value.
     *
     * @maps virtual_account_id
     */
    public function setVirtualAccountId(?string $virtualAccountId): void
    {
        $this->virtualAccountId = $virtualAccountId;
    }

    /**
     * Returns Transaction Date.
     * Transaction date.
     */
    public function getTransactionDate(): ?\DateTime
    {
        return $this->transactionDate;
    }

    /**
     * Sets Transaction Date.
     * Transaction date.
     *
     * @maps transaction_date
     * @factory \UnivaPay\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setTransactionDate(?\DateTime $transactionDate): void
    {
        $this->transactionDate = $transactionDate;
    }

    /**
     * Returns Transaction Timestamp.
     * Transaction timestamp.
     */
    public function getTransactionTimestamp(): ?\DateTime
    {
        return $this->transactionTimestamp;
    }

    /**
     * Sets Transaction Timestamp.
     * Transaction timestamp.
     *
     * @maps transaction_timestamp
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setTransactionTimestamp(?\DateTime $transactionTimestamp): void
    {
        $this->transactionTimestamp = $transactionTimestamp;
    }

    /**
     * Returns Mode.
     * Bank Transfer Ledger Mode schema.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Bank Transfer Ledger Mode schema.
     *
     * @maps mode
     * @factory \UnivaPay\Models\BankTransferLedgerMode::checkValue
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
     * Converts the BankTransferLedger object to a human-readable string representation.
     *
     * @return string The string representation of the BankTransferLedger object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankTransferLedger',
            [
                'bankLedgerType' => $this->bankLedgerType,
                'amount' => $this->amount,
                'balance' => $this->balance,
                'virtualBankAccountHolderName' => $this->virtualBankAccountHolderName,
                'virtualBankAccountNumber' => $this->virtualBankAccountNumber,
                'virtualAccountId' => $this->virtualAccountId,
                'transactionDate' => $this->transactionDate,
                'transactionTimestamp' => $this->transactionTimestamp,
                'mode' => $this->mode,
                'createdOn' => $this->createdOn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'bank_ledger_type',
        'amount',
        'balance',
        'virtual_bank_account_holder_name',
        'virtual_bank_account_number',
        'virtual_account_id',
        'transaction_date',
        'transaction_timestamp',
        'mode',
        'created_on'
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
        if (isset($this->bankLedgerType)) {
            $json['bank_ledger_type']                 =
                BankTransferLedgerBankLedgerType::checkValue(
                    $this->bankLedgerType
                );
        }
        if (isset($this->amount)) {
            $json['amount']                           = $this->amount;
        }
        if (isset($this->balance)) {
            $json['balance']                          = $this->balance;
        }
        if (isset($this->virtualBankAccountHolderName)) {
            $json['virtual_bank_account_holder_name'] = $this->virtualBankAccountHolderName;
        }
        if (isset($this->virtualBankAccountNumber)) {
            $json['virtual_bank_account_number']      = $this->virtualBankAccountNumber;
        }
        if (isset($this->virtualAccountId)) {
            $json['virtual_account_id']               = $this->virtualAccountId;
        }
        if (isset($this->transactionDate)) {
            $json['transaction_date']                 = DateTimeHelper::toSimpleDate($this->transactionDate);
        }
        if (isset($this->transactionTimestamp)) {
            $json['transaction_timestamp']            = DateTimeHelper::toRfc3339DateTime($this->transactionTimestamp);
        }
        if (isset($this->mode)) {
            $json['mode']                             = BankTransferLedgerMode::checkValue($this->mode);
        }
        if (isset($this->createdOn)) {
            $json['created_on']                       = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
