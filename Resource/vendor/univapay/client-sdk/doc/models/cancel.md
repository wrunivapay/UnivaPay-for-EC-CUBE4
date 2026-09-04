
# Cancel

Represents a cancellation request for a charge.

*This model accepts additional fields of type array.*

## Structure

`Cancel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier for the cancel. | getId(): ?string | setId(?string id): void |
| `chargeId` | `?string` | Optional | ID of the charge this cancel is associated with. | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `storeId` | `?string` | Optional | ID of the store. | getStoreId(): ?string | setStoreId(?string storeId): void |
| `status` | [`?string(CancelStatus)`](../../doc/models/cancel-status.md) | Optional | Current status of the cancel operation. | getStatus(): ?string | setStatus(?string status): void |
| `error` | [`?PaymentError`](../../doc/models/payment-error.md) | Optional | Payment error details, or null if successful. | getError(): ?PaymentError | setError(?PaymentError error): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `mode` | [`?string(ChargeMode)`](../../doc/models/charge-mode.md) | Optional | Charge Mode schema. | getMode(): ?string | setMode(?string mode): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the cancel was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the cancel was last updated. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CancelBuilder;
use UnivaPay\Models\CancelStatus;
use UnivaPay\Models\Builders\PaymentErrorBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Utils\DateTimeHelper;

$cancel = CancelBuilder::init()
    ->id('a1b2c3d4-e5f6-7890-abcd-ef1234567890')
    ->chargeId('6efb4e5c-690a-40f3-a4f1-0e19c5f84e98')
    ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
    ->status(CancelStatus::PENDING)
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
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:36:00.000000Z'))
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

