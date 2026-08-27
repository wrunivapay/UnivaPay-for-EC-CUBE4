
# Webhook Event

Represents a single delivery attempt of a webhook event, including the payload sent and the delivery outcome.

*This model accepts additional fields of type array.*

## Structure

`WebhookEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier for the webhook event. | getId(): ?string | setId(?string id): void |
| `webhookId` | `?string` | Optional | ID of the parent webhook. | getWebhookId(): ?string | setWebhookId(?string webhookId): void |
| `event` | [`?string(WebhookTrigger)`](../../doc/models/webhook-trigger.md) | Optional | Event type that triggers a webhook notification. | getEvent(): ?string | setEvent(?string event): void |
| `data` | `?array` | Optional | Domain object payload for webhook deliveries. The actual structure depends on the event type — see each webhook callback schema for the specific payload shape. | getData(): ?array | setData(?array data): void |
| `successful` | `?bool` | Optional | Whether the webhook delivery was acknowledged (HTTP 2xx). | getSuccessful(): ?bool | setSuccessful(?bool successful): void |
| `firedOn` | `?DateTime` | Optional | Timestamp when the webhook was dispatched. | getFiredOn(): ?\DateTime | setFiredOn(?\DateTime firedOn): void |
| `errorMessage` | `?string` | Optional | Error message if delivery failed. | getErrorMessage(): ?string | setErrorMessage(?string errorMessage): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the event was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\WebhookEventBuilder;

$webhookEvent = WebhookEventBuilder::init()->build();
```

