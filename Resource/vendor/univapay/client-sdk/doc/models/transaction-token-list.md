
# Transaction Token List

Paginated list of transaction tokens.

*This model accepts additional fields of type array.*

## Structure

`TransactionTokenList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(TransactionTokenListItem[])`](../../doc/models/transaction-token-list-item.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `totalHits` | `?int` | Optional | Total number of matching resources. | getTotalHits(): ?int | setTotalHits(?int totalHits): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionTokenListBuilder;
use UnivaPay\Models\Builders\TransactionTokenListItemBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\TransactionTokenListItemUserDataBuilder;
use UnivaPay\ApiHelper;

$transactionTokenList = TransactionTokenListBuilder::init()
    ->items(
        [
            TransactionTokenListItemBuilder::init()
                ->id('2fe23e45-f95d-4c95-9963-739070096443')
                ->storeId('79e9504e-96d8-46ed-8d22-2e8b36238605')
                ->merchantName('Test Merchant')
                ->storeName('Tokyo Store')
                ->email('taro@example.com')
                ->paymentType('card')
                ->active(true)
                ->mode('live')
                ->type('recurring')
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
                ->userData(
                    TransactionTokenListItemUserDataBuilder::init()
                        ->cardholderName('TARO YAMADA')
                        ->email('taro@example.com')
                        ->brand('brand0')
                        ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                        ->build()
                )
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            TransactionTokenListItemBuilder::init()
                ->id('3af34f56-a06e-4d06-aa74-84a181107554')
                ->storeId('8bfa615f-a7e9-47fe-9e33-3f9c47349716')
                ->merchantName('Test Merchant')
                ->storeName('Osaka Store')
                ->email('hanako@example.com')
                ->paymentType('card')
                ->active(true)
                ->mode('live')
                ->type('one_time')
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T10:20:11Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T10:20:11Z'))
                ->userData(
                    TransactionTokenListItemUserDataBuilder::init()
                        ->cardholderName('HANAKO SUZUKI')
                        ->email('hanako@example.com')
                        ->brand('brand0')
                        ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                        ->build()
                )
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->totalHits(2)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

