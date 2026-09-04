<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreatePaidyDataShippingAddress;

/**
 * Builder for model TokenCreatePaidyDataShippingAddress
 *
 * @see TokenCreatePaidyDataShippingAddress
 */
class TokenCreatePaidyDataShippingAddressBuilder
{
    /**
     * @var TokenCreatePaidyDataShippingAddress
     */
    private $instance;

    private function __construct(TokenCreatePaidyDataShippingAddress $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Paidy Data Shipping Address Builder object.
     *
     * @param string $zip
     */
    public static function init(string $zip): self
    {
        return new self(new TokenCreatePaidyDataShippingAddress($zip));
    }

    /**
     * Sets line 1 field.
     *
     * @param string|null $value
     */
    public function line1(?string $value): self
    {
        $this->instance->setLine1($value);
        return $this;
    }

    /**
     * Sets line 2 field.
     *
     * @param string|null $value
     */
    public function line2(?string $value): self
    {
        $this->instance->setLine2($value);
        return $this;
    }

    /**
     * Sets city field.
     *
     * @param string|null $value
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets state field.
     *
     * @param string|null $value
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
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
     * Initializes a new Token Create Paidy Data Shipping Address object.
     */
    public function build(): TokenCreatePaidyDataShippingAddress
    {
        return CoreHelper::clone($this->instance);
    }
}
