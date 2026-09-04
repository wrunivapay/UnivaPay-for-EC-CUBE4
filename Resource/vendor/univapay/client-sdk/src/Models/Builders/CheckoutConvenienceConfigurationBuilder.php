<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutConvenienceConfiguration;
use UnivaPay\Models\ExpirationTimeShift;

/**
 * Builder for model CheckoutConvenienceConfiguration
 *
 * @see CheckoutConvenienceConfiguration
 */
class CheckoutConvenienceConfigurationBuilder
{
    /**
     * @var CheckoutConvenienceConfiguration
     */
    private $instance;

    private function __construct(CheckoutConvenienceConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Convenience Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutConvenienceConfiguration());
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
     * Sets expiration field.
     *
     * @param string|null $value
     */
    public function expiration(?string $value): self
    {
        $this->instance->setExpiration($value);
        return $this;
    }

    /**
     * Sets expiration time shift field.
     *
     * @param ExpirationTimeShift|null $value
     */
    public function expirationTimeShift(?ExpirationTimeShift $value): self
    {
        $this->instance->setExpirationTimeShift($value);
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
     * Initializes a new Checkout Convenience Configuration object.
     */
    public function build(): CheckoutConvenienceConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
