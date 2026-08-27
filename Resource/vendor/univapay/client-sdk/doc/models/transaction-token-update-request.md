
# Transaction Token Update Request

Request payload for updating a transaction token.

*This model accepts additional fields of type array.*

## Structure

`TransactionTokenUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `email` | `?string` | Optional | Customer email address. | getEmail(): ?string | setEmail(?string email): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `data` | [`?TransactionTokenUpdateRequestData`](../../doc/models/transaction-token-update-request-data.md) | Optional | Transaction Token Update Request Data schema. | getData(): ?TransactionTokenUpdateRequestData | setData(?TransactionTokenUpdateRequestData data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionTokenUpdateRequestBuilder;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\Builders\TransactionTokenUpdateRequestDataBuilder;

$transactionTokenUpdateRequest = TransactionTokenUpdateRequestBuilder::init()
    ->email('new_email@test.com')
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->build()
    )
    ->data(
        TransactionTokenUpdateRequestDataBuilder::init()
            ->cvv('123')
            ->cardholder('TARO YAMADA')
            ->expMonth(12)
            ->expYear(2028)
            ->build()
    )
    ->build();
```

