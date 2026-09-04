<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateCardDataCvvAuthorize;

/**
 * Builder for model TokenCreateCardDataCvvAuthorize
 *
 * @see TokenCreateCardDataCvvAuthorize
 */
class TokenCreateCardDataCvvAuthorizeBuilder
{
    /**
     * @var TokenCreateCardDataCvvAuthorize
     */
    private $instance;

    private function __construct(TokenCreateCardDataCvvAuthorize $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Card Data Cvv Authorize Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenCreateCardDataCvvAuthorize());
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
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
     * Initializes a new Token Create Card Data Cvv Authorize object.
     */
    public function build(): TokenCreateCardDataCvvAuthorize
    {
        return CoreHelper::clone($this->instance);
    }
}
