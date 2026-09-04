<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookCardBrandPercentFees;

/**
 * Builder for model MerchantWebhookCardBrandPercentFees
 *
 * @see MerchantWebhookCardBrandPercentFees
 */
class MerchantWebhookCardBrandPercentFeesBuilder
{
    /**
     * @var MerchantWebhookCardBrandPercentFees
     */
    private $instance;

    private function __construct(MerchantWebhookCardBrandPercentFees $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Card Brand Percent Fees Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookCardBrandPercentFees());
    }

    /**
     * Sets visa field.
     *
     * @param float|null $value
     */
    public function visa(?float $value): self
    {
        $this->instance->setVisa($value);
        return $this;
    }

    /**
     * Unsets visa field.
     */
    public function unsetVisa(): self
    {
        $this->instance->unsetVisa();
        return $this;
    }

    /**
     * Sets american express field.
     *
     * @param float|null $value
     */
    public function americanExpress(?float $value): self
    {
        $this->instance->setAmericanExpress($value);
        return $this;
    }

    /**
     * Unsets american express field.
     */
    public function unsetAmericanExpress(): self
    {
        $this->instance->unsetAmericanExpress();
        return $this;
    }

    /**
     * Sets mastercard field.
     *
     * @param float|null $value
     */
    public function mastercard(?float $value): self
    {
        $this->instance->setMastercard($value);
        return $this;
    }

    /**
     * Unsets mastercard field.
     */
    public function unsetMastercard(): self
    {
        $this->instance->unsetMastercard();
        return $this;
    }

    /**
     * Sets maestro field.
     *
     * @param float|null $value
     */
    public function maestro(?float $value): self
    {
        $this->instance->setMaestro($value);
        return $this;
    }

    /**
     * Unsets maestro field.
     */
    public function unsetMaestro(): self
    {
        $this->instance->unsetMaestro();
        return $this;
    }

    /**
     * Sets discover field.
     *
     * @param float|null $value
     */
    public function discover(?float $value): self
    {
        $this->instance->setDiscover($value);
        return $this;
    }

    /**
     * Unsets discover field.
     */
    public function unsetDiscover(): self
    {
        $this->instance->unsetDiscover();
        return $this;
    }

    /**
     * Sets jcb field.
     *
     * @param float|null $value
     */
    public function jcb(?float $value): self
    {
        $this->instance->setJcb($value);
        return $this;
    }

    /**
     * Unsets jcb field.
     */
    public function unsetJcb(): self
    {
        $this->instance->unsetJcb();
        return $this;
    }

    /**
     * Sets diners club field.
     *
     * @param float|null $value
     */
    public function dinersClub(?float $value): self
    {
        $this->instance->setDinersClub($value);
        return $this;
    }

    /**
     * Unsets diners club field.
     */
    public function unsetDinersClub(): self
    {
        $this->instance->unsetDinersClub();
        return $this;
    }

    /**
     * Sets union pay field.
     *
     * @param float|null $value
     */
    public function unionPay(?float $value): self
    {
        $this->instance->setUnionPay($value);
        return $this;
    }

    /**
     * Unsets union pay field.
     */
    public function unsetUnionPay(): self
    {
        $this->instance->unsetUnionPay();
        return $this;
    }

    /**
     * Sets private label field.
     *
     * @param float|null $value
     */
    public function privateLabel(?float $value): self
    {
        $this->instance->setPrivateLabel($value);
        return $this;
    }

    /**
     * Unsets private label field.
     */
    public function unsetPrivateLabel(): self
    {
        $this->instance->unsetPrivateLabel();
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
     * Initializes a new Merchant Webhook Card Brand Percent Fees object.
     */
    public function build(): MerchantWebhookCardBrandPercentFees
    {
        return CoreHelper::clone($this->instance);
    }
}
