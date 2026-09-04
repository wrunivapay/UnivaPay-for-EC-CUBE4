<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationWebhookCallbackExtension;
use UnivaPay\Models\CustomsDeclarationWebhookData;

/**
 * Builder for model CustomsDeclarationWebhookCallbackExtension
 *
 * @see CustomsDeclarationWebhookCallbackExtension
 */
class CustomsDeclarationWebhookCallbackExtensionBuilder
{
    /**
     * @var CustomsDeclarationWebhookCallbackExtension
     */
    private $instance;

    private function __construct(CustomsDeclarationWebhookCallbackExtension $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Webhook Callback Extension Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomsDeclarationWebhookCallbackExtension());
    }

    /**
     * Sets data field.
     *
     * @param CustomsDeclarationWebhookData|null $value
     */
    public function data(?CustomsDeclarationWebhookData $value): self
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
     * Initializes a new Customs Declaration Webhook Callback Extension object.
     */
    public function build(): CustomsDeclarationWebhookCallbackExtension
    {
        return CoreHelper::clone($this->instance);
    }
}
