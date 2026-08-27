<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutInstallmentCardProcessor;

/**
 * Builder for model CheckoutInstallmentCardProcessor
 *
 * @see CheckoutInstallmentCardProcessor
 */
class CheckoutInstallmentCardProcessorBuilder
{
    /**
     * @var CheckoutInstallmentCardProcessor
     */
    private $instance;

    private function __construct(CheckoutInstallmentCardProcessor $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Installment Card Processor Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutInstallmentCardProcessor());
    }

    /**
     * Sets revolving field.
     *
     * @param bool|null $value
     */
    public function revolving(?bool $value): self
    {
        $this->instance->setRevolving($value);
        return $this;
    }

    /**
     * Sets fixed cycle field.
     *
     * @param bool|null $value
     */
    public function fixedCycle(?bool $value): self
    {
        $this->instance->setFixedCycle($value);
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
     * Initializes a new Checkout Installment Card Processor object.
     */
    public function build(): CheckoutInstallmentCardProcessor
    {
        return CoreHelper::clone($this->instance);
    }
}
