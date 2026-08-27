<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TransactionTokenListItem;
use UnivaPay\Models\TransactionTokenListItemUserData;

/**
 * Builder for model TransactionTokenListItem
 *
 * @see TransactionTokenListItem
 */
class TransactionTokenListItemBuilder
{
    /**
     * @var TransactionTokenListItem
     */
    private $instance;

    private function __construct(TransactionTokenListItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction Token List Item Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionTokenListItem());
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
     * Sets store id field.
     *
     * @param string|null $value
     */
    public function storeId(?string $value): self
    {
        $this->instance->setStoreId($value);
        return $this;
    }

    /**
     * Sets merchant name field.
     *
     * @param string|null $value
     */
    public function merchantName(?string $value): self
    {
        $this->instance->setMerchantName($value);
        return $this;
    }

    /**
     * Sets store name field.
     *
     * @param string|null $value
     */
    public function storeName(?string $value): self
    {
        $this->instance->setStoreName($value);
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
     * Sets payment type field.
     *
     * @param string|null $value
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Sets active field.
     *
     * @param bool|null $value
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
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
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
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
     * Sets user data field.
     *
     * @param TransactionTokenListItemUserData|null $value
     */
    public function userData(?TransactionTokenListItemUserData $value): self
    {
        $this->instance->setUserData($value);
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
     * Initializes a new Transaction Token List Item object.
     */
    public function build(): TransactionTokenListItem
    {
        return CoreHelper::clone($this->instance);
    }
}
