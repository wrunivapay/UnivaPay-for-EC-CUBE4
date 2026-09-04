
# Base Konbini Data

Base Konbini Data schema.

*This model accepts additional fields of type array.*

## Structure

`BaseKonbiniData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customerName` | `?string` | Optional | Customer name. | getCustomerName(): ?string | setCustomerName(?string customerName): void |
| `convenienceStore` | [`?string(BaseKonbiniDataConvenienceStore)`](../../doc/models/base-konbini-data-convenience-store.md) | Optional | Base Konbini Data Convenience Store schema. | getConvenienceStore(): ?string | setConvenienceStore(?string convenienceStore): void |
| `expirationPeriod` | `?string` | Optional | ISO-8601 Duration (e.g., 'P7D'). Default is 30 days. | getExpirationPeriod(): ?string | setExpirationPeriod(?string expirationPeriod): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\BaseKonbiniDataBuilder;
use UnivaPay\Models\BaseKonbiniDataConvenienceStore;

$baseKonbiniData = BaseKonbiniDataBuilder::init()
    ->customerName('Taro Yamada')
    ->convenienceStore(BaseKonbiniDataConvenienceStore::SEVEN_ELEVEN)
    ->expirationPeriod('P7D')
    ->build();
```

