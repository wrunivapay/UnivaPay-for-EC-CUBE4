<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateBankTransferData;
use UnivaPay\Models\TokenCreateCardData;
use UnivaPay\Models\TokenCreateKonbiniData;
use UnivaPay\Models\TokenCreateOnlineData;
use UnivaPay\Models\TokenCreatePaidyData;
use UnivaPay\Models\TokenCreateQrMerchantData;
use UnivaPay\Models\TokenCreateQrScanData;
use UnivaPay\Models\TransactionTokenCreateRequest;
use UnivaPay\Models\TransactionTokenCreateRequestMetadata;

/**
 * Builder for model TransactionTokenCreateRequest
 *
 * @see TransactionTokenCreateRequest
 */
class TransactionTokenCreateRequestBuilder
{
    /**
     * @var TransactionTokenCreateRequest
     */
    private $instance;

    private function __construct(TransactionTokenCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction Token Create Request Builder object.
     *
     * @param string $paymentType
     * @param string $type
     * @param TokenCreateCardData|TokenCreateKonbiniData|TokenCreateOnlineData|TokenCreateBankTransferData|TokenCreatePaidyData|TokenCreateQrScanData|TokenCreateQrMerchantData $data
     */
    public static function init(string $paymentType, string $type, $data): self
    {
        return new self(new TransactionTokenCreateRequest($paymentType, $type, $data));
    }

    /**
     * Sets email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets usage limit field.
     *
     * @param string|null $value
     */
    public function usageLimit(?string $value): self
    {
        $this->instance->setUsageLimit($value);
        return $this;
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
     * Sets metadata field.
     *
     * @param TransactionTokenCreateRequestMetadata|null $value
     */
    public function metadata(?TransactionTokenCreateRequestMetadata $value): self
    {
        $this->instance->setMetadata($value);
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
     * Initializes a new Transaction Token Create Request object.
     */
    public function build(): TransactionTokenCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
