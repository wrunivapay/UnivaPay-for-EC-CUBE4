<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponsePhoneNumber;

/**
 * Builder for model TokenResponsePhoneNumber
 *
 * @see TokenResponsePhoneNumber
 */
class TokenResponsePhoneNumberBuilder
{
    /**
     * @var TokenResponsePhoneNumber
     */
    private $instance;

    private function __construct(TokenResponsePhoneNumber $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Phone Number Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponsePhoneNumber());
    }

    /**
     * Sets country code field.
     *
     * @param int|null $value
     */
    public function countryCode(?int $value): self
    {
        $this->instance->setCountryCode($value);
        return $this;
    }

    /**
     * Sets local number field.
     *
     * @param string|null $value
     */
    public function localNumber(?string $value): self
    {
        $this->instance->setLocalNumber($value);
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
     * Initializes a new Token Response Phone Number object.
     */
    public function build(): TokenResponsePhoneNumber
    {
        return CoreHelper::clone($this->instance);
    }
}
