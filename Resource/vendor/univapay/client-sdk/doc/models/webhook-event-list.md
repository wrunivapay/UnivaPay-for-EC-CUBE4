
# Webhook Event List

Paginated list of webhook events.

*This model accepts additional fields of type array.*

## Structure

`WebhookEventList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(WebhookEvent[])`](../../doc/models/webhook-event.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\WebhookEventListBuilder;
use UnivaPay\Models\Builders\WebhookEventBuilder;
use UnivaPay\Models\WebhookTrigger;
use UnivaPay\ApiHelper;
use UnivaPay\Utils\DateTimeHelper;

$webhookEventList = WebhookEventListBuilder::init()
    ->items(
        [
            WebhookEventBuilder::init()
                ->id('e1f2a3b4-c5d6-7890-efab-123456789cde')
                ->webhookId('d3e4f5a6-b7c8-9012-def0-123456789abc')
                ->event(WebhookTrigger::CHARGE_FINISHED)
                ->data(ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->successful(true)
                ->firedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:36:00.000000Z'))
                ->errorMessage(null)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            WebhookEventBuilder::init()
                ->id('f2a3b4c5-d6e7-8901-fabc-23456789cdef')
                ->webhookId('d3e4f5a6-b7c8-9012-def0-123456789abc')
                ->event(WebhookTrigger::REFUND_FINISHED)
                ->data(ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->successful(true)
                ->firedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T11:00:05.000000Z'))
                ->errorMessage(null)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T11:00:00.000000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

