<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\BankTransferStatusData;
use UnivaPay\Models\GenericMetadata;

/**
 * Builder for model BankTransferStatusData
 *
 * @see BankTransferStatusData
 */
class BankTransferStatusDataBuilder
{
    /**
     * @var BankTransferStatusData
     */
    private $instance;

    private function __construct(BankTransferStatusData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Transfer Status Data Builder object.
     */
    public static function init(): self
    {
        return new self(new BankTransferStatusData());
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
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets charge id field.
     *
     * @param string|null $value
     */
    public function chargeId(?string $value): self
    {
        $this->instance->setChargeId($value);
        return $this;
    }

    /**
     * Sets payment status field.
     *
     * @param string|null $value
     */
    public function paymentStatus(?string $value): self
    {
        $this->instance->setPaymentStatus($value);
        return $this;
    }

    /**
     * Sets latest deposit date field.
     *
     * @param \DateTime|null $value
     */
    public function latestDepositDate(?\DateTime $value): self
    {
        $this->instance->setLatestDepositDate($value);
        return $this;
    }

    /**
     * Unsets latest deposit date field.
     */
    public function unsetLatestDepositDate(): self
    {
        $this->instance->unsetLatestDepositDate();
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
     * Unsets created on field.
     */
    public function unsetCreatedOn(): self
    {
        $this->instance->unsetCreatedOn();
        return $this;
    }

    /**
     * Sets latest deposit amount field.
     *
     * @param int|null $value
     */
    public function latestDepositAmount(?int $value): self
    {
        $this->instance->setLatestDepositAmount($value);
        return $this;
    }

    /**
     * Unsets latest deposit amount field.
     */
    public function unsetLatestDepositAmount(): self
    {
        $this->instance->unsetLatestDepositAmount();
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
     * Unsets balance field.
     */
    public function unsetBalance(): self
    {
        $this->instance->unsetBalance();
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
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
     * Sets amount difference field.
     *
     * @param int|null $value
     */
    public function amountDifference(?int $value): self
    {
        $this->instance->setAmountDifference($value);
        return $this;
    }

    /**
     * Unsets amount difference field.
     */
    public function unsetAmountDifference(): self
    {
        $this->instance->unsetAmountDifference();
        return $this;
    }

    /**
     * Sets token metadata field.
     *
     * @param GenericMetadata|null $value
     */
    public function tokenMetadata(?GenericMetadata $value): self
    {
        $this->instance->setTokenMetadata($value);
        return $this;
    }

    /**
     * Sets charge metadata field.
     *
     * @param GenericMetadata|null $value
     */
    public function chargeMetadata(?GenericMetadata $value): self
    {
        $this->instance->setChargeMetadata($value);
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
     * Initializes a new Bank Transfer Status Data object.
     */
    public function build(): BankTransferStatusData
    {
        return CoreHelper::clone($this->instance);
    }
}
