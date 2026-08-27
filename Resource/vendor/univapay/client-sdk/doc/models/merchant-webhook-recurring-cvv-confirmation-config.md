
# Merchant Webhook Recurring Cvv Confirmation Config

CVV confirmation rules for recurring token charges.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookRecurringCvvConfirmationConfig`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables recurring-charge CVV confirmation checks. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `threshold` | [`?(MerchantWebhookMoneyAmount[])`](../../doc/models/merchant-webhook-money-amount.md) | Optional | Amount thresholds that trigger CVV confirmation. | getThreshold(): ?array | setThreshold(?array threshold): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookRecurringCvvConfirmationConfigBuilder;

$merchantWebhookRecurringCvvConfirmationConfig = MerchantWebhookRecurringCvvConfirmationConfigBuilder::init()
    ->enabled(false)
    ->build();
```

