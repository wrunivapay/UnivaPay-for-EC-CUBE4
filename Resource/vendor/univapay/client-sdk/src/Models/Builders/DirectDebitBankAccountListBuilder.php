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
use UnivaPay\Models\DirectDebitBankAccountList;

/**
 * Builder for model DirectDebitBankAccountList
 *
 * @see DirectDebitBankAccountList
 */
class DirectDebitBankAccountListBuilder
{
    /**
     * @var DirectDebitBankAccountList
     */
    private $instance;

    private function __construct(DirectDebitBankAccountList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Bank Account List Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitBankAccountList());
    }

    /**
     * Sets items field.
     *
     * @param DirectDebitBankAccount[]|null $value
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
     * Initializes a new Direct Debit Bank Account List object.
     */
    public function build(): DirectDebitBankAccountList
    {
        return CoreHelper::clone($this->instance);
    }
}
