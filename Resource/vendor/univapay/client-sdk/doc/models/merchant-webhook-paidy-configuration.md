
# Merchant Webhook Paidy Configuration

Paidy payment settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookPaidyConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables Paidy payments. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookPaidyConfigurationBuilder;

$merchantWebhookPaidyConfiguration = MerchantWebhookPaidyConfigurationBuilder::init()
    ->enabled(false)
    ->build();
```

