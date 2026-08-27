<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponseCardDataCvvAuthorizeCheck;

/**
 * Builder for model TokenResponseCardDataCvvAuthorizeCheck
 *
 * @see TokenResponseCardDataCvvAuthorizeCheck
 */
class TokenResponseCardDataCvvAuthorizeCheckBuilder
{
    /**
     * @var TokenResponseCardDataCvvAuthorizeCheck
     */
    private $instance;

    private function __construct(TokenResponseCardDataCvvAuthorizeCheck $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Card Data Cvv Authorize Check Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponseCardDataCvvAuthorizeCheck());
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets charge id field.
     *
     * @param string|null $value
     */
    public function chargeId(?string $value): self
    {
        $this->instance->setChargeId($value);
        return $this;
    }

    /**
     * Unsets charge id field.
     */
    public function unsetChargeId(): self
    {
        $this->instance->unsetChargeId();
        return $this;
    }

    /**
     * Sets date field.
     *
     * @param \DateTime|null $value
     */
    public function date(?\DateTime $value): self
    {
        $this->instance->setDate($value);
        return $this;
    }

    /**
     * Unsets date field.
     */
    public function unsetDate(): self
    {
        $this->instance->unsetDate();
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
     * Initializes a new Token Response Card Data Cvv Authorize Check object.
     */
    public function build(): TokenResponseCardDataCvvAuthorizeCheck
    {
        return CoreHelper::clone($this->instance);
    }
}
