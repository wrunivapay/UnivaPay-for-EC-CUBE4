
# Refund Webhook Callback Extension

Refund-specific webhook payload extension.

*This model accepts additional fields of type array.*

## Structure

`RefundWebhookCallbackExtension`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?Refund`](../../doc/models/refund.md) | Optional | Represents a refund issued against a charge. | getData(): ?Refund | setData(?Refund data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\RefundWebhookCallbackExtensionBuilder;
use UnivaPay\Models\Builders\RefundBuilder;
use UnivaPay\Models\RefundStatus;
use UnivaPay\Models\RefundReasonResponse;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Utils\DateTimeHelper;

$refundWebhookCallbackExtension = RefundWebhookCallbackExtensionBuilder::init()
    ->data(
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
                null
            )
            ->metadata(
                GenericMetadataBuilder::init()
                    ->orderId('order_12345')
                    ->build()
            )
            ->mode(ChargeMode::LIVE)
            ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
            ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:36:00.000000Z'))
            ->build()
    )
    ->build();
```

