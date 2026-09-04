
# Token Create Card Data

Token Create Card Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreateCardData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardholder` | `?string` | Optional | Cardholder name. | getCardholder(): ?string | setCardholder(?string cardholder): void |
| `cardNumber` | `string` | Required | Card number. | getCardNumber(): string | setCardNumber(string cardNumber): void |
| `expMonth` | `string` | Required | Card expiration month. | getExpMonth(): string | setExpMonth(string expMonth): void |
| `expYear` | `string` | Required | Card expiration year. | getExpYear(): string | setExpYear(string expYear): void |
| `cvv` | `?string` | Optional | Card security code. | getCvv(): ?string | setCvv(?string cvv): void |
| `line1` | `?string` | Optional | Primary street address line. | getLine1(): ?string | setLine1(?string line1): void |
| `line2` | `?string` | Optional | Secondary street address line. | getLine2(): ?string | setLine2(?string line2): void |
| `state` | `?string` | Optional | State or prefecture. | getState(): ?string | setState(?string state): void |
| `city` | `?string` | Optional | City or locality. | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country code. | getCountry(): ?string | setCountry(?string country): void |
| `zip` | `?string` | Optional | Postal code. | getZip(): ?string | setZip(?string zip): void |
| `phoneNumber` | [`?TokenCreatePhoneNumber`](../../doc/models/token-create-phone-number.md) | Optional | Token Create Phone Number schema. | getPhoneNumber(): ?TokenCreatePhoneNumber | setPhoneNumber(?TokenCreatePhoneNumber phoneNumber): void |
| `cvvAuthorize` | [`?TokenCreateCardDataCvvAuthorize`](../../doc/models/token-create-card-data-cvv-authorize.md) | Optional | Token Create Card Data Cvv Authorize schema. | getCvvAuthorize(): ?TokenCreateCardDataCvvAuthorize | setCvvAuthorize(?TokenCreateCardDataCvvAuthorize cvvAuthorize): void |
| `threeDs` | [`?TokenCreateCardDataThreeDs`](../../doc/models/token-create-card-data-three-ds.md) | Optional | Token Create Card Data Three Ds schema. | getThreeDs(): ?TokenCreateCardDataThreeDs | setThreeDs(?TokenCreateCardDataThreeDs threeDs): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreateCardDataBuilder;

$tokenCreateCardData = TokenCreateCardDataBuilder::init(
    '4242424242424242',
    '12',
    '2026'
)->build();
```

