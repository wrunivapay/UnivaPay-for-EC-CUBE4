
# Customs Declaration Patch Request

Request body for updating a customs declaration. Backend patch handling keeps the original `customs`, `certificate_id`, and `certificate_name` values and only accepts a new `merchant_customs_no`.

*This model accepts additional fields of type array.*

## Structure

`CustomsDeclarationPatchRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `merchantCustomsNo` | `string` | Required | Updated merchant customs registration number. | getMerchantCustomsNo(): string | setMerchantCustomsNo(string merchantCustomsNo): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CustomsDeclarationPatchRequestBuilder;

$customsDeclarationPatchRequest = CustomsDeclarationPatchRequestBuilder::init(
    '1234567891'
)->build();
```

