
# Refund List

Paginated list of refunds.

*This model accepts additional fields of type array.*

## Structure

`RefundList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(Refund[])`](../../doc/models/refund.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `totalHits` | `?int` | Optional | Total number of matching resources. | getTotalHits(): ?int | setTotalHits(?int totalHits): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\RefundListBuilder;
use UnivaPay\Models\Builders\RefundBuilder;
use UnivaPay\Models\RefundStatus;
use UnivaPay\Models\RefundReasonResponse;
use UnivaPay\Models\Builders\PaymentErrorBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Utils\DateTimeHelper;

$refundList = RefundListBuilder::init()
    ->items(
        [
            RefundBuilder::init()
                ->id('b4d9fea9-c9b3-4e76-a25d-b61f7e4821b6')
                ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
                ->chargeId('6efb4e5c-690a-40f3-a4f1-0e19c5f84e98')
                ->status(RefundStatus::SUCCESSFUL)
                ->amount(1000)
                ->currency('JPY')
                ->amountFormatted(1000)
                ->reason(RefundReasonResponse::CUSTOMER_REQUEST)
                ->message('Customer returned item')
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
                        ->orderId('order_id0')
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
            RefundBuilder::init()
                ->id('c5e0afb0-dac4-5f87-b36e-c72f8f5932c7')
                ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
                ->chargeId('7fac5f6d-7a1b-51e4-b5f2-1f2ad6f95fa9')
                ->status(RefundStatus::PENDING)
                ->amount(2500)
                ->currency('JPY')
                ->amountFormatted(2500)
                ->reason(RefundReasonResponse::DUPLICATE)
                ->message('Duplicate charge')
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
                        ->orderId('ORD-1002')
                        ->univapayName('univapay-name8')
                        ->univapayPhoneNumber('univapay-phone-number2')
                        ->additionalProperty('exampleAdditionalProperty', 'String4')
                        ->build()
                )
                ->mode(ChargeMode::LIVE)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T10:00:00.000000Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T10:00:05.000000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->totalHits(2)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

