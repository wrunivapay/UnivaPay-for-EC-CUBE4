
# Token Create Konbini Data

Token Create Konbini Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreateKonbiniData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerName` | `string` | Required | Customer name. | getCustomerName(): string | setCustomerName(string customerName): void |
| `convenienceStore` | [`string(BaseKonbiniDataConvenienceStore)`](../../doc/models/base-konbini-data-convenience-store.md) | Required | Base Konbini Data Convenience Store schema. | getConvenienceStore(): string | setConvenienceStore(string convenienceStore): void |
| `expirationPeriod` | `?string` | Optional | ISO-8601 Duration (e.g., 'P7D'). Default is 30 days. | getExpirationPeriod(): ?string | setExpirationPeriod(?string expirationPeriod): void |
| `phoneNumber` | [`TokenCreatePhoneNumber`](../../doc/models/token-create-phone-number.md) | Required | Token Create Phone Number schema. | getPhoneNumber(): TokenCreatePhoneNumber | setPhoneNumber(TokenCreatePhoneNumber phoneNumber): void |
| `expirationTimeShift` | `?string` | Optional | Expiration time shift value. | getExpirationTimeShift(): ?string | setExpirationTimeShift(?string expirationTimeShift): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreateKonbiniDataBuilder;
use UnivaPay\Models\BaseKonbiniDataConvenienceStore;
use UnivaPay\Models\Builders\TokenCreatePhoneNumberBuilder;

$tokenCreateKonbiniData = TokenCreateKonbiniDataBuilder::init(
    'Taro Yamada',
    BaseKonbiniDataConvenienceStore::SEVEN_ELEVEN,
    TokenCreatePhoneNumberBuilder::init(
        '81',
        '08012341234'
    )->build()
)
    ->expirationPeriod('P7D')
    ->expirationTimeShift('23:59:59+09:00')
    ->build();
```

