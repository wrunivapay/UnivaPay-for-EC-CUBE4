
# Transaction Token List Item User Data

Transaction Token List Item User Data schema.

*This model accepts additional fields of type array.*

## Structure

`TransactionTokenListItemUserData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardholderName` | `?string` | Optional | Cardholder name value. | getCardholderName(): ?string | setCardholderName(?string cardholderName): void |
| `email` | `?string` | Optional | Customer email address. | getEmail(): ?string | setEmail(?string email): void |
| `brand` | `?string` | Optional | Brand or network name. | getBrand(): ?string | setBrand(?string brand): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionTokenListItemUserDataBuilder;

$transactionTokenListItemUserData = TransactionTokenListItemUserDataBuilder::init()
    ->cardholderName('TARO YAMADA')
    ->email('user@example.com')
    ->brand('visa')
    ->build();
```

