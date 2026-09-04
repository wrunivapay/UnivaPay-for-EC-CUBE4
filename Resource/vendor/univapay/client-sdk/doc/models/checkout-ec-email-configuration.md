
# Checkout Ec Email Configuration

Email-related EC checkout settings.

*This model accepts additional fields of type array.*

## Structure

`CheckoutEcEmailConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether EC email receipts are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutEcEmailConfigurationBuilder;
use UnivaPay\ApiHelper;

$checkoutEcEmailConfiguration = CheckoutEcEmailConfigurationBuilder::init()
    ->enabled(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

