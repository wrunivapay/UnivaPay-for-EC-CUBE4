
# Token Create Phone Number

Token Create Phone Number schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreatePhoneNumber`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `countryCode` | `string` | Required | Country code as string (e.g., '1' or '81'). | getCountryCode(): string | setCountryCode(string countryCode): void |
| `localNumber` | `string` | Required | Local phone number.<br><br>**Constraints**: *Maximum Length*: `15` | getLocalNumber(): string | setLocalNumber(string localNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreatePhoneNumberBuilder;

$tokenCreatePhoneNumber = TokenCreatePhoneNumberBuilder::init(
    '81',
    '08012341234'
)->build();
```

