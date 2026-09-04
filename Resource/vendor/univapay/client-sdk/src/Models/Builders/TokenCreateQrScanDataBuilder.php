<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateQrScanData;

/**
 * Builder for model TokenCreateQrScanData
 *
 * @see TokenCreateQrScanData
 */
class TokenCreateQrScanDataBuilder
{
    /**
     * @var TokenCreateQrScanData
     */
    private $instance;

    private function __construct(TokenCreateQrScanData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Qr Scan Data Builder object.
     *
     * @param string $scannedQr
     */
    public static function init(string $scannedQr): self
    {
        return new self(new TokenCreateQrScanData($scannedQr));
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
     * Initializes a new Token Create Qr Scan Data object.
     */
    public function build(): TokenCreateQrScanData
    {
        return CoreHelper::clone($this->instance);
    }
}
