
# Merchant Webhook Recurring Token Configuration

Recurring token configuration inherited by the merchant.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookRecurringTokenConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recurringType` | `?string` | Optional | Merchant recurring-token privilege. | getRecurringType(): ?string | setRecurringType(?string recurringType): void |
| `chargeWaitPeriod` | `?string` | Optional | ISO-8601 duration to wait before first recurring charge. | getChargeWaitPeriod(): ?string | setChargeWaitPeriod(?string chargeWaitPeriod): void |
| `cardChargeCvvConfirmation` | [`?MerchantWebhookRecurringCvvConfirmationConfig`](../../doc/models/merchant-webhook-recurring-cvv-confirmation-config.md) | Optional | CVV confirmation rules for recurring token charges. | getCardChargeCvvConfirmation(): ?MerchantWebhookRecurringCvvConfirmationConfig | setCardChargeCvvConfirmation(?MerchantWebhookRecurringCvvConfirmationConfig cardChargeCvvConfirmation): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookRecurringTokenConfigurationBuilder;
use UnivaPay\Models\Builders\MerchantWebhookRecurringCvvConfirmationConfigBuilder;

$merchantWebhookRecurringTokenConfiguration = MerchantWebhookRecurringTokenConfigurationBuilder::init()
    ->recurringType('infinite')
    ->chargeWaitPeriod('P7D')
    ->cardChargeCvvConfirmation(
        MerchantWebhookRecurringCvvConfirmationConfigBuilder::init()
            ->enabled(false)
            ->build()
    )
    ->build();
```

