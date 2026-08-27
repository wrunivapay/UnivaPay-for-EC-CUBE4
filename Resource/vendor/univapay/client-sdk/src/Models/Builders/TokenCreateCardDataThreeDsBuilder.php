<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateCardDataThreeDs;

/**
 * Builder for model TokenCreateCardDataThreeDs
 *
 * @see TokenCreateCardDataThreeDs
 */
class TokenCreateCardDataThreeDsBuilder
{
    /**
     * @var TokenCreateCardDataThreeDs
     */
    private $instance;

    private function __construct(TokenCreateCardDataThreeDs $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Card Data Three Ds Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenCreateCardDataThreeDs());
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
     * Initializes a new Token Create Card Data Three Ds object.
     */
    public function build(): TokenCreateCardDataThreeDs
    {
        return CoreHelper::clone($this->instance);
    }
}
