
# Bank Transfer Status Webhook Callback Extension

Bank-transfer-specific webhook payload extension.

*This model accepts additional fields of type array.*

## Structure

`BankTransferStatusWebhookCallbackExtension`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `data` | [`?BankTransferStatusData`](../../doc/models/bank-transfer-status-data.md) | Optional | Data payload for `bank_transfer_status_updated` webhook events. Contains the bank transfer extension fields inlined alongside amount and metadata. | getData(): ?BankTransferStatusData | setData(?BankTransferStatusData data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\BankTransferStatusWebhookCallbackExtensionBuilder;
use UnivaPay\Models\Builders\BankTransferStatusDataBuilder;
use UnivaPay\Models\BankTransferPaymentStatus;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\GenericMetadataBuilder;

$bankTransferStatusWebhookCallbackExtension = BankTransferStatusWebhookCallbackExtensionBuilder::init()
    ->data(
        BankTransferStatusDataBuilder::init()
            ->id('11ef0000-0000-4000-8000-000000000002')
            ->chargeId('11ef0000-0000-4000-8000-000000000001')
            ->paymentStatus(BankTransferPaymentStatus::EXACT)
            ->latestDepositDate(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
            ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
            ->latestDepositAmount(1000)
            ->balance(0)
            ->currency('JPY')
            ->amount(1000)
            ->amountDifference(0)
            ->tokenMetadata(
                GenericMetadataBuilder::init()
                    ->orderId('12345')
                    ->build()
            )
            ->chargeMetadata(
                GenericMetadataBuilder::init()
                    ->orderId('order_12345')
                    ->build()
            )
            ->build()
    )
    ->build();
```

