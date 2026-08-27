<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TransactionHistoryRefund;
use UnivaPay\Models\TransactionHistoryUserData;

/**
 * Builder for model TransactionHistoryUserData
 *
 * @see TransactionHistoryUserData
 */
class TransactionHistoryUserDataBuilder
{
    /**
     * @var TransactionHistoryUserData
     */
    private $instance;

    private function __construct(TransactionHistoryUserData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction History User Data Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionHistoryUserData());
    }

    /**
     * Sets type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets cardholder name field.
     *
     * @param string|null $value
     */
    public function cardholderName(?string $value): self
    {
        $this->instance->setCardholderName($value);
        return $this;
    }

    /**
     * Sets cardholder email address field.
     *
     * @param string|null $value
     */
    public function cardholderEmailAddress(?string $value): self
    {
        $this->instance->setCardholderEmailAddress($value);
        return $this;
    }

    /**
     * Unsets cardholder email address field.
     */
    public function unsetCardholderEmailAddress(): self
    {
        $this->instance->unsetCardholderEmailAddress();
        return $this;
    }

    /**
     * Sets cardholder phone number field.
     *
     * @param string|null $value
     */
    public function cardholderPhoneNumber(?string $value): self
    {
        $this->instance->setCardholderPhoneNumber($value);
        return $this;
    }

    /**
     * Unsets cardholder phone number field.
     */
    public function unsetCardholderPhoneNumber(): self
    {
        $this->instance->unsetCardholderPhoneNumber();
        return $this;
    }

    /**
     * Sets customer name field.
     *
     * @param string|null $value
     */
    public function customerName(?string $value): self
    {
        $this->instance->setCustomerName($value);
        return $this;
    }

    /**
     * Sets convenience store field.
     *
     * @param string|null $value
     */
    public function convenienceStore(?string $value): self
    {
        $this->instance->setConvenienceStore($value);
        return $this;
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
     * Unsets brand field.
     */
    public function unsetBrand(): self
    {
        $this->instance->unsetBrand();
        return $this;
    }

    /**
     * Sets gateway field.
     *
     * @param string|null $value
     */
    public function gateway(?string $value): self
    {
        $this->instance->setGateway($value);
        return $this;
    }

    /**
     * Unsets gateway field.
     */
    public function unsetGateway(): self
    {
        $this->instance->unsetGateway();
        return $this;
    }

    /**
     * Sets service provider field.
     *
     * @param string|null $value
     */
    public function serviceProvider(?string $value): self
    {
        $this->instance->setServiceProvider($value);
        return $this;
    }

    /**
     * Unsets service provider field.
     */
    public function unsetServiceProvider(): self
    {
        $this->instance->unsetServiceProvider();
        return $this;
    }

    /**
     * Sets refunds field.
     *
     * @param TransactionHistoryRefund[]|null $value
     */
    public function refunds(?array $value): self
    {
        $this->instance->setRefunds($value);
        return $this;
    }

    /**
     * Sets reason field.
     *
     * @param string|null $value
     */
    public function reason(?string $value): self
    {
        $this->instance->setReason($value);
        return $this;
    }

    /**
     * Unsets reason field.
     */
    public function unsetReason(): self
    {
        $this->instance->unsetReason();
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
     * Initializes a new Transaction History User Data object.
     */
    public function build(): TransactionHistoryUserData
    {
        return CoreHelper::clone($this->instance);
    }
}
