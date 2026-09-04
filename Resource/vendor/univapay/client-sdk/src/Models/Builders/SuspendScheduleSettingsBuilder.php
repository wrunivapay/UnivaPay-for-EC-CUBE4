<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SuspendScheduleSettings;

/**
 * Builder for model SuspendScheduleSettings
 *
 * @see SuspendScheduleSettings
 */
class SuspendScheduleSettingsBuilder
{
    /**
     * @var SuspendScheduleSettings
     */
    private $instance;

    private function __construct(SuspendScheduleSettings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Suspend Schedule Settings Builder object.
     */
    public static function init(): self
    {
        return new self(new SuspendScheduleSettings());
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
     * Initializes a new Suspend Schedule Settings object.
     */
    public function build(): SuspendScheduleSettings
    {
        return CoreHelper::clone($this->instance);
    }
}
