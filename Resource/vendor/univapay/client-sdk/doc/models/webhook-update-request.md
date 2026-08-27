
# Webhook Update Request

Request body for updating a webhook. All fields are optional. Omitted fields are left unchanged.

*This model accepts additional fields of type array.*

## Structure

`WebhookUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `triggers` | [`?(string(WebhookTrigger)[])`](../../doc/models/webhook-trigger.md) | Optional | Replace the trigger list. Must be non-empty if provided. | getTriggers(): ?array | setTriggers(?array triggers): void |
| `url` | `?string` | Optional | Update the webhook endpoint URL. | getUrl(): ?string | setUrl(?string url): void |
| `authToken` | `?string` | Optional | Update or clear the auth token. Send `null` to remove. | getAuthToken(): ?string | setAuthToken(?string authToken): void |
| `active` | `?bool` | Optional | Enable or disable the webhook. | getActive(): ?bool | setActive(?bool active): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\WebhookUpdateRequestBuilder;

$webhookUpdateRequest = WebhookUpdateRequestBuilder::init()
    ->active(false)
    ->build();
```

