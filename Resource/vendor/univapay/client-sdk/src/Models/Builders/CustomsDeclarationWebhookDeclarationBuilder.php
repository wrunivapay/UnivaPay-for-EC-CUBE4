<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationWebhookDeclaration;

/**
 * Builder for model CustomsDeclarationWebhookDeclaration
 *
 * @see CustomsDeclarationWebhookDeclaration
 */
class CustomsDeclarationWebhookDeclarationBuilder
{
    /**
     * @var CustomsDeclarationWebhookDeclaration
     */
    private $instance;

    private function __construct(CustomsDeclarationWebhookDeclaration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Webhook Declaration Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomsDeclarationWebhookDeclaration());
    }

    /**
     * Sets customs field.
     *
     * @param string|null $value
     */
    public function customs(?string $value): self
    {
        $this->instance->setCustoms($value);
        return $this;
    }

    /**
     * Sets merchant customs no field.
     *
     * @param string|null $value
     */
    public function merchantCustomsNo(?string $value): self
    {
        $this->instance->setMerchantCustomsNo($value);
        return $this;
    }

    /**
     * Sets certificate id field.
     *
     * @param string|null $value
     */
    public function certificateId(?string $value): self
    {
        $this->instance->setCertificateId($value);
        return $this;
    }

    /**
     * Sets certificate name field.
     *
     * @param string|null $value
     */
    public function certificateName(?string $value): self
    {
        $this->instance->setCertificateName($value);
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
     * Initializes a new Customs Declaration Webhook Declaration object.
     */
    public function build(): CustomsDeclarationWebhookDeclaration
    {
        return CoreHelper::clone($this->instance);
    }
}
