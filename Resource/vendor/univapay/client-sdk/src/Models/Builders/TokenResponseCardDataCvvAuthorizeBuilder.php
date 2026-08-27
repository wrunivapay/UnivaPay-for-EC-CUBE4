<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponseCardDataCvvAuthorize;

/**
 * Builder for model TokenResponseCardDataCvvAuthorize
 *
 * @see TokenResponseCardDataCvvAuthorize
 */
class TokenResponseCardDataCvvAuthorizeBuilder
{
    /**
     * @var TokenResponseCardDataCvvAuthorize
     */
    private $instance;

    private function __construct(TokenResponseCardDataCvvAuthorize $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Card Data Cvv Authorize Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponseCardDataCvvAuthorize());
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
     * Sets credentials id field.
     *
     * @param string|null $value
     */
    public function credentialsId(?string $value): self
    {
        $this->instance->setCredentialsId($value);
        return $this;
    }

    /**
     * Unsets credentials id field.
     */
    public function unsetCredentialsId(): self
    {
        $this->instance->unsetCredentialsId();
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
     * Unsets currency field.
     */
    public function unsetCurrency(): self
    {
        $this->instance->unsetCurrency();
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
     * Initializes a new Token Response Card Data Cvv Authorize object.
     */
    public function build(): TokenResponseCardDataCvvAuthorize
    {
        return CoreHelper::clone($this->instance);
    }
}
