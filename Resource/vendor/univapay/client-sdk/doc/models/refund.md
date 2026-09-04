
# Refund

Represents a refund issued against a charge.

*This model accepts additional fields of type array.*

## Structure

`Refund`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier. | getId(): ?string | setId(?string id): void |
| `storeId` | `?string` | Optional | Store identifier. | getStoreId(): ?string | setStoreId(?string storeId): void |
| `chargeId` | `?string` | Optional | Charge identifier. | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `status` | [`?string(RefundStatus)`](../../doc/models/refund-status.md) | Optional | Current status of the refund. `pending`: The refund has been created and is being processed. `successful`: The refund was processed successfully. `failed`: The refund was rejected by the gateway. `error`: An unexpected error occurred during processing. | getStatus(): ?string | setStatus(?string status): void |
| `amount` | `?int` | Optional | Refund amount in the smallest currency unit (e.g., cents for USD, yen for JPY). | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. Must match the charged currency. | getCurrency(): ?string | setCurrency(?string currency): void |
| `amountFormatted` | `?float` | Optional | Refund amount formatted for display. | getAmountFormatted(): ?float | setAmountFormatted(?float amountFormatted): void |
| `reason` | [`?string(RefundReasonResponse)`](../../doc/models/refund-reason-response.md) | Optional | Refund reason returned by the API, or `null` when unset. | getReason(): ?string | setReason(?string reason): void |
| `message` | `?string` | Optional | Optional free-text note about the refund. | getMessage(): ?string | setMessage(?string message): void |
| `error` | [`?PaymentError`](../../doc/models/payment-error.md) | Optional | Payment error details, or null if successful. | getError(): ?PaymentError | setError(?PaymentError error): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `mode` | [`?string(ChargeMode)`](../../doc/models/charge-mode.md) | Optional | Charge Mode schema. | getMode(): ?string | setMode(?string mode): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the resource was last updated. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\RefundBuilder;
use UnivaPay\Models\RefundStatus;
use UnivaPay\Models\RefundReasonResponse;
use UnivaPay\Models\Builders\PaymentErrorBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Utils\DateTimeHelper;

$refund = RefundBuilder::init()
    ->id('b4d9fea9-c9b3-4e76-a25d-b61f7e4821b6')
    ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
    ->chargeId('6efb4e5c-690a-40f3-a4f1-0e19c5f84e98')
    ->status(RefundStatus::PENDING)
    ->amount(1000)
    ->currency('JPY')
    ->amountFormatted(1000)
    ->reason(RefundReasonResponse::CUSTOMER_REQUEST)
    ->message('Customer returned item')
    ->error(
        PaymentErrorBuilder::init()
            ->code(301)
            ->message('Card number error.')
            ->detail('The provided card number failed validation.')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->univapayName('univapay-name8')
            ->univapayPhoneNumber('univapay-phone-number2')
            ->additionalProperty('exampleAdditionalProperty', 'String4')
            ->build()
    )
    ->mode(ChargeMode::LIVE)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:36:00Z'))
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

