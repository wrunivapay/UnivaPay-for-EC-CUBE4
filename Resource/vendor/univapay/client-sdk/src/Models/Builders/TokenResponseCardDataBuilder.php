<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponseCardData;
use UnivaPay\Models\TokenResponseCardDataBilling;
use UnivaPay\Models\TokenResponseCardDataCard;
use UnivaPay\Models\TokenResponseCardDataCvvAuthorize;
use UnivaPay\Models\TokenResponseCardDataCvvAuthorizeCheck;
use UnivaPay\Models\TokenResponseCardDataThreeDs;

/**
 * Builder for model TokenResponseCardData
 *
 * @see TokenResponseCardData
 */
class TokenResponseCardDataBuilder
{
    /**
     * @var TokenResponseCardData
     */
    private $instance;

    private function __construct(TokenResponseCardData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Card Data Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponseCardData());
    }

    /**
     * Sets card field.
     *
     * @param TokenResponseCardDataCard|null $value
     */
    public function card(?TokenResponseCardDataCard $value): self
    {
        $this->instance->setCard($value);
        return $this;
    }

    /**
     * Sets billing field.
     *
     * @param TokenResponseCardDataBilling|null $value
     */
    public function billing(?TokenResponseCardDataBilling $value): self
    {
        $this->instance->setBilling($value);
        return $this;
    }

    /**
     * Sets cvv authorize field.
     *
     * @param TokenResponseCardDataCvvAuthorize|null $value
     */
    public function cvvAuthorize(?TokenResponseCardDataCvvAuthorize $value): self
    {
        $this->instance->setCvvAuthorize($value);
        return $this;
    }

    /**
     * Sets cvv authorize check field.
     *
     * @param TokenResponseCardDataCvvAuthorizeCheck|null $value
     */
    public function cvvAuthorizeCheck(?TokenResponseCardDataCvvAuthorizeCheck $value): self
    {
        $this->instance->setCvvAuthorizeCheck($value);
        return $this;
    }

    /**
     * Sets three ds field.
     *
     * @param TokenResponseCardDataThreeDs|null $value
     */
    public function threeDs(?TokenResponseCardDataThreeDs $value): self
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
     * Initializes a new Token Response Card Data object.
     */
    public function build(): TokenResponseCardData
    {
        return CoreHelper::clone($this->instance);
    }
}
