<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenCreateCardData;
use UnivaPay\Models\TokenCreateCardDataCvvAuthorize;
use UnivaPay\Models\TokenCreateCardDataThreeDs;
use UnivaPay\Models\TokenCreatePhoneNumber;

/**
 * Builder for model TokenCreateCardData
 *
 * @see TokenCreateCardData
 */
class TokenCreateCardDataBuilder
{
    /**
     * @var TokenCreateCardData
     */
    private $instance;

    private function __construct(TokenCreateCardData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Create Card Data Builder object.
     *
     * @param string $cardNumber
     * @param string $expMonth
     * @param string $expYear
     */
    public static function init(string $cardNumber, string $expMonth, string $expYear): self
    {
        return new self(new TokenCreateCardData($cardNumber, $expMonth, $expYear));
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
     * Unsets cvv field.
     */
    public function unsetCvv(): self
    {
        $this->instance->unsetCvv();
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
     * @param TokenCreatePhoneNumber|null $value
     */
    public function phoneNumber(?TokenCreatePhoneNumber $value): self
    {
        $this->instance->setPhoneNumber($value);
        return $this;
    }

    /**
     * Sets cvv authorize field.
     *
     * @param TokenCreateCardDataCvvAuthorize|null $value
     */
    public function cvvAuthorize(?TokenCreateCardDataCvvAuthorize $value): self
    {
        $this->instance->setCvvAuthorize($value);
        return $this;
    }

    /**
     * Sets three ds field.
     *
     * @param TokenCreateCardDataThreeDs|null $value
     */
    public function threeDs(?TokenCreateCardDataThreeDs $value): self
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
     * Initializes a new Token Create Card Data object.
     */
    public function build(): TokenCreateCardData
    {
        return CoreHelper::clone($this->instance);
    }
}
