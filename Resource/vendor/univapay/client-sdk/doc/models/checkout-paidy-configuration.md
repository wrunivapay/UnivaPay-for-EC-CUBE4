
# Checkout Paidy Configuration

Paidy payment feature toggle.

*This model accepts additional fields of type array.*

## Structure

`CheckoutPaidyConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether Paidy payments are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutPaidyConfigurationBuilder;
use UnivaPay\ApiHelper;

$checkoutPaidyConfiguration = CheckoutPaidyConfigurationBuilder::init()
    ->enabled(true)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

