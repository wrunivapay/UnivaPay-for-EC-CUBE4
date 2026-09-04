
# Token Response Phone Number

Token Response Phone Number schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponsePhoneNumber`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `countryCode` | `?int` | Optional | Returned as an integer in the response. | getCountryCode(): ?int | setCountryCode(?int countryCode): void |
| `localNumber` | `?string` | Optional | Local phone number. | getLocalNumber(): ?string | setLocalNumber(?string localNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponsePhoneNumberBuilder;

$tokenResponsePhoneNumber = TokenResponsePhoneNumberBuilder::init()
    ->countryCode(81)
    ->localNumber('08012341234')
    ->build();
```

