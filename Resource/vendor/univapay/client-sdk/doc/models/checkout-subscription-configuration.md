
# Checkout Subscription Configuration

Univapay-hosted subscription feature toggle.

*This model accepts additional fields of type array.*

## Structure

`CheckoutSubscriptionConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether Univapay-hosted subscriptions are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutSubscriptionConfigurationBuilder;
use UnivaPay\ApiHelper;

$checkoutSubscriptionConfiguration = CheckoutSubscriptionConfigurationBuilder::init()
    ->enabled(true)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

