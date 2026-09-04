<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\GenericMetadata;
use UnivaPay\Models\TransactionTokenUpdateRequest;
use UnivaPay\Models\TransactionTokenUpdateRequestData;

/**
 * Builder for model TransactionTokenUpdateRequest
 *
 * @see TransactionTokenUpdateRequest
 */
class TransactionTokenUpdateRequestBuilder
{
    /**
     * @var TransactionTokenUpdateRequest
     */
    private $instance;

    private function __construct(TransactionTokenUpdateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction Token Update Request Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionTokenUpdateRequest());
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
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
     * Sets data field.
     *
     * @param TransactionTokenUpdateRequestData|null $value
     */
    public function data(?TransactionTokenUpdateRequestData $value): self
    {
        $this->instance->setData($value);
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
     * Initializes a new Transaction Token Update Request object.
     */
    public function build(): TransactionTokenUpdateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
