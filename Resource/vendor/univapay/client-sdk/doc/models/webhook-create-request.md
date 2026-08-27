
# Webhook Create Request

Request body to create a new store-level webhook subscription.

*This model accepts additional fields of type array.*

## Structure

`WebhookCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggers` | [`string(WebhookTrigger)[]`](../../doc/models/webhook-trigger.md) | Required | List of event types that trigger this webhook. Must be non-empty and contain only events valid for the store level. | getTriggers(): array | setTriggers(array triggers): void |
| `url` | `string` | Required | The URL to POST webhook payloads to. | getUrl(): string | setUrl(string url): void |
| `authToken` | `?string` | Optional | Optional bearer token sent in the `Authorization` header of webhook requests. | getAuthToken(): ?string | setAuthToken(?string authToken): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\WebhookCreateRequestBuilder;
use UnivaPay\Models\WebhookTrigger;

$webhookCreateRequest = WebhookCreateRequestBuilder::init(
    [
        WebhookTrigger::CHARGE_FINISHED
    ],
    'https://example.com/webhooks/payments'
)
    ->authToken('my-secret-token')
    ->build();
```

