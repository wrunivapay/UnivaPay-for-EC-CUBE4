
# Subscription Simulation Request

Request payload for simulating a subscription payment schedule without creating a live subscription. Specify exactly one of 'period' or 'cyclical_period' to define the billing frequency. 'installment_plan' and 'subscription_plan' are mutually exclusive — specify at most one to model a limited-cycle schedule.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionSimulationRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Amount to be charged in each cycle. Must be a positive integer.<br><br>**Constraints**: `>= 1` | getAmount(): int | setAmount(int amount): void |
| `currency` | `string` | Required | ISO-4217 currency code. | getCurrency(): string | setCurrency(string currency): void |
| `paymentType` | [`string(TransactionTokenPaymentType)`](../../doc/models/transaction-token-payment-type.md) | Required | Transaction Token Payment Type schema. | getPaymentType(): string | setPaymentType(string paymentType): void |
| `initialAmount` | `?int` | Optional | Optional different amount for the first charge. Must be zero or greater.<br><br>**Constraints**: `>= 0` | getInitialAmount(): ?int | setInitialAmount(?int initialAmount): void |
| `period` | [`?string(SubscriptionSimulationPeriod)`](../../doc/models/subscription-simulation-period.md) | Optional | Billing frequency for the simulated schedule. Includes `bimonthly`, which is not offered on `SubscriptionPeriod` for live subscription creation. | getPeriod(): ?string | setPeriod(?string period): void |
| `cyclicalPeriod` | `?string` | Optional | ISO-8601 Duration for custom frequency (e.g., P3D, P2M). Cannot be used together with 'period' — specify exactly one of the two. | getCyclicalPeriod(): ?string | setCyclicalPeriod(?string cyclicalPeriod): void |
| `scheduleSettings` | [`SubscriptionScheduleSettings`](../../doc/models/subscription-schedule-settings.md) | Required | Schedule settings applied to a subscription. | getScheduleSettings(): SubscriptionScheduleSettings | setScheduleSettings(SubscriptionScheduleSettings scheduleSettings): void |
| `installmentPlan` | [`?SubscriptionSimulationPlanSettings`](../../doc/models/subscription-simulation-plan-settings.md) | Optional | Cycle-limiting plan configuration used to simulate an installment plan or a Univapay-side subscription plan. | getInstallmentPlan(): ?SubscriptionSimulationPlanSettings | setInstallmentPlan(?SubscriptionSimulationPlanSettings installmentPlan): void |
| `subscriptionPlan` | [`?SubscriptionSimulationPlanSettings`](../../doc/models/subscription-simulation-plan-settings.md) | Optional | Cycle-limiting plan configuration used to simulate an installment plan or a Univapay-side subscription plan. | getSubscriptionPlan(): ?SubscriptionSimulationPlanSettings | setSubscriptionPlan(?SubscriptionSimulationPlanSettings subscriptionPlan): void |
| `onlyDirectCurrency` | `?bool` | Optional | Whether only direct currency processing is allowed. | getOnlyDirectCurrency(): ?bool | setOnlyDirectCurrency(?bool onlyDirectCurrency): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionSimulationRequestBuilder;
use UnivaPay\Models\TransactionTokenPaymentType;
use UnivaPay\Models\Builders\SubscriptionScheduleSettingsBuilder;
use UnivaPay\Models\SubscriptionSimulationPeriod;

$subscriptionSimulationRequest = SubscriptionSimulationRequestBuilder::init(
    1000,
    'JPY',
    TransactionTokenPaymentType::CARD,
    SubscriptionScheduleSettingsBuilder::init()
        ->zoneId('Asia/Tokyo')
        ->build()
)
    ->period(SubscriptionSimulationPeriod::MONTHLY)
    ->build();
```

