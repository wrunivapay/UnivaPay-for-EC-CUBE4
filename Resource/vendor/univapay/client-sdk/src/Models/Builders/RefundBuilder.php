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
use UnivaPay\Models\PaymentError;
use UnivaPay\Models\Refund;

/**
 * Builder for model Refund
 *
 * @see Refund
 */
class RefundBuilder
{
    /**
     * @var Refund
     */
    private $instance;

    private function __construct(Refund $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Builder object.
     */
    public static function init(): self
    {
        return new self(new Refund());
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
     * Unsets reason field.
     */
    public function unsetReason(): self
    {
        $this->instance->unsetReason();
        return $this;
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Unsets message field.
     */
    public function unsetMessage(): self
    {
        $this->instance->unsetMessage();
        return $this;
    }

    /**
     * Sets error field.
     *
     * @param PaymentError|null $value
     */
    public function error(?PaymentError $value): self
    {
        $this->instance->setError($value);
        return $this;
    }

    /**
     * Unsets error field.
     */
    public function unsetError(): self
    {
        $this->instance->unsetError();
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
     * Initializes a new Refund object.
     */
    public function build(): Refund
    {
        return CoreHelper::clone($this->instance);
    }
}
