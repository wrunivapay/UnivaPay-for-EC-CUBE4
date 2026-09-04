<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ChargeRedirect;

/**
 * Builder for model ChargeRedirect
 *
 * @see ChargeRedirect
 */
class ChargeRedirectBuilder
{
    /**
     * @var ChargeRedirect
     */
    private $instance;

    private function __construct(ChargeRedirect $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Charge Redirect Builder object.
     */
    public static function init(): self
    {
        return new self(new ChargeRedirect());
    }

    /**
     * Sets endpoint field.
     *
     * @param string|null $value
     */
    public function endpoint(?string $value): self
    {
        $this->instance->setEndpoint($value);
        return $this;
    }

    /**
     * Sets redirect id field.
     *
     * @param string|null $value
     */
    public function redirectId(?string $value): self
    {
        $this->instance->setRedirectId($value);
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
     * Initializes a new Charge Redirect object.
     */
    public function build(): ChargeRedirect
    {
        return CoreHelper::clone($this->instance);
    }
}
