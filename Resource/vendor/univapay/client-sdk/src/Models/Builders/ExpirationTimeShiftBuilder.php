<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ExpirationTimeShift;

/**
 * Builder for model ExpirationTimeShift
 *
 * @see ExpirationTimeShift
 */
class ExpirationTimeShiftBuilder
{
    /**
     * @var ExpirationTimeShift
     */
    private $instance;

    private function __construct(ExpirationTimeShift $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Expiration Time Shift Builder object.
     */
    public static function init(): self
    {
        return new self(new ExpirationTimeShift());
    }

    /**
     * Sets value field.
     *
     * @param string|null $value
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
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
     * Initializes a new Expiration Time Shift object.
     */
    public function build(): ExpirationTimeShift
    {
        return CoreHelper::clone($this->instance);
    }
}
