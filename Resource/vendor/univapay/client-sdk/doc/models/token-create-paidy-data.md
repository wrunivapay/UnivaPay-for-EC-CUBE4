
# Token Create Paidy Data

Token Create Paidy Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreatePaidyData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paidyToken` | `string` | Required | One-time token issued by the Paidy SDK/widget on the client side. | getPaidyToken(): string | setPaidyToken(string paidyToken): void |
| `shippingAddress` | [`TokenCreatePaidyDataShippingAddress`](../../doc/models/token-create-paidy-data-shipping-address.md) | Required | Shipping address for a Paidy token. `zip` is required; the server additionally requires at least one of `line1`, `line2`, `city`, or `state` to be present (not enforceable at the schema level). | getShippingAddress(): TokenCreatePaidyDataShippingAddress | setShippingAddress(TokenCreatePaidyDataShippingAddress shippingAddress): void |
| `phoneNumber` | `?string` | Optional | Consumer phone number in Japanese format (e.g., '08012341234'). | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreatePaidyDataBuilder;
use UnivaPay\Models\Builders\TokenCreatePaidyDataShippingAddressBuilder;

$tokenCreatePaidyData = TokenCreatePaidyDataBuilder::init(
    'paidy-token-abc123',
    TokenCreatePaidyDataShippingAddressBuilder::init(
        '105-0011'
    )
        ->line1('1-1-1')
        ->city('Minato')
        ->state('Tokyo')
        ->build()
)
    ->phoneNumber('08012341234')
    ->build();
```

