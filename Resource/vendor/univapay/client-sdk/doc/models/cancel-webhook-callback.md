
# Cancel Webhook Callback

Webhook envelope whose `data` payload is a Cancel resource.

*This model accepts additional fields of type array.*

## Structure

`CancelWebhookCallback`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `event` | [`?string(CancelEvent)`](../../doc/models/cancel-event.md) | Optional | Event type discriminator — always `cancel_finished` for this callback. | getEvent(): ?string | setEvent(?string event): void |
| `id` | `string` | Required | Unique ID of this webhook delivery. | getId(): string | setId(string id): void |
| `createdOn` | `DateTime` | Required | Timestamp when the event was fired. | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `data` | [`?Cancel`](../../doc/models/cancel.md) | Optional | Represents a cancellation request for a charge. | getData(): ?Cancel | setData(?Cancel data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CancelWebhookCallbackBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\CancelEvent;
use UnivaPay\Models\Builders\CancelBuilder;
use UnivaPay\Models\CancelStatus;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;

$cancelWebhookCallback = CancelWebhookCallbackBuilder::init(
    '11ef0000-0000-4000-8000-000000000001',
    DateTimeHelper::fromRfc3339DateTimeRequired('2026-04-09T07:35:50.000000Z')
)
    ->event(CancelEvent::CANCEL_FINISHED)
    ->data(
        CancelBuilder::init()
            ->id('a1b2c3d4-e5f6-7890-abcd-ef1234567890')
            ->chargeId('6efb4e5c-690a-40f3-a4f1-0e19c5f84e98')
            ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
            ->status(CancelStatus::SUCCESSFUL)
            ->error(
                null
            )
            ->metadata(
                GenericMetadataBuilder::init()
                    ->orderId('order_12345')
                    ->build()
            )
            ->mode(ChargeMode::LIVE)
            ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
            ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:36:00.000000Z'))
            ->build()
    )
    ->build();
```

