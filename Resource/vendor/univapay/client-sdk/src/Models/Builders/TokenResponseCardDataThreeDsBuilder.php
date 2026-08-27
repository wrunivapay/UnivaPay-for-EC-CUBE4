<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\PaymentError;
use UnivaPay\Models\TokenResponseCardDataThreeDs;

/**
 * Builder for model TokenResponseCardDataThreeDs
 *
 * @see TokenResponseCardDataThreeDs
 */
class TokenResponseCardDataThreeDsBuilder
{
    /**
     * @var TokenResponseCardDataThreeDs
     */
    private $instance;

    private function __construct(TokenResponseCardDataThreeDs $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Card Data Three Ds Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponseCardDataThreeDs());
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
     * Unsets redirect endpoint field.
     */
    public function unsetRedirectEndpoint(): self
    {
        $this->instance->unsetRedirectEndpoint();
        return $this;
    }

    /**
     * Sets redirect id field.
     *
     * @param string|null $value
     */
    public function redirectId(?string $value): self
    {
        $this->instance->setRedirectId($value);
        return $this;
    }

    /**
     * Unsets redirect id field.
     */
    public function unsetRedirectId(): self
    {
        $this->instance->unsetRedirectId();
        return $this;
    }

    /**
     * Sets exempted field.
     *
     * @param bool|null $value
     */
    public function exempted(?bool $value): self
    {
        $this->instance->setExempted($value);
        return $this;
    }

    /**
     * Sets error field.
     *
     * @param PaymentError|null $value
     */
    public function error(?PaymentError $value): self
    {
        $this->instance->setError($value);
        return $this;
    }

    /**
     * Unsets error field.
     */
    public function unsetError(): self
    {
        $this->instance->unsetError();
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
     * Initializes a new Token Response Card Data Three Ds object.
     */
    public function build(): TokenResponseCardDataThreeDs
    {
        return CoreHelper::clone($this->instance);
    }
}
