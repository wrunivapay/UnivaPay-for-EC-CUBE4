
# Checkout Convenience Configuration

Convenience-store (konbini) payment settings applied to checkout.

*This model accepts additional fields of type array.*

## Structure

`CheckoutConvenienceConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether convenience-store payments are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `expiration` | `?string` | Optional | ISO-8601 duration before a convenience-store payment expires. | getExpiration(): ?string | setExpiration(?string expiration): void |
| `expirationTimeShift` | [`?ExpirationTimeShift`](../../doc/models/expiration-time-shift.md) | Optional | Time-of-day override applied when calculating expirations, shared by convenience-store and bank-transfer configuration. | getExpirationTimeShift(): ?ExpirationTimeShift | setExpirationTimeShift(?ExpirationTimeShift expirationTimeShift): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutConvenienceConfigurationBuilder;
use UnivaPay\Models\Builders\ExpirationTimeShiftBuilder;
use UnivaPay\ApiHelper;

$checkoutConvenienceConfiguration = CheckoutConvenienceConfigurationBuilder::init()
    ->enabled(true)
    ->expiration('PT720H')
    ->expirationTimeShift(
        ExpirationTimeShiftBuilder::init()
            ->value('value4')
            ->enabled(false)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

