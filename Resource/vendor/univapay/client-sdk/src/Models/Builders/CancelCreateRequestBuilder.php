<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CancelCreateRequest;
use UnivaPay\Models\GenericMetadata;

/**
 * Builder for model CancelCreateRequest
 *
 * @see CancelCreateRequest
 */
class CancelCreateRequestBuilder
{
    /**
     * @var CancelCreateRequest
     */
    private $instance;

    private function __construct(CancelCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cancel Create Request Builder object.
     */
    public static function init(): self
    {
        return new self(new CancelCreateRequest());
    }

    /**
     * Sets metadata field.
     *
     * @param GenericMetadata|null $value
     */
    public function metadata(?GenericMetadata $value): self
    {
        $this->instance->setMetadata($value);
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
     * Initializes a new Cancel Create Request object.
     */
    public function build(): CancelCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
