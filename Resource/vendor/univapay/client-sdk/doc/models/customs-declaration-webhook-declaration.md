
# Customs Declaration Webhook Declaration

WeChat customs declaration payload returned by the backend formatter.

*This model accepts additional fields of type array.*

## Structure

`CustomsDeclarationWebhookDeclaration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customs` | `?string` | Optional | WeChat customs authority code. | getCustoms(): ?string | setCustoms(?string customs): void |
| `merchantCustomsNo` | `?string` | Optional | Merchant customs registration number. | getMerchantCustomsNo(): ?string | setMerchantCustomsNo(?string merchantCustomsNo): void |
| `certificateId` | `?string` | Optional | Customer certificate or passport identifier. | getCertificateId(): ?string | setCertificateId(?string certificateId): void |
| `certificateName` | `?string` | Optional | Customer name as provided to customs. | getCertificateName(): ?string | setCertificateName(?string certificateName): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CustomsDeclarationWebhookDeclarationBuilder;

$customsDeclarationWebhookDeclaration = CustomsDeclarationWebhookDeclarationBuilder::init()
    ->customs('TOKYO')
    ->merchantCustomsNo('1234567890')
    ->certificateId('AB1234567')
    ->certificateName('TARO YAMADA')
    ->build();
```

