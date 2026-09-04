<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\TokenResponseCardDataCard;

/**
 * Builder for model TokenResponseCardDataCard
 *
 * @see TokenResponseCardDataCard
 */
class TokenResponseCardDataCardBuilder
{
    /**
     * @var TokenResponseCardDataCard
     */
    private $instance;

    private function __construct(TokenResponseCardDataCard $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Token Response Card Data Card Builder object.
     */
    public static function init(): self
    {
        return new self(new TokenResponseCardDataCard());
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
     * Sets card bin field.
     *
     * @param string|null $value
     */
    public function cardBin(?string $value): self
    {
        $this->instance->setCardBin($value);
        return $this;
    }

    /**
     * Sets last four field.
     *
     * @param string|null $value
     */
    public function lastFour(?string $value): self
    {
        $this->instance->setLastFour($value);
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
     * Sets card type field.
     *
     * @param string|null $value
     */
    public function cardType(?string $value): self
    {
        $this->instance->setCardType($value);
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
     * Sets category field.
     *
     * @param string|null $value
     */
    public function category(?string $value): self
    {
        $this->instance->setCategory($value);
        return $this;
    }

    /**
     * Unsets category field.
     */
    public function unsetCategory(): self
    {
        $this->instance->unsetCategory();
        return $this;
    }

    /**
     * Sets issuer field.
     *
     * @param string|null $value
     */
    public function issuer(?string $value): self
    {
        $this->instance->setIssuer($value);
        return $this;
    }

    /**
     * Unsets issuer field.
     */
    public function unsetIssuer(): self
    {
        $this->instance->unsetIssuer();
        return $this;
    }

    /**
     * Sets sub brand field.
     *
     * @param string|null $value
     */
    public function subBrand(?string $value): self
    {
        $this->instance->setSubBrand($value);
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
     * Initializes a new Token Response Card Data Card object.
     */
    public function build(): TokenResponseCardDataCard
    {
        return CoreHelper::clone($this->instance);
    }
}
