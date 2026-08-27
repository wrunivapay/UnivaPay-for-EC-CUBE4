
# Store List

Paginated store search result.

*This model accepts additional fields of type array.*

## Structure

`StoreList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(StoreListItem[])`](../../doc/models/store-list-item.md) | Optional | Store rows matching the current filter set. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether another page is available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `totalHits` | `?int` | Optional | Total number of matching stores when available. | getTotalHits(): ?int | setTotalHits(?int totalHits): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\StoreListBuilder;
use UnivaPay\Models\Builders\StoreListItemBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$storeList = StoreListBuilder::init()
    ->items(
        [
            StoreListItemBuilder::init()
                ->id('11ef0000-0000-4000-8000-000000000022')
                ->name('Tokyo Store')
                ->merchantName('Example Merchant')
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            StoreListItemBuilder::init()
                ->id('11ef0000-0000-4000-8000-000000000023')
                ->name('Osaka Store')
                ->merchantName('Example Merchant')
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T09:12:30.000000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->totalHits(2)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

