<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponseBankTransferData;

/**
 * Builder for model TokenResponseBankTransferData
 *
 * @see TokenResponseBankTransferData
 */
class TokenResponseBankTransferDataBuilder
{
    /**
     * @var TokenResponseBankTransferData
     */
    private $instance;

    private function __construct(TokenResponseBankTransferData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Bank Transfer Data Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponseBankTransferData());
    }

    /**
     * Sets brand field.
     *
     * @param string|null $value
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
    }

    /**
     * Sets expiration period field.
     *
     * @param string|null $value
     */
    public function expirationPeriod(?string $value): self
    {
        $this->instance->setExpirationPeriod($value);
        return $this;
    }

    /**
     * Sets expiration time shift field.
     *
     * @param string|null $value
     */
    public function expirationTimeShift(?string $value): self
    {
        $this->instance->setExpirationTimeShift($value);
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
     * Unsets bank code field.
     */
    public function unsetBankCode(): self
    {
        $this->instance->unsetBankCode();
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
     * Unsets bank name field.
     */
    public function unsetBankName(): self
    {
        $this->instance->unsetBankName();
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
     * Unsets branch code field.
     */
    public function unsetBranchCode(): self
    {
        $this->instance->unsetBranchCode();
        return $this;
    }

    /**
     * Sets branch name field.
     *
     * @param string|null $value
     */
    public function branchName(?string $value): self
    {
        $this->instance->setBranchName($value);
        return $this;
    }

    /**
     * Unsets branch name field.
     */
    public function unsetBranchName(): self
    {
        $this->instance->unsetBranchName();
        return $this;
    }

    /**
     * Sets account number field.
     *
     * @param string|null $value
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
        return $this;
    }

    /**
     * Sets account holder name field.
     *
     * @param string|null $value
     */
    public function accountHolderName(?string $value): self
    {
        $this->instance->setAccountHolderName($value);
        return $this;
    }

    /**
     * Unsets account holder name field.
     */
    public function unsetAccountHolderName(): self
    {
        $this->instance->unsetAccountHolderName();
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
     * Initializes a new Token Response Bank Transfer Data object.
     */
    public function build(): TokenResponseBankTransferData
    {
        return CoreHelper::clone($this->instance);
    }
}
