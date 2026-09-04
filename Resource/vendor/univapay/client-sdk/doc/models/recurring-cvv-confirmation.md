
# Recurring Cvv Confirmation

CVV re-confirmation policy applied to recurring card charges (subscriptions and tokens with recurring privilege).

*This model accepts additional fields of type array.*

## Structure

`RecurringCvvConfirmation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether CVV re-confirmation is required for recurring card charges. Resolves to `false` when not configured. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `threshold` | [`?(CheckoutMoneyAmount[])`](../../doc/models/checkout-money-amount.md) | Optional | Amount thresholds above which CVV re-confirmation is required. `null` when no threshold is configured. | getThreshold(): ?array | setThreshold(?array threshold): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\RecurringCvvConfirmationBuilder;
use UnivaPay\Models\Builders\CheckoutMoneyAmountBuilder;
use UnivaPay\ApiHelper;

$recurringCvvConfirmation = RecurringCvvConfirmationBuilder::init()
    ->enabled(false)
    ->threshold(
        [
            null,
            CheckoutMoneyAmountBuilder::init()->build()
        ]
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

