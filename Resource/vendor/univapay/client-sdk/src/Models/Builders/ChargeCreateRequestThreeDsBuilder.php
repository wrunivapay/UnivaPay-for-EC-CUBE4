<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ChargeCreateRequestThreeDs;

/**
 * Builder for model ChargeCreateRequestThreeDs
 *
 * @see ChargeCreateRequestThreeDs
 */
class ChargeCreateRequestThreeDsBuilder
{
    /**
     * @var ChargeCreateRequestThreeDs
     */
    private $instance;

    private function __construct(ChargeCreateRequestThreeDs $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Charge Create Request Three Ds Builder object.
     */
    public static function init(): self
    {
        return new self(new ChargeCreateRequestThreeDs());
    }

    /**
     * Sets redirect endpoint field.
     *
     * @param string|null $value
     */
    public function redirectEndpoint(?string $value): self
    {
        $this->instance->setRedirectEndpoint($value);
        return $this;
    }

    /**
     * Sets mode field.
     *
     * @param string|null $value
     */
    public function mode(?string $value): self
    {
        $this->instance->setMode($value);
        return $this;
    }

    /**
     * Sets authentication value field.
     *
     * @param string|null $value
     */
    public function authenticationValue(?string $value): self
    {
        $this->instance->setAuthenticationValue($value);
        return $this;
    }

    /**
     * Sets eci field.
     *
     * @param string|null $value
     */
    public function eci(?string $value): self
    {
        $this->instance->setEci($value);
        return $this;
    }

    /**
     * Sets ds transaction id field.
     *
     * @param string|null $value
     */
    public function dsTransactionId(?string $value): self
    {
        $this->instance->setDsTransactionId($value);
        return $this;
    }

    /**
     * Sets server transaction id field.
     *
     * @param string|null $value
     */
    public function serverTransactionId(?string $value): self
    {
        $this->instance->setServerTransactionId($value);
        return $this;
    }

    /**
     * Sets message version field.
     *
     * @param string|null $value
     */
    public function messageVersion(?string $value): self
    {
        $this->instance->setMessageVersion($value);
        return $this;
    }

    /**
     * Sets transaction status field.
     *
     * @param string|null $value
     */
    public function transactionStatus(?string $value): self
    {
        $this->instance->setTransactionStatus($value);
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
     * Initializes a new Charge Create Request Three Ds object.
     */
    public function build(): ChargeCreateRequestThreeDs
    {
        return CoreHelper::clone($this->instance);
    }
}
