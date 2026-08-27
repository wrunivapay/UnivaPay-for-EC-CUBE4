
# Charge Update Request

Request payload for updating charge metadata.

*This model accepts additional fields of type array.*

## Structure

`ChargeUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeUpdateRequestBuilder;
use UnivaPay\Models\Builders\GenericMetadataBuilder;

$chargeUpdateRequest = ChargeUpdateRequestBuilder::init()
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12347')
            ->build()
    )
    ->build();
```

