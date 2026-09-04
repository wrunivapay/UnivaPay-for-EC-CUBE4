
# Checkout Bank Transfer Configuration

Bank transfer (振込) payment settings applied to checkout.

*This model accepts additional fields of type array.*

## Structure

`CheckoutBankTransferConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether bank transfer payments are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `matchAmount` | [`?string(CheckoutBankTransferMatchAmount)`](../../doc/models/checkout-bank-transfer-match-amount.md) | Optional | Deposit-matching policy applied to bank transfer payments. | getMatchAmount(): ?string | setMatchAmount(?string matchAmount): void |
| `expiration` | `?string` | Optional | ISO-8601 duration before a bank transfer payment expires. | getExpiration(): ?string | setExpiration(?string expiration): void |
| `expirationTimeShift` | [`?ExpirationTimeShift`](../../doc/models/expiration-time-shift.md) | Optional | Time-of-day override applied when calculating expirations, shared by convenience-store and bank-transfer configuration. | getExpirationTimeShift(): ?ExpirationTimeShift | setExpirationTimeShift(?ExpirationTimeShift expirationTimeShift): void |
| `virtualBankAccountsThreshold` | `?int` | Optional | Number of unused virtual bank accounts that triggers provisioning of additional accounts.<br><br>**Constraints**: `>= 0` | getVirtualBankAccountsThreshold(): ?int | setVirtualBankAccountsThreshold(?int virtualBankAccountsThreshold): void |
| `virtualBankAccountsFetchCount` | `?int` | Optional | Number of virtual bank accounts provisioned per replenishment.<br><br>**Constraints**: `>= 1` | getVirtualBankAccountsFetchCount(): ?int | setVirtualBankAccountsFetchCount(?int virtualBankAccountsFetchCount): void |
| `defaultExtensionPeriod` | `?string` | Optional | ISO-8601 duration by which a payment deadline is extended by default. | getDefaultExtensionPeriod(): ?string | setDefaultExtensionPeriod(?string defaultExtensionPeriod): void |
| `maximumExtensionPeriod` | `?string` | Optional | ISO-8601 duration for the maximum allowed extension. | getMaximumExtensionPeriod(): ?string | setMaximumExtensionPeriod(?string maximumExtensionPeriod): void |
| `automaticExtensionEnabled` | `?bool` | Optional | Whether payment deadlines are extended automatically. | getAutomaticExtensionEnabled(): ?bool | setAutomaticExtensionEnabled(?bool automaticExtensionEnabled): void |
| `chargeRequestNotificationEnabled` | `?bool` | Optional | Whether a notification is sent when a bank transfer charge is requested. | getChargeRequestNotificationEnabled(): ?bool | setChargeRequestNotificationEnabled(?bool chargeRequestNotificationEnabled): void |
| `chargeRequestCanceledNotificationEnabled` | `?bool` | Optional | Whether a notification is sent when a requested bank transfer charge is canceled. | getChargeRequestCanceledNotificationEnabled(): ?bool | setChargeRequestCanceledNotificationEnabled(?bool chargeRequestCanceledNotificationEnabled): void |
| `chargeExpiredNotificationEnabled` | `?bool` | Optional | Whether a notification is sent when a bank transfer charge expires. | getChargeExpiredNotificationEnabled(): ?bool | setChargeExpiredNotificationEnabled(?bool chargeExpiredNotificationEnabled): void |
| `depositReceivedNotificationEnabled` | `?bool` | Optional | Whether a notification is sent when a deposit is received. | getDepositReceivedNotificationEnabled(): ?bool | setDepositReceivedNotificationEnabled(?bool depositReceivedNotificationEnabled): void |
| `depositInsufficientNotificationEnabled` | `?bool` | Optional | Whether a notification is sent when a deposit is insufficient. | getDepositInsufficientNotificationEnabled(): ?bool | setDepositInsufficientNotificationEnabled(?bool depositInsufficientNotificationEnabled): void |
| `depositExceededNotificationEnabled` | `?bool` | Optional | Whether a notification is sent when a deposit exceeds the requested amount. | getDepositExceededNotificationEnabled(): ?bool | setDepositExceededNotificationEnabled(?bool depositExceededNotificationEnabled): void |
| `extensionNotificationEnabled` | `?bool` | Optional | Whether a notification is sent when a payment deadline is extended. | getExtensionNotificationEnabled(): ?bool | setExtensionNotificationEnabled(?bool extensionNotificationEnabled): void |
| `remindNotificationPeriod` | `?string` | Optional | ISO-8601 duration before expiration at which a reminder notification is sent. | getRemindNotificationPeriod(): ?string | setRemindNotificationPeriod(?string remindNotificationPeriod): void |
| `remindNotificationEnabled` | `?bool` | Optional | Whether reminder notifications are sent before a payment deadline. | getRemindNotificationEnabled(): ?bool | setRemindNotificationEnabled(?bool remindNotificationEnabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutBankTransferConfigurationBuilder;
use UnivaPay\Models\CheckoutBankTransferMatchAmount;
use UnivaPay\Models\Builders\ExpirationTimeShiftBuilder;
use UnivaPay\ApiHelper;

$checkoutBankTransferConfiguration = CheckoutBankTransferConfigurationBuilder::init()
    ->enabled(true)
    ->matchAmount(CheckoutBankTransferMatchAmount::DISABLED)
    ->expiration('PT72H')
    ->expirationTimeShift(
        ExpirationTimeShiftBuilder::init()
            ->value('value4')
            ->enabled(false)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->virtualBankAccountsThreshold(5)
    ->virtualBankAccountsFetchCount(10)
    ->defaultExtensionPeriod('PT168H')
    ->maximumExtensionPeriod('PT168H')
    ->automaticExtensionEnabled(false)
    ->chargeRequestNotificationEnabled(false)
    ->chargeRequestCanceledNotificationEnabled(false)
    ->chargeExpiredNotificationEnabled(false)
    ->depositReceivedNotificationEnabled(false)
    ->depositInsufficientNotificationEnabled(false)
    ->depositExceededNotificationEnabled(false)
    ->extensionNotificationEnabled(false)
    ->remindNotificationPeriod('PT168H')
    ->remindNotificationEnabled(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

