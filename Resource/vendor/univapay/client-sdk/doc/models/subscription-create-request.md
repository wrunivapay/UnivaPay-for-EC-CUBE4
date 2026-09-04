
# Subscription Create Request

Request payload for creating a subscription.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionTokenId` | `string` | Required | Transaction token ID authorized for recurring payments. | getTransactionTokenId(): string | setTransactionTokenId(string transactionTokenId): void |
| `amount` | `int` | Required | Amount to be charged in each cycle. | getAmount(): int | setAmount(int amount): void |
| `currency` | `string` | Required | ISO-4217 currency code. | getCurrency(): string | setCurrency(string currency): void |
| `initialAmount` | `?int` | Optional | Optional different amount for the first charge. | getInitialAmount(): ?int | setInitialAmount(?int initialAmount): void |
| `period` | [`?string(SubscriptionPeriod)`](../../doc/models/subscription-period.md) | Optional | Subscription Period schema. | getPeriod(): ?string | setPeriod(?string period): void |
| `cyclicalPeriod` | `?string` | Optional | ISO-8601 Duration for custom frequency (e.g., P3D, P2M).  Cannot be used if 'period' is specified. | getCyclicalPeriod(): ?string | setCyclicalPeriod(?string cyclicalPeriod): void |
| `scheduleSettings` | [`?SubscriptionScheduleSettings`](../../doc/models/subscription-schedule-settings.md) | Optional | Schedule settings applied to a subscription. | getScheduleSettings(): ?SubscriptionScheduleSettings | setScheduleSettings(?SubscriptionScheduleSettings scheduleSettings): void |
| `installmentPlan` | [`?SubscriptionInstallmentPlan`](../../doc/models/subscription-installment-plan.md) | Optional | Configuration for credit card company side installments. | getInstallmentPlan(): ?SubscriptionInstallmentPlan | setInstallmentPlan(?SubscriptionInstallmentPlan installmentPlan): void |
| `subscriptionPlan` | [`?SubscriptionPlanSettings`](../../doc/models/subscription-plan-settings.md) | Optional | Configuration for limited-cycle subscriptions (Univapay side). | getSubscriptionPlan(): ?SubscriptionPlanSettings | setSubscriptionPlan(?SubscriptionPlanSettings subscriptionPlan): void |
| `firstChargeAuthorizationOnly` | `?bool` | Optional | If true, the first charge will only be an authorization (Hold).<br><br>**Default**: `false` | getFirstChargeAuthorizationOnly(): ?bool | setFirstChargeAuthorizationOnly(?bool firstChargeAuthorizationOnly): void |
| `firstChargeCaptureAfter` | `?string` | Optional | ISO-8601 Duration for auto-capture if authorization only is true.  Allowed days: P1D to P6D. | getFirstChargeCaptureAfter(): ?string | setFirstChargeCaptureAfter(?string firstChargeCaptureAfter): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `threeDs` | [`?ChargeCreateRequestThreeDs`](../../doc/models/charge-create-request-three-ds.md) | Optional | Charge Create Request Three Ds schema. Either supply `mode` (and optionally `redirect_endpoint`) to have Univapay run 3DS, or supply all six external-MPI fields (`authentication_value` through `transaction_status`) when 3DS authentication was already completed outside of Univapay — in that case `mode` is set to `provided` automatically and must not be sent. | getThreeDs(): ?ChargeCreateRequestThreeDs | setThreeDs(?ChargeCreateRequestThreeDs threeDs): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionCreateRequestBuilder;
use UnivaPay\Models\SubscriptionPeriod;

$subscriptionCreateRequest = SubscriptionCreateRequestBuilder::init(
    '11ef32a7-3a71-8662-803f-1bc27702eeec',
    1250,
    'USD'
)
    ->period(SubscriptionPeriod::MONTHLY)
    ->build();
```

