<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\WebhookUpdateRequest;

/**
 * Builder for model WebhookUpdateRequest
 *
 * @see WebhookUpdateRequest
 */
class WebhookUpdateRequestBuilder
{
    /**
     * @var WebhookUpdateRequest
     */
    private $instance;

    private function __construct(WebhookUpdateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook Update Request Builder object.
     */
    public static function init(): self
    {
        return new self(new WebhookUpdateRequest());
    }

    /**
     * Sets triggers field.
     *
     * @param string[]|null $value
     */
    public function triggers(?array $value): self
    {
        $this->instance->setTriggers($value);
        return $this;
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets auth token field.
     *
     * @param string|null $value
     */
    public function authToken(?string $value): self
    {
        $this->instance->setAuthToken($value);
        return $this;
    }

    /**
     * Unsets auth token field.
     */
    public function unsetAuthToken(): self
    {
        $this->instance->unsetAuthToken();
        return $this;
    }

    /**
     * Sets active field.
     *
     * @param bool|null $value
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
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
     * Initializes a new Webhook Update Request object.
     */
    public function build(): WebhookUpdateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
