
# Store List Item

Store row returned by store list queries.

*This model accepts additional fields of type array.*

## Structure

`StoreListItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Store identifier. | getId(): ?string | setId(?string id): void |
| `name` | `?string` | Optional | Store display name. | getName(): ?string | setName(?string name): void |
| `merchantName` | `?string` | Optional | Merchant display name associated with the store row. | getMerchantName(): ?string | setMerchantName(?string merchantName): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the store was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\StoreListItemBuilder;
use UnivaPay\Utils\DateTimeHelper;

$storeListItem = StoreListItemBuilder::init()
    ->id('11ef0000-0000-4000-8000-000000000022')
    ->name('Tokyo Store')
    ->merchantName('Example Merchant')
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

