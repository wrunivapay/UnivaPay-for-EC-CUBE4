<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ChargeCreateRequestClientMetadata;

/**
 * Builder for model ChargeCreateRequestClientMetadata
 *
 * @see ChargeCreateRequestClientMetadata
 */
class ChargeCreateRequestClientMetadataBuilder
{
    /**
     * @var ChargeCreateRequestClientMetadata
     */
    private $instance;

    private function __construct(ChargeCreateRequestClientMetadata $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Charge Create Request Client Metadata Builder object.
     */
    public static function init(): self
    {
        return new self(new ChargeCreateRequestClientMetadata());
    }

    /**
     * Sets ip address field.
     *
     * @param string|null $value
     */
    public function ipAddress(?string $value): self
    {
        $this->instance->setIpAddress($value);
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
     * Initializes a new Charge Create Request Client Metadata object.
     */
    public function build(): ChargeCreateRequestClientMetadata
    {
        return CoreHelper::clone($this->instance);
    }
}
