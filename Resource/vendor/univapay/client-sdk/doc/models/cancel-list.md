
# Cancel List

Paginated list of cancels.

*This model accepts additional fields of type array.*

## Structure

`CancelList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(Cancel[])`](../../doc/models/cancel.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\CancelListBuilder;
use UnivaPay\Models\Builders\CancelBuilder;
use UnivaPay\Models\CancelStatus;
use UnivaPay\Models\Builders\PaymentErrorBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Utils\DateTimeHelper;

$cancelList = CancelListBuilder::init()
    ->items(
        [
            CancelBuilder::init()
                ->id('a1b2c3d4-e5f6-7890-abcd-ef1234567890')
                ->chargeId('6efb4e5c-690a-40f3-a4f1-0e19c5f84e98')
                ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
                ->status(CancelStatus::SUCCESSFUL)
                ->error(
                    PaymentErrorBuilder::init()
                        ->code(24)
                        ->message('message4')
                        ->detail('detail0')
                        ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                        ->build()
                )
                ->metadata(
                    GenericMetadataBuilder::init()
                        ->orderId('ORD-987')
                        ->univapayName('univapay-name8')
                        ->univapayPhoneNumber('univapay-phone-number2')
                        ->additionalProperty('exampleAdditionalProperty', 'String4')
                        ->build()
                )
                ->mode(ChargeMode::LIVE)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:36:00.000000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            CancelBuilder::init()
                ->id('b2c3d4e5-f6a7-8901-bcde-f23456789012')
                ->chargeId('7fac5f6d-7a1b-51e4-b5f2-1f2ad6f95fa9')
                ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
                ->status(CancelStatus::SUCCESSFUL)
                ->error(
                    PaymentErrorBuilder::init()
                        ->code(24)
                        ->message('message4')
                        ->detail('detail0')
                        ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                        ->build()
                )
                ->metadata(
                    GenericMetadataBuilder::init()
                        ->orderId('ORD-988')
                        ->univapayName('univapay-name8')
                        ->univapayPhoneNumber('univapay-phone-number2')
                        ->additionalProperty('exampleAdditionalProperty', 'String4')
                        ->build()
                )
                ->mode(ChargeMode::LIVE)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T10:00:00.000000Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T10:00:12.000000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

