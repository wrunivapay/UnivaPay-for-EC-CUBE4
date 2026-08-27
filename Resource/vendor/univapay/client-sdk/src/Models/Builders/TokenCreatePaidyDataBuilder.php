<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreatePaidyData;
use UnivaPay\Models\TokenCreatePaidyDataShippingAddress;

/**
 * Builder for model TokenCreatePaidyData
 *
 * @see TokenCreatePaidyData
 */
class TokenCreatePaidyDataBuilder
{
    /**
     * @var TokenCreatePaidyData
     */
    private $instance;

    private function __construct(TokenCreatePaidyData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Paidy Data Builder object.
     *
     * @param string $paidyToken
     * @param TokenCreatePaidyDataShippingAddress $shippingAddress
     */
    public static function init(string $paidyToken, TokenCreatePaidyDataShippingAddress $shippingAddress): self
    {
        return new self(new TokenCreatePaidyData($paidyToken, $shippingAddress));
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
     * Initializes a new Token Create Paidy Data object.
     */
    public function build(): TokenCreatePaidyData
    {
        return CoreHelper::clone($this->instance);
    }
}
