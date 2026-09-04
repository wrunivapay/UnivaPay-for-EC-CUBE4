
# Cancel Update Request

Request body for updating a cancel. Only `metadata` is settable by merchants. All fields are optional; omitted fields are left unchanged.

*This model accepts additional fields of type array.*

## Structure

`CancelUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CancelUpdateRequestBuilder;
use UnivaPay\Models\Builders\GenericMetadataBuilder;

$cancelUpdateRequest = CancelUpdateRequestBuilder::init()
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->build()
    )
    ->build();
```

