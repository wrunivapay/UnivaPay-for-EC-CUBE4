<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationWebhookOtherError;

/**
 * Builder for model CustomsDeclarationWebhookOtherError
 *
 * @see CustomsDeclarationWebhookOtherError
 */
class CustomsDeclarationWebhookOtherErrorBuilder
{
    /**
     * @var CustomsDeclarationWebhookOtherError
     */
    private $instance;

    private function __construct(CustomsDeclarationWebhookOtherError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Webhook Other Error Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomsDeclarationWebhookOtherError());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets credentials id field.
     *
     * @param string|null $value
     */
    public function credentialsId(?string $value): self
    {
        $this->instance->setCredentialsId($value);
        return $this;
    }

    /**
     * Unsets credentials id field.
     */
    public function unsetCredentialsId(): self
    {
        $this->instance->unsetCredentialsId();
        return $this;
    }

    /**
     * Sets message field.
     *
     * @param string[]|null $value
     */
    public function message(?array $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Unsets message field.
     */
    public function unsetMessage(): self
    {
        $this->instance->unsetMessage();
        return $this;
    }

    /**
     * Sets item name field.
     *
     * @param string|null $value
     */
    public function itemName(?string $value): self
    {
        $this->instance->setItemName($value);
        return $this;
    }

    /**
     * Unsets item name field.
     */
    public function unsetItemName(): self
    {
        $this->instance->unsetItemName();
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
     * Initializes a new Customs Declaration Webhook Other Error object.
     */
    public function build(): CustomsDeclarationWebhookOtherError
    {
        return CoreHelper::clone($this->instance);
    }
}
