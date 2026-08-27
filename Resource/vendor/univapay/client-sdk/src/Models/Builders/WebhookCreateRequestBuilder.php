<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\WebhookCreateRequest;

/**
 * Builder for model WebhookCreateRequest
 *
 * @see WebhookCreateRequest
 */
class WebhookCreateRequestBuilder
{
    /**
     * @var WebhookCreateRequest
     */
    private $instance;

    private function __construct(WebhookCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook Create Request Builder object.
     *
     * @param string[] $triggers
     * @param string $url
     */
    public static function init(array $triggers, string $url): self
    {
        return new self(new WebhookCreateRequest($triggers, $url));
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
     * Initializes a new Webhook Create Request object.
     */
    public function build(): WebhookCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
