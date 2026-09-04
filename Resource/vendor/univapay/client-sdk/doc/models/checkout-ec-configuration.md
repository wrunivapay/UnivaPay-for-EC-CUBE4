
# Checkout Ec Configuration

EC checkout feature toggles for hosted email receipts and product line items.

*This model accepts additional fields of type array.*

## Structure

`CheckoutEcConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ecEmail` | [`?CheckoutEcEmailConfiguration`](../../doc/models/checkout-ec-email-configuration.md) | Optional | Email-related EC checkout settings. | getEcEmail(): ?CheckoutEcEmailConfiguration | setEcEmail(?CheckoutEcEmailConfiguration ecEmail): void |
| `ecProducts` | [`?CheckoutEcProductsConfiguration`](../../doc/models/checkout-ec-products-configuration.md) | Optional | Product-related EC checkout settings. | getEcProducts(): ?CheckoutEcProductsConfiguration | setEcProducts(?CheckoutEcProductsConfiguration ecProducts): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutEcConfigurationBuilder;
use UnivaPay\Models\Builders\CheckoutEcEmailConfigurationBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\CheckoutEcProductsConfigurationBuilder;

$checkoutEcConfiguration = CheckoutEcConfigurationBuilder::init()
    ->ecEmail(
        CheckoutEcEmailConfigurationBuilder::init()
            ->enabled(false)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->ecProducts(
        CheckoutEcProductsConfigurationBuilder::init()
            ->enabled(false)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

