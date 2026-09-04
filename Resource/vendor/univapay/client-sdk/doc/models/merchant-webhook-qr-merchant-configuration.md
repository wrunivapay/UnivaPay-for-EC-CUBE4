
# Merchant Webhook Qr Merchant Configuration

QR merchant payment settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookQrMerchantConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables QR merchant payment flows. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookQrMerchantConfigurationBuilder;

$merchantWebhookQrMerchantConfiguration = MerchantWebhookQrMerchantConfigurationBuilder::init()
    ->enabled(false)
    ->build();
```

