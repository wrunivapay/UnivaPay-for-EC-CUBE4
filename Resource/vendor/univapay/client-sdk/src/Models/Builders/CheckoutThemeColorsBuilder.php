<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutThemeColors;

/**
 * Builder for model CheckoutThemeColors
 *
 * @see CheckoutThemeColors
 */
class CheckoutThemeColorsBuilder
{
    /**
     * @var CheckoutThemeColors
     */
    private $instance;

    private function __construct(CheckoutThemeColors $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Theme Colors Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutThemeColors());
    }

    /**
     * Sets main background field.
     *
     * @param string|null $value
     */
    public function mainBackground(?string $value): self
    {
        $this->instance->setMainBackground($value);
        return $this;
    }

    /**
     * Sets secondary background field.
     *
     * @param string|null $value
     */
    public function secondaryBackground(?string $value): self
    {
        $this->instance->setSecondaryBackground($value);
        return $this;
    }

    /**
     * Sets main color field.
     *
     * @param string|null $value
     */
    public function mainColor(?string $value): self
    {
        $this->instance->setMainColor($value);
        return $this;
    }

    /**
     * Sets main text field.
     *
     * @param string|null $value
     */
    public function mainText(?string $value): self
    {
        $this->instance->setMainText($value);
        return $this;
    }

    /**
     * Sets primary text field.
     *
     * @param string|null $value
     */
    public function primaryText(?string $value): self
    {
        $this->instance->setPrimaryText($value);
        return $this;
    }

    /**
     * Sets secondary text field.
     *
     * @param string|null $value
     */
    public function secondaryText(?string $value): self
    {
        $this->instance->setSecondaryText($value);
        return $this;
    }

    /**
     * Sets base text field.
     *
     * @param string|null $value
     */
    public function baseText(?string $value): self
    {
        $this->instance->setBaseText($value);
        return $this;
    }

    /**
     * Sets body background field.
     *
     * @param string|null $value
     */
    public function bodyBackground(?string $value): self
    {
        $this->instance->setBodyBackground($value);
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
     * Initializes a new Checkout Theme Colors object.
     */
    public function build(): CheckoutThemeColors
    {
        return CoreHelper::clone($this->instance);
    }
}
