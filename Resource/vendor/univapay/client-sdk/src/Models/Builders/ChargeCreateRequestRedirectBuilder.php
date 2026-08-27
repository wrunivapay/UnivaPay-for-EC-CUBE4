<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ChargeCreateRequestRedirect;

/**
 * Builder for model ChargeCreateRequestRedirect
 *
 * @see ChargeCreateRequestRedirect
 */
class ChargeCreateRequestRedirectBuilder
{
    /**
     * @var ChargeCreateRequestRedirect
     */
    private $instance;

    private function __construct(ChargeCreateRequestRedirect $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Charge Create Request Redirect Builder object.
     */
    public static function init(): self
    {
        return new self(new ChargeCreateRequestRedirect());
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
     * Initializes a new Charge Create Request Redirect object.
     */
    public function build(): ChargeCreateRequestRedirect
    {
        return CoreHelper::clone($this->instance);
    }
}
