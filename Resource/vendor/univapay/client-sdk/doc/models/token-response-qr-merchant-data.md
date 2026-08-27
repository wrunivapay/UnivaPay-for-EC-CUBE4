
# Token Response Qr Merchant Data

Token Response Qr Merchant Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseQrMerchantData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `qrImageUrl` | `?string` | Required | QR code payload to be rendered by the consumer (content varies by brand — may be a URL or an opaque code). Some brands return an image URL; others (e.g. convenience-store QR brands) return an opaque numeric code with no URL structure. Populated asynchronously shortly after token/charge creation — `null` until then. | getQrImageUrl(): ?string | setQrImageUrl(?string qrImageUrl): void |
| `brand` | `?string` | Optional | The QR-MPM brand this code was generated for. | getBrand(): ?string | setBrand(?string brand): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseQrMerchantDataBuilder;

$tokenResponseQrMerchantData = TokenResponseQrMerchantDataBuilder::init()
    ->qrImageUrl('71001234567890202604141200450')
    ->brand('pay_pay_merchant')
    ->build();
```

