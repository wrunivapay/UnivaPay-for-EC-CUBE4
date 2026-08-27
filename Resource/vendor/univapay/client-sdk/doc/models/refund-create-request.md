
# Refund Create Request

Request body for creating a refund against a successful charge. Konbini and bank transfer charges cannot be refunded.

*This model accepts additional fields of type array.*

## Structure

`RefundCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `amount` | `int` | Required | Amount to refund in the smallest currency unit. Must be greater than 0 and not exceed the charged amount. Partial refunds are supported for most payment methods. | getAmount(): int | setAmount(int amount): void |
| `currency` | `string` | Required | ISO-4217 currency code. Must exactly match the currency of the original charge. | getCurrency(): string | setCurrency(string currency): void |
| `reason` | [`?string(RefundReasonRequest)`](../../doc/models/refund-reason-request.md) | Optional | The reason for the refund (merchant-settable values). `duplicate`: A duplicate charge was made. `fraud`: The charge is fraudulent. `customer_request`: The customer requested the refund. | getReason(): ?string | setReason(?string reason): void |
| `message` | `?string` | Optional | Optional free-text note about the reason for the refund. | getMessage(): ?string | setMessage(?string message): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\RefundCreateRequestBuilder;
use UnivaPay\Models\RefundReasonRequest;

$refundCreateRequest = RefundCreateRequestBuilder::init(
    1000,
    'JPY'
)
    ->reason(RefundReasonRequest::CUSTOMER_REQUEST)
    ->message('Customer returned item')
    ->build();
```

