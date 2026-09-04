<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateKonbiniData;
use UnivaPay\Models\TokenCreatePhoneNumber;

/**
 * Builder for model TokenCreateKonbiniData
 *
 * @see TokenCreateKonbiniData
 */
class TokenCreateKonbiniDataBuilder
{
    /**
     * @var TokenCreateKonbiniData
     */
    private $instance;

    private function __construct(TokenCreateKonbiniData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Konbini Data Builder object.
     *
     * @param string $customerName
     * @param string $convenienceStore
     * @param TokenCreatePhoneNumber $phoneNumber
     */
    public static function init(
        string $customerName,
        string $convenienceStore,
        TokenCreatePhoneNumber $phoneNumber
    ): self {
        return new self(new TokenCreateKonbiniData($customerName, $convenienceStore, $phoneNumber));
    }

    /**
     * Sets expiration period field.
     *
     * @param string|null $value
     */
    public function expirationPeriod(?string $value): self
    {
        $this->instance->setExpirationPeriod($value);
        return $this;
    }

    /**
     * Sets expiration time shift field.
     *
     * @param string|null $value
     */
    public function expirationTimeShift(?string $value): self
    {
        $this->instance->setExpirationTimeShift($value);
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
     * Initializes a new Token Create Konbini Data object.
     */
    public function build(): TokenCreateKonbiniData
    {
        return CoreHelper::clone($this->instance);
    }
}
