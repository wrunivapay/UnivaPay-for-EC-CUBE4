<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ApiErrorDetail;

/**
 * Builder for model ApiErrorDetail
 *
 * @see ApiErrorDetail
 */
class ApiErrorDetailBuilder
{
    /**
     * @var ApiErrorDetail
     */
    private $instance;

    private function __construct(ApiErrorDetail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Api Error Detail Builder object.
     */
    public static function init(): self
    {
        return new self(new ApiErrorDetail());
    }

    /**
     * Sets field field.
     *
     * @param string|null $value
     */
    public function field(?string $value): self
    {
        $this->instance->setField($value);
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
     * Initializes a new Api Error Detail object.
     */
    public function build(): ApiErrorDetail
    {
        return CoreHelper::clone($this->instance);
    }
}
