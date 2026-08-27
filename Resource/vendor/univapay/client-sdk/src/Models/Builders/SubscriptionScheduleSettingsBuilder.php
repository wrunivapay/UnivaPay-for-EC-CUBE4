<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionScheduleSettings;

/**
 * Builder for model SubscriptionScheduleSettings
 *
 * @see SubscriptionScheduleSettings
 */
class SubscriptionScheduleSettingsBuilder
{
    /**
     * @var SubscriptionScheduleSettings
     */
    private $instance;

    private function __construct(SubscriptionScheduleSettings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Schedule Settings Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionScheduleSettings());
    }

    /**
     * Sets start on field.
     *
     * @param \DateTime|null $value
     */
    public function startOn(?\DateTime $value): self
    {
        $this->instance->setStartOn($value);
        return $this;
    }

    /**
     * Sets zone id field.
     *
     * @param string|null $value
     */
    public function zoneId(?string $value): self
    {
        $this->instance->setZoneId($value);
        return $this;
    }

    /**
     * Sets preserve end of month field.
     *
     * @param bool|null $value
     */
    public function preserveEndOfMonth(?bool $value): self
    {
        $this->instance->setPreserveEndOfMonth($value);
        return $this;
    }

    /**
     * Sets retry interval field.
     *
     * @param string|null $value
     */
    public function retryInterval(?string $value): self
    {
        $this->instance->setRetryInterval($value);
        return $this;
    }

    /**
     * Sets termination mode field.
     *
     * @param string|null $value
     */
    public function terminationMode(?string $value): self
    {
        $this->instance->setTerminationMode($value);
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
     * Initializes a new Subscription Schedule Settings object.
     */
    public function build(): SubscriptionScheduleSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
