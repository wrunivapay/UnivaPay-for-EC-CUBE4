<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutTheme;
use UnivaPay\Models\CheckoutThemeColors;

/**
 * Builder for model CheckoutTheme
 *
 * @see CheckoutTheme
 */
class CheckoutThemeBuilder
{
    /**
     * @var CheckoutTheme
     */
    private $instance;

    private function __construct(CheckoutTheme $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Theme Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutTheme());
    }

    /**
     * Sets colors field.
     *
     * @param CheckoutThemeColors|null $value
     */
    public function colors(?CheckoutThemeColors $value): self
    {
        $this->instance->setColors($value);
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
     * Initializes a new Checkout Theme object.
     */
    public function build(): CheckoutTheme
    {
        return CoreHelper::clone($this->instance);
    }
}
