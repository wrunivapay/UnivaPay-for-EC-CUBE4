<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\PaymentError;

/**
 * Builder for model PaymentError
 *
 * @see PaymentError
 */
class PaymentErrorBuilder
{
    /**
     * @var PaymentError
     */
    private $instance;

    private function __construct(PaymentError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Error Builder object.
     */
    public static function init(): self
    {
        return new self(new PaymentError());
    }

    /**
     * Sets code field.
     *
     * @param int|null $value
     */
    public function code(?int $value): self
    {
        $this->instance->setCode($value);
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
     * Sets detail field.
     *
     * @param string|null $value
     */
    public function detail(?string $value): self
    {
        $this->instance->setDetail($value);
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
     * Initializes a new Payment Error object.
     */
    public function build(): PaymentError
    {
        return CoreHelper::clone($this->instance);
    }
}
