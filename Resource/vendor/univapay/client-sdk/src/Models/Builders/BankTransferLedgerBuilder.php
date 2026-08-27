<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\BankTransferLedger;

/**
 * Builder for model BankTransferLedger
 *
 * @see BankTransferLedger
 */
class BankTransferLedgerBuilder
{
    /**
     * @var BankTransferLedger
     */
    private $instance;

    private function __construct(BankTransferLedger $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Transfer Ledger Builder object.
     */
    public static function init(): self
    {
        return new self(new BankTransferLedger());
    }

    /**
     * Sets bank ledger type field.
     *
     * @param string|null $value
     */
    public function bankLedgerType(?string $value): self
    {
        $this->instance->setBankLedgerType($value);
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param int|null $value
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets balance field.
     *
     * @param int|null $value
     */
    public function balance(?int $value): self
    {
        $this->instance->setBalance($value);
        return $this;
    }

    /**
     * Sets virtual bank account holder name field.
     *
     * @param string|null $value
     */
    public function virtualBankAccountHolderName(?string $value): self
    {
        $this->instance->setVirtualBankAccountHolderName($value);
        return $this;
    }

    /**
     * Sets virtual bank account number field.
     *
     * @param string|null $value
     */
    public function virtualBankAccountNumber(?string $value): self
    {
        $this->instance->setVirtualBankAccountNumber($value);
        return $this;
    }

    /**
     * Sets virtual account id field.
     *
     * @param string|null $value
     */
    public function virtualAccountId(?string $value): self
    {
        $this->instance->setVirtualAccountId($value);
        return $this;
    }

    /**
     * Sets transaction date field.
     *
     * @param \DateTime|null $value
     */
    public function transactionDate(?\DateTime $value): self
    {
        $this->instance->setTransactionDate($value);
        return $this;
    }

    /**
     * Sets transaction timestamp field.
     *
     * @param \DateTime|null $value
     */
    public function transactionTimestamp(?\DateTime $value): self
    {
        $this->instance->setTransactionTimestamp($value);
        return $this;
    }

    /**
     * Sets mode field.
     *
     * @param string|null $value
     */
    public function mode(?string $value): self
    {
        $this->instance->setMode($value);
        return $this;
    }

    /**
     * Sets created on field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Bank Transfer Ledger object.
     */
    public function build(): BankTransferLedger
    {
        return CoreHelper::clone($this->instance);
    }
}
