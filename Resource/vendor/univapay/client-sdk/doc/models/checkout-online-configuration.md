
# Checkout Online Configuration

Online redirect/wallet payment feature toggle.

*This model accepts additional fields of type array.*

## Structure

`CheckoutOnlineConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether online redirect/wallet payments are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutOnlineConfigurationBuilder;
use UnivaPay\ApiHelper;

$checkoutOnlineConfiguration = CheckoutOnlineConfigurationBuilder::init()
    ->enabled(true)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

