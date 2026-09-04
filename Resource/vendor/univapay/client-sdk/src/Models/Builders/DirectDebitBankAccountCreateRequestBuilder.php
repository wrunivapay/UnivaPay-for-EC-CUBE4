<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\DirectDebitBankAccountCreateRequest;

/**
 * Builder for model DirectDebitBankAccountCreateRequest
 *
 * @see DirectDebitBankAccountCreateRequest
 */
class DirectDebitBankAccountCreateRequestBuilder
{
    /**
     * @var DirectDebitBankAccountCreateRequest
     */
    private $instance;

    private function __construct(DirectDebitBankAccountCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Bank Account Create Request Builder object.
     *
     * @param string $userNumber
     * @param string $bankCode
     * @param string $bankName
     * @param string $branchCode
     * @param string $bankAccountType
     * @param string $bankAccountName
     * @param string $bankAccountNumber
     */
    public static function init(
        string $userNumber,
        string $bankCode,
        string $bankName,
        string $branchCode,
        string $bankAccountType,
        string $bankAccountName,
        string $bankAccountNumber
    ): self {
        return new self(new DirectDebitBankAccountCreateRequest(
            $userNumber,
            $bankCode,
            $bankName,
            $branchCode,
            $bankAccountType,
            $bankAccountName,
            $bankAccountNumber
        ));
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
     * Initializes a new Direct Debit Bank Account Create Request object.
     */
    public function build(): DirectDebitBankAccountCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
