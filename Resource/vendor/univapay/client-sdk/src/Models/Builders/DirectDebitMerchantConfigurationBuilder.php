<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\DirectDebitMerchantConfiguration;

/**
 * Builder for model DirectDebitMerchantConfiguration
 *
 * @see DirectDebitMerchantConfiguration
 */
class DirectDebitMerchantConfigurationBuilder
{
    /**
     * @var DirectDebitMerchantConfiguration
     */
    private $instance;

    private function __construct(DirectDebitMerchantConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Direct Debit Merchant Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new DirectDebitMerchantConfiguration());
    }

    /**
     * Sets legacy id field.
     *
     * @param string|null $value
     */
    public function legacyId(?string $value): self
    {
        $this->instance->setLegacyId($value);
        return $this;
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets debit date field.
     *
     * @param string|null $value
     */
    public function debitDate(?string $value): self
    {
        $this->instance->setDebitDate($value);
        return $this;
    }

    /**
     * Sets consignor code field.
     *
     * @param string|null $value
     */
    public function consignorCode(?string $value): self
    {
        $this->instance->setConsignorCode($value);
        return $this;
    }

    /**
     * Sets classifier field.
     *
     * @param string|null $value
     */
    public function classifier(?string $value): self
    {
        $this->instance->setClassifier($value);
        return $this;
    }

    /**
     * Sets signature field.
     *
     * @param string|null $value
     */
    public function signature(?string $value): self
    {
        $this->instance->setSignature($value);
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
     * Initializes a new Direct Debit Merchant Configuration object.
     */
    public function build(): DirectDebitMerchantConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
