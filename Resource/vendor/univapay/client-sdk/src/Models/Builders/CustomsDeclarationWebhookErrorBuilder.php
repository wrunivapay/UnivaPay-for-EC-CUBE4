<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationWebhookError;
use UnivaPay\Models\CustomsDeclarationWebhookOtherError;

/**
 * Builder for model CustomsDeclarationWebhookError
 *
 * @see CustomsDeclarationWebhookError
 */
class CustomsDeclarationWebhookErrorBuilder
{
    /**
     * @var CustomsDeclarationWebhookError
     */
    private $instance;

    private function __construct(CustomsDeclarationWebhookError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Webhook Error Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomsDeclarationWebhookError());
    }

    /**
     * Sets code field.
     *
     * @param int|null $value
     */
    public function code(?int $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets details field.
     *
     * @param string|null $value
     */
    public function details(?string $value): self
    {
        $this->instance->setDetails($value);
        return $this;
    }

    /**
     * Unsets details field.
     */
    public function unsetDetails(): self
    {
        $this->instance->unsetDetails();
        return $this;
    }

    /**
     * Sets others field.
     *
     * @param CustomsDeclarationWebhookOtherError[]|null $value
     */
    public function others(?array $value): self
    {
        $this->instance->setOthers($value);
        return $this;
    }

    /**
     * Unsets others field.
     */
    public function unsetOthers(): self
    {
        $this->instance->unsetOthers();
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
     * Initializes a new Customs Declaration Webhook Error object.
     */
    public function build(): CustomsDeclarationWebhookError
    {
        return CoreHelper::clone($this->instance);
    }
}
