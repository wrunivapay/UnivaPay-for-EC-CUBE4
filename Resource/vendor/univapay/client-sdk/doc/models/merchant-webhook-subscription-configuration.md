
# Merchant Webhook Subscription Configuration

Subscription feature configuration.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookSubscriptionConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables subscription payments. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `failedChargesToCancel` | `?int` | Optional | Number of failed charges allowed before cancellation. | getFailedChargesToCancel(): ?int | setFailedChargesToCancel(?int failedChargesToCancel): void |
| `suspendOnCancel` | `?bool` | Optional | Suspends the subscription when its latest charge is canceled. | getSuspendOnCancel(): ?bool | setSuspendOnCancel(?bool suspendOnCancel): void |
| `allowMerchantAmountPatch` | `?bool` | Optional | Allows merchants to update scheduled subscription amounts. | getAllowMerchantAmountPatch(): ?bool | setAllowMerchantAmountPatch(?bool allowMerchantAmountPatch): void |
| `allowMerchantDueDatePatch` | `?bool` | Optional | Allows merchants to update scheduled subscription due dates. | getAllowMerchantDueDatePatch(): ?bool | setAllowMerchantDueDatePatch(?bool allowMerchantDueDatePatch): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookSubscriptionConfigurationBuilder;

$merchantWebhookSubscriptionConfiguration = MerchantWebhookSubscriptionConfigurationBuilder::init()
    ->enabled(true)
    ->failedChargesToCancel(3)
    ->suspendOnCancel(true)
    ->allowMerchantAmountPatch(false)
    ->allowMerchantDueDatePatch(false)
    ->build();
```

