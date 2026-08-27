<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TransactionTokenUpdateRequestData;
use UnivaPay\Models\TransactionTokenUpdateRequestDataPhoneNumber;

/**
 * Builder for model TransactionTokenUpdateRequestData
 *
 * @see TransactionTokenUpdateRequestData
 */
class TransactionTokenUpdateRequestDataBuilder
{
    /**
     * @var TransactionTokenUpdateRequestData
     */
    private $instance;

    private function __construct(TransactionTokenUpdateRequestData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Transaction Token Update Request Data Builder object.
     */
    public static function init(): self
    {
        return new self(new TransactionTokenUpdateRequestData());
    }

    /**
     * Sets cvv field.
     *
     * @param string|null $value
     */
    public function cvv(?string $value): self
    {
        $this->instance->setCvv($value);
        return $this;
    }

    /**
     * Sets cardholder field.
     *
     * @param string|null $value
     */
    public function cardholder(?string $value): self
    {
        $this->instance->setCardholder($value);
        return $this;
    }

    /**
     * Sets card number field.
     *
     * @param string|null $value
     */
    public function cardNumber(?string $value): self
    {
        $this->instance->setCardNumber($value);
        return $this;
    }

    /**
     * Sets exp month field.
     *
     * @param int|null $value
     */
    public function expMonth(?int $value): self
    {
        $this->instance->setExpMonth($value);
        return $this;
    }

    /**
     * Sets exp year field.
     *
     * @param int|null $value
     */
    public function expYear(?int $value): self
    {
        $this->instance->setExpYear($value);
        return $this;
    }

    /**
     * Sets line 1 field.
     *
     * @param string|null $value
     */
    public function line1(?string $value): self
    {
        $this->instance->setLine1($value);
        return $this;
    }

    /**
     * Sets line 2 field.
     *
     * @param string|null $value
     */
    public function line2(?string $value): self
    {
        $this->instance->setLine2($value);
        return $this;
    }

    /**
     * Sets state field.
     *
     * @param string|null $value
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets city field.
     *
     * @param string|null $value
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets country field.
     *
     * @param string|null $value
     */
    public function country(?string $value): self
    {
        $this->instance->setCountry($value);
        return $this;
    }

    /**
     * Sets zip field.
     *
     * @param string|null $value
     */
    public function zip(?string $value): self
    {
        $this->instance->setZip($value);
        return $this;
    }

    /**
     * Sets phone number field.
     *
     * @param TransactionTokenUpdateRequestDataPhoneNumber|null $value
     */
    public function phoneNumber(?TransactionTokenUpdateRequestDataPhoneNumber $value): self
    {
        $this->instance->setPhoneNumber($value);
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
     * Initializes a new Transaction Token Update Request Data object.
     */
    public function build(): TransactionTokenUpdateRequestData
    {
        return CoreHelper::clone($this->instance);
    }
}
