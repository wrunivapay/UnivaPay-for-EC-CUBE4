
# Token Create Qr Merchant Data

Token Create Qr Merchant Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreateQrMerchantData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brand` | `string` | Required | The QR-MPM brand to generate a merchant-presented-mode code for. Validated strictly server-side against a supported brand list. Common values include `rakuten_pay_merchant`, `alipay_merchant_qr`, `pay_pay_merchant`, `d_barai_mpm`, `we_chat_mpm`. Treat this as an open value set — the server may add brands over time. | getBrand(): string | setBrand(string brand): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreateQrMerchantDataBuilder;

$tokenCreateQrMerchantData = TokenCreateQrMerchantDataBuilder::init(
    'pay_pay_merchant'
)->build();
```

