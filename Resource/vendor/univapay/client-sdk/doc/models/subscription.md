
# Subscription

The Subscription object represents a recurring payment schedule.

*This model accepts additional fields of type array.*

## Structure

`Subscription`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier. | getId(): ?string | setId(?string id): void |
| `storeId` | `?string` | Optional | Store identifier. | getStoreId(): ?string | setStoreId(?string storeId): void |
| `transactionTokenId` | `?string` | Optional | Transaction token identifier. | getTransactionTokenId(): ?string | setTransactionTokenId(?string transactionTokenId): void |
| `amount` | `?int` | Optional | Amount in the smallest currency unit. | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `amountFormatted` | `?float` | Optional | Amount formatted for display. | getAmountFormatted(): ?float | setAmountFormatted(?float amountFormatted): void |
| `initialAmount` | `?int` | Optional | Initial amount in the smallest currency unit. | getInitialAmount(): ?int | setInitialAmount(?int initialAmount): void |
| `initialAmountFormatted` | `?float` | Optional | Initial amount formatted for display. | getInitialAmountFormatted(): ?float | setInitialAmountFormatted(?float initialAmountFormatted): void |
| `subsequentCyclesStart` | `?DateTime` | Optional | Timestamp when recurring cycles begin. | getSubsequentCyclesStart(): ?\DateTime | setSubsequentCyclesStart(?\DateTime subsequentCyclesStart): void |
| `scheduleSettings` | [`?SubscriptionScheduleSettings`](../../doc/models/subscription-schedule-settings.md) | Optional | Schedule settings applied to a subscription. | getScheduleSettings(): ?SubscriptionScheduleSettings | setScheduleSettings(?SubscriptionScheduleSettings scheduleSettings): void |
| `onlyDirectCurrency` | `?bool` | Optional | Whether only direct currency processing is allowed. | getOnlyDirectCurrency(): ?bool | setOnlyDirectCurrency(?bool onlyDirectCurrency): void |
| `firstChargeCaptureAfter` | `?string` | Optional | ISO-8601 Duration (e.g., P3D). | getFirstChargeCaptureAfter(): ?string | setFirstChargeCaptureAfter(?string firstChargeCaptureAfter): void |
| `firstChargeAuthorizationOnly` | `?bool` | Optional | Whether the first charge is authorization-only. | getFirstChargeAuthorizationOnly(): ?bool | setFirstChargeAuthorizationOnly(?bool firstChargeAuthorizationOnly): void |
| `status` | [`?string(SubscriptionStatus)`](../../doc/models/subscription-status.md) | Optional | Subscription Status schema. | getStatus(): ?string | setStatus(?string status): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `mode` | [`?string(ChargeMode)`](../../doc/models/charge-mode.md) | Optional | Charge Mode schema. | getMode(): ?string | setMode(?string mode): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `threeDs` | [`?SubscriptionThreeDs`](../../doc/models/subscription-three-ds.md) | Optional | 3-D Secure configuration and redirect details applied to the subscription's payments. | getThreeDs(): ?SubscriptionThreeDs | setThreeDs(?SubscriptionThreeDs threeDs): void |
| `period` | [`?string(SubscriptionPeriod)`](../../doc/models/subscription-period.md) | Optional | Subscription Period schema. | getPeriod(): ?string | setPeriod(?string period): void |
| `cyclicalPeriod` | `?string` | Optional | ISO-8601 Duration for a custom billing frequency (e.g., P3D, P1M), returned instead of `period` when the subscription uses a custom cycle length rather than one of the fixed period presets. Mutually exclusive with `period` — exactly one of the two is present. | getCyclicalPeriod(): ?string | setCyclicalPeriod(?string cyclicalPeriod): void |
| `nextPayment` | [`?SubscriptionNextPayment`](../../doc/models/subscription-next-payment.md) | Optional | Next scheduled payment details for a subscription. | getNextPayment(): ?SubscriptionNextPayment | setNextPayment(?SubscriptionNextPayment nextPayment): void |
| `cyclesLeft` | `?int` | Optional | Number of remaining billing cycles before the subscription completes. Only present for cycle-limited plans (`subscription_plan` or `installment_plan`); `null` for indefinite subscriptions.<br><br>**Constraints**: `>= 0` | getCyclesLeft(): ?int | setCyclesLeft(?int cyclesLeft): void |
| `subscriptionPlan` | [`?SubscriptionPlanSettings`](../../doc/models/subscription-plan-settings.md) | Optional | Configuration for limited-cycle subscriptions (Univapay side). | getSubscriptionPlan(): ?SubscriptionPlanSettings | setSubscriptionPlan(?SubscriptionPlanSettings subscriptionPlan): void |
| `installmentPlan` | [`?SubscriptionInstallmentPlanResponse`](../../doc/models/subscription-installment-plan-response.md) | Optional | Installment plan applied to the subscription, as returned by the API. Covers both card-network installment plans (`revolving`, `fixed_cycles`) and legacy fixed-amount installment plans (`fixed_cycle_amount`). | getInstallmentPlan(): ?SubscriptionInstallmentPlanResponse | setInstallmentPlan(?SubscriptionInstallmentPlanResponse installmentPlan): void |
| `chargeId` | `?string` | Optional | Identifier of the charge associated with the subscription's installment plan. Only present when `installment_plan` is set. | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `amountLeft` | `?int` | Optional | Remaining amount to be charged over the life of the plan, in the smallest currency unit. Only present for cycle-limited plans.<br><br>**Constraints**: `>= 0` | getAmountLeft(): ?int | setAmountLeft(?int amountLeft): void |
| `amountLeftFormatted` | `?float` | Optional | `amount_left` formatted for display. | getAmountLeftFormatted(): ?float | setAmountLeftFormatted(?float amountLeftFormatted): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\SubscriptionScheduleSettingsBuilder;
use UnivaPay\Models\SubscriptionTerminationMode;
use UnivaPay\ApiHelper;
use UnivaPay\Models\SubscriptionStatus;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Models\Builders\SubscriptionThreeDsBuilder;
use UnivaPay\Models\SubscriptionThreeDsMode;
use UnivaPay\Models\SubscriptionPeriod;
use UnivaPay\Models\Builders\SubscriptionNextPaymentBuilder;
use UnivaPay\Models\Builders\SubscriptionPlanSettingsBuilder;
use UnivaPay\Models\PlanSettingsType;
use UnivaPay\Models\Builders\SubscriptionInstallmentPlanResponseBuilder;
use UnivaPay\Models\CombinedPlanType;
use UnivaPay\Models\CombinedInstallmentFixedCycles;

