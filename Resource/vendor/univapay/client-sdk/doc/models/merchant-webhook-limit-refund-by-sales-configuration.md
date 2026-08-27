
# Merchant Webhook Limit Refund by Sales Configuration

Refund-limiting configuration based on sales history.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookLimitRefundBySalesConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables sales-based refund limit checks. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `period` | `?string` | Optional | Sales aggregation period used to evaluate refund limits. | getPeriod(): ?string | setPeriod(?string period): void |
| `rollingWindow` | `?bool` | Optional | Uses a rolling window instead of fixed calendar periods. | getRollingWindow(): ?bool | setRollingWindow(?bool rollingWindow): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookLimitRefundBySalesConfigurationBuilder;

$merchantWebhookLimitRefundBySalesConfiguration = MerchantWebhookLimitRefundBySalesConfigurationBuilder::init()
    ->enabled(true)
    ->period('monthly')
    ->rollingWindow(true)
    ->build();
```

