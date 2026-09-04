<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutEcProductsConfiguration;

/**
 * Builder for model CheckoutEcProductsConfiguration
 *
 * @see CheckoutEcProductsConfiguration
 */
class CheckoutEcProductsConfigurationBuilder
{
    /**
     * @var CheckoutEcProductsConfiguration
     */
    private $instance;

    private function __construct(CheckoutEcProductsConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Ec Products Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutEcProductsConfiguration());
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
     * Initializes a new Checkout Ec Products Configuration object.
     */
    public function build(): CheckoutEcProductsConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
