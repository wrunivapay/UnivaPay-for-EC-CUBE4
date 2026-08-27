
# Checkout Theme

Widget theme applied to checkout.

*This model accepts additional fields of type array.*

## Structure

`CheckoutTheme`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `colors` | [`?CheckoutThemeColors`](../../doc/models/checkout-theme-colors.md) | Optional | Hex colors applied to the checkout widget. Always resolves to the platform defaults shown here when not customized — never `null`. | getColors(): ?CheckoutThemeColors | setColors(?CheckoutThemeColors colors): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutThemeBuilder;
use UnivaPay\Models\Builders\CheckoutThemeColorsBuilder;
use UnivaPay\ApiHelper;

$checkoutTheme = CheckoutThemeBuilder::init()
    ->colors(
        CheckoutThemeColorsBuilder::init()
            ->mainBackground('main_background8')
            ->secondaryBackground('secondary_background6')
            ->mainColor('main_color0')
            ->mainText('main_text4')
            ->primaryText('primary_text8')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

