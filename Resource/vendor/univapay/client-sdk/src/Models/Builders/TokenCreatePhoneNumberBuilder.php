<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreatePhoneNumber;

/**
 * Builder for model TokenCreatePhoneNumber
 *
 * @see TokenCreatePhoneNumber
 */
class TokenCreatePhoneNumberBuilder
{
    /**
     * @var TokenCreatePhoneNumber
     */
    private $instance;

    private function __construct(TokenCreatePhoneNumber $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Phone Number Builder object.
     *
     * @param string $countryCode
     * @param string $localNumber
     */
    public static function init(string $countryCode, string $localNumber): self
    {
        return new self(new TokenCreatePhoneNumber($countryCode, $localNumber));
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
     * Initializes a new Token Create Phone Number object.
     */
    public function build(): TokenCreatePhoneNumber
    {
        return CoreHelper::clone($this->instance);
    }
}
