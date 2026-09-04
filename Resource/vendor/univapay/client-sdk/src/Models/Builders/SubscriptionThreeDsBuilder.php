<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionThreeDs;

/**
 * Builder for model SubscriptionThreeDs
 *
 * @see SubscriptionThreeDs
 */
class SubscriptionThreeDsBuilder
{
    /**
     * @var SubscriptionThreeDs
     */
    private $instance;

    private function __construct(SubscriptionThreeDs $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Three Ds Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionThreeDs());
    }

    /**
     * Sets mode field.
     *
     * @param string|null $value
     */
    public function mode(?string $value): self
    {
        $this->instance->setMode($value);
        return $this;
    }

    /**
     * Unsets mode field.
     */
    public function unsetMode(): self
    {
        $this->instance->unsetMode();
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
     * Initializes a new Subscription Three Ds object.
     */
    public function build(): SubscriptionThreeDs
    {
        return CoreHelper::clone($this->instance);
    }
}
