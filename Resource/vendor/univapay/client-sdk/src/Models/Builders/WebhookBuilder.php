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

/**
 * Builder for model Webhook
 *
 * @see Webhook
 */
class WebhookBuilder
{
    /**
     * @var Webhook
     */
    private $instance;

    private function __construct(Webhook $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Webhook Builder object.
     */
    public static function init(): self
    {
        return new self(new Webhook());
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
     * Sets store id field.
     *
     * @param string|null $value
     */
    public function storeId(?string $value): self
    {
        $this->instance->setStoreId($value);
        return $this;
    }

    /**
     * Unsets store id field.
     */
    public function unsetStoreId(): self
    {
        $this->instance->unsetStoreId();
        return $this;
    }

    /**
     * Sets merchant id field.
     *
     * @param string|null $value
     */
    public function merchantId(?string $value): self
    {
        $this->instance->setMerchantId($value);
        return $this;
    }

    /**
     * Unsets merchant id field.
     */
    public function unsetMerchantId(): self
    {
        $this->instance->unsetMerchantId();
        return $this;
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
     * Sets is integration field.
     *
     * @param bool|null $value
     */
    public function isIntegration(?bool $value): self
    {
        $this->instance->setIsIntegration($value);
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
     * Sets updated on field.
     *
     * @param \DateTime|null $value
     */
    public function updatedOn(?\DateTime $value): self
    {
        $this->instance->setUpdatedOn($value);
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
     * Initializes a new Webhook object.
     */
    public function build(): Webhook
    {
        return CoreHelper::clone($this->instance);
    }
}
