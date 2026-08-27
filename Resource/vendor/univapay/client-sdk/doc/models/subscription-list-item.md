
# Subscription List Item

Subscription entry returned in list responses.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionListItem`

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
| `merchantName` | `?string` | Optional | Merchant display name. | getMerchantName(): ?string | setMerchantName(?string merchantName): void |
| `storeName` | `?string` | Optional | Store display name. | getStoreName(): ?string | setStoreName(?string storeName): void |
| `paymentType` | `?string` | Optional | Payment method type. | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `nextPaymentDate` | `?DateTime` | Optional | Next payment date value. | getNextPaymentDate(): ?\DateTime | setNextPaymentDate(?\DateTime nextPaymentDate): void |
| `userData` | [`?SubscriptionUserData`](../../doc/models/subscription-user-data.md) | Optional | Customer-facing payment method summary data. | getUserData(): ?SubscriptionUserData | setUserData(?SubscriptionUserData userData): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionListItemBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\SubscriptionStatus;
use UnivaPay\Models\Builders\SubscriptionThreeDsBuilder;
use UnivaPay\Models\SubscriptionThreeDsMode;
use UnivaPay\Models\Builders\SubscriptionPlanSettingsBuilder;
use UnivaPay\Models\PlanSettingsType;
use UnivaPay\Models\Builders\SubscriptionUserDataBuilder;

$subscriptionListItem = SubscriptionListItemBuilder::init()
    ->id('11ef335e-9aa5-c54a-8313-7f9847da313a')
    ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
    ->transactionTokenId('11ef32a7-3a71-8662-803f-1bc27702eeec')
    ->amount(1250)
    ->currency('USD')
    ->amountFormatted(12.5)
    ->status(SubscriptionStatus::CURRENT)
    ->threeDs(
        SubscriptionThreeDsBuilder::init()
            ->mode(SubscriptionThreeDsMode::NORMAL)
            ->redirectEndpoint(null)
            ->redirectId(null)
            ->build()
    )
    ->subscriptionPlan(
        SubscriptionPlanSettingsBuilder::init()
            ->planType(PlanSettingsType::FIXED_CYCLES)
            ->fixedCycles(12)
            ->build()
    )
    ->merchantName('管理画面ガイド')
    ->storeName('管理画面ガイド_TEST店舗')
    ->paymentType('card')
    ->nextPaymentDate(DateTimeHelper::fromSimpleDate('2024-07-26'))
    ->userData(
        SubscriptionUserDataBuilder::init()
            ->type('charge')
            ->cardholderName('taro yamada')
            ->email('test@test.com')
            ->brand('visa')
            ->build()
    )
    ->build();
```

