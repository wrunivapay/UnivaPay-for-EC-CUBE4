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

/**
 * Builder for model WebhookEvent
 *
 * @see WebhookEvent
 */
class WebhookEventBuilder
{
    /**
     * @var WebhookEvent
     */
    private $instance;

    private function __construct(WebhookEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook Event Builder object.
     */
    public static function init(): self
    {
        return new self(new WebhookEvent());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets webhook id field.
     *
     * @param string|null $value
     */
    public function webhookId(?string $value): self
    {
        $this->instance->setWebhookId($value);
        return $this;
    }

    /**
     * Sets event field.
     *
     * @param string|null $value
     */
    public function event(?string $value): self
    {
        $this->instance->setEvent($value);
        return $this;
    }

    /**
     * Sets data field.
     *
     * @param array|null $value
     */
    public function data(?array $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Sets successful field.
     *
     * @param bool|null $value
     */
    public function successful(?bool $value): self
    {
        $this->instance->setSuccessful($value);
        return $this;
    }

    /**
     * Sets fired on field.
     *
     * @param \DateTime|null $value
     */
    public function firedOn(?\DateTime $value): self
    {
        $this->instance->setFiredOn($value);
        return $this;
    }

    /**
     * Sets error message field.
     *
     * @param string|null $value
     */
    public function errorMessage(?string $value): self
    {
        $this->instance->setErrorMessage($value);
        return $this;
    }

    /**
     * Unsets error message field.
     */
    public function unsetErrorMessage(): self
    {
        $this->instance->unsetErrorMessage();
        return $this;
    }

    /**
     * Sets created on field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
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
     * Initializes a new Webhook Event object.
     */
    public function build(): WebhookEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
