<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionUpdateNextPayment;

/**
 * Builder for model SubscriptionUpdateNextPayment
 *
 * @see SubscriptionUpdateNextPayment
 */
class SubscriptionUpdateNextPaymentBuilder
{
    /**
     * @var SubscriptionUpdateNextPayment
     */
    private $instance;

    private function __construct(SubscriptionUpdateNextPayment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Update Next Payment Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionUpdateNextPayment());
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
     * Initializes a new Subscription Update Next Payment object.
     */
    public function build(): SubscriptionUpdateNextPayment
    {
        return CoreHelper::clone($this->instance);
    }
}
