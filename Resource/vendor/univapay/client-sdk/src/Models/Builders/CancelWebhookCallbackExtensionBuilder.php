<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\Cancel;
use UnivaPay\Models\CancelWebhookCallbackExtension;

/**
 * Builder for model CancelWebhookCallbackExtension
 *
 * @see CancelWebhookCallbackExtension
 */
class CancelWebhookCallbackExtensionBuilder
{
    /**
     * @var CancelWebhookCallbackExtension
     */
    private $instance;

    private function __construct(CancelWebhookCallbackExtension $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Cancel Webhook Callback Extension Builder object.
     */
    public static function init(): self
    {
        return new self(new CancelWebhookCallbackExtension());
    }

    /**
     * Sets data field.
     *
     * @param Cancel|null $value
     */
    public function data(?Cancel $value): self
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
     * Initializes a new Cancel Webhook Callback Extension object.
     */
    public function build(): CancelWebhookCallbackExtension
    {
        return CoreHelper::clone($this->instance);
    }
}
