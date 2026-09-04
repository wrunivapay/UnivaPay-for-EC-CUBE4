
# Merchant Webhook Online Configuration

Online payment settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookOnlineConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables online redirect and wallet payment flows. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookOnlineConfigurationBuilder;

$merchantWebhookOnlineConfiguration = MerchantWebhookOnlineConfigurationBuilder::init()
    ->enabled(true)
    ->build();
```

