<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\BaseKonbiniData;

/**
 * Builder for model BaseKonbiniData
 *
 * @see BaseKonbiniData
 */
class BaseKonbiniDataBuilder
{
    /**
     * @var BaseKonbiniData
     */
    private $instance;

    private function __construct(BaseKonbiniData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Base Konbini Data Builder object.
     */
    public static function init(): self
    {
        return new self(new BaseKonbiniData());
    }

    /**
     * Sets customer name field.
     *
     * @param string|null $value
     */
    public function customerName(?string $value): self
    {
        $this->instance->setCustomerName($value);
        return $this;
    }

    /**
     * Sets convenience store field.
     *
     * @param string|null $value
     */
    public function convenienceStore(?string $value): self
    {
        $this->instance->setConvenienceStore($value);
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
     * Initializes a new Base Konbini Data object.
     */
    public function build(): BaseKonbiniData
    {
        return CoreHelper::clone($this->instance);
    }
}
