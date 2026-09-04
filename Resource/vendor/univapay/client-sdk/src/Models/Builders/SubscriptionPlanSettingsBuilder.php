<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionPlanSettings;

/**
 * Builder for model SubscriptionPlanSettings
 *
 * @see SubscriptionPlanSettings
 */
class SubscriptionPlanSettingsBuilder
{
    /**
     * @var SubscriptionPlanSettings
     */
    private $instance;

    private function __construct(SubscriptionPlanSettings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Plan Settings Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionPlanSettings());
    }

    /**
     * Sets plan type field.
     *
     * @param string|null $value
     */
    public function planType(?string $value): self
    {
        $this->instance->setPlanType($value);
        return $this;
    }

    /**
     * Sets fixed cycles field.
     *
     * @param int|null $value
     */
    public function fixedCycles(?int $value): self
    {
        $this->instance->setFixedCycles($value);
        return $this;
    }

    /**
     * Sets fixed cycle amount field.
     *
     * @param int|null $value
     */
    public function fixedCycleAmount(?int $value): self
    {
        $this->instance->setFixedCycleAmount($value);
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
     * Initializes a new Subscription Plan Settings object.
     */
    public function build(): SubscriptionPlanSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
