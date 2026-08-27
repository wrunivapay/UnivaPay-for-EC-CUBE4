<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TransactionTokenListItemUserData;

/**
 * Builder for model TransactionTokenListItemUserData
 *
 * @see TransactionTokenListItemUserData
 */
class TransactionTokenListItemUserDataBuilder
{
    /**
     * @var TransactionTokenListItemUserData
     */
    private $instance;

    private function __construct(TransactionTokenListItemUserData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction Token List Item User Data Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionTokenListItemUserData());
    }

    /**
     * Sets cardholder name field.
     *
     * @param string|null $value
     */
    public function cardholderName(?string $value): self
    {
        $this->instance->setCardholderName($value);
        return $this;
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
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
     * Initializes a new Transaction Token List Item User Data object.
     */
    public function build(): TransactionTokenListItemUserData
    {
        return CoreHelper::clone($this->instance);
    }
}
