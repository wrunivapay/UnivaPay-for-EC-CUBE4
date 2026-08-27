
# Merchant Webhook Bank Transfer Configuration

Bank transfer payment settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookBankTransferConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables bank transfer payments. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `matchAmount` | `?bool` | Optional | Requires the received deposit amount to exactly match the charge amount. | getMatchAmount(): ?bool | setMatchAmount(?bool matchAmount): void |
| `expiration` | `?string` | Optional | ISO-8601 duration before the charge expires. | getExpiration(): ?string | setExpiration(?string expiration): void |
| `virtualBankAccountsThreshold` | `?int` | Optional | Threshold for provisioning additional virtual bank accounts. | getVirtualBankAccountsThreshold(): ?int | setVirtualBankAccountsThreshold(?int virtualBankAccountsThreshold): void |
| `virtualBankAccountsFetchCount` | `?int` | Optional | Number of virtual bank accounts fetched per replenishment batch. | getVirtualBankAccountsFetchCount(): ?int | setVirtualBankAccountsFetchCount(?int virtualBankAccountsFetchCount): void |
| `defaultExtensionPeriod` | `?string` | Optional | Default ISO-8601 extension period applied to eligible charges. | getDefaultExtensionPeriod(): ?string | setDefaultExtensionPeriod(?string defaultExtensionPeriod): void |
| `maximumExtensionPeriod` | `?string` | Optional | Maximum ISO-8601 extension period allowed for a charge. | getMaximumExtensionPeriod(): ?string | setMaximumExtensionPeriod(?string maximumExtensionPeriod): void |
| `automaticExtensionEnabled` | `?bool` | Optional | Automatically extends eligible bank transfer charges. | getAutomaticExtensionEnabled(): ?bool | setAutomaticExtensionEnabled(?bool automaticExtensionEnabled): void |
| `chargeRequestNotificationEnabled` | `?bool` | Optional | Sends notifications when a bank transfer charge is created. | getChargeRequestNotificationEnabled(): ?bool | setChargeRequestNotificationEnabled(?bool chargeRequestNotificationEnabled): void |
| `chargeRequestCanceledNotificationEnabled` | `?bool` | Optional | Sends notifications when a bank transfer charge is canceled. | getChargeRequestCanceledNotificationEnabled(): ?bool | setChargeRequestCanceledNotificationEnabled(?bool chargeRequestCanceledNotificationEnabled): void |
| `chargeExpiredNotificationEnabled` | `?bool` | Optional | Sends notifications when a bank transfer charge expires. | getChargeExpiredNotificationEnabled(): ?bool | setChargeExpiredNotificationEnabled(?bool chargeExpiredNotificationEnabled): void |
| `depositReceivedNotificationEnabled` | `?bool` | Optional | Sends notifications when a deposit is received. | getDepositReceivedNotificationEnabled(): ?bool | setDepositReceivedNotificationEnabled(?bool depositReceivedNotificationEnabled): void |
| `depositInsufficientNotificationEnabled` | `?bool` | Optional | Sends notifications when a deposit is below the expected amount. | getDepositInsufficientNotificationEnabled(): ?bool | setDepositInsufficientNotificationEnabled(?bool depositInsufficientNotificationEnabled): void |
| `depositExceededNotificationEnabled` | `?bool` | Optional | Sends notifications when a deposit exceeds the expected amount. | getDepositExceededNotificationEnabled(): ?bool | setDepositExceededNotificationEnabled(?bool depositExceededNotificationEnabled): void |
| `extensionNotificationEnabled` | `?bool` | Optional | Sends notifications when a bank transfer charge is extended. | getExtensionNotificationEnabled(): ?bool | setExtensionNotificationEnabled(?bool extensionNotificationEnabled): void |
| `remindNotificationPeriod` | `?string` | Optional | ISO-8601 lead time for payment reminder notifications. | getRemindNotificationPeriod(): ?string | setRemindNotificationPeriod(?string remindNotificationPeriod): void |
| `remindNotificationEnabled` | `?bool` | Optional | Sends reminder notifications before bank transfer expiry. | getRemindNotificationEnabled(): ?bool | setRemindNotificationEnabled(?bool remindNotificationEnabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookBankTransferConfigurationBuilder;

$merchantWebhookBankTransferConfiguration = MerchantWebhookBankTransferConfigurationBuilder::init()
    ->enabled(true)
    ->matchAmount(true)
    ->expiration('P7D')
    ->virtualBankAccountsThreshold(50)
    ->virtualBankAccountsFetchCount(25)
    ->defaultExtensionPeriod('P3D')
    ->maximumExtensionPeriod('P30D')
    ->automaticExtensionEnabled(true)
    ->chargeRequestNotificationEnabled(true)
    ->depositReceivedNotificationEnabled(true)
    ->remindNotificationPeriod('P2D')
    ->remindNotificationEnabled(true)
    ->build();
```

