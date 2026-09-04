
# Customs Declaration Create Request

Request body for creating a customs declaration. Backend currently accepts this shape only for WeChat Online and WeChat MPM charges.

*This model accepts additional fields of type array.*

## Structure

`CustomsDeclarationCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customs` | `string` | Required | WeChat customs authority code used for the declaration. | getCustoms(): string | setCustoms(string customs): void |
| `merchantCustomsNo` | `string` | Required | Merchant customs registration number. | getMerchantCustomsNo(): string | setMerchantCustomsNo(string merchantCustomsNo): void |
| `certificateId` | `string` | Required | Customer certificate or passport identifier used by customs. | getCertificateId(): string | setCertificateId(string certificateId): void |
| `certificateName` | `string` | Required | Customer name exactly as shown on the certificate. | getCertificateName(): string | setCertificateName(string certificateName): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CustomsDeclarationCreateRequestBuilder;

$customsDeclarationCreateRequest = CustomsDeclarationCreateRequestBuilder::init(
    'TOKYO',
    '1234567890',
    'AB1234567',
    'TARO YAMADA'
)->build();
```

