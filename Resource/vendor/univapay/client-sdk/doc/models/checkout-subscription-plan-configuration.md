
# Checkout Subscription Plan Configuration

Univapay-side subscription plan configuration applied to checkout.

*This model accepts additional fields of type array.*

## Structure

`CheckoutSubscriptionPlanConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Whether subscription plans are enabled. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `fixedCycle` | `?bool` | Optional | Whether fixed-cycle subscription plans are allowed. | getFixedCycle(): ?bool | setFixedCycle(?bool fixedCycle): void |
| `fixedCycleAmount` | `?bool` | Optional | Whether fixed-cycle-amount subscription plans are allowed. | getFixedCycleAmount(): ?bool | setFixedCycleAmount(?bool fixedCycleAmount): void |
| `supportedPaymentTypes` | [`?(string(CheckoutPaymentType)[])`](../../doc/models/checkout-payment-type.md) | Optional | Payment types eligible for subscription plans. | getSupportedPaymentTypes(): ?array | setSupportedPaymentTypes(?array supportedPaymentTypes): void |
| `minChargeAmount` | [`?CheckoutMoneyAmount`](../../doc/models/checkout-money-amount.md) | Optional | Minimum charge amount eligible for subscription plans. `null` when unrestricted. | getMinChargeAmount(): ?CheckoutMoneyAmount | setMinChargeAmount(?CheckoutMoneyAmount minChargeAmount): void |
| `maxPayoutPeriod` | `?string` | Optional | ISO-8601 period bounding the maximum payout delay for subscription settlements. `null` when unrestricted. | getMaxPayoutPeriod(): ?string | setMaxPayoutPeriod(?string maxPayoutPeriod): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CheckoutSubscriptionPlanConfigurationBuilder;
use UnivaPay\Models\CheckoutPaymentType;
use UnivaPay\ApiHelper;

$checkoutSubscriptionPlanConfiguration = CheckoutSubscriptionPlanConfigurationBuilder::init()
    ->enabled(true)
    ->fixedCycle(true)
    ->fixedCycleAmount(true)
    ->supportedPaymentTypes(
        [
            CheckoutPaymentType::CARD
        ]
    )
    ->minChargeAmount(
        null
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

