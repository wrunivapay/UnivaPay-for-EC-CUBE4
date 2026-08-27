<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateBankTransferData;

/**
 * Builder for model TokenCreateBankTransferData
 *
 * @see TokenCreateBankTransferData
 */
class TokenCreateBankTransferDataBuilder
{
    /**
     * @var TokenCreateBankTransferData
     */
    private $instance;

    private function __construct(TokenCreateBankTransferData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Bank Transfer Data Builder object.
     *
     * @param string $brand
     */
    public static function init(string $brand): self
    {
        return new self(new TokenCreateBankTransferData($brand));
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
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
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
     * Initializes a new Token Create Bank Transfer Data object.
     */
    public function build(): TokenCreateBankTransferData
    {
        return CoreHelper::clone($this->instance);
    }
}
