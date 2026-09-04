
# Token Response Card Data Card

Token Response Card Data Card schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseCardDataCard`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardholder` | `?string` | Optional | Cardholder name. | getCardholder(): ?string | setCardholder(?string cardholder): void |
| `expMonth` | `?int` | Optional | Card expiration month. | getExpMonth(): ?int | setExpMonth(?int expMonth): void |
| `expYear` | `?int` | Optional | Card expiration year. | getExpYear(): ?int | setExpYear(?int expYear): void |
| `cardBin` | `?string` | Optional | Card bin value. | getCardBin(): ?string | setCardBin(?string cardBin): void |
| `lastFour` | `?string` | Optional | Last four value. | getLastFour(): ?string | setLastFour(?string lastFour): void |
| `brand` | `?string` | Optional | Brand or network name. | getBrand(): ?string | setBrand(?string brand): void |
| `cardType` | `?string` | Optional | Card type value. | getCardType(): ?string | setCardType(?string cardType): void |
| `country` | `?string` | Optional | Country code. | getCountry(): ?string | setCountry(?string country): void |
| `category` | `?string` | Optional | Category value. | getCategory(): ?string | setCategory(?string category): void |
| `issuer` | `?string` | Optional | Issuer value. | getIssuer(): ?string | setIssuer(?string issuer): void |
| `subBrand` | `?string` | Optional | Sub brand value. | getSubBrand(): ?string | setSubBrand(?string subBrand): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseCardDataCardBuilder;

$tokenResponseCardDataCard = TokenResponseCardDataCardBuilder::init()
    ->cardholder('TARO YAMADA')
    ->expMonth(12)
    ->expYear(2026)
    ->cardBin('424242')
    ->lastFour('4242')
    ->brand('visa')
    ->cardType('credit')
    ->country('JP')
    ->category('standard')
    ->issuer(null)
    ->subBrand('none')
    ->build();
```

