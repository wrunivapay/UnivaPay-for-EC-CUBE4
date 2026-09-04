<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CreateCustomerIdResponse;

/**
 * Builder for model CreateCustomerIdResponse
 *
 * @see CreateCustomerIdResponse
 */
class CreateCustomerIdResponseBuilder
{
    /**
     * @var CreateCustomerIdResponse
     */
    private $instance;

    private function __construct(CreateCustomerIdResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Customer Id Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateCustomerIdResponse());
    }

    /**
     * Sets customer id field.
     *
     * @param string|null $value
     */
    public function customerId(?string $value): self
    {
        $this->instance->setCustomerId($value);
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
     * Initializes a new Create Customer Id Response object.
     */
    public function build(): CreateCustomerIdResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
