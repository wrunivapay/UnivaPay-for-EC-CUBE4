
# Token Create Bank Transfer Data

Token Create Bank Transfer Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreateBankTransferData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brand` | `string` | Required | The bank brand identifier (e.g., 'aozora_bank'). | getBrand(): string | setBrand(string brand): void |
| `expirationPeriod` | `?string` | Optional | ISO 8601 duration format (e.g., 'PT168H'). | getExpirationPeriod(): ?string | setExpirationPeriod(?string expirationPeriod): void |
| `expirationTimeShift` | `?string` | Optional | Time shift applied to the expiration, typically pushing it to the end of the day  in a specific timezone (e.g., '23:59:59+09:00'). | getExpirationTimeShift(): ?string | setExpirationTimeShift(?string expirationTimeShift): void |
| `name` | `?string` | Optional | The name of the customer initiating the transfer. | getName(): ?string | setName(?string name): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreateBankTransferDataBuilder;

$tokenCreateBankTransferData = TokenCreateBankTransferDataBuilder::init(
    'aozora_bank'
)
    ->expirationPeriod('PT168H')
    ->expirationTimeShift('23:59:59+09:00')
    ->name('Taro Yamada')
    ->build();
```

