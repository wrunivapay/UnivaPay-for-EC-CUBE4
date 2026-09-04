
# Transaction Token List Item

Transaction token entry returned in list responses.

*This model accepts additional fields of type array.*

## Structure

`TransactionTokenListItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier. | getId(): ?string | setId(?string id): void |
| `storeId` | `?string` | Optional | Store identifier. | getStoreId(): ?string | setStoreId(?string storeId): void |
| `merchantName` | `?string` | Optional | Merchant display name. | getMerchantName(): ?string | setMerchantName(?string merchantName): void |
| `storeName` | `?string` | Optional | Store display name. | getStoreName(): ?string | setStoreName(?string storeName): void |
| `email` | `?string` | Optional | Customer email address. | getEmail(): ?string | setEmail(?string email): void |
| `paymentType` | `?string` | Optional | Payment method type. | getPaymentType(): ?string | setPaymentType(?string paymentType): void |
| `active` | `?bool` | Optional | Whether the resource is active. | getActive(): ?bool | setActive(?bool active): void |
| `mode` | `?string` | Optional | Processing mode for the resource. | getMode(): ?string | setMode(?string mode): void |
| `type` | `?string` | Optional | Type of the resource. | getType(): ?string | setType(?string type): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the resource was last updated. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `userData` | [`?TransactionTokenListItemUserData`](../../doc/models/transaction-token-list-item-user-data.md) | Optional | Transaction Token List Item User Data schema. | getUserData(): ?TransactionTokenListItemUserData | setUserData(?TransactionTokenListItemUserData userData): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionTokenListItemBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\TransactionTokenListItemUserDataBuilder;

$transactionTokenListItem = TransactionTokenListItemBuilder::init()
    ->id('2fe23e45-f95d-4c95-9963-739070096443')
    ->storeId('79e9504e-96d8-46ed-8d22-2e8b36238605')
    ->merchantName('Test Merchant')
    ->storeName('Tokyo Store')
    ->email('user@example.com')
    ->paymentType('card')
    ->active(true)
    ->mode('live')
    ->type('one_time')
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->userData(
        TransactionTokenListItemUserDataBuilder::init()
            ->cardholderName('TARO YAMADA')
            ->email('user@example.com')
            ->brand('visa')
            ->build()
    )
    ->build();
```

