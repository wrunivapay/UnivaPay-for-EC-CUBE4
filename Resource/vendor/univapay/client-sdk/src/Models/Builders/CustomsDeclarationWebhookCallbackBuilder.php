<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationWebhookCallback;
use UnivaPay\Models\CustomsDeclarationWebhookData;

/**
 * Builder for model CustomsDeclarationWebhookCallback
 *
 * @see CustomsDeclarationWebhookCallback
 */
class CustomsDeclarationWebhookCallbackBuilder
{
    /**
     * @var CustomsDeclarationWebhookCallback
     */
    private $instance;

    private function __construct(CustomsDeclarationWebhookCallback $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Webhook Callback Builder object.
     *
     * @param string $id
     * @param \DateTime $createdOn
     */
    public static function init(string $id, \DateTime $createdOn): self
    {
        return new self(new CustomsDeclarationWebhookCallback($id, $createdOn));
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
     * Initializes a new Customs Declaration Webhook Callback object.
     */
    public function build(): CustomsDeclarationWebhookCallback
    {
        return CoreHelper::clone($this->instance);
    }
}
