<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ChargeThreeDs;

/**
 * Builder for model ChargeThreeDs
 *
 * @see ChargeThreeDs
 */
class ChargeThreeDsBuilder
{
    /**
     * @var ChargeThreeDs
     */
    private $instance;

    private function __construct(ChargeThreeDs $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Charge Three Ds Builder object.
     */
    public static function init(): self
    {
        return new self(new ChargeThreeDs());
    }

    /**
     * Sets redirect endpoint field.
     *
     * @param string|null $value
     */
    public function redirectEndpoint(?string $value): self
    {
        $this->instance->setRedirectEndpoint($value);
        return $this;
    }

    /**
     * Sets mode field.
     *
     * @param string|null $value
     */
    public function mode(?string $value): self
    {
        $this->instance->setMode($value);
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
     * Initializes a new Charge Three Ds object.
     */
    public function build(): ChargeThreeDs
    {
        return CoreHelper::clone($this->instance);
    }
}
