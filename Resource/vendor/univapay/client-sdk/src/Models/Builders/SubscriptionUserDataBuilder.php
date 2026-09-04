<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionUserData;

/**
 * Builder for model SubscriptionUserData
 *
 * @see SubscriptionUserData
 */
class SubscriptionUserDataBuilder
{
    /**
     * @var SubscriptionUserData
     */
    private $instance;

    private function __construct(SubscriptionUserData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription User Data Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionUserData());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets cardholder name field.
     *
     * @param string|null $value
     */
    public function cardholderName(?string $value): self
    {
        $this->instance->setCardholderName($value);
        return $this;
    }

    /**
     * Unsets cardholder name field.
     */
    public function unsetCardholderName(): self
    {
        $this->instance->unsetCardholderName();
        return $this;
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Unsets email field.
     */
    public function unsetEmail(): self
    {
        $this->instance->unsetEmail();
        return $this;
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
     * Unsets brand field.
     */
    public function unsetBrand(): self
    {
        $this->instance->unsetBrand();
        return $this;
    }

    /**
     * Sets gateway field.
     *
     * @param string|null $value
     */
    public function gateway(?string $value): self
    {
        $this->instance->setGateway($value);
        return $this;
    }

    /**
     * Unsets gateway field.
     */
    public function unsetGateway(): self
    {
        $this->instance->unsetGateway();
        return $this;
    }

    /**
     * Sets service provider field.
     *
     * @param string|null $value
     */
    public function serviceProvider(?string $value): self
    {
        $this->instance->setServiceProvider($value);
        return $this;
    }

    /**
     * Unsets service provider field.
     */
    public function unsetServiceProvider(): self
    {
        $this->instance->unsetServiceProvider();
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
     * Initializes a new Subscription User Data object.
     */
    public function build(): SubscriptionUserData
    {
        return CoreHelper::clone($this->instance);
    }
}
