<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionNextPayment;

/**
 * Builder for model SubscriptionNextPayment
 *
 * @see SubscriptionNextPayment
 */
class SubscriptionNextPaymentBuilder
{
    /**
     * @var SubscriptionNextPayment
     */
    private $instance;

    private function __construct(SubscriptionNextPayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Next Payment Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionNextPayment());
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
     * Sets due date field.
     *
     * @param \DateTime|null $value
     */
    public function dueDate(?\DateTime $value): self
    {
        $this->instance->setDueDate($value);
        return $this;
    }

    /**
     * Sets zone id field.
     *
     * @param string|null $value
     */
    public function zoneId(?string $value): self
    {
        $this->instance->setZoneId($value);
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
     * Sets is paid field.
     *
     * @param bool|null $value
     */
    public function isPaid(?bool $value): self
    {
        $this->instance->setIsPaid($value);
        return $this;
    }

    /**
     * Sets is last payment field.
     *
     * @param bool|null $value
     */
    public function isLastPayment(?bool $value): self
    {
        $this->instance->setIsLastPayment($value);
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
     * Sets retry date field.
     *
     * @param \DateTime|null $value
     */
    public function retryDate(?\DateTime $value): self
    {
        $this->instance->setRetryDate($value);
        return $this;
    }

    /**
     * Unsets retry date field.
     */
    public function unsetRetryDate(): self
    {
        $this->instance->unsetRetryDate();
        return $this;
    }

    /**
     * Sets terminate with status field.
     *
     * @param string|null $value
     */
    public function terminateWithStatus(?string $value): self
    {
        $this->instance->setTerminateWithStatus($value);
        return $this;
    }

    /**
     * Unsets terminate with status field.
     */
    public function unsetTerminateWithStatus(): self
    {
        $this->instance->unsetTerminateWithStatus();
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
     * Initializes a new Subscription Next Payment object.
     */
    public function build(): SubscriptionNextPayment
    {
        return CoreHelper::clone($this->instance);
    }
}
