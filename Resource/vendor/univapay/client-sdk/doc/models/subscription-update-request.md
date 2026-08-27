
# Subscription Update Request

Request payload for updating a subscription.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionTokenId` | `?string` | Optional | Transaction token ID used for the subscription.  Can be changed to update the payment method (e.g., when a card expires).  Allowed only when the status is `unconfirmed`, `unpaid`, `current`, or `suspended`. | getTransactionTokenId(): ?string | setTransactionTokenId(?string transactionTokenId): void |
| `amount` | `?int` | Optional | The recurring charge amount (applied to the cycle after the next one).  Not available for limited-cycle subscriptions.  To change the immediate next payment amount, update `next_payment.amount` instead. | getAmount(): ?int | setAmount(?int amount): void |
| `period` | [`?string(SubscriptionPeriod)`](../../doc/models/subscription-period.md) | Optional | Subscription Period schema. | getPeriod(): ?string | setPeriod(?string period): void |
| `cyclicalPeriod` | `?string` | Optional | ISO-8601 Duration for custom frequency (e.g., P3D, P2M). Cannot be used together with `period`. Only allowed before the subscription's first payment has been paid. | getCyclicalPeriod(): ?string | setCyclicalPeriod(?string cyclicalPeriod): void |
| `initialAmount` | `?int` | Optional | Different amount for the first charge. Only allowed while the subscription status is still editable (before it has started) and requires the App Token Secret. | getInitialAmount(): ?int | setInitialAmount(?int initialAmount): void |
| `subscriptionPlan` | [`?SubscriptionPlanSettings`](../../doc/models/subscription-plan-settings.md) | Optional | Configuration for limited-cycle subscriptions (Univapay side). | getSubscriptionPlan(): ?SubscriptionPlanSettings | setSubscriptionPlan(?SubscriptionPlanSettings subscriptionPlan): void |
| `installmentPlan` | [`?SubscriptionInstallmentPlan`](../../doc/models/subscription-installment-plan.md) | Optional | Configuration for credit card company side installments. | getInstallmentPlan(): ?SubscriptionInstallmentPlan | setInstallmentPlan(?SubscriptionInstallmentPlan installmentPlan): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `status` | [`?string(SubscriptionUpdateStatus)`](../../doc/models/subscription-update-status.md) | Optional | Update the subscription status.  `suspended`: Pause the subscription.  `unpaid`: Resume a suspended subscription. | getStatus(): ?string | setStatus(?string status): void |
| `scheduleSettings` | [`?SubscriptionUpdateScheduleSettings`](../../doc/models/subscription-update-schedule-settings.md) | Optional | Schedule settings that can be updated on a subscription. | getScheduleSettings(): ?SubscriptionUpdateScheduleSettings | setScheduleSettings(?SubscriptionUpdateScheduleSettings scheduleSettings): void |
| `nextPayment` | [`?SubscriptionUpdateNextPayment`](../../doc/models/subscription-update-next-payment.md) | Optional | Fields that can be updated on the next scheduled payment. | getNextPayment(): ?SubscriptionUpdateNextPayment | setNextPayment(?SubscriptionUpdateNextPayment nextPayment): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionUpdateRequestBuilder;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\Builders\SubscriptionUpdateScheduleSettingsBuilder;
use UnivaPay\Models\SubscriptionTerminationMode;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\SubscriptionUpdateNextPaymentBuilder;

$subscriptionUpdateRequest = SubscriptionUpdateRequestBuilder::init()
    ->transactionTokenId('11ef3362-3700-c54a-9baa-6f7e6527c9d9')
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->build()
    )
    ->scheduleSettings(
        SubscriptionUpdateScheduleSettingsBuilder::init()
            ->terminationMode(SubscriptionTerminationMode::ON_NEXT_PAYMENT)
            ->build()
    )
    ->nextPayment(
        SubscriptionUpdateNextPaymentBuilder::init()
            ->dueDate(DateTimeHelper::fromSimpleDate('2030-01-01'))
            ->build()
    )
    ->build();
```

