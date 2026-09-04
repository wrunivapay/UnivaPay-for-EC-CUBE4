
# Merchant Webhook Installment Plan Configuration

Installment plan configuration.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookInstallmentPlanConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables installment plan features for eligible payments. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `cardProcessor` | [`?CardProcessorInstallmentConfig`](../../doc/models/card-processor-installment-config.md) | Optional | Card-processor capabilities available for installment payments. | getCardProcessor(): ?CardProcessorInstallmentConfig | setCardProcessor(?CardProcessorInstallmentConfig cardProcessor): void |
| `supportedPaymentTypes` | `?(string[])` | Optional | Payment types that can use installment plans. | getSupportedPaymentTypes(): ?array | setSupportedPaymentTypes(?array supportedPaymentTypes): void |
| `minChargeAmount` | [`?MerchantWebhookMoneyAmount`](../../doc/models/merchant-webhook-money-amount.md) | Optional | Monetary amount object serialized by backend config models. | getMinChargeAmount(): ?MerchantWebhookMoneyAmount | setMinChargeAmount(?MerchantWebhookMoneyAmount minChargeAmount): void |
| `maxPayoutPeriod` | `?string` | Optional | Maximum payout delay allowed for installment settlements. | getMaxPayoutPeriod(): ?string | setMaxPayoutPeriod(?string maxPayoutPeriod): void |
| `onlyWithProcessor` | `?bool` | Optional | Restricts installment use to processor-backed flows. | getOnlyWithProcessor(): ?bool | setOnlyWithProcessor(?bool onlyWithProcessor): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookInstallmentPlanConfigurationBuilder;
use UnivaPay\Models\Builders\CardProcessorInstallmentConfigBuilder;
use UnivaPay\Models\Builders\MerchantWebhookMoneyAmountBuilder;

$merchantWebhookInstallmentPlanConfiguration = MerchantWebhookInstallmentPlanConfigurationBuilder::init()
    ->enabled(true)
    ->cardProcessor(
        CardProcessorInstallmentConfigBuilder::init()
            ->revolving(true)
            ->fixedCycle(true)
            ->build()
    )
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
    ->onlyWithProcessor(true)
    ->build();
```

