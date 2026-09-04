<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\SubscriptionSuspendRequest;
use UnivaPay\Models\SuspendScheduleSettings;

/**
 * Builder for model SubscriptionSuspendRequest
 *
 * @see SubscriptionSuspendRequest
 */
class SubscriptionSuspendRequestBuilder
{
    /**
     * @var SubscriptionSuspendRequest
     */
    private $instance;

    private function __construct(SubscriptionSuspendRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Suspend Request Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionSuspendRequest());
    }

    /**
     * Sets schedule settings field.
     *
     * @param SuspendScheduleSettings|null $value
     */
    public function scheduleSettings(?SuspendScheduleSettings $value): self
    {
        $this->instance->setScheduleSettings($value);
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
     * Initializes a new Subscription Suspend Request object.
     */
    public function build(): SubscriptionSuspendRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
