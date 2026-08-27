<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CardProcessorInstallmentConfig;

/**
 * Builder for model CardProcessorInstallmentConfig
 *
 * @see CardProcessorInstallmentConfig
 */
class CardProcessorInstallmentConfigBuilder
{
    /**
     * @var CardProcessorInstallmentConfig
     */
    private $instance;

    private function __construct(CardProcessorInstallmentConfig $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Card Processor Installment Config Builder object.
     */
    public static function init(): self
    {
        return new self(new CardProcessorInstallmentConfig());
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
     * Unsets revolving field.
     */
    public function unsetRevolving(): self
    {
        $this->instance->unsetRevolving();
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
     * Unsets fixed cycle field.
     */
    public function unsetFixedCycle(): self
    {
        $this->instance->unsetFixedCycle();
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
     * Initializes a new Card Processor Installment Config object.
     */
    public function build(): CardProcessorInstallmentConfig
    {
        return CoreHelper::clone($this->instance);
    }
}
