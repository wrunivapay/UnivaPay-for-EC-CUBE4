<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateQrMerchantData;

/**
 * Builder for model TokenCreateQrMerchantData
 *
 * @see TokenCreateQrMerchantData
 */
class TokenCreateQrMerchantDataBuilder
{
    /**
     * @var TokenCreateQrMerchantData
     */
    private $instance;

    private function __construct(TokenCreateQrMerchantData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Qr Merchant Data Builder object.
     *
     * @param string $brand
     */
    public static function init(string $brand): self
    {
        return new self(new TokenCreateQrMerchantData($brand));
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
     * Initializes a new Token Create Qr Merchant Data object.
     */
    public function build(): TokenCreateQrMerchantData
    {
        return CoreHelper::clone($this->instance);
    }
}
