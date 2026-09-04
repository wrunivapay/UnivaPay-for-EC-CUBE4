<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\EnableTokenThreeDsRequest;

/**
 * Builder for model EnableTokenThreeDsRequest
 *
 * @see EnableTokenThreeDsRequest
 */
class EnableTokenThreeDsRequestBuilder
{
    /**
     * @var EnableTokenThreeDsRequest
     */
    private $instance;

    private function __construct(EnableTokenThreeDsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Enable Token Three Ds Request Builder object.
     */
    public static function init(): self
    {
        return new self(new EnableTokenThreeDsRequest());
    }

    /**
     * Sets redirect endpoint field.
     *
     * @param string|null $value
     */
    public function redirectEndpoint(?string $value): self
    {
        $this->instance->setRedirectEndpoint($value);
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
     * Initializes a new Enable Token Three Ds Request object.
     */
    public function build(): EnableTokenThreeDsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
