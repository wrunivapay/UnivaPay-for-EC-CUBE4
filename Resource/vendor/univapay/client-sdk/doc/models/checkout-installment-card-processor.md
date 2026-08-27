
# Checkout Installment Card Processor

Card-processor capabilities available for installment payments.

*This model accepts additional fields of type array.*

## Structure

`CheckoutInstallmentCardProcessor`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `revolving` | `?bool` | Optional | Whether revolving installment payments are allowed. | getRevolving(): ?bool | setRevolving(?bool revolving): void |
| `fixedCycle` | `?bool` | Optional | Whether fixed-cycle installment payments are allowed. | getFixedCycle(): ?bool | setFixedCycle(?bool fixedCycle): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutInstallmentCardProcessorBuilder;
use UnivaPay\ApiHelper;

$checkoutInstallmentCardProcessor = CheckoutInstallmentCardProcessorBuilder::init()
    ->revolving(true)
    ->fixedCycle(true)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

