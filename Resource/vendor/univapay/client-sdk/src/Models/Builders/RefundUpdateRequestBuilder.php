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
use UnivaPay\Models\RefundUpdateRequest;

/**
 * Builder for model RefundUpdateRequest
 *
 * @see RefundUpdateRequest
 */
class RefundUpdateRequestBuilder
{
    /**
     * @var RefundUpdateRequest
     */
    private $instance;

    private function __construct(RefundUpdateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Update Request Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundUpdateRequest());
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
     * Unsets message field.
     */
    public function unsetMessage(): self
    {
        $this->instance->unsetMessage();
        return $this;
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
     * Unsets reason field.
     */
    public function unsetReason(): self
    {
        $this->instance->unsetReason();
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
     * Initializes a new Refund Update Request object.
     */
    public function build(): RefundUpdateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
