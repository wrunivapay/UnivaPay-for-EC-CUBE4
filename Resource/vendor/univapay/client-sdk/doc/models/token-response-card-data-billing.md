
# Token Response Card Data Billing

Token Response Card Data Billing schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseCardDataBilling`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `line1` | `?string` | Optional | Primary street address line. | getLine1(): ?string | setLine1(?string line1): void |
| `line2` | `?string` | Optional | Secondary street address line. | getLine2(): ?string | setLine2(?string line2): void |
| `state` | `?string` | Optional | State or prefecture. | getState(): ?string | setState(?string state): void |
| `city` | `?string` | Optional | City or locality. | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country code. | getCountry(): ?string | setCountry(?string country): void |
| `zip` | `?string` | Optional | Postal code. | getZip(): ?string | setZip(?string zip): void |
| `phoneNumber` | [`?TokenResponsePhoneNumber`](../../doc/models/token-response-phone-number.md) | Optional | Token Response Phone Number schema. | getPhoneNumber(): ?TokenResponsePhoneNumber | setPhoneNumber(?TokenResponsePhoneNumber phoneNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseCardDataBillingBuilder;
use UnivaPay\Models\Builders\TokenResponsePhoneNumberBuilder;

$tokenResponseCardDataBilling = TokenResponseCardDataBillingBuilder::init()
    ->line1('1-1-1')
    ->line2('Shibakoen')
    ->state('Tokyo')
    ->city('Minato')
    ->country('JP')
    ->zip('105-0011')
    ->phoneNumber(
        TokenResponsePhoneNumberBuilder::init()
            ->countryCode(81)
            ->localNumber('08012341234')
            ->build()
    )
    ->build();
```