$subscription = SubscriptionBuilder::init()
    ->id('11ef335e-9aa5-c54a-8313-7f9847da313a')
    ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
    ->transactionTokenId('11ef32a7-3a71-8662-803f-1bc27702eeec')
    ->amount(1250)
    ->currency('USD')
    ->amountFormatted(12.5)
    ->scheduleSettings(
        SubscriptionScheduleSettingsBuilder::init()
            ->startOn(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->zoneId('zone_id8')
            ->preserveEndOfMonth(false)
            ->retryInterval('retry_interval2')
            ->terminationMode(SubscriptionTerminationMode::IMMEDIATE)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->onlyDirectCurrency(false)
    ->firstChargeAuthorizationOnly(false)
    ->status(SubscriptionStatus::CURRENT)
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->univapayName('univapay-name8')
            ->univapayPhoneNumber('univapay-phone-number2')
            ->additionalProperty('exampleAdditionalProperty', 'String4')
            ->build()
    )
    ->mode(ChargeMode::LIVE)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2024-06-26T01:51:28.627023Z'))
    ->threeDs(
        SubscriptionThreeDsBuilder::init()
            ->mode(SubscriptionThreeDsMode::NORMAL)
            ->redirectEndpoint('redirect_endpoint8')
            ->redirectId('000023a4-0000-0000-0000-000000000000')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->period(SubscriptionPeriod::MONTHLY)
    ->nextPayment(
        SubscriptionNextPaymentBuilder::init()
            ->id('00000110-0000-0000-0000-000000000000')
            ->dueDate(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->zoneId('zone_id8')
            ->amount(126)
            ->currency('currency8')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->subscriptionPlan(
        SubscriptionPlanSettingsBuilder::init()
            ->planType(PlanSettingsType::FIXED_CYCLES)
            ->fixedCycles(46)
            ->fixedCycleAmount(112)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->installmentPlan(
        SubscriptionInstallmentPlanResponseBuilder::init()
            ->planType(CombinedPlanType::FIXED_CYCLES)
            ->fixedCycles(CombinedInstallmentFixedCycles::CYCLES_12)
            ->fixedCyclesAmount(198)
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

