<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutMoneyAmount;
use UnivaPay\Models\RecurringCvvConfirmation;

/**
 * Builder for model RecurringCvvConfirmation
 *
 * @see RecurringCvvConfirmation
 */
class RecurringCvvConfirmationBuilder
{
    /**
     * @var RecurringCvvConfirmation
     */
    private $instance;

    private function __construct(RecurringCvvConfirmation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Recurring Cvv Confirmation Builder object.
     */
    public static function init(): self
    {
        return new self(new RecurringCvvConfirmation());
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets threshold field.
     *
     * @param CheckoutMoneyAmount[]|null $value
     */
    public function threshold(?array $value): self
    {
        $this->instance->setThreshold($value);
        return $this;
    }

    /**
     * Unsets threshold field.
     */
    public function unsetThreshold(): self
    {
        $this->instance->unsetThreshold();
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
     * Initializes a new Recurring Cvv Confirmation object.
     */
    public function build(): RecurringCvvConfirmation
    {
        return CoreHelper::clone($this->instance);
    }
}
