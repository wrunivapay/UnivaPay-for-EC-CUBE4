
# Webhook

Represents a webhook subscription. Webhooks send event notifications to a specified URL when triggered by payment events.

*This model accepts additional fields of type array.*

## Structure

`Webhook`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier for the webhook. | getId(): ?string | setId(?string id): void |
| `storeId` | `?string` | Optional | ID of the store this webhook belongs to (null for merchant-level webhooks). | getStoreId(): ?string | setStoreId(?string storeId): void |
| `merchantId` | `?string` | Optional | ID of the merchant this webhook belongs to. | getMerchantId(): ?string | setMerchantId(?string merchantId): void |
| `triggers` | [`?(string(WebhookTrigger)[])`](../../doc/models/webhook-trigger.md) | Optional | List of event types that trigger this webhook. | getTriggers(): ?array | setTriggers(?array triggers): void |
| `url` | `?string` | Optional | The endpoint URL that receives webhook POST requests. | getUrl(): ?string | setUrl(?string url): void |
| `authToken` | `?string` | Optional | Optional bearer token included in the `Authorization` header of webhook requests. Used to authenticate the webhook receiver. | getAuthToken(): ?string | setAuthToken(?string authToken): void |
| `active` | `?bool` | Optional | Whether this webhook is currently active and receiving events. | getActive(): ?bool | setActive(?bool active): void |
| `isIntegration` | `?bool` | Optional | Admin-only flag. Indicates this webhook is used for platform integration purposes. Not settable by merchants. | getIsIntegration(): ?bool | setIsIntegration(?bool isIntegration): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the webhook was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the webhook was last updated. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\WebhookBuilder;
use UnivaPay\Models\WebhookTrigger;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$webhook = WebhookBuilder::init()
    ->id('d3e4f5a6-b7c8-9012-def0-123456789abc')
    ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
    ->merchantId('01234567-89ab-cdef-0123-456789abcdef')
    ->triggers(
        [
            WebhookTrigger::CHARGE_FINISHED,
            WebhookTrigger::REFUND_FINISHED
        ]
    )
    ->url('https://example.com/webhooks/payments')
    ->authToken('my-secret-token')
    ->active(true)
    ->isIntegration(false)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-01T00:00:00.000000Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-02T00:00:00.000000Z'))
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

