<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionPatchPaymentRequest;

/**
 * Builder for model SubscriptionPatchPaymentRequest
 *
 * @see SubscriptionPatchPaymentRequest
 */
class SubscriptionPatchPaymentRequestBuilder
{
    /**
     * @var SubscriptionPatchPaymentRequest
     */
    private $instance;

    private function __construct(SubscriptionPatchPaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Patch Payment Request Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionPatchPaymentRequest());
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
     * Sets retry interval field.
     *
     * @param string|null $value
     */
    public function retryInterval(?string $value): self
    {
        $this->instance->setRetryInterval($value);
        return $this;
    }

    /**
     * Unsets retry interval field.
     */
    public function unsetRetryInterval(): self
    {
        $this->instance->unsetRetryInterval();
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
     * Initializes a new Subscription Patch Payment Request object.
     */
    public function build(): SubscriptionPatchPaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
