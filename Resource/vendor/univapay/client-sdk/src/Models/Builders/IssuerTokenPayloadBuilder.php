<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\IssuerTokenPayload;

/**
 * Builder for model IssuerTokenPayload
 *
 * @see IssuerTokenPayload
 */
class IssuerTokenPayloadBuilder
{
    /**
     * @var IssuerTokenPayload
     */
    private $instance;

    private function __construct(IssuerTokenPayload $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Issuer Token Payload Builder object.
     */
    public static function init(): self
    {
        return new self(new IssuerTokenPayload());
    }

    /**
     * Sets request data field.
     *
     * @param string|null $value
     */
    public function requestData(?string $value): self
    {
        $this->instance->setRequestData($value);
        return $this;
    }

    /**
     * Sets s Spcd field.
     *
     * @param string|null $value
     */
    public function sSpcd(?string $value): self
    {
        $this->instance->setSSpcd($value);
        return $this;
    }

    /**
     * Sets s Cptok field.
     *
     * @param string|null $value
     */
    public function sCptok(?string $value): self
    {
        $this->instance->setSCptok($value);
        return $this;
    }

    /**
     * Sets s Terkn field.
     *
     * @param string|null $value
     */
    public function sTerkn(?string $value): self
    {
        $this->instance->setSTerkn($value);
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
     * Initializes a new Issuer Token Payload object.
     */
    public function build(): IssuerTokenPayload
    {
        return CoreHelper::clone($this->instance);
    }
}
