
# Transaction Token Update Request Data

Transaction Token Update Request Data schema.

*This model accepts additional fields of type array.*

## Structure

`TransactionTokenUpdateRequestData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cvv` | `?string` | Optional | Update if RECURRING_USAGE_REQUIRES_CVV error occurs. | getCvv(): ?string | setCvv(?string cvv): void |
| `cardholder` | `?string` | Optional | Cardholder name. | getCardholder(): ?string | setCardholder(?string cardholder): void |
| `cardNumber` | `?string` | Optional | Card number. | getCardNumber(): ?string | setCardNumber(?string cardNumber): void |
| `expMonth` | `?int` | Optional | Card expiration month. | getExpMonth(): ?int | setExpMonth(?int expMonth): void |
| `expYear` | `?int` | Optional | Card expiration year. | getExpYear(): ?int | setExpYear(?int expYear): void |
| `line1` | `?string` | Optional | Primary street address line. | getLine1(): ?string | setLine1(?string line1): void |
| `line2` | `?string` | Optional | Secondary street address line. | getLine2(): ?string | setLine2(?string line2): void |
| `state` | `?string` | Optional | State or prefecture. | getState(): ?string | setState(?string state): void |
| `city` | `?string` | Optional | City or locality. | getCity(): ?string | setCity(?string city): void |
| `country` | `?string` | Optional | Country code. | getCountry(): ?string | setCountry(?string country): void |
| `zip` | `?string` | Optional | Postal code. | getZip(): ?string | setZip(?string zip): void |
| `phoneNumber` | [`?TransactionTokenUpdateRequestDataPhoneNumber`](../../doc/models/transaction-token-update-request-data-phone-number.md) | Optional | Transaction Token Update Request Data Phone Number schema. | getPhoneNumber(): ?TransactionTokenUpdateRequestDataPhoneNumber | setPhoneNumber(?TransactionTokenUpdateRequestDataPhoneNumber phoneNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionTokenUpdateRequestDataBuilder;
use UnivaPay\Models\Builders\TransactionTokenUpdateRequestDataPhoneNumberBuilder;

$transactionTokenUpdateRequestData = TransactionTokenUpdateRequestDataBuilder::init()
    ->cvv('123')
    ->cardholder('TARO YAMADA')
    ->cardNumber('4242424242424242')
    ->expMonth(12)
    ->expYear(2026)
    ->line1('1-1-1')
    ->line2('Shibakoen')
    ->state('Tokyo')
    ->city('Minato')
    ->country('JP')
    ->zip('105-0011')
    ->phoneNumber(
        TransactionTokenUpdateRequestDataPhoneNumberBuilder::init()
            ->countryCode('81')
            ->localNumber('08012341234')
            ->build()
    )
    ->build();
```

