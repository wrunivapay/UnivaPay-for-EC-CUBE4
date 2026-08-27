<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\BaseOnlineData;

/**
 * Builder for model BaseOnlineData
 *
 * @see BaseOnlineData
 */
class BaseOnlineDataBuilder
{
    /**
     * @var BaseOnlineData
     */
    private $instance;

    private function __construct(BaseOnlineData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Base Online Data Builder object.
     */
    public static function init(): self
    {
        return new self(new BaseOnlineData());
    }

    /**
     * Sets brand field.
     *
     * @param string|null $value
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
    }

    /**
     * Sets call method field.
     *
     * @param string|null $value
     */
    public function callMethod(?string $value): self
    {
        $this->instance->setCallMethod($value);
        return $this;
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
     * Initializes a new Base Online Data object.
     */
    public function build(): BaseOnlineData
    {
        return CoreHelper::clone($this->instance);
    }
}
