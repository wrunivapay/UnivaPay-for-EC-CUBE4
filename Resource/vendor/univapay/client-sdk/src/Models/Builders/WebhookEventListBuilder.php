<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\WebhookEvent;
use UnivaPay\Models\WebhookEventList;

/**
 * Builder for model WebhookEventList
 *
 * @see WebhookEventList
 */
class WebhookEventListBuilder
{
    /**
     * @var WebhookEventList
     */
    private $instance;

    private function __construct(WebhookEventList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook Event List Builder object.
     */
    public static function init(): self
    {
        return new self(new WebhookEventList());
    }

    /**
     * Sets items field.
     *
     * @param WebhookEvent[]|null $value
     */
    public function items(?array $value): self
    {
        $this->instance->setItems($value);
        return $this;
    }

    /**
     * Sets has more field.
     *
     * @param bool|null $value
     */
    public function hasMore(?bool $value): self
    {
        $this->instance->setHasMore($value);
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
     * Initializes a new Webhook Event List object.
     */
    public function build(): WebhookEventList
    {
        return CoreHelper::clone($this->instance);
    }
}
