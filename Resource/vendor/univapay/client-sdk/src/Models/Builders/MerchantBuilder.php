<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\Merchant;
use UnivaPay\Models\MerchantWebhookConfiguration;

/**
 * Builder for model Merchant
 *
 * @see Merchant
 */
class MerchantBuilder
{
    /**
     * @var Merchant
     */
    private $instance;

    private function __construct(Merchant $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Builder object.
     */
    public static function init(): self
    {
        return new self(new Merchant());
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
     * Sets verification data id field.
     *
     * @param string|null $value
     */
    public function verificationDataId(?string $value): self
    {
        $this->instance->setVerificationDataId($value);
        return $this;
    }

    /**
     * Unsets verification data id field.
     */
    public function unsetVerificationDataId(): self
    {
        $this->instance->unsetVerificationDataId();
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
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
     * Sets notification email field.
     *
     * @param string|null $value
     */
    public function notificationEmail(?string $value): self
    {
        $this->instance->setNotificationEmail($value);
        return $this;
    }

    /**
     * Unsets notification email field.
     */
    public function unsetNotificationEmail(): self
    {
        $this->instance->unsetNotificationEmail();
        return $this;
    }

    /**
     * Sets finance notification email field.
     *
     * @param string|null $value
     */
    public function financeNotificationEmail(?string $value): self
    {
        $this->instance->setFinanceNotificationEmail($value);
        return $this;
    }

    /**
     * Unsets finance notification email field.
     */
    public function unsetFinanceNotificationEmail(): self
    {
        $this->instance->unsetFinanceNotificationEmail();
        return $this;
    }

    /**
     * Sets verified field.
     *
     * @param bool|null $value
     */
    public function verified(?bool $value): self
    {
        $this->instance->setVerified($value);
        return $this;
    }

    /**
     * Sets configuration field.
     *
     * @param MerchantWebhookConfiguration|null $value
     */
    public function configuration(?MerchantWebhookConfiguration $value): self
    {
        $this->instance->setConfiguration($value);
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
     * Initializes a new Merchant object.
     */
    public function build(): Merchant
    {
        return CoreHelper::clone($this->instance);
    }
}
