
# Token Response Qr Scan Data

Token Response Qr Scan Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseQrScanData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brand` | `?string` | Required | QR-CPM brand detected from the scanned code (e.g. `pay_pay`, `we_chat`, `qq`, `line_pay`, `au_pay`, `alipay_china`). This is an open value set — new brands may appear without notice. Returned as `null` when the scanned code could not be parsed into a known brand. | getBrand(): ?string | setBrand(?string brand): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseQrScanDataBuilder;

$tokenResponseQrScanData = TokenResponseQrScanDataBuilder::init()
    ->brand('pay_pay')
    ->build();
```

