<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\GenericMetadata;
use UnivaPay\Models\TransactionHistoryItem;
use UnivaPay\Models\TransactionHistoryUserData;

/**
 * Builder for model TransactionHistoryItem
 *
 * @see TransactionHistoryItem
 */
class TransactionHistoryItemBuilder
{
    /**
     * @var TransactionHistoryItem
     */
    private $instance;

    private function __construct(TransactionHistoryItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction History Item Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionHistoryItem());
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
     * Sets resource id field.
     *
     * @param string|null $value
     */
    public function resourceId(?string $value): self
    {
        $this->instance->setResourceId($value);
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
     * Unsets charge id field.
     */
    public function unsetChargeId(): self
    {
        $this->instance->unsetChargeId();
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
     * Sets amount formatted field.
     *
     * @param float|null $value
     */
    public function amountFormatted(?float $value): self
    {
        $this->instance->setAmountFormatted($value);
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
     * Sets metadata field.
     *
     * @param GenericMetadata|null $value
     */
    public function metadata(?GenericMetadata $value): self
    {
        $this->instance->setMetadata($value);
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
     * Sets user data field.
     *
     * @param TransactionHistoryUserData|null $value
     */
    public function userData(?TransactionHistoryUserData $value): self
    {
        $this->instance->setUserData($value);
        return $this;
    }

    /**
     * Sets bank transfer payment status field.
     *
     * @param string|null $value
     */
    public function bankTransferPaymentStatus(?string $value): self
    {
        $this->instance->setBankTransferPaymentStatus($value);
        return $this;
    }

    /**
     * Unsets bank transfer payment status field.
     */
    public function unsetBankTransferPaymentStatus(): self
    {
        $this->instance->unsetBankTransferPaymentStatus();
        return $this;
    }

    /**
     * Sets bank transfer latest deposit date field.
     *
     * @param \DateTime|null $value
     */
    public function bankTransferLatestDepositDate(?\DateTime $value): self
    {
        $this->instance->setBankTransferLatestDepositDate($value);
        return $this;
    }

    /**
     * Unsets bank transfer latest deposit date field.
     */
    public function unsetBankTransferLatestDepositDate(): self
    {
        $this->instance->unsetBankTransferLatestDepositDate();
        return $this;
    }

    /**
     * Sets mcp token id field.
     *
     * @param string|null $value
     */
    public function mcpTokenId(?string $value): self
    {
        $this->instance->setMcpTokenId($value);
        return $this;
    }

    /**
     * Unsets mcp token id field.
     */
    public function unsetMcpTokenId(): self
    {
        $this->instance->unsetMcpTokenId();
        return $this;
    }

    /**
     * Sets charge type field.
     *
     * @param string|null $value
     */
    public function chargeType(?string $value): self
    {
        $this->instance->setChargeType($value);
        return $this;
    }

    /**
     * Unsets charge type field.
     */
    public function unsetChargeType(): self
    {
        $this->instance->unsetChargeType();
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
     * Initializes a new Transaction History Item object.
     */
    public function build(): TransactionHistoryItem
    {
        return CoreHelper::clone($this->instance);
    }
}
