<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponseQrMerchantData;

/**
 * Builder for model TokenResponseQrMerchantData
 *
 * @see TokenResponseQrMerchantData
 */
class TokenResponseQrMerchantDataBuilder
{
    /**
     * @var TokenResponseQrMerchantData
     */
    private $instance;

    private function __construct(TokenResponseQrMerchantData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Qr Merchant Data Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponseQrMerchantData());
    }

    /**
     * Sets qr image url field.
     *
     * @param string|null $value
     */
    public function qrImageUrl(?string $value): self
    {
        $this->instance->setQrImageUrl($value);
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
     * Unsets brand field.
     */
    public function unsetBrand(): self
    {
        $this->instance->unsetBrand();
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
     * Initializes a new Token Response Qr Merchant Data object.
     */
    public function build(): TokenResponseQrMerchantData
    {
        return CoreHelper::clone($this->instance);
    }
}
