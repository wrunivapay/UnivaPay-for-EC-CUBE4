<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\DirectDebitBankAccountUpdateRequest;

/**
 * Builder for model DirectDebitBankAccountUpdateRequest
 *
 * @see DirectDebitBankAccountUpdateRequest
 */
class DirectDebitBankAccountUpdateRequestBuilder
{
    /**
     * @var DirectDebitBankAccountUpdateRequest
     */
    private $instance;

    private function __construct(DirectDebitBankAccountUpdateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Bank Account Update Request Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitBankAccountUpdateRequest());
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
     * Initializes a new Direct Debit Bank Account Update Request object.
     */
    public function build(): DirectDebitBankAccountUpdateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
