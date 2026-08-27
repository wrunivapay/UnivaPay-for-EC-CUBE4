
# Checkout Qr Scan Configuration

QR-scan (CPM) payment settings applied to checkout.

*This model accepts additional fields of type array.*

## Structure

`CheckoutQrScanConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether QR-scan payments are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `forbiddenQrScanGateways` | `?(string[])` | Optional | QR-scan gateways disabled for the merchant. Common values include `alipay`, `alipay_plus`, `pay_pay`, `we_chat`, `univapay`, and `test`. `null` when no gateway is forbidden. | getForbiddenQrScanGateways(): ?array | setForbiddenQrScanGateways(?array forbiddenQrScanGateways): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutQrScanConfigurationBuilder;
use UnivaPay\ApiHelper;

$checkoutQrScanConfiguration = CheckoutQrScanConfigurationBuilder::init()
    ->enabled(true)
    ->forbiddenQrScanGateways(
        [
            'forbidden_qr_scan_gateways1',
            'forbidden_qr_scan_gateways0'
        ]
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

