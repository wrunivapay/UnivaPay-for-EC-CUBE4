
# Subscription Webhook Event

Webhook envelope for subscription lifecycle events. Fired as `subscription_created` when a subscription is created and its first payment initiated, `subscription_payment` when a scheduled payment processes successfully, `subscription_completed` when all scheduled payments complete, `subscription_failure` when a scheduled payment fails, `subscription_canceled` when a subscription is cancelled before all payments complete, and `subscription_suspended` when a subscription is paused. The `data` field contains the full Subscription object at the time of the event.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionWebhookEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique ID of this webhook delivery. | getId(): string | setId(string id): void |
| `event` | [`string(SubscriptionEvent)`](../../doc/models/subscription-event.md) | Required | Event type discriminator — `subscription_created`, `subscription_payment`, `subscription_completed`, `subscription_failure`, `subscription_canceled`, or `subscription_suspended`. | getEvent(): string | setEvent(string event): void |
| `data` | [`?Subscription`](../../doc/models/subscription.md) | Optional | The Subscription object represents a recurring payment schedule. | getData(): ?Subscription | setData(?Subscription data): void |
| `createdOn` | `DateTime` | Required | Timestamp when the event was fired. | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionWebhookEventBuilder;
use UnivaPay\Models\SubscriptionEvent;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\SubscriptionBuilder;
use UnivaPay\Models\Builders\SubscriptionScheduleSettingsBuilder;
use UnivaPay\Models\SubscriptionTerminationMode;
use UnivaPay\Models\SubscriptionStatus;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Models\SubscriptionPeriod;

$subscriptionWebhookEvent = SubscriptionWebhookEventBuilder::init(
    '11ef0000-0000-4000-8000-000000000001',
    SubscriptionEvent::SUBSCRIPTION_CREATED,
    DateTimeHelper::fromRfc3339DateTimeRequired('2026-04-09T07:35:50.000000Z')
)
    ->data(
        SubscriptionBuilder::init()
            ->id('11ef335e-9aa5-c54a-8313-7f9847da313a')
            ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
            ->transactionTokenId('11ef32a7-3a71-8662-803f-1bc27702eeec')
            ->amount(1250)
            ->currency('USD')
            ->amountFormatted(12.5)
            ->scheduleSettings(
                SubscriptionScheduleSettingsBuilder::init()
                    ->startOn(DateTimeHelper::fromSimpleDate('2024-07-01'))
                    ->zoneId('Asia/Tokyo')
                    ->preserveEndOfMonth(false)
                    ->retryInterval('P7D')
                    ->terminationMode(SubscriptionTerminationMode::ON_NEXT_PAYMENT)
                    ->build()
            )
            ->onlyDirectCurrency(false)
            ->firstChargeAuthorizationOnly(false)
            ->status(SubscriptionStatus::CURRENT)
            ->metadata(
                GenericMetadataBuilder::init()
                    ->orderId('12345')
                    ->build()
            )
            ->mode(ChargeMode::TEST)
            ->createdOn(DateTimeHelper::fromRfc3339DateTime('2024-06-26T01:51:28.627023Z'))
            ->period(SubscriptionPeriod::MONTHLY)
            ->build()
    )
    ->build();
```

