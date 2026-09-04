
# Webhook List

Paginated list of webhooks.

*This model accepts additional fields of type array.*

## Structure

`WebhookList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(Webhook[])`](../../doc/models/webhook.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\WebhookListBuilder;
use UnivaPay\Models\Builders\WebhookBuilder;
use UnivaPay\Models\WebhookTrigger;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$webhookList = WebhookListBuilder::init()
    ->items(
        [
            WebhookBuilder::init()
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
                ->build(),
            WebhookBuilder::init()
                ->id('e4f5a6b7-c8d9-0123-ef01-23456789abcd')
                ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
                ->merchantId('01234567-89ab-cdef-0123-456789abcdef')
                ->triggers(
                    [
                        WebhookTrigger::SUBSCRIPTION_PAYMENT,
                        WebhookTrigger::SUBSCRIPTION_FAILURE
                    ]
                )
                ->url('https://example.com/webhooks/subscriptions')
                ->authToken(null)
                ->active(true)
                ->isIntegration(false)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-03T08:30:00.000000Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-03T08:30:00.000000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

