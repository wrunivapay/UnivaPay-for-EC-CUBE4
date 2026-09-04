<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TransactionHistoryRefund;

/**
 * Builder for model TransactionHistoryRefund
 *
 * @see TransactionHistoryRefund
 */
class TransactionHistoryRefundBuilder
{
    /**
     * @var TransactionHistoryRefund
     */
    private $instance;

    private function __construct(TransactionHistoryRefund $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction History Refund Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionHistoryRefund());
    }

    /**
     * Sets refund id field.
     *
     * @param string|null $value
     */
    public function refundId(?string $value): self
    {
        $this->instance->setRefundId($value);
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
     * Sets reason field.
     *
     * @param string|null $value
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
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
     * Initializes a new Transaction History Refund object.
     */
    public function build(): TransactionHistoryRefund
    {
        return CoreHelper::clone($this->instance);
    }
}
