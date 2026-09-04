<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookBankTransferConfiguration;

/**
 * Builder for model MerchantWebhookBankTransferConfiguration
 *
 * @see MerchantWebhookBankTransferConfiguration
 */
class MerchantWebhookBankTransferConfigurationBuilder
{
    /**
     * @var MerchantWebhookBankTransferConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookBankTransferConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Bank Transfer Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookBankTransferConfiguration());
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
     * Unsets enabled field.
     */
    public function unsetEnabled(): self
    {
        $this->instance->unsetEnabled();
        return $this;
    }

    /**
     * Sets match amount field.
     *
     * @param bool|null $value
     */
    public function matchAmount(?bool $value): self
    {
        $this->instance->setMatchAmount($value);
        return $this;
    }

    /**
     * Unsets match amount field.
     */
    public function unsetMatchAmount(): self
    {
        $this->instance->unsetMatchAmount();
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
     * Unsets expiration field.
     */
    public function unsetExpiration(): self
    {
        $this->instance->unsetExpiration();
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
     * Unsets virtual bank accounts threshold field.
     */
    public function unsetVirtualBankAccountsThreshold(): self
    {
        $this->instance->unsetVirtualBankAccountsThreshold();
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
     * Unsets virtual bank accounts fetch count field.
     */
    public function unsetVirtualBankAccountsFetchCount(): self
    {
        $this->instance->unsetVirtualBankAccountsFetchCount();
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
     * Unsets default extension period field.
     */
    public function unsetDefaultExtensionPeriod(): self
    {
        $this->instance->unsetDefaultExtensionPeriod();
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
     * Unsets maximum extension period field.
     */
    public function unsetMaximumExtensionPeriod(): self
    {
        $this->instance->unsetMaximumExtensionPeriod();
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
     * Unsets automatic extension enabled field.
     */
    public function unsetAutomaticExtensionEnabled(): self
    {
        $this->instance->unsetAutomaticExtensionEnabled();
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
     * Unsets charge request notification enabled field.
     */
    public function unsetChargeRequestNotificationEnabled(): self
    {
        $this->instance->unsetChargeRequestNotificationEnabled();
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
     * Unsets charge request canceled notification enabled field.
     */
    public function unsetChargeRequestCanceledNotificationEnabled(): self
    {
        $this->instance->unsetChargeRequestCanceledNotificationEnabled();
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
     * Unsets charge expired notification enabled field.
     */
    public function unsetChargeExpiredNotificationEnabled(): self
    {
        $this->instance->unsetChargeExpiredNotificationEnabled();
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
     * Unsets deposit received notification enabled field.
     */
    public function unsetDepositReceivedNotificationEnabled(): self
    {
        $this->instance->unsetDepositReceivedNotificationEnabled();
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
     * Unsets deposit insufficient notification enabled field.
     */
    public function unsetDepositInsufficientNotificationEnabled(): self
    {
        $this->instance->unsetDepositInsufficientNotificationEnabled();
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
     * Unsets deposit exceeded notification enabled field.
     */
    public function unsetDepositExceededNotificationEnabled(): self
    {
        $this->instance->unsetDepositExceededNotificationEnabled();
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
     * Unsets extension notification enabled field.
     */
    public function unsetExtensionNotificationEnabled(): self
    {
        $this->instance->unsetExtensionNotificationEnabled();
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
     * Unsets remind notification period field.
     */
    public function unsetRemindNotificationPeriod(): self
    {
        $this->instance->unsetRemindNotificationPeriod();
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
     * Unsets remind notification enabled field.
     */
    public function unsetRemindNotificationEnabled(): self
    {
        $this->instance->unsetRemindNotificationEnabled();
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
     * Initializes a new Merchant Webhook Bank Transfer Configuration object.
     */
    public function build(): MerchantWebhookBankTransferConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
