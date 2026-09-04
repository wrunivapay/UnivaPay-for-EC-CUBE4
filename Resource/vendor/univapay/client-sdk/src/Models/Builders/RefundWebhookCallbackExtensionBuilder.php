<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\Refund;
use UnivaPay\Models\RefundWebhookCallbackExtension;

/**
 * Builder for model RefundWebhookCallbackExtension
 *
 * @see RefundWebhookCallbackExtension
 */
class RefundWebhookCallbackExtensionBuilder
{
    /**
     * @var RefundWebhookCallbackExtension
     */
    private $instance;

    private function __construct(RefundWebhookCallbackExtension $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Webhook Callback Extension Builder object.
     */
    public static function init(): self
    {
        return new self(new RefundWebhookCallbackExtension());
    }

    /**
     * Sets data field.
     *
     * @param Refund|null $value
     */
    public function data(?Refund $value): self
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
     * Initializes a new Refund Webhook Callback Extension object.
     */
    public function build(): RefundWebhookCallbackExtension
    {
        return CoreHelper::clone($this->instance);
    }
}
