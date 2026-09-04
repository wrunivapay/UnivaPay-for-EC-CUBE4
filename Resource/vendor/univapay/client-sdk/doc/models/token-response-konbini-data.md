
# Token Response Konbini Data

Token Response Konbini Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseKonbiniData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerName` | `?string` | Optional | Customer name. | getCustomerName(): ?string | setCustomerName(?string customerName): void |
| `convenienceStore` | [`?string(BaseKonbiniDataConvenienceStore)`](../../doc/models/base-konbini-data-convenience-store.md) | Optional | Base Konbini Data Convenience Store schema. | getConvenienceStore(): ?string | setConvenienceStore(?string convenienceStore): void |
| `expirationPeriod` | `?string` | Optional | ISO-8601 Duration (e.g., 'P7D'). Default is 30 days. | getExpirationPeriod(): ?string | setExpirationPeriod(?string expirationPeriod): void |
| `expirationTimeShift` | `?string` | Optional | Time shift applied to the expiration, typically pushing it to the end of the day in a specific timezone (e.g., '23:59:59.999999+09:00'). | getExpirationTimeShift(): ?string | setExpirationTimeShift(?string expirationTimeShift): void |
| `phoneNumber` | [`?TokenResponsePhoneNumber`](../../doc/models/token-response-phone-number.md) | Optional | Token Response Phone Number schema. | getPhoneNumber(): ?TokenResponsePhoneNumber | setPhoneNumber(?TokenResponsePhoneNumber phoneNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseKonbiniDataBuilder;
use UnivaPay\Models\BaseKonbiniDataConvenienceStore;
use UnivaPay\Models\Builders\TokenResponsePhoneNumberBuilder;

$tokenResponseKonbiniData = TokenResponseKonbiniDataBuilder::init()
    ->customerName('Taro Yamada')
    ->convenienceStore(BaseKonbiniDataConvenienceStore::SEVEN_ELEVEN)
    ->expirationPeriod('P7D')
    ->expirationTimeShift(null)
    ->phoneNumber(
        TokenResponsePhoneNumberBuilder::init()
            ->countryCode(81)
            ->localNumber('08012341234')
            ->build()
    )
    ->build();
```

