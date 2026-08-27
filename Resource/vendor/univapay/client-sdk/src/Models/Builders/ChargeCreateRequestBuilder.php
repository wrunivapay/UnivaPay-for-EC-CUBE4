<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\ChargeCreateRequest;
use UnivaPay\Models\ChargeCreateRequestClientMetadata;
use UnivaPay\Models\ChargeCreateRequestRedirect;
use UnivaPay\Models\ChargeCreateRequestThreeDs;
use UnivaPay\Models\GenericMetadata;

/**
 * Builder for model ChargeCreateRequest
 *
 * @see ChargeCreateRequest
 */
class ChargeCreateRequestBuilder
{
    /**
     * @var ChargeCreateRequest
     */
    private $instance;

    private function __construct(ChargeCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Charge Create Request Builder object.
     *
     * @param string $transactionTokenId
     * @param int $amount
     * @param string $currency
     */
    public static function init(string $transactionTokenId, int $amount, string $currency): self
    {
        return new self(new ChargeCreateRequest($transactionTokenId, $amount, $currency));
    }

    /**
     * Sets capture field.
     *
     * @param bool|null $value
     */
    public function capture(?bool $value): self
    {
        $this->instance->setCapture($value);
        return $this;
    }

    /**
     * Sets capture at field.
     *
     * @param \DateTime|null $value
     */
    public function captureAt(?\DateTime $value): self
    {
        $this->instance->setCaptureAt($value);
        return $this;
    }

    /**
     * Sets merchant transaction id field.
     *
     * @param string|null $value
     */
    public function merchantTransactionId(?string $value): self
    {
        $this->instance->setMerchantTransactionId($value);
        return $this;
    }

    /**
     * Sets metadata field.
     *
     * @param GenericMetadata|null $value
     */
    public function metadata(?GenericMetadata $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
    }

    /**
     * Sets client metadata field.
     *
     * @param ChargeCreateRequestClientMetadata|null $value
     */
    public function clientMetadata(?ChargeCreateRequestClientMetadata $value): self
    {
        $this->instance->setClientMetadata($value);
        return $this;
    }

    /**
     * Sets redirect field.
     *
     * @param ChargeCreateRequestRedirect|null $value
     */
    public function redirect(?ChargeCreateRequestRedirect $value): self
    {
        $this->instance->setRedirect($value);
        return $this;
    }

    /**
     * Sets three ds field.
     *
     * @param ChargeCreateRequestThreeDs|null $value
     */
    public function threeDs(?ChargeCreateRequestThreeDs $value): self
    {
        $this->instance->setThreeDs($value);
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
     * Initializes a new Charge Create Request object.
     */
    public function build(): ChargeCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
