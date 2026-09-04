<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CreateCustomerIdRequest;

/**
 * Builder for model CreateCustomerIdRequest
 *
 * @see CreateCustomerIdRequest
 */
class CreateCustomerIdRequestBuilder
{
    /**
     * @var CreateCustomerIdRequest
     */
    private $instance;

    private function __construct(CreateCustomerIdRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Customer Id Request Builder object.
     *
     * @param string $customerId
     */
    public static function init(string $customerId): self
    {
        return new self(new CreateCustomerIdRequest($customerId));
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
     * Initializes a new Create Customer Id Request object.
     */
    public function build(): CreateCustomerIdRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
