
# Checkout Installments Configuration

Installment plan configuration applied to checkout.

*This model accepts additional fields of type array.*

## Structure

`CheckoutInstallmentsConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether installment plans are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `cardProcessor` | [`?CheckoutInstallmentCardProcessor`](../../doc/models/checkout-installment-card-processor.md) | Optional | Card-processor capabilities available for installment payments. | getCardProcessor(): ?CheckoutInstallmentCardProcessor | setCardProcessor(?CheckoutInstallmentCardProcessor cardProcessor): void |
| `supportedPaymentTypes` | [`?(string(CheckoutPaymentType)[])`](../../doc/models/checkout-payment-type.md) | Optional | Payment types eligible for installment plans. | getSupportedPaymentTypes(): ?array | setSupportedPaymentTypes(?array supportedPaymentTypes): void |
| `minChargeAmount` | [`?CheckoutMoneyAmount`](../../doc/models/checkout-money-amount.md) | Optional | Minimum charge amount eligible for installment plans. `null` when unrestricted. | getMinChargeAmount(): ?CheckoutMoneyAmount | setMinChargeAmount(?CheckoutMoneyAmount minChargeAmount): void |
| `maxPayoutPeriod` | `?string` | Optional | ISO-8601 period bounding the maximum payout delay for installment settlements. `null` when unrestricted. | getMaxPayoutPeriod(): ?string | setMaxPayoutPeriod(?string maxPayoutPeriod): void |
| `onlyWithProcessor` | `?bool` | Optional | Whether installment plans are restricted to processor-backed flows. Always `true` — retained for backwards compatibility. | getOnlyWithProcessor(): ?bool | setOnlyWithProcessor(?bool onlyWithProcessor): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutInstallmentsConfigurationBuilder;
use UnivaPay\Models\Builders\CheckoutInstallmentCardProcessorBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\CheckoutPaymentType;

$checkoutInstallmentsConfiguration = CheckoutInstallmentsConfigurationBuilder::init()
    ->enabled(true)
    ->cardProcessor(
        CheckoutInstallmentCardProcessorBuilder::init()
            ->revolving(false)
            ->fixedCycle(false)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->supportedPaymentTypes(
        [
            CheckoutPaymentType::CARD
        ]
    )
    ->minChargeAmount(
        null
    )
    ->maxPayoutPeriod('max_payout_period8')
    ->onlyWithProcessor(true)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

