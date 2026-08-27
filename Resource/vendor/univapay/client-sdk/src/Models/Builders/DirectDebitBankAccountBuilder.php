<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\DirectDebitBankAccount;

/**
 * Builder for model DirectDebitBankAccount
 *
 * @see DirectDebitBankAccount
 */
class DirectDebitBankAccountBuilder
{
    /**
     * @var DirectDebitBankAccount
     */
    private $instance;

    private function __construct(DirectDebitBankAccount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Bank Account Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitBankAccount());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets legacy store id field.
     *
     * @param string|null $value
     */
    public function legacyStoreId(?string $value): self
    {
        $this->instance->setLegacyStoreId($value);
        return $this;
    }

    /**
     * Sets merchant id field.
     *
     * @param string|null $value
     */
    public function merchantId(?string $value): self
    {
        $this->instance->setMerchantId($value);
        return $this;
    }

    /**
     * Sets user number field.
     *
     * @param string|null $value
     */
    public function userNumber(?string $value): self
    {
        $this->instance->setUserNumber($value);
        return $this;
    }

    /**
     * Sets bank code field.
     *
     * @param string|null $value
     */
    public function bankCode(?string $value): self
    {
        $this->instance->setBankCode($value);
        return $this;
    }

    /**
     * Sets bank name field.
     *
     * @param string|null $value
     */
    public function bankName(?string $value): self
    {
        $this->instance->setBankName($value);
        return $this;
    }

    /**
     * Sets branch code field.
     *
     * @param string|null $value
     */
    public function branchCode(?string $value): self
    {
        $this->instance->setBranchCode($value);
        return $this;
    }

    /**
     * Sets bank account type field.
     *
     * @param string|null $value
     */
    public function bankAccountType(?string $value): self
    {
        $this->instance->setBankAccountType($value);
        return $this;
    }

    /**
     * Sets bank account name field.
     *
     * @param string|null $value
     */
    public function bankAccountName(?string $value): self
    {
        $this->instance->setBankAccountName($value);
        return $this;
    }

    /**
     * Sets bank account number field.
     *
     * @param string|null $value
     */
    public function bankAccountNumber(?string $value): self
    {
        $this->instance->setBankAccountNumber($value);
        return $this;
    }

    /**
     * Sets registration origin field.
     *
     * @param string|null $value
     */
    public function registrationOrigin(?string $value): self
    {
        $this->instance->setRegistrationOrigin($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
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
     * Sets updated on field.
     *
     * @param \DateTime|null $value
     */
    public function updatedOn(?\DateTime $value): self
    {
        $this->instance->setUpdatedOn($value);
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
     * Initializes a new Direct Debit Bank Account object.
     */
    public function build(): DirectDebitBankAccount
    {
        return CoreHelper::clone($this->instance);
    }
}
