<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponsePaidyData;
use UnivaPay\Models\TokenResponsePaidyDataShippingAddress;

/**
 * Builder for model TokenResponsePaidyData
 *
 * @see TokenResponsePaidyData
 */
class TokenResponsePaidyDataBuilder
{
    /**
     * @var TokenResponsePaidyData
     */
    private $instance;

    private function __construct(TokenResponsePaidyData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Paidy Data Builder object.
     *
     * @param string $paidyToken
     */
    public static function init(string $paidyToken): self
    {
        return new self(new TokenResponsePaidyData($paidyToken));
    }

    /**
     * Sets phone number field.
     *
     * @param string|null $value
     */
    public function phoneNumber(?string $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Unsets phone number field.
     */
    public function unsetPhoneNumber(): self
    {
        $this->instance->unsetPhoneNumber();
        return $this;
    }

    /**
     * Sets shipping address field.
     *
     * @param TokenResponsePaidyDataShippingAddress|null $value
     */
    public function shippingAddress(?TokenResponsePaidyDataShippingAddress $value): self
    {
        $this->instance->setShippingAddress($value);
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
     * Initializes a new Token Response Paidy Data object.
     */
    public function build(): TokenResponsePaidyData
    {
        return CoreHelper::clone($this->instance);
    }
}
