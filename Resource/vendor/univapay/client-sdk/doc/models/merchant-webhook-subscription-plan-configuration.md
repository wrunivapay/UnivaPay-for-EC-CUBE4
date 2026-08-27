
# Merchant Webhook Subscription Plan Configuration

Subscription plan configuration.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookSubscriptionPlanConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables limited-cycle subscription plans. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `fixedCycle` | `?bool` | Optional | Allows plans limited by a fixed number of cycles. | getFixedCycle(): ?bool | setFixedCycle(?bool fixedCycle): void |
| `fixedCycleAmount` | `?bool` | Optional | Allows plans limited by a total target amount. | getFixedCycleAmount(): ?bool | setFixedCycleAmount(?bool fixedCycleAmount): void |
| `supportedPaymentTypes` | `?(string[])` | Optional | Payment types that can use subscription plans. | getSupportedPaymentTypes(): ?array | setSupportedPaymentTypes(?array supportedPaymentTypes): void |
| `minChargeAmount` | [`?MerchantWebhookMoneyAmount`](../../doc/models/merchant-webhook-money-amount.md) | Optional | Monetary amount object serialized by backend config models. | getMinChargeAmount(): ?MerchantWebhookMoneyAmount | setMinChargeAmount(?MerchantWebhookMoneyAmount minChargeAmount): void |
| `maxPayoutPeriod` | `?string` | Optional | Maximum payout delay allowed for subscription plan settlements. | getMaxPayoutPeriod(): ?string | setMaxPayoutPeriod(?string maxPayoutPeriod): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookSubscriptionPlanConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookMoneyAmountBuilder;

$merchantWebhookSubscriptionPlanConfiguration = MerchantWebhookSubscriptionPlanConfigurationBuilder::init()
    ->enabled(true)
    ->fixedCycle(true)
    ->fixedCycleAmount(true)
    ->supportedPaymentTypes(
        [
            'card'
        ]
    )
    ->minChargeAmount(
        MerchantWebhookMoneyAmountBuilder::init()
            ->amount(3000)
            ->currency('JPY')
            ->build()
    )
    ->maxPayoutPeriod('P12M')
    ->build();
```

