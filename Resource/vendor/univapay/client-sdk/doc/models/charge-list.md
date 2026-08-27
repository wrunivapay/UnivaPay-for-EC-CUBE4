
# Charge List

Paginated list of charges.

*This model accepts additional fields of type array.*

## Structure

`ChargeList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(Charge[])`](../../doc/models/charge.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `totalHits` | `?int` | Optional | Total number of matching resources. | getTotalHits(): ?int | setTotalHits(?int totalHits): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeListBuilder;
use UnivaPay\Models\Builders\ChargeBuilder;
use UnivaPay\Models\ChargeTransactionTokenType;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\ChargeStatus;
use UnivaPay\Models\Builders\PaymentErrorBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;

$chargeList = ChargeListBuilder::init()
    ->items(
        [
            ChargeBuilder::init()
                ->id('11ef32c4-9ea8-169c-a6c8-bfc29867a226')
                ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
                ->transactionTokenId('11ef32c4-9e89-0cac-bd63-17b9a26af61b')
                ->transactionTokenType(ChargeTransactionTokenType::ONE_TIME)
                ->subscriptionId('00002470-0000-0000-0000-000000000000')
                ->requestedAmount(1000)
                ->requestedCurrency('JPY')
                ->requestedAmountFormatted(1000)
                ->chargedAmount(1000)
                ->chargedCurrency('JPY')
                ->chargedAmountFormatted(1000)
                ->onlyDirectCurrency(false)
                ->status(ChargeStatus::SUCCESSFUL)
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
                        ->orderId('ORD-2001')
                        ->univapayName('univapay-name8')
                        ->univapayPhoneNumber('univapay-phone-number2')
                        ->additionalProperty('exampleAdditionalProperty', 'String4')
                        ->build()
                )
                ->mode(ChargeMode::TEST)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2024-06-25T07:29:12.854865Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            ChargeBuilder::init()
                ->id('11ef32c3-3cfe-3bc0-abed-0bb96f792078')
                ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
                ->transactionTokenId('11ef32c3-3cdd-df92-9dce-c346b9fdf088')
                ->transactionTokenType(ChargeTransactionTokenType::RECURRING)
                ->subscriptionId('00002470-0000-0000-0000-000000000000')
                ->requestedAmount(1250)
                ->requestedCurrency('USD')
                ->requestedAmountFormatted(12.5)
                ->chargedAmount(1250)
                ->chargedCurrency('USD')
                ->chargedAmountFormatted(12.5)
                ->onlyDirectCurrency(false)
                ->status(ChargeStatus::SUCCESSFUL)
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
                        ->orderId('ORD-2002')
                        ->univapayName('univapay-name8')
                        ->univapayPhoneNumber('univapay-phone-number2')
                        ->additionalProperty('exampleAdditionalProperty', 'String4')
                        ->build()
                )
                ->mode(ChargeMode::TEST)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2024-06-25T07:19:19.507637Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->totalHits(2)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

