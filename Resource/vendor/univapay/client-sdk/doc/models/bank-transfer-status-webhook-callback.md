
# Bank Transfer Status Webhook Callback

Webhook envelope whose `data` payload is a BankTransferStatusData resource.

*This model accepts additional fields of type array.*

## Structure

`BankTransferStatusWebhookCallback`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `event` | [`?string(BankTransferEvent)`](../../doc/models/bank-transfer-event.md) | Optional | Event type discriminator — always `bank_transfer_status_updated` for this callback. | getEvent(): ?string | setEvent(?string event): void |
| `id` | `string` | Required | Unique ID of this webhook delivery. | getId(): string | setId(string id): void |
| `createdOn` | `DateTime` | Required | Timestamp when the event was fired. | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `data` | [`?BankTransferStatusData`](../../doc/models/bank-transfer-status-data.md) | Optional | Data payload for `bank_transfer_status_updated` webhook events. Contains the bank transfer extension fields inlined alongside amount and metadata. | getData(): ?BankTransferStatusData | setData(?BankTransferStatusData data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\BankTransferStatusWebhookCallbackBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\BankTransferEvent;
use UnivaPay\Models\Builders\BankTransferStatusDataBuilder;
use UnivaPay\Models\BankTransferPaymentStatus;
use UnivaPay\Models\Builders\GenericMetadataBuilder;

$bankTransferStatusWebhookCallback = BankTransferStatusWebhookCallbackBuilder::init(
    '11ef0000-0000-4000-8000-000000000001',
    DateTimeHelper::fromRfc3339DateTimeRequired('2026-04-09T07:35:50.000000Z')
)
    ->event(BankTransferEvent::BANK_TRANSFER_STATUS_UPDATED)
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

