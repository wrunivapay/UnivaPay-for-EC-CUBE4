<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateOnlineData;

/**
 * Builder for model TokenCreateOnlineData
 *
 * @see TokenCreateOnlineData
 */
class TokenCreateOnlineDataBuilder
{
    /**
     * @var TokenCreateOnlineData
     */
    private $instance;

    private function __construct(TokenCreateOnlineData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Online Data Builder object.
     *
     * @param string $brand
     * @param string $callMethod
     */
    public static function init(string $brand, string $callMethod): self
    {
        return new self(new TokenCreateOnlineData($brand, $callMethod));
    }

    /**
     * Sets os type field.
     *
     * @param string|null $value
     */
    public function osType(?string $value): self
    {
        $this->instance->setOsType($value);
        return $this;
    }

    /**
     * Unsets os type field.
     */
    public function unsetOsType(): self
    {
        $this->instance->unsetOsType();
        return $this;
    }

    /**
     * Sets user identifier field.
     *
     * @param string|null $value
     */
    public function userIdentifier(?string $value): self
    {
        $this->instance->setUserIdentifier($value);
        return $this;
    }

    /**
     * Unsets user identifier field.
     */
    public function unsetUserIdentifier(): self
    {
        $this->instance->unsetUserIdentifier();
        return $this;
    }

    /**
     * Sets user identifier source field.
     *
     * @param string|null $value
     */
    public function userIdentifierSource(?string $value): self
    {
        $this->instance->setUserIdentifierSource($value);
        return $this;
    }

    /**
     * Unsets user identifier source field.
     */
    public function unsetUserIdentifierSource(): self
    {
        $this->instance->unsetUserIdentifierSource();
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
     * Initializes a new Token Create Online Data object.
     */
    public function build(): TokenCreateOnlineData
    {
        return CoreHelper::clone($this->instance);
    }
}
