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
use UnivaPay\Models\RefundCreateRequest;

/**
 * Builder for model RefundCreateRequest
 *
 * @see RefundCreateRequest
 */
class RefundCreateRequestBuilder
{
    /**
     * @var RefundCreateRequest
     */
    private $instance;

    private function __construct(RefundCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Create Request Builder object.
     *
     * @param int $amount
     * @param string $currency
     */
    public static function init(int $amount, string $currency): self
    {
        return new self(new RefundCreateRequest($amount, $currency));
    }

    /**
     * Sets reason field.
     *
     * @param string|null $value
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
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
     * Initializes a new Refund Create Request object.
     */
    public function build(): RefundCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
