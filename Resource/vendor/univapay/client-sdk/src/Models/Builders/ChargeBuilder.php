<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\Charge;
use UnivaPay\Models\ChargeRedirect;
use UnivaPay\Models\ChargeThreeDs;
use UnivaPay\Models\GenericMetadata;
use UnivaPay\Models\PaymentError;

/**
 * Builder for model Charge
 *
 * @see Charge
 */
class ChargeBuilder
{
    /**
     * @var Charge
     */
    private $instance;

    private function __construct(Charge $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Charge Builder object.
     */
    public static function init(): self
    {
        return new self(new Charge());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets store id field.
     *
     * @param string|null $value
     */
    public function storeId(?string $value): self
    {
        $this->instance->setStoreId($value);
        return $this;
    }

    /**
     * Sets transaction token id field.
     *
     * @param string|null $value
     */
    public function transactionTokenId(?string $value): self
    {
        $this->instance->setTransactionTokenId($value);
        return $this;
    }

    /**
     * Sets transaction token type field.
     *
     * @param string|null $value
     */
    public function transactionTokenType(?string $value): self
    {
        $this->instance->setTransactionTokenType($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     *
     * @param string|null $value
     */
    public function subscriptionId(?string $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Unsets subscription id field.
     */
    public function unsetSubscriptionId(): self
    {
        $this->instance->unsetSubscriptionId();
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
     * Unsets merchant transaction id field.
     */
    public function unsetMerchantTransactionId(): self
    {
        $this->instance->unsetMerchantTransactionId();
        return $this;
    }

    /**
     * Sets requested amount field.
     *
     * @param int|null $value
     */
    public function requestedAmount(?int $value): self
    {
        $this->instance->setRequestedAmount($value);
        return $this;
    }

    /**
     * Sets requested currency field.
     *
     * @param string|null $value
     */
    public function requestedCurrency(?string $value): self
    {
        $this->instance->setRequestedCurrency($value);
        return $this;
    }

    /**
     * Sets requested amount formatted field.
     *
     * @param float|null $value
     */
    public function requestedAmountFormatted(?float $value): self
    {
        $this->instance->setRequestedAmountFormatted($value);
        return $this;
    }

    /**
     * Sets charged amount field.
     *
     * @param int|null $value
     */
    public function chargedAmount(?int $value): self
    {
        $this->instance->setChargedAmount($value);
        return $this;
    }

    /**
     * Unsets charged amount field.
     */
    public function unsetChargedAmount(): self
    {
        $this->instance->unsetChargedAmount();
        return $this;
    }

    /**
     * Sets charged currency field.
     *
     * @param string|null $value
     */
    public function chargedCurrency(?string $value): self
    {
        $this->instance->setChargedCurrency($value);
        return $this;
    }

    /**
     * Unsets charged currency field.
     */
    public function unsetChargedCurrency(): self
    {
        $this->instance->unsetChargedCurrency();
        return $this;
    }

    /**
     * Sets charged amount formatted field.
     *
     * @param float|null $value
     */
    public function chargedAmountFormatted(?float $value): self
    {
        $this->instance->setChargedAmountFormatted($value);
        return $this;
    }

    /**
     * Unsets charged amount formatted field.
     */
    public function unsetChargedAmountFormatted(): self
    {
        $this->instance->unsetChargedAmountFormatted();
        return $this;
    }

    /**
     * Sets fee amount field.
     *
     * @param int|null $value
     */
    public function feeAmount(?int $value): self
    {
        $this->instance->setFeeAmount($value);
        return $this;
    }

    /**
     * Unsets fee amount field.
     */
    public function unsetFeeAmount(): self
    {
        $this->instance->unsetFeeAmount();
        return $this;
    }

    /**
     * Sets fee currency field.
     *
     * @param string|null $value
     */
    public function feeCurrency(?string $value): self
    {
        $this->instance->setFeeCurrency($value);
        return $this;
    }

    /**
     * Unsets fee currency field.
     */
    public function unsetFeeCurrency(): self
    {
        $this->instance->unsetFeeCurrency();
        return $this;
    }

    /**
     * Sets fee amount formatted field.
     *
     * @param float|null $value
     */
    public function feeAmountFormatted(?float $value): self
    {
        $this->instance->setFeeAmountFormatted($value);
        return $this;
    }

    /**
     * Unsets fee amount formatted field.
     */
    public function unsetFeeAmountFormatted(): self
    {
        $this->instance->unsetFeeAmountFormatted();
        return $this;
    }

    /**
     * Sets only direct currency field.
     *
     * @param bool|null $value
     */
    public function onlyDirectCurrency(?bool $value): self
    {
        $this->instance->setOnlyDirectCurrency($value);
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
     * Unsets capture at field.
     */
    public function unsetCaptureAt(): self
    {
        $this->instance->unsetCaptureAt();
        return $this;
    }

    /**
     * Sets descriptor field.
     *
     * @param string|null $value
     */
    public function descriptor(?string $value): self
    {
        $this->instance->setDescriptor($value);
        return $this;
    }

    /**
     * Unsets descriptor field.
     */
    public function unsetDescriptor(): self
    {
        $this->instance->unsetDescriptor();
        return $this;
    }

    /**
     * Sets descriptor phone number field.
     *
     * @param string|null $value
     */
    public function descriptorPhoneNumber(?string $value): self
    {
        $this->instance->setDescriptorPhoneNumber($value);
        return $this;
    }

    /**
     * Unsets descriptor phone number field.
     */
    public function unsetDescriptorPhoneNumber(): self
    {
        $this->instance->unsetDescriptorPhoneNumber();
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets error field.
     *
     * @param PaymentError|null $value
     */
    public function error(?PaymentError $value): self
    {
        $this->instance->setError($value);
        return $this;
    }

    /**
     * Unsets error field.
     */
    public function unsetError(): self
    {
        $this->instance->unsetError();
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
     * Sets created on field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Sets merchant name field.
     *
     * @param string|null $value
     */
    public function merchantName(?string $value): self
    {
        $this->instance->setMerchantName($value);
        return $this;
    }

    /**
     * Sets store name field.
     *
     * @param string|null $value
     */
    public function storeName(?string $value): self
    {
        $this->instance->setStoreName($value);
        return $this;
    }

    /**
     * Sets redirect field.
     *
     * @param ChargeRedirect|null $value
     */
    public function redirect(?ChargeRedirect $value): self
    {
        $this->instance->setRedirect($value);
        return $this;
    }

    /**
     * Sets three ds field.
     *
     * @param ChargeThreeDs|null $value
     */
    public function threeDs(?ChargeThreeDs $value): self
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
     * Initializes a new Charge object.
     */
    public function build(): Charge
    {
        return CoreHelper::clone($this->instance);
    }
}
