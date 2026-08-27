
# Token Response Paidy Data Shipping Address

Shipping address returned for a Paidy token.

*This model accepts additional fields of type array.*

## Structure

`TokenResponsePaidyDataShippingAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `zip` | `?string` | Optional | Japanese postal code. | getZip(): ?string | setZip(?string zip): void |
| `line1` | `?string` | Optional | Primary street address line. | getLine1(): ?string | setLine1(?string line1): void |
| `line2` | `?string` | Optional | Secondary street address line. | getLine2(): ?string | setLine2(?string line2): void |
| `city` | `?string` | Optional | City or locality. | getCity(): ?string | setCity(?string city): void |
| `state` | `?string` | Optional | State or prefecture. | getState(): ?string | setState(?string state): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponsePaidyDataShippingAddressBuilder;

$tokenResponsePaidyDataShippingAddress = TokenResponsePaidyDataShippingAddressBuilder::init()
    ->zip('105-0011')
    ->line1('1-1-1')
    ->city('Minato')
    ->state('Tokyo')
    ->build();
```

