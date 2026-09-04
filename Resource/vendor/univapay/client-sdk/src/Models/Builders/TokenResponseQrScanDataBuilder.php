<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponseQrScanData;

/**
 * Builder for model TokenResponseQrScanData
 *
 * @see TokenResponseQrScanData
 */
class TokenResponseQrScanDataBuilder
{
    /**
     * @var TokenResponseQrScanData
     */
    private $instance;

    private function __construct(TokenResponseQrScanData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Qr Scan Data Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponseQrScanData());
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
     * Initializes a new Token Response Qr Scan Data object.
     */
    public function build(): TokenResponseQrScanData
    {
        return CoreHelper::clone($this->instance);
    }
}
