<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutBankTransferConfiguration;
use UnivaPay\Models\ExpirationTimeShift;

/**
 * Builder for model CheckoutBankTransferConfiguration
 *
 * @see CheckoutBankTransferConfiguration
 */
class CheckoutBankTransferConfigurationBuilder
{
    /**
     * @var CheckoutBankTransferConfiguration
     */
    private $instance;

    private function __construct(CheckoutBankTransferConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Bank Transfer Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutBankTransferConfiguration());
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Sets match amount field.
     *
     * @param string|null $value
     */
    public function matchAmount(?string $value): self
    {
        $this->instance->setMatchAmount($value);
        return $this;
    }

    /**
     * Sets expiration field.
     *
     * @param string|null $value
     */
    public function expiration(?string $value): self
    {
        $this->instance->setExpiration($value);
        return $this;
    }

    /**
     * Sets expiration time shift field.
     *
     * @param ExpirationTimeShift|null $value
     */
    public function expirationTimeShift(?ExpirationTimeShift $value): self
    {
        $this->instance->setExpirationTimeShift($value);
        return $this;
    }

    /**
     * Sets virtual bank accounts threshold field.
     *
     * @param int|null $value
     */
    public function virtualBankAccountsThreshold(?int $value): self
    {
        $this->instance->setVirtualBankAccountsThreshold($value);
        return $this;
    }

    /**
     * Sets virtual bank accounts fetch count field.
     *
     * @param int|null $value
     */
    public function virtualBankAccountsFetchCount(?int $value): self
    {
        $this->instance->setVirtualBankAccountsFetchCount($value);
        return $this;
    }

    /**
     * Sets default extension period field.
     *
     * @param string|null $value
     */
    public function defaultExtensionPeriod(?string $value): self
    {
        $this->instance->setDefaultExtensionPeriod($value);
        return $this;
    }

    /**
     * Sets maximum extension period field.
     *
     * @param string|null $value
     */
    public function maximumExtensionPeriod(?string $value): self
    {
        $this->instance->setMaximumExtensionPeriod($value);
        return $this;
    }

    /**
     * Sets automatic extension enabled field.
     *
     * @param bool|null $value
     */
    public function automaticExtensionEnabled(?bool $value): self
    {
        $this->instance->setAutomaticExtensionEnabled($value);
        return $this;
    }

    /**
     * Sets charge request notification enabled field.
     *
     * @param bool|null $value
     */
    public function chargeRequestNotificationEnabled(?bool $value): self
    {
        $this->instance->setChargeRequestNotificationEnabled($value);
        return $this;
    }

    /**
     * Sets charge request canceled notification enabled field.
     *
     * @param bool|null $value
     */
    public function chargeRequestCanceledNotificationEnabled(?bool $value): self
    {
        $this->instance->setChargeRequestCanceledNotificationEnabled($value);
        return $this;
    }

    /**
     * Sets charge expired notification enabled field.
     *
     * @param bool|null $value
     */
    public function chargeExpiredNotificationEnabled(?bool $value): self
    {
        $this->instance->setChargeExpiredNotificationEnabled($value);
        return $this;
    }

    /**
     * Sets deposit received notification enabled field.
     *
     * @param bool|null $value
     */
    public function depositReceivedNotificationEnabled(?bool $value): self
    {
        $this->instance->setDepositReceivedNotificationEnabled($value);
        return $this;
    }

    /**
     * Sets deposit insufficient notification enabled field.
     *
     * @param bool|null $value
     */
    public function depositInsufficientNotificationEnabled(?bool $value): self
    {
        $this->instance->setDepositInsufficientNotificationEnabled($value);
        return $this;
    }

    /**
     * Sets deposit exceeded notification enabled field.
     *
     * @param bool|null $value
     */
    public function depositExceededNotificationEnabled(?bool $value): self
    {
        $this->instance->setDepositExceededNotificationEnabled($value);
        return $this;
    }

    /**
     * Sets extension notification enabled field.
     *
     * @param bool|null $value
     */
    public function extensionNotificationEnabled(?bool $value): self
    {
        $this->instance->setExtensionNotificationEnabled($value);
        return $this;
    }

    /**
     * Sets remind notification period field.
     *
     * @param string|null $value
     */
    public function remindNotificationPeriod(?string $value): self
    {
        $this->instance->setRemindNotificationPeriod($value);
        return $this;
    }

    /**
     * Sets remind notification enabled field.
     *
     * @param bool|null $value
     */
    public function remindNotificationEnabled(?bool $value): self
    {
        $this->instance->setRemindNotificationEnabled($value);
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
     * Initializes a new Checkout Bank Transfer Configuration object.
     */
    public function build(): CheckoutBankTransferConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
