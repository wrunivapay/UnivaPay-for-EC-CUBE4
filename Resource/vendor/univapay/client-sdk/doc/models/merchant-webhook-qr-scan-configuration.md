
# Merchant Webhook Qr Scan Configuration

QR scan payment settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookQrScanConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables QR scan payments. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `forbiddenQrScanGateways` | `?(string[])` | Optional | QR scan gateways disabled for the merchant. | getForbiddenQrScanGateways(): ?array | setForbiddenQrScanGateways(?array forbiddenQrScanGateways): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookQrScanConfigurationBuilder;

$merchantWebhookQrScanConfiguration = MerchantWebhookQrScanConfigurationBuilder::init()
    ->enabled(true)
    ->forbiddenQrScanGateways(
        [
            'wechat'
        ]
    )
    ->build();
```

