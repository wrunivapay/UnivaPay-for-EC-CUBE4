
# Checkout Ec Products Configuration

Product-related EC checkout settings.

*This model accepts additional fields of type array.*

## Structure

`CheckoutEcProductsConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether EC product line items are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutEcProductsConfigurationBuilder;
use UnivaPay\ApiHelper;

$checkoutEcProductsConfiguration = CheckoutEcProductsConfigurationBuilder::init()
    ->enabled(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

