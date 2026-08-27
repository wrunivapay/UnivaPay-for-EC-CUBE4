<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationWebhookData;
use UnivaPay\Models\CustomsDeclarationWebhookDeclaration;
use UnivaPay\Models\CustomsDeclarationWebhookError;
use UnivaPay\Models\CustomsDeclarationWebhookResult;

/**
 * Builder for model CustomsDeclarationWebhookData
 *
 * @see CustomsDeclarationWebhookData
 */
class CustomsDeclarationWebhookDataBuilder
{
    /**
     * @var CustomsDeclarationWebhookData
     */
    private $instance;

    private function __construct(CustomsDeclarationWebhookData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Webhook Data Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomsDeclarationWebhookData());
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
     * Sets charge id field.
     *
     * @param string|null $value
     */
    public function chargeId(?string $value): self
    {
        $this->instance->setChargeId($value);
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
     * Sets platform id field.
     *
     * @param string|null $value
     */
    public function platformId(?string $value): self
    {
        $this->instance->setPlatformId($value);
        return $this;
    }

    /**
     * Unsets platform id field.
     */
    public function unsetPlatformId(): self
    {
        $this->instance->unsetPlatformId();
        return $this;
    }

    /**
     * Sets mode field.
     *
     * @param string|null $value
     */
    public function mode(?string $value): self
    {
        $this->instance->setMode($value);
        return $this;
    }

    /**
     * Sets gateway field.
     *
     * @param string|null $value
     */
    public function gateway(?string $value): self
    {
        $this->instance->setGateway($value);
        return $this;
    }

    /**
     * Sets declaration field.
     *
     * @param CustomsDeclarationWebhookDeclaration|null $value
     */
    public function declaration(?CustomsDeclarationWebhookDeclaration $value): self
    {
        $this->instance->setDeclaration($value);
        return $this;
    }

    /**
     * Sets declaration result field.
     *
     * @param CustomsDeclarationWebhookResult|null $value
     */
    public function declarationResult(?CustomsDeclarationWebhookResult $value): self
    {
        $this->instance->setDeclarationResult($value);
        return $this;
    }

    /**
     * Unsets declaration result field.
     */
    public function unsetDeclarationResult(): self
    {
        $this->instance->unsetDeclarationResult();
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets error field.
     *
     * @param CustomsDeclarationWebhookError|null $value
     */
    public function error(?CustomsDeclarationWebhookError $value): self
    {
        $this->instance->setError($value);
        return $this;
    }

    /**
     * Unsets error field.
     */
    public function unsetError(): self
    {
        $this->instance->unsetError();
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
     * Unsets updated on field.
     */
    public function unsetUpdatedOn(): self
    {
        $this->instance->unsetUpdatedOn();
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
     * Initializes a new Customs Declaration Webhook Data object.
     */
    public function build(): CustomsDeclarationWebhookData
    {
        return CoreHelper::clone($this->instance);
    }
}
