
# Merchant Webhook Convenience Configuration

Convenience-store payment settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookConvenienceConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables convenience-store payments. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `expiration` | `?string` | Optional | ISO-8601 duration before convenience payment expiry. | getExpiration(): ?string | setExpiration(?string expiration): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookConvenienceConfigurationBuilder;

$merchantWebhookConvenienceConfiguration = MerchantWebhookConvenienceConfigurationBuilder::init()
    ->enabled(true)
    ->expiration('P3D')
    ->build();
```

