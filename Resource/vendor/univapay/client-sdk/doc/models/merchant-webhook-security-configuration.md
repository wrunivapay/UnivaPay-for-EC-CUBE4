
# Merchant Webhook Security Configuration

Merchant-level fraud and refund safety settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookSecurityConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `cardChargeCooldown` | `?string` | Optional | ISO-8601 duration between card charge attempts. | getCardChargeCooldown(): ?string | setCardChargeCooldown(?string cardChargeCooldown): void |
| `subscriptionCooldown` | `?string` | Optional | ISO-8601 duration between subscription charge attempts. | getSubscriptionCooldown(): ?string | setSubscriptionCooldown(?string subscriptionCooldown): void |
| `idempotentCardChargeCooldown` | `?string` | Optional | ISO-8601 duration for reusing an idempotent card charge key. | getIdempotentCardChargeCooldown(): ?string | setIdempotentCardChargeCooldown(?string idempotentCardChargeCooldown): void |
| `idempotentSubscriptionCooldown` | `?string` | Optional | ISO-8601 duration for reusing an idempotent subscription key. | getIdempotentSubscriptionCooldown(): ?string | setIdempotentSubscriptionCooldown(?string idempotentSubscriptionCooldown): void |
| `restrictIpAfterFailedCharge` | [`?RestrictIpAfterFailedChargeConfig`](../../doc/models/restrict-ip-after-failed-charge-config.md) | Optional | IP restriction policy applied after repeated failed charges. | getRestrictIpAfterFailedCharge(): ?RestrictIpAfterFailedChargeConfig | setRestrictIpAfterFailedCharge(?RestrictIpAfterFailedChargeConfig restrictIpAfterFailedCharge): void |
| `inspectSuspiciousLoginAfter` | `?string` | Optional | Look-back period used to review suspicious login activity. | getInspectSuspiciousLoginAfter(): ?string | setInspectSuspiciousLoginAfter(?string inspectSuspiciousLoginAfter): void |
| `refundPercentLimit` | `?float` | Optional | Maximum refund-to-sales percentage allowed before restriction. | getRefundPercentLimit(): ?float | setRefundPercentLimit(?float refundPercentLimit): void |
| `limitChargeByCardConfiguration` | [`?MerchantWebhookLimitChargeByCardConfiguration`](../../doc/models/merchant-webhook-limit-charge-by-card-configuration.md) | Optional | Per-card velocity limit configuration. | getLimitChargeByCardConfiguration(): ?MerchantWebhookLimitChargeByCardConfiguration | setLimitChargeByCardConfiguration(?MerchantWebhookLimitChargeByCardConfiguration limitChargeByCardConfiguration): void |
| `confirmationRequired` | `?bool` | Optional | Requires confirmation before protected refund actions proceed. | getConfirmationRequired(): ?bool | setConfirmationRequired(?bool confirmationRequired): void |
| `minRefundThreshold` | `?int` | Optional | Minimum refund amount, in minor units, subject to confirmation checks. | getMinRefundThreshold(): ?int | setMinRefundThreshold(?int minRefundThreshold): void |
| `limitRefundBySales` | [`?MerchantWebhookLimitRefundBySalesConfiguration`](../../doc/models/merchant-webhook-limit-refund-by-sales-configuration.md) | Optional | Refund-limiting configuration based on sales history. | getLimitRefundBySales(): ?MerchantWebhookLimitRefundBySalesConfiguration | setLimitRefundBySales(?MerchantWebhookLimitRefundBySalesConfiguration limitRefundBySales): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookSecurityConfigurationBuilder;
use UnivaPay\Models\Builders\RestrictIpAfterFailedChargeConfigBuilder;
use UnivaPay\Models\Builders\MerchantWebhookLimitRefundBySalesConfigurationBuilder;

$merchantWebhookSecurityConfiguration = MerchantWebhookSecurityConfigurationBuilder::init()
    ->cardChargeCooldown('PT5M')
    ->subscriptionCooldown('PT10M')
    ->restrictIpAfterFailedCharge(
        RestrictIpAfterFailedChargeConfigBuilder::init()
            ->enabled(true)
            ->count(5)
            ->cooldown('PT1H')
            ->build()
    )
    ->refundPercentLimit(100)
    ->confirmationRequired(false)
    ->minRefundThreshold(100)
    ->limitRefundBySales(
        MerchantWebhookLimitRefundBySalesConfigurationBuilder::init()
            ->enabled(true)
            ->period('monthly')
            ->rollingWindow(true)
            ->build()
    )
    ->build();
```

