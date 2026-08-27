<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutSupportedBrand;

/**
 * Builder for model CheckoutSupportedBrand
 *
 * @see CheckoutSupportedBrand
 */
class CheckoutSupportedBrandBuilder
{
    /**
     * @var CheckoutSupportedBrand
     */
    private $instance;

    private function __construct(CheckoutSupportedBrand $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Supported Brand Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutSupportedBrand());
    }

    /**
     * Sets payment type field.
     *
     * @param string|null $value
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Sets brand field.
     *
     * @param string|null $value
     */
    public function brand(?string $value): self
    {
        $this->instance->setBrand($value);
        return $this;
    }

    /**
     * Sets card brand field.
     *
     * @param string|null $value
     */
    public function cardBrand(?string $value): self
    {
        $this->instance->setCardBrand($value);
        return $this;
    }

    /**
     * Sets qr brand field.
     *
     * @param string|null $value
     */
    public function qrBrand(?string $value): self
    {
        $this->instance->setQrBrand($value);
        return $this;
    }

    /**
     * Sets online brand field.
     *
     * @param string|null $value
     */
    public function onlineBrand(?string $value): self
    {
        $this->instance->setOnlineBrand($value);
        return $this;
    }

    /**
     * Sets dynamic info field.
     *
     * @param bool|null $value
     */
    public function dynamicInfo(?bool $value): self
    {
        $this->instance->setDynamicInfo($value);
        return $this;
    }

    /**
     * Sets support auth capture field.
     *
     * @param bool|null $value
     */
    public function supportAuthCapture(?bool $value): self
    {
        $this->instance->setSupportAuthCapture($value);
        return $this;
    }

    /**
     * Sets requires full name field.
     *
     * @param bool|null $value
     */
    public function requiresFullName(?bool $value): self
    {
        $this->instance->setRequiresFullName($value);
        return $this;
    }

    /**
     * Sets requires cvv field.
     *
     * @param bool|null $value
     */
    public function requiresCvv(?bool $value): self
    {
        $this->instance->setRequiresCvv($value);
        return $this;
    }

    /**
     * Sets countries allowed field.
     *
     * @param string[]|null $value
     */
    public function countriesAllowed(?array $value): self
    {
        $this->instance->setCountriesAllowed($value);
        return $this;
    }

    /**
     * Unsets countries allowed field.
     */
    public function unsetCountriesAllowed(): self
    {
        $this->instance->unsetCountriesAllowed();
        return $this;
    }

    /**
     * Sets supported currencies field.
     *
     * @param string[]|null $value
     */
    public function supportedCurrencies(?array $value): self
    {
        $this->instance->setSupportedCurrencies($value);
        return $this;
    }

    /**
     * Unsets supported currencies field.
     */
    public function unsetSupportedCurrencies(): self
    {
        $this->instance->unsetSupportedCurrencies();
        return $this;
    }

    /**
     * Sets cvv auth field.
     *
     * @param bool|null $value
     */
    public function cvvAuth(?bool $value): self
    {
        $this->instance->setCvvAuth($value);
        return $this;
    }

    /**
     * Sets installment capable field.
     *
     * @param bool|null $value
     */
    public function installmentCapable(?bool $value): self
    {
        $this->instance->setInstallmentCapable($value);
        return $this;
    }

    /**
     * Sets mcp capable field.
     *
     * @param bool|null $value
     */
    public function mcpCapable(?bool $value): self
    {
        $this->instance->setMcpCapable($value);
        return $this;
    }

    /**
     * Sets mcp only field.
     *
     * @param bool|null $value
     */
    public function mcpOnly(?bool $value): self
    {
        $this->instance->setMcpOnly($value);
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
     * Initializes a new Checkout Supported Brand object.
     */
    public function build(): CheckoutSupportedBrand
    {
        return CoreHelper::clone($this->instance);
    }
}
