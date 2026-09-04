<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\Webhook;
use UnivaPay\Models\WebhookList;

/**
 * Builder for model WebhookList
 *
 * @see WebhookList
 */
class WebhookListBuilder
{
    /**
     * @var WebhookList
     */
    private $instance;

    private function __construct(WebhookList $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook List Builder object.
     */
    public static function init(): self
    {
        return new self(new WebhookList());
    }

    /**
     * Sets items field.
     *
     * @param Webhook[]|null $value
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
     * Initializes a new Webhook List object.
     */
    public function build(): WebhookList
    {
        return CoreHelper::clone($this->instance);
    }
}
