
# Transaction Token Update Request Data Phone Number

Transaction Token Update Request Data Phone Number schema.

*This model accepts additional fields of type array.*

## Structure

`TransactionTokenUpdateRequestDataPhoneNumber`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `countryCode` | `?string` | Optional | Telephone country code. | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `localNumber` | `?string` | Optional | Local phone number. | getLocalNumber(): ?string | setLocalNumber(?string localNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionTokenUpdateRequestDataPhoneNumberBuilder;

$transactionTokenUpdateRequestDataPhoneNumber = TransactionTokenUpdateRequestDataPhoneNumberBuilder::init()
    ->countryCode('81')
    ->localNumber('08012341234')
    ->build();
```

