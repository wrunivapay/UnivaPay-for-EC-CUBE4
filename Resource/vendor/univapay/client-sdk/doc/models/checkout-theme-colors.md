
# Checkout Theme Colors

Hex colors applied to the checkout widget. Always resolves to the platform defaults shown here when not customized — never `null`.

*This model accepts additional fields of type array.*

## Structure

`CheckoutThemeColors`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mainBackground` | `?string` | Optional | Main background color. | getMainBackground(): ?string | setMainBackground(?string mainBackground): void |
| `secondaryBackground` | `?string` | Optional | Secondary background color. | getSecondaryBackground(): ?string | setSecondaryBackground(?string secondaryBackground): void |
| `mainColor` | `?string` | Optional | Main accent color. | getMainColor(): ?string | setMainColor(?string mainColor): void |
| `mainText` | `?string` | Optional | Main text color. | getMainText(): ?string | setMainText(?string mainText): void |
| `primaryText` | `?string` | Optional | Primary text color. | getPrimaryText(): ?string | setPrimaryText(?string primaryText): void |
| `secondaryText` | `?string` | Optional | Secondary text color. | getSecondaryText(): ?string | setSecondaryText(?string secondaryText): void |
| `baseText` | `?string` | Optional | Base text color. | getBaseText(): ?string | setBaseText(?string baseText): void |
| `bodyBackground` | `?string` | Optional | Body background color. | getBodyBackground(): ?string | setBodyBackground(?string bodyBackground): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutThemeColorsBuilder;
use UnivaPay\ApiHelper;

$checkoutThemeColors = CheckoutThemeColorsBuilder::init()
    ->mainBackground('#FFFFFF')
    ->secondaryBackground('#F5F8FC')
    ->mainColor('#4C5F85')
    ->mainText('#FFFFFF')
    ->primaryText('#4C5F85')
    ->secondaryText('#4C5F85')
    ->baseText('#4C5F85')
    ->bodyBackground('#FFFFFF')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

