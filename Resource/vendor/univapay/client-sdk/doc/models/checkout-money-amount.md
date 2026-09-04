
# Checkout Money Amount

Monetary amount used by checkout configuration limits and thresholds.

*This model accepts additional fields of type array.*

## Structure

`CheckoutMoneyAmount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | Amount in the smallest unit of the currency. | getAmount(): ?int | setAmount(?int amount): void |
| `amountFormatted` | `?float` | Optional | Amount formatted for display. | getAmountFormatted(): ?float | setAmountFormatted(?float amountFormatted): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutMoneyAmountBuilder;
use UnivaPay\ApiHelper;

$checkoutMoneyAmount = CheckoutMoneyAmountBuilder::init()
    ->amount(1000)
    ->amountFormatted(1000)
    ->currency('JPY')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

