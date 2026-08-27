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
 * Bank transfer (振込) payment settings applied to checkout.
 */
class CheckoutBankTransferConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var string|null
     */
    private $matchAmount;

    /**
     * @var string|null
     */
    private $expiration;

    /**
     * @var ExpirationTimeShift|null
     */
    private $expirationTimeShift;

    /**
     * @var int|null
     */
    private $virtualBankAccountsThreshold;

    /**
     * @var int|null
     */
    private $virtualBankAccountsFetchCount;

    /**
     * @var string|null
     */
    private $defaultExtensionPeriod;

    /**
     * @var string|null
     */
    private $maximumExtensionPeriod;

    /**
     * @var bool|null
     */
    private $automaticExtensionEnabled;

    /**
     * @var bool|null
     */
    private $chargeRequestNotificationEnabled;

    /**
     * @var bool|null
     */
    private $chargeRequestCanceledNotificationEnabled;

    /**
     * @var bool|null
     */
    private $chargeExpiredNotificationEnabled;

    /**
     * @var bool|null
     */
    private $depositReceivedNotificationEnabled;

    /**
     * @var bool|null
     */
    private $depositInsufficientNotificationEnabled;

    /**
     * @var bool|null
     */
    private $depositExceededNotificationEnabled;

    /**
     * @var bool|null
     */
    private $extensionNotificationEnabled;

    /**
     * @var string|null
     */
    private $remindNotificationPeriod;

    /**
     * @var bool|null
     */
    private $remindNotificationEnabled;

    /**
     * Returns Enabled.
     * Whether bank transfer payments are enabled.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Whether bank transfer payments are enabled.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Match Amount.
     * Deposit-matching policy applied to bank transfer payments.
     */
    public function getMatchAmount(): ?string
    {
        return $this->matchAmount;
    }

    /**
     * Sets Match Amount.
     * Deposit-matching policy applied to bank transfer payments.
     *
     * @maps match_amount
     * @factory \UnivaPay\Models\CheckoutBankTransferMatchAmount::checkValue
     */
    public function setMatchAmount(?string $matchAmount): void
    {
        $this->matchAmount = $matchAmount;
    }

    /**
     * Returns Expiration.
     * ISO-8601 duration before a bank transfer payment expires.
     */
    public function getExpiration(): ?string
    {
        return $this->expiration;
    }

    /**
     * Sets Expiration.
     * ISO-8601 duration before a bank transfer payment expires.
     *
     * @maps expiration
     */
    public function setExpiration(?string $expiration): void
    {
        $this->expiration = $expiration;
    }

    /**
     * Returns Expiration Time Shift.
     * Time-of-day override applied when calculating expirations, shared by convenience-store and bank-
     * transfer configuration.
     */
    public function getExpirationTimeShift(): ?ExpirationTimeShift
    {
        return $this->expirationTimeShift;
    }

    /**
     * Sets Expiration Time Shift.
     * Time-of-day override applied when calculating expirations, shared by convenience-store and bank-
     * transfer configuration.
     *
     * @maps expiration_time_shift
     */
    public function setExpirationTimeShift(?ExpirationTimeShift $expirationTimeShift): void
    {
        $this->expirationTimeShift = $expirationTimeShift;
    }

    /**
     * Returns Virtual Bank Accounts Threshold.
     * Number of unused virtual bank accounts that triggers provisioning of additional accounts.
     */
    public function getVirtualBankAccountsThreshold(): ?int
    {
        return $this->virtualBankAccountsThreshold;
    }

    /**
     * Sets Virtual Bank Accounts Threshold.
     * Number of unused virtual bank accounts that triggers provisioning of additional accounts.
     *
     * @maps virtual_bank_accounts_threshold
     */
    public function setVirtualBankAccountsThreshold(?int $virtualBankAccountsThreshold): void
    {
        $this->virtualBankAccountsThreshold = $virtualBankAccountsThreshold;
    }

    /**
     * Returns Virtual Bank Accounts Fetch Count.
     * Number of virtual bank accounts provisioned per replenishment.
     */
    public function getVirtualBankAccountsFetchCount(): ?int
    {
        return $this->virtualBankAccountsFetchCount;
    }

    /**
     * Sets Virtual Bank Accounts Fetch Count.
     * Number of virtual bank accounts provisioned per replenishment.
     *
     * @maps virtual_bank_accounts_fetch_count
     */
    public function setVirtualBankAccountsFetchCount(?int $virtualBankAccountsFetchCount): void
    {
        $this->virtualBankAccountsFetchCount = $virtualBankAccountsFetchCount;
    }

    /**
     * Returns Default Extension Period.
     * ISO-8601 duration by which a payment deadline is extended by default.
     */
    public function getDefaultExtensionPeriod(): ?string
    {
        return $this->defaultExtensionPeriod;
    }

    /**
     * Sets Default Extension Period.
     * ISO-8601 duration by which a payment deadline is extended by default.
     *
     * @maps default_extension_period
     */
    public function setDefaultExtensionPeriod(?string $defaultExtensionPeriod): void
    {
        $this->defaultExtensionPeriod = $defaultExtensionPeriod;
    }

    /**
     * Returns Maximum Extension Period.
     * ISO-8601 duration for the maximum allowed extension.
     */
    public function getMaximumExtensionPeriod(): ?string
    {
        return $this->maximumExtensionPeriod;
    }

    /**
     * Sets Maximum Extension Period.
     * ISO-8601 duration for the maximum allowed extension.
     *
     * @maps maximum_extension_period
     */
    public function setMaximumExtensionPeriod(?string $maximumExtensionPeriod): void
    {
        $this->maximumExtensionPeriod = $maximumExtensionPeriod;
    }

    /**
     * Returns Automatic Extension Enabled.
     * Whether payment deadlines are extended automatically.
     */
    public function getAutomaticExtensionEnabled(): ?bool
    {
        return $this->automaticExtensionEnabled;
    }

    /**
     * Sets Automatic Extension Enabled.
     * Whether payment deadlines are extended automatically.
     *
     * @maps automatic_extension_enabled
     */
    public function setAutomaticExtensionEnabled(?bool $automaticExtensionEnabled): void
    {
        $this->automaticExtensionEnabled = $automaticExtensionEnabled;
    }

    /**
     * Returns Charge Request Notification Enabled.
     * Whether a notification is sent when a bank transfer charge is requested.
     */
    public function getChargeRequestNotificationEnabled(): ?bool
    {
        return $this->chargeRequestNotificationEnabled;
    }

    /**
     * Sets Charge Request Notification Enabled.
     * Whether a notification is sent when a bank transfer charge is requested.
     *
     * @maps charge_request_notification_enabled
     */
    public function setChargeRequestNotificationEnabled(?bool $chargeRequestNotificationEnabled): void
    {
        $this->chargeRequestNotificationEnabled = $chargeRequestNotificationEnabled;
    }

    /**
     * Returns Charge Request Canceled Notification Enabled.
     * Whether a notification is sent when a requested bank transfer charge is canceled.
     */
    public function getChargeRequestCanceledNotificationEnabled(): ?bool
    {
        return $this->chargeRequestCanceledNotificationEnabled;
    }

    /**
     * Sets Charge Request Canceled Notification Enabled.
     * Whether a notification is sent when a requested bank transfer charge is canceled.
     *
     * @maps charge_request_canceled_notification_enabled
     */
    public function setChargeRequestCanceledNotificationEnabled(?bool $chargeRequestCanceledNotificationEnabled): void
    {
        $this->chargeRequestCanceledNotificationEnabled = $chargeRequestCanceledNotificationEnabled;
    }

    /**
     * Returns Charge Expired Notification Enabled.
     * Whether a notification is sent when a bank transfer charge expires.
     */
    public function getChargeExpiredNotificationEnabled(): ?bool
    {
        return $this->chargeExpiredNotificationEnabled;
    }

    /**
     * Sets Charge Expired Notification Enabled.
     * Whether a notification is sent when a bank transfer charge expires.
     *
     * @maps charge_expired_notification_enabled
     */
    public function setChargeExpiredNotificationEnabled(?bool $chargeExpiredNotificationEnabled): void
    {
        $this->chargeExpiredNotificationEnabled = $chargeExpiredNotificationEnabled;
    }

    /**
     * Returns Deposit Received Notification Enabled.
     * Whether a notification is sent when a deposit is received.
     */
    public function getDepositReceivedNotificationEnabled(): ?bool
    {
        return $this->depositReceivedNotificationEnabled;
    }

    /**
     * Sets Deposit Received Notification Enabled.
     * Whether a notification is sent when a deposit is received.
     *
     * @maps deposit_received_notification_enabled
     */
    public function setDepositReceivedNotificationEnabled(?bool $depositReceivedNotificationEnabled): void
    {
        $this->depositReceivedNotificationEnabled = $depositReceivedNotificationEnabled;
    }

    /**
     * Returns Deposit Insufficient Notification Enabled.
     * Whether a notification is sent when a deposit is insufficient.
     */
    public function getDepositInsufficientNotificationEnabled(): ?bool
    {
        return $this->depositInsufficientNotificationEnabled;
    }

    /**
     * Sets Deposit Insufficient Notification Enabled.
     * Whether a notification is sent when a deposit is insufficient.
     *
     * @maps deposit_insufficient_notification_enabled
     */
    public function setDepositInsufficientNotificationEnabled(?bool $depositInsufficientNotificationEnabled): void
    {
        $this->depositInsufficientNotificationEnabled = $depositInsufficientNotificationEnabled;
    }

    /**
     * Returns Deposit Exceeded Notification Enabled.
     * Whether a notification is sent when a deposit exceeds the requested amount.
     */
    public function getDepositExceededNotificationEnabled(): ?bool
    {
        return $this->depositExceededNotificationEnabled;
    }

    /**
     * Sets Deposit Exceeded Notification Enabled.
     * Whether a notification is sent when a deposit exceeds the requested amount.
     *
     * @maps deposit_exceeded_notification_enabled
     */
    public function setDepositExceededNotificationEnabled(?bool $depositExceededNotificationEnabled): void
    {
        $this->depositExceededNotificationEnabled = $depositExceededNotificationEnabled;
    }

    /**
     * Returns Extension Notification Enabled.
     * Whether a notification is sent when a payment deadline is extended.
     */
    public function getExtensionNotificationEnabled(): ?bool
    {
        return $this->extensionNotificationEnabled;
    }

    /**
     * Sets Extension Notification Enabled.
     * Whether a notification is sent when a payment deadline is extended.
     *
     * @maps extension_notification_enabled
     */
    public function setExtensionNotificationEnabled(?bool $extensionNotificationEnabled): void
    {
        $this->extensionNotificationEnabled = $extensionNotificationEnabled;
    }

    /**
     * Returns Remind Notification Period.
     * ISO-8601 duration before expiration at which a reminder notification is sent.
     */
    public function getRemindNotificationPeriod(): ?string
    {
        return $this->remindNotificationPeriod;
    }

    /**
     * Sets Remind Notification Period.
     * ISO-8601 duration before expiration at which a reminder notification is sent.
     *
     * @maps remind_notification_period
     */
    public function setRemindNotificationPeriod(?string $remindNotificationPeriod): void
    {
        $this->remindNotificationPeriod = $remindNotificationPeriod;
    }

    /**
     * Returns Remind Notification Enabled.
     * Whether reminder notifications are sent before a payment deadline.
     */
    public function getRemindNotificationEnabled(): ?bool
    {
        return $this->remindNotificationEnabled;
    }

    /**
     * Sets Remind Notification Enabled.
     * Whether reminder notifications are sent before a payment deadline.
     *
     * @maps remind_notification_enabled
     */
    public function setRemindNotificationEnabled(?bool $remindNotificationEnabled): void
    {
        $this->remindNotificationEnabled = $remindNotificationEnabled;
    }

    /**
     * Converts the CheckoutBankTransferConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutBankTransferConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutBankTransferConfiguration',
            [
                'enabled' => $this->enabled,
                'matchAmount' => $this->matchAmount,
                'expiration' => $this->expiration,
                'expirationTimeShift' => $this->expirationTimeShift,
                'virtualBankAccountsThreshold' => $this->virtualBankAccountsThreshold,
                'virtualBankAccountsFetchCount' => $this->virtualBankAccountsFetchCount,
                'defaultExtensionPeriod' => $this->defaultExtensionPeriod,
                'maximumExtensionPeriod' => $this->maximumExtensionPeriod,
                'automaticExtensionEnabled' => $this->automaticExtensionEnabled,
                'chargeRequestNotificationEnabled' => $this->chargeRequestNotificationEnabled,
                'chargeRequestCanceledNotificationEnabled' => $this->chargeRequestCanceledNotificationEnabled,
                'chargeExpiredNotificationEnabled' => $this->chargeExpiredNotificationEnabled,
                'depositReceivedNotificationEnabled' => $this->depositReceivedNotificationEnabled,
                'depositInsufficientNotificationEnabled' => $this->depositInsufficientNotificationEnabled,
                'depositExceededNotificationEnabled' => $this->depositExceededNotificationEnabled,
                'extensionNotificationEnabled' => $this->extensionNotificationEnabled,
                'remindNotificationPeriod' => $this->remindNotificationPeriod,
                'remindNotificationEnabled' => $this->remindNotificationEnabled,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'enabled',
        'match_amount',
        'expiration',
        'expiration_time_shift',
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
        if (isset($this->enabled)) {
            $json['enabled']                                      = $this->enabled;
        }
        if (isset($this->matchAmount)) {
            $json['match_amount']                                 =
                CheckoutBankTransferMatchAmount::checkValue(
                    $this->matchAmount
                );
        }
        if (isset($this->expiration)) {
            $json['expiration']                                   = $this->expiration;
        }
        if (isset($this->expirationTimeShift)) {
            $json['expiration_time_shift']                        = $this->expirationTimeShift;
        }
        if (isset($this->virtualBankAccountsThreshold)) {
            $json['virtual_bank_accounts_threshold']              = $this->virtualBankAccountsThreshold;
        }
        if (isset($this->virtualBankAccountsFetchCount)) {
            $json['virtual_bank_accounts_fetch_count']            = $this->virtualBankAccountsFetchCount;
        }
        if (isset($this->defaultExtensionPeriod)) {
            $json['default_extension_period']                     = $this->defaultExtensionPeriod;
        }
        if (isset($this->maximumExtensionPeriod)) {
            $json['maximum_extension_period']                     = $this->maximumExtensionPeriod;
        }
        if (isset($this->automaticExtensionEnabled)) {
            $json['automatic_extension_enabled']                  = $this->automaticExtensionEnabled;
        }
        if (isset($this->chargeRequestNotificationEnabled)) {
            $json['charge_request_notification_enabled']          = $this->chargeRequestNotificationEnabled;
        }
        if (isset($this->chargeRequestCanceledNotificationEnabled)) {
            $json['charge_request_canceled_notification_enabled'] = $this->chargeRequestCanceledNotificationEnabled;
        }
        if (isset($this->chargeExpiredNotificationEnabled)) {
            $json['charge_expired_notification_enabled']          = $this->chargeExpiredNotificationEnabled;
        }
        if (isset($this->depositReceivedNotificationEnabled)) {
            $json['deposit_received_notification_enabled']        = $this->depositReceivedNotificationEnabled;
        }
        if (isset($this->depositInsufficientNotificationEnabled)) {
            $json['deposit_insufficient_notification_enabled']    = $this->depositInsufficientNotificationEnabled;
        }
        if (isset($this->depositExceededNotificationEnabled)) {
            $json['deposit_exceeded_notification_enabled']        = $this->depositExceededNotificationEnabled;
        }
        if (isset($this->extensionNotificationEnabled)) {
            $json['extension_notification_enabled']               = $this->extensionNotificationEnabled;
        }
        if (isset($this->remindNotificationPeriod)) {
            $json['remind_notification_period']                   = $this->remindNotificationPeriod;
        }
        if (isset($this->remindNotificationEnabled)) {
            $json['remind_notification_enabled']                  = $this->remindNotificationEnabled;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
