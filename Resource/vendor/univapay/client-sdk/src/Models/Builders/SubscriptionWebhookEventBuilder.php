<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\Subscription;
use UnivaPay\Models\SubscriptionWebhookEvent;

/**
 * Builder for model SubscriptionWebhookEvent
 *
 * @see SubscriptionWebhookEvent
 */
class SubscriptionWebhookEventBuilder
{
    /**
     * @var SubscriptionWebhookEvent
     */
    private $instance;

    private function __construct(SubscriptionWebhookEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Webhook Event Builder object.
     *
     * @param string $id
     * @param string $event
     * @param \DateTime $createdOn
     */
    public static function init(string $id, string $event, \DateTime $createdOn): self
    {
        return new self(new SubscriptionWebhookEvent($id, $event, $createdOn));
    }

    /**
     * Sets data field.
     *
     * @param Subscription|null $value
     */
    public function data(?Subscription $value): self
    {
        $this->instance->setData($value);
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
     * Initializes a new Subscription Webhook Event object.
     */
    public function build(): SubscriptionWebhookEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
