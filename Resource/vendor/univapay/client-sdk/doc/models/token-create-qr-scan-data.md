
# Token Create Qr Scan Data

Token Create Qr Scan Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreateQrScanData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `scannedQr` | `string` | Required | The QR/barcode payload scanned from the customer's payment app (Customer-Presented Mode). Only valid when `type` is `one_time` — the server rejects `subscription`/`recurring` token types for this payment type. | getScannedQr(): string | setScannedQr(string scannedQr): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreateQrScanDataBuilder;

$tokenCreateQrScanData = TokenCreateQrScanDataBuilder::init(
    '091234567890123456789012345'
)->build();
```

