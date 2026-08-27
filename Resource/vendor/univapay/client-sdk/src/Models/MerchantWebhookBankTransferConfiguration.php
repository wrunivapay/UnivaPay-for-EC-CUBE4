<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use stdClass;
use UnivaPay\ApiHelper;

/**
 * Bank transfer payment settings.
 */
class MerchantWebhookBankTransferConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $matchAmount = [];

    /**
     * @var array
     */
    private $expiration = [];

    /**
     * @var array
     */
    private $virtualBankAccountsThreshold = [];

    /**
     * @var array
     */
    private $virtualBankAccountsFetchCount = [];

    /**
     * @var array
     */
    private $defaultExtensionPeriod = [];

    /**
     * @var array
     */
    private $maximumExtensionPeriod = [];

    /**
     * @var array
     */
    private $automaticExtensionEnabled = [];

    /**
     * @var array
     */
    private $chargeRequestNotificationEnabled = [];

    /**
     * @var array
     */
    private $chargeRequestCanceledNotificationEnabled = [];

    /**
     * @var array
     */
    private $chargeExpiredNotificationEnabled = [];

    /**
     * @var array
     */
    private $depositReceivedNotificationEnabled = [];

    /**
     * @var array
     */
    private $depositInsufficientNotificationEnabled = [];

    /**
     * @var array
     */
    private $depositExceededNotificationEnabled = [];

    /**
     * @var array
     */
    private $extensionNotificationEnabled = [];

    /**
     * @var array
     */
    private $remindNotificationPeriod = [];

    /**
     * @var array
     */
    private $remindNotificationEnabled = [];

    /**
     * Returns Enabled.
     * Enables bank transfer payments.
     */
    public function getEnabled(): ?bool
    {
        if (count($this->enabled) == 0) {
            return null;
        }
        return $this->enabled['value'];
    }

    /**
     * Sets Enabled.
     * Enables bank transfer payments.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables bank transfer payments.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Match Amount.
     * Requires the received deposit amount to exactly match the charge amount.
     */
    public function getMatchAmount(): ?bool
    {
        if (count($this->matchAmount) == 0) {
            return null;
        }
        return $this->matchAmount['value'];
    }

    /**
     * Sets Match Amount.
     * Requires the received deposit amount to exactly match the charge amount.
     *
     * @maps match_amount
     */
    public function setMatchAmount(?bool $matchAmount): void
    {
        $this->matchAmount['value'] = $matchAmount;
    }

    /**
     * Unsets Match Amount.
     * Requires the received deposit amount to exactly match the charge amount.
     */
    public function unsetMatchAmount(): void
    {
        $this->matchAmount = [];
    }

    /**
     * Returns Expiration.
     * ISO-8601 duration before the charge expires.
     */
    public function getExpiration(): ?string
    {
        if (count($this->expiration) == 0) {
            return null;
        }
        return $this->expiration['value'];
    }

    /**
     * Sets Expiration.
     * ISO-8601 duration before the charge expires.
     *
     * @maps expiration
     */
    public function setExpiration(?string $expiration): void
    {
        $this->expiration['value'] = $expiration;
    }

    /**
     * Unsets Expiration.
     * ISO-8601 duration before the charge expires.
     */
    public function unsetExpiration(): void
    {
        $this->expiration = [];
    }

    /**
     * Returns Virtual Bank Accounts Threshold.
     * Threshold for provisioning additional virtual bank accounts.
     */
    public function getVirtualBankAccountsThreshold(): ?int
    {
        if (count($this->virtualBankAccountsThreshold) == 0) {
            return null;
        }
        return $this->virtualBankAccountsThreshold['value'];
    }

    /**
     * Sets Virtual Bank Accounts Threshold.
     * Threshold for provisioning additional virtual bank accounts.
     *
     * @maps virtual_bank_accounts_threshold
     */
    public function setVirtualBankAccountsThreshold(?int $virtualBankAccountsThreshold): void
    {
        $this->virtualBankAccountsThreshold['value'] = $virtualBankAccountsThreshold;
    }

    /**
     * Unsets Virtual Bank Accounts Threshold.
     * Threshold for provisioning additional virtual bank accounts.
     */
    public function unsetVirtualBankAccountsThreshold(): void
    {
        $this->virtualBankAccountsThreshold = [];
    }

    /**
     * Returns Virtual Bank Accounts Fetch Count.
     * Number of virtual bank accounts fetched per replenishment batch.
     */
    public function getVirtualBankAccountsFetchCount(): ?int
    {
        if (count($this->virtualBankAccountsFetchCount) == 0) {
            return null;
        }
        return $this->virtualBankAccountsFetchCount['value'];
    }

    /**
     * Sets Virtual Bank Accounts Fetch Count.
     * Number of virtual bank accounts fetched per replenishment batch.
     *
     * @maps virtual_bank_accounts_fetch_count
     */
    public function setVirtualBankAccountsFetchCount(?int $virtualBankAccountsFetchCount): void
    {
        $this->virtualBankAccountsFetchCount['value'] = $virtualBankAccountsFetchCount;
    }

    /**
     * Unsets Virtual Bank Accounts Fetch Count.
     * Number of virtual bank accounts fetched per replenishment batch.
     */
    public function unsetVirtualBankAccountsFetchCount(): void
    {
        $this->virtualBankAccountsFetchCount = [];
    }

    /**
     * Returns Default Extension Period.
     * Default ISO-8601 extension period applied to eligible charges.
     */
    public function getDefaultExtensionPeriod(): ?string
    {
        if (count($this->defaultExtensionPeriod) == 0) {
            return null;
        }
        return $this->defaultExtensionPeriod['value'];
    }

    /**
     * Sets Default Extension Period.
     * Default ISO-8601 extension period applied to eligible charges.
     *
     * @maps default_extension_period
     */
    public function setDefaultExtensionPeriod(?string $defaultExtensionPeriod): void
    {
        $this->defaultExtensionPeriod['value'] = $defaultExtensionPeriod;
    }

    /**
     * Unsets Default Extension Period.
     * Default ISO-8601 extension period applied to eligible charges.
     */
    public function unsetDefaultExtensionPeriod(): void
    {
        $this->defaultExtensionPeriod = [];
    }

    /**
     * Returns Maximum Extension Period.
     * Maximum ISO-8601 extension period allowed for a charge.
     */
    public function getMaximumExtensionPeriod(): ?string
    {
        if (count($this->maximumExtensionPeriod) == 0) {
            return null;
        }
        return $this->maximumExtensionPeriod['value'];
    }

    /**
     * Sets Maximum Extension Period.
     * Maximum ISO-8601 extension period allowed for a charge.
     *
     * @maps maximum_extension_period
     */
    public function setMaximumExtensionPeriod(?string $maximumExtensionPeriod): void
    {
        $this->maximumExtensionPeriod['value'] = $maximumExtensionPeriod;
    }

    /**
     * Unsets Maximum Extension Period.
     * Maximum ISO-8601 extension period allowed for a charge.
     */
    public function unsetMaximumExtensionPeriod(): void
    {
        $this->maximumExtensionPeriod = [];
    }

    /**
     * Returns Automatic Extension Enabled.
     * Automatically extends eligible bank transfer charges.
     */
    public function getAutomaticExtensionEnabled(): ?bool
    {
        if (count($this->automaticExtensionEnabled) == 0) {
            return null;
        }
        return $this->automaticExtensionEnabled['value'];
    }

    /**
     * Sets Automatic Extension Enabled.
     * Automatically extends eligible bank transfer charges.
     *
     * @maps automatic_extension_enabled
     */
    public function setAutomaticExtensionEnabled(?bool $automaticExtensionEnabled): void
    {
        $this->automaticExtensionEnabled['value'] = $automaticExtensionEnabled;
    }

    /**
     * Unsets Automatic Extension Enabled.
     * Automatically extends eligible bank transfer charges.
     */
    public function unsetAutomaticExtensionEnabled(): void
    {
        $this->automaticExtensionEnabled = [];
    }

    /**
     * Returns Charge Request Notification Enabled.
     * Sends notifications when a bank transfer charge is created.
     */
    public function getChargeRequestNotificationEnabled(): ?bool
    {
        if (count($this->chargeRequestNotificationEnabled) == 0) {
            return null;
        }
        return $this->chargeRequestNotificationEnabled['value'];
    }

    /**
     * Sets Charge Request Notification Enabled.
     * Sends notifications when a bank transfer charge is created.
     *
     * @maps charge_request_notification_enabled
     */
    public function setChargeRequestNotificationEnabled(?bool $chargeRequestNotificationEnabled): void
    {
        $this->chargeRequestNotificationEnabled['value'] = $chargeRequestNotificationEnabled;
    }

    /**
     * Unsets Charge Request Notification Enabled.
     * Sends notifications when a bank transfer charge is created.
     */
    public function unsetChargeRequestNotificationEnabled(): void
    {
        $this->chargeRequestNotificationEnabled = [];
    }

    /**
     * Returns Charge Request Canceled Notification Enabled.
     * Sends notifications when a bank transfer charge is canceled.
     */
    public function getChargeRequestCanceledNotificationEnabled(): ?bool
    {
        if (count($this->chargeRequestCanceledNotificationEnabled) == 0) {
            return null;
        }
        return $this->chargeRequestCanceledNotificationEnabled['value'];
    }

    /**
     * Sets Charge Request Canceled Notification Enabled.
     * Sends notifications when a bank transfer charge is canceled.
     *
     * @maps charge_request_canceled_notification_enabled
     */
    public function setChargeRequestCanceledNotificationEnabled(?bool $chargeRequestCanceledNotificationEnabled): void
    {
        $this->chargeRequestCanceledNotificationEnabled['value'] = $chargeRequestCanceledNotificationEnabled;
    }

    /**
     * Unsets Charge Request Canceled Notification Enabled.
     * Sends notifications when a bank transfer charge is canceled.
     */
    public function unsetChargeRequestCanceledNotificationEnabled(): void
    {
        $this->chargeRequestCanceledNotificationEnabled = [];
    }

    /**
     * Returns Charge Expired Notification Enabled.
     * Sends notifications when a bank transfer charge expires.
     */
    public function getChargeExpiredNotificationEnabled(): ?bool
    {
        if (count($this->chargeExpiredNotificationEnabled) == 0) {
            return null;
        }
        return $this->chargeExpiredNotificationEnabled['value'];
    }

    /**
     * Sets Charge Expired Notification Enabled.
     * Sends notifications when a bank transfer charge expires.
     *
     * @maps charge_expired_notification_enabled
     */
    public function setChargeExpiredNotificationEnabled(?bool $chargeExpiredNotificationEnabled): void
    {
        $this->chargeExpiredNotificationEnabled['value'] = $chargeExpiredNotificationEnabled;
    }

    /**
     * Unsets Charge Expired Notification Enabled.
     * Sends notifications when a bank transfer charge expires.
     */
    public function unsetChargeExpiredNotificationEnabled(): void
    {
        $this->chargeExpiredNotificationEnabled = [];
    }

    /**
     * Returns Deposit Received Notification Enabled.
     * Sends notifications when a deposit is received.
     */
    public function getDepositReceivedNotificationEnabled(): ?bool
    {
        if (count($this->depositReceivedNotificationEnabled) == 0) {
            return null;
        }
        return $this->depositReceivedNotificationEnabled['value'];
    }

    /**
     * Sets Deposit Received Notification Enabled.
     * Sends notifications when a deposit is received.
     *
     * @maps deposit_received_notification_enabled
     */
    public function setDepositReceivedNotificationEnabled(?bool $depositReceivedNotificationEnabled): void
    {
        $this->depositReceivedNotificationEnabled['value'] = $depositReceivedNotificationEnabled;
    }

    /**
     * Unsets Deposit Received Notification Enabled.
     * Sends notifications when a deposit is received.
     */
    public function unsetDepositReceivedNotificationEnabled(): void
    {
        $this->depositReceivedNotificationEnabled = [];
    }

    /**
     * Returns Deposit Insufficient Notification Enabled.
     * Sends notifications when a deposit is below the expected amount.
     */
    public function getDepositInsufficientNotificationEnabled(): ?bool
    {
        if (count($this->depositInsufficientNotificationEnabled) == 0) {
            return null;
        }
        return $this->depositInsufficientNotificationEnabled['value'];
    }

    /**
     * Sets Deposit Insufficient Notification Enabled.
     * Sends notifications when a deposit is below the expected amount.
     *
     * @maps deposit_insufficient_notification_enabled
     */
    public function setDepositInsufficientNotificationEnabled(?bool $depositInsufficientNotificationEnabled): void
    {
        $this->depositInsufficientNotificationEnabled['value'] = $depositInsufficientNotificationEnabled;
    }

    /**
     * Unsets Deposit Insufficient Notification Enabled.
     * Sends notifications when a deposit is below the expected amount.
     */
    public function unsetDepositInsufficientNotificationEnabled(): void
    {
        $this->depositInsufficientNotificationEnabled = [];
    }

    /**
     * Returns Deposit Exceeded Notification Enabled.
     * Sends notifications when a deposit exceeds the expected amount.
     */
    public function getDepositExceededNotificationEnabled(): ?bool
    {
        if (count($this->depositExceededNotificationEnabled) == 0) {
            return null;
        }
        return $this->depositExceededNotificationEnabled['value'];
    }

    /**
     * Sets Deposit Exceeded Notification Enabled.
     * Sends notifications when a deposit exceeds the expected amount.
     *
     * @maps deposit_exceeded_notification_enabled
     */
    public function setDepositExceededNotificationEnabled(?bool $depositExceededNotificationEnabled): void
    {
        $this->depositExceededNotificationEnabled['value'] = $depositExceededNotificationEnabled;
    }

    /**
     * Unsets Deposit Exceeded Notification Enabled.
     * Sends notifications when a deposit exceeds the expected amount.
     */
    public function unsetDepositExceededNotificationEnabled(): void
    {
        $this->depositExceededNotificationEnabled = [];
    }

    /**
     * Returns Extension Notification Enabled.
     * Sends notifications when a bank transfer charge is extended.
     */
    public function getExtensionNotificationEnabled(): ?bool
    {
        if (count($this->extensionNotificationEnabled) == 0) {
            return null;
        }
        return $this->extensionNotificationEnabled['value'];
    }

    /**
     * Sets Extension Notification Enabled.
     * Sends notifications when a bank transfer charge is extended.
     *
     * @maps extension_notification_enabled
     */
    public function setExtensionNotificationEnabled(?bool $extensionNotificationEnabled): void
    {
        $this->extensionNotificationEnabled['value'] = $extensionNotificationEnabled;
    }

    /**
     * Unsets Extension Notification Enabled.
     * Sends notifications when a bank transfer charge is extended.
     */
    public function unsetExtensionNotificationEnabled(): void
    {
        $this->extensionNotificationEnabled = [];
    }

    /**
     * Returns Remind Notification Period.
     * ISO-8601 lead time for payment reminder notifications.
     */
    public function getRemindNotificationPeriod(): ?string
    {
        if (count($this->remindNotificationPeriod) == 0) {
            return null;
        }
        return $this->remindNotificationPeriod['value'];
    }

    /**
     * Sets Remind Notification Period.
     * ISO-8601 lead time for payment reminder notifications.
     *
     * @maps remind_notification_period
     */
    public function setRemindNotificationPeriod(?string $remindNotificationPeriod): void
    {
        $this->remindNotificationPeriod['value'] = $remindNotificationPeriod;
    }

    /**
     * Unsets Remind Notification Period.
     * ISO-8601 lead time for payment reminder notifications.
     */
    public function unsetRemindNotificationPeriod(): void
    {
        $this->remindNotificationPeriod = [];
    }

    /**
     * Returns Remind Notification Enabled.
     * Sends reminder notifications before bank transfer expiry.
     */
    public function getRemindNotificationEnabled(): ?bool
    {
        if (count($this->remindNotificationEnabled) == 0) {
            return null;
        }
        return $this->remindNotificationEnabled['value'];
    }

    /**
     * Sets Remind Notification Enabled.
     * Sends reminder notifications before bank transfer expiry.
     *
     * @maps remind_notification_enabled
     */
    public function setRemindNotificationEnabled(?bool $remindNotificationEnabled): void
    {
        $this->remindNotificationEnabled['value'] = $remindNotificationEnabled;
    }

    /**
     * Unsets Remind Notification Enabled.
     * Sends reminder notifications before bank transfer expiry.
     */
    public function unsetRemindNotificationEnabled(): void
    {
        $this->remindNotificationEnabled = [];
    }

    /**
     * Converts the MerchantWebhookBankTransferConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookBankTransferConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookBankTransferConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'matchAmount' => $this->getMatchAmount(),
                'expiration' => $this->getExpiration(),
                'virtualBankAccountsThreshold' => $this->getVirtualBankAccountsThreshold(),
                'virtualBankAccountsFetchCount' => $this->getVirtualBankAccountsFetchCount(),
                'defaultExtensionPeriod' => $this->getDefaultExtensionPeriod(),
                'maximumExtensionPeriod' => $this->getMaximumExtensionPeriod(),
                'automaticExtensionEnabled' => $this->getAutomaticExtensionEnabled(),
                'chargeRequestNotificationEnabled' => $this->getChargeRequestNotificationEnabled(),
                'chargeRequestCanceledNotificationEnabled' => $this->getChargeRequestCanceledNotificationEnabled(),
                'chargeExpiredNotificationEnabled' => $this->getChargeExpiredNotificationEnabled(),
                'depositReceivedNotificationEnabled' => $this->getDepositReceivedNotificationEnabled(),
                'depositInsufficientNotificationEnabled' => $this->getDepositInsufficientNotificationEnabled(),
                'depositExceededNotificationEnabled' => $this->getDepositExceededNotificationEnabled(),
                'extensionNotificationEnabled' => $this->getExtensionNotificationEnabled(),
                'remindNotificationPeriod' => $this->getRemindNotificationPeriod(),
                'remindNotificationEnabled' => $this->getRemindNotificationEnabled(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'enabled',
        'match_amount',
        'expiration',
        'virtual_bank_accounts_threshold',
        'virtual_bank_accounts_fetch_count',
        'default_extension_period',
        'maximum_extension_period',
        'automatic_extension_enabled',
        'charge_request_notification_enabled',
        'charge_request_canceled_notification_enabled',
        'charge_expired_notification_enabled',
        'deposit_received_notification_enabled',
        'deposit_insufficient_notification_enabled',
        'deposit_exceeded_notification_enabled',
        'extension_notification_enabled',
        'remind_notification_period',
        'remind_notification_enabled'
    ];

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        if (in_array($name, $this->propertyNames, true)) {
            throw new \InvalidArgumentException(
                "The additional property key, '$name' conflicts with one of the model's properties"
            );
        }

        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (!empty($this->enabled)) {
            $json['enabled']                                      = $this->enabled['value'];
        }
        if (!empty($this->matchAmount)) {
            $json['match_amount']                                 = $this->matchAmount['value'];
        }
        if (!empty($this->expiration)) {
            $json['expiration']                                   = $this->expiration['value'];
        }
        if (!empty($this->virtualBankAccountsThreshold)) {
            $json['virtual_bank_accounts_threshold']              = $this->virtualBankAccountsThreshold['value'];
        }
        if (!empty($this->virtualBankAccountsFetchCount)) {
            $json['virtual_bank_accounts_fetch_count']            = $this->virtualBankAccountsFetchCount['value'];
        }
        if (!empty($this->defaultExtensionPeriod)) {
            $json['default_extension_period']                     = $this->defaultExtensionPeriod['value'];
        }
        if (!empty($this->maximumExtensionPeriod)) {
            $json['maximum_extension_period']                     = $this->maximumExtensionPeriod['value'];
        }
        if (!empty($this->automaticExtensionEnabled)) {
            $json['automatic_extension_enabled']                  = $this->automaticExtensionEnabled['value'];
        }
        if (!empty($this->chargeRequestNotificationEnabled)) {
            $json['charge_request_notification_enabled']          = $this->chargeRequestNotificationEnabled['value'];
        }
        if (!empty($this->chargeRequestCanceledNotificationEnabled)) {
            $json['charge_request_canceled_notification_enabled'] =
                $this->chargeRequestCanceledNotificationEnabled['value'];
        }
        if (!empty($this->chargeExpiredNotificationEnabled)) {
            $json['charge_expired_notification_enabled']          = $this->chargeExpiredNotificationEnabled['value'];
        }
        if (!empty($this->depositReceivedNotificationEnabled)) {
            $json['deposit_received_notification_enabled']        = $this->depositReceivedNotificationEnabled['value'];
        }
        if (!empty($this->depositInsufficientNotificationEnabled)) {
            $json['deposit_insufficient_notification_enabled']    =
                $this->depositInsufficientNotificationEnabled['value'];
        }
        if (!empty($this->depositExceededNotificationEnabled)) {
            $json['deposit_exceeded_notification_enabled']        = $this->depositExceededNotificationEnabled['value'];
        }
        if (!empty($this->extensionNotificationEnabled)) {
            $json['extension_notification_enabled']               = $this->extensionNotificationEnabled['value'];
        }
        if (!empty($this->remindNotificationPeriod)) {
            $json['remind_notification_period']                   = $this->remindNotificationPeriod['value'];
        }
        if (!empty($this->remindNotificationEnabled)) {
            $json['remind_notification_enabled']                  = $this->remindNotificationEnabled['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
