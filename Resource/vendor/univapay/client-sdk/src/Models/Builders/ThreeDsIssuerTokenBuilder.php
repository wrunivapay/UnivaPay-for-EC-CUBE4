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
use UnivaPay\Models\ThreeDsIssuerToken;

/**
 * Builder for model ThreeDsIssuerToken
 *
 * @see ThreeDsIssuerToken
 */
class ThreeDsIssuerTokenBuilder
{
    /**
     * @var ThreeDsIssuerToken
     */
    private $instance;

    private function __construct(ThreeDsIssuerToken $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Three Ds Issuer Token Builder object.
     *
     * @param string $issuerToken
     * @param string $contentType
     */
    public static function init(string $issuerToken, string $contentType): self
    {
        return new self(new ThreeDsIssuerToken($issuerToken, $contentType));
    }

    /**
     * Sets payload field.
     *
     * @param IssuerTokenPayload|null $value
     */
    public function payload(?IssuerTokenPayload $value): self
    {
        $this->instance->setPayload($value);
        return $this;
    }

    /**
     * Unsets payload field.
     */
    public function unsetPayload(): self
    {
        $this->instance->unsetPayload();
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
     * Initializes a new Three Ds Issuer Token object.
     */
    public function build(): ThreeDsIssuerToken
    {
        return CoreHelper::clone($this->instance);
    }
}
