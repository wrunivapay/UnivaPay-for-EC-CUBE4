
# Merchant Webhook Limit Charge by Card Configuration

Per-card velocity limit configuration.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookLimitChargeByCardConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `quantityOfCharges` | `?int` | Optional | Maximum number of charges allowed in the time window. | getQuantityOfCharges(): ?int | setQuantityOfCharges(?int quantityOfCharges): void |
| `durationWindow` | `?string` | Optional | ISO-8601 duration for the rolling window. | getDurationWindow(): ?string | setDurationWindow(?string durationWindow): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookLimitChargeByCardConfigurationBuilder;

$merchantWebhookLimitChargeByCardConfiguration = MerchantWebhookLimitChargeByCardConfigurationBuilder::init()
    ->quantityOfCharges(5)
    ->durationWindow('PT24H')
    ->build();
```

