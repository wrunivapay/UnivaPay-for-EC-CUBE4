<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\DirectDebitBankTransferCreateRequest;

/**
 * Builder for model DirectDebitBankTransferCreateRequest
 *
 * @see DirectDebitBankTransferCreateRequest
 */
class DirectDebitBankTransferCreateRequestBuilder
{
    /**
     * @var DirectDebitBankTransferCreateRequest
     */
    private $instance;

    private function __construct(DirectDebitBankTransferCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Bank Transfer Create Request Builder object.
     *
     * @param int $amount
     */
    public static function init(int $amount): self
    {
        return new self(new DirectDebitBankTransferCreateRequest($amount));
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
     * Initializes a new Direct Debit Bank Transfer Create Request object.
     */
    public function build(): DirectDebitBankTransferCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
