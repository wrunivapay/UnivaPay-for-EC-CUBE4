<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\DirectDebitBankTransfer;
use UnivaPay\Models\DirectDebitBankTransferList;

/**
 * Builder for model DirectDebitBankTransferList
 *
 * @see DirectDebitBankTransferList
 */
class DirectDebitBankTransferListBuilder
{
    /**
     * @var DirectDebitBankTransferList
     */
    private $instance;

    private function __construct(DirectDebitBankTransferList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Bank Transfer List Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitBankTransferList());
    }

    /**
     * Sets items field.
     *
     * @param DirectDebitBankTransfer[]|null $value
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
        return $this;
    }

    /**
     * Sets has more field.
     *
     * @param bool|null $value
     */
    public function hasMore(?bool $value): self
    {
        $this->instance->setHasMore($value);
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
     * Initializes a new Direct Debit Bank Transfer List object.
     */
    public function build(): DirectDebitBankTransferList
    {
        return CoreHelper::clone($this->instance);
    }
}
