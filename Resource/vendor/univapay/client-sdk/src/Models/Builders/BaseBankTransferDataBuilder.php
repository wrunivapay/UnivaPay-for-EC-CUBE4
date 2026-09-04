<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\BaseBankTransferData;

/**
 * Builder for model BaseBankTransferData
 *
 * @see BaseBankTransferData
 */
class BaseBankTransferDataBuilder
{
    /**
     * @var BaseBankTransferData
     */
    private $instance;

    private function __construct(BaseBankTransferData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Base Bank Transfer Data Builder object.
     */
    public static function init(): self
    {
        return new self(new BaseBankTransferData());
    }

    /**
     * Sets brand field.
     *
     * @param string|null $value
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
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
     * Initializes a new Base Bank Transfer Data object.
     */
    public function build(): BaseBankTransferData
    {
        return CoreHelper::clone($this->instance);
    }
}
