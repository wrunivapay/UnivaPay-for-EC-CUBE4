
# Token Response Paidy Data

Token Response Paidy Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponsePaidyData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paidyToken` | `string` | Required | One-time token issued by the Paidy SDK/widget on the client side. | getPaidyToken(): string | setPaidyToken(string paidyToken): void |
| `phoneNumber` | `?string` | Optional | Consumer phone number in Japanese format. | getPhoneNumber(): ?string | setPhoneNumber(?string phoneNumber): void |
| `shippingAddress` | [`?TokenResponsePaidyDataShippingAddress`](../../doc/models/token-response-paidy-data-shipping-address.md) | Optional | Shipping address returned for a Paidy token. | getShippingAddress(): ?TokenResponsePaidyDataShippingAddress | setShippingAddress(?TokenResponsePaidyDataShippingAddress shippingAddress): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponsePaidyDataBuilder;
use UnivaPay\Models\Builders\TokenResponsePaidyDataShippingAddressBuilder;

$tokenResponsePaidyData = TokenResponsePaidyDataBuilder::init(
    'paidy-token-abc123'
)
    ->phoneNumber('08012341234')
    ->shippingAddress(
        TokenResponsePaidyDataShippingAddressBuilder::init()
            ->zip('105-0011')
            ->line1('1-1-1')
            ->city('Minato')
            ->state('Tokyo')
            ->build()
    )
    ->build();
```

