
# Webhook Callback Envelope

Common wrapper POSTed to your webhook URL for every event. The `data` field contains the domain object relevant to the event type.

*This model accepts additional fields of type array.*

## Structure

`WebhookCallbackEnvelope`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique ID of this webhook delivery. | getId(): string | setId(string id): void |
| `event` | [`string(WebhookTrigger)`](../../doc/models/webhook-trigger.md) | Required | Event type that triggers a webhook notification. | getEvent(): string | setEvent(string event): void |
| `createdOn` | `DateTime` | Required | Timestamp when the event was fired. | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\WebhookCallbackEnvelopeBuilder;
use UnivaPay\Models\WebhookTrigger;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$webhookCallbackEnvelope = WebhookCallbackEnvelopeBuilder::init(
    '11ef0000-0000-4000-8000-000000000001',
    WebhookTrigger::CHARGE_FINISHED,
    DateTimeHelper::fromRfc3339DateTimeRequired('2026-04-09T07:35:50.000000Z')
)
    ->additionalProperty('data', ApiHelper::deserialize('{"id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","created_on":"2024-06-26T01:51:30.000000Z"}'))
    ->build();
```

