<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\BankTransferStatusData;
use UnivaPay\Models\BankTransferStatusWebhookCallbackExtension;

/**
 * Builder for model BankTransferStatusWebhookCallbackExtension
 *
 * @see BankTransferStatusWebhookCallbackExtension
 */
class BankTransferStatusWebhookCallbackExtensionBuilder
{
    /**
     * @var BankTransferStatusWebhookCallbackExtension
     */
    private $instance;

    private function __construct(BankTransferStatusWebhookCallbackExtension $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bank Transfer Status Webhook Callback Extension Builder object.
     */
    public static function init(): self
    {
        return new self(new BankTransferStatusWebhookCallbackExtension());
    }

    /**
     * Sets data field.
     *
     * @param BankTransferStatusData|null $value
     */
    public function data(?BankTransferStatusData $value): self
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
     * Initializes a new Bank Transfer Status Webhook Callback Extension object.
     */
    public function build(): BankTransferStatusWebhookCallbackExtension
    {
        return CoreHelper::clone($this->instance);
    }
}
