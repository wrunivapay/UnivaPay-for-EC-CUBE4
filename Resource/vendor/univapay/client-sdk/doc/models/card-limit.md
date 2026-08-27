
# Card Limit

Per-card spending limit enforced on card payments, evaluated over a rolling duration.

*This model accepts additional fields of type array.*

## Structure

`CardLimit`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `?int` | Optional | Maximum amount a single card may charge within `duration`. | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `amountFormatted` | `?float` | Optional | Limit amount formatted for display. | getAmountFormatted(): ?float | setAmountFormatted(?float amountFormatted): void |
| `duration` | `?string` | Optional | ISO-8601 period over which the limit is evaluated (e.g. P1M). | getDuration(): ?string | setDuration(?string duration): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CardLimitBuilder;
use UnivaPay\ApiHelper;

$cardLimit = CardLimitBuilder::init()
    ->amount(100000)
    ->currency('JPY')
    ->amountFormatted(100000)
    ->duration('P1M')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

