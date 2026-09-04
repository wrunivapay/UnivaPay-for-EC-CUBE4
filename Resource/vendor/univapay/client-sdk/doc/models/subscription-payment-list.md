
# Subscription Payment List

Paginated list of subscription payments.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionPaymentList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(SubscriptionPayment[])`](../../doc/models/subscription-payment.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionPaymentListBuilder;
use UnivaPay\Models\Builders\SubscriptionPaymentBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$subscriptionPaymentList = SubscriptionPaymentListBuilder::init()
    ->items(
        [
            SubscriptionPaymentBuilder::init()
                ->id('11e89a0a-8cee-d660-b984-3fcaaed46e7c')
                ->dueDate(DateTimeHelper::fromSimpleDate('2018-08-21'))
                ->zoneId('Asia/Tokyo')
                ->amount(10000)
                ->currency('JPY')
                ->amountFormatted(10000)
                ->isPaid(false)
                ->isLastPayment(false)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2018-08-07T06:24:33.961256Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2018-08-07T06:24:33.961256Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            SubscriptionPaymentBuilder::init()
                ->id('11e89a0a-8cc5-2662-9460-2b14b1a601ba')
                ->dueDate(DateTimeHelper::fromSimpleDate('2018-08-07'))
                ->zoneId('Asia/Tokyo')
                ->amount(1000)
                ->currency('JPY')
                ->amountFormatted(1000)
                ->isPaid(true)
                ->isLastPayment(false)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2018-08-07T06:24:33.646223Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2018-08-07T06:24:33.887760Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

