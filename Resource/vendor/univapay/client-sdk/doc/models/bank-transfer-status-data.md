
# Bank Transfer Status Data

Data payload for `bank_transfer_status_updated` webhook events. Contains the bank transfer extension fields inlined alongside amount and metadata.

*This model accepts additional fields of type array.*

## Structure

`BankTransferStatusData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Bank transfer charge extension ID. | getId(): ?string | setId(?string id): void |
| `chargeId` | `?string` | Optional | ID of the associated charge. | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `paymentStatus` | [`?string(BankTransferPaymentStatus)`](../../doc/models/bank-transfer-payment-status.md) | Optional | Payment status of a bank transfer charge. | getPaymentStatus(): ?string | setPaymentStatus(?string paymentStatus): void |
| `latestDepositDate` | `?DateTime` | Optional | Date of the most recent deposit. | getLatestDepositDate(): ?\DateTime | setLatestDepositDate(?\DateTime latestDepositDate): void |
| `createdOn` | `?DateTime` | Optional | When the bank transfer extension record was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `latestDepositAmount` | `?int` | Optional | Amount of the most recent deposit in minor currency units. | getLatestDepositAmount(): ?int | setLatestDepositAmount(?int latestDepositAmount): void |
| `balance` | `?int` | Optional | Current outstanding balance in minor currency units. | getBalance(): ?int | setBalance(?int balance): void |
| `currency` | `?string` | Optional | ISO 4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `amount` | `?int` | Optional | Total charge amount in minor currency units. | getAmount(): ?int | setAmount(?int amount): void |
| `amountDifference` | `?int` | Optional | Difference between paid and expected amount (positive = over, negative = under). | getAmountDifference(): ?int | setAmountDifference(?int amountDifference): void |
| `tokenMetadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getTokenMetadata(): ?GenericMetadata | setTokenMetadata(?GenericMetadata tokenMetadata): void |
| `chargeMetadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getChargeMetadata(): ?GenericMetadata | setChargeMetadata(?GenericMetadata chargeMetadata): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\BankTransferStatusDataBuilder;
use UnivaPay\Models\BankTransferPaymentStatus;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\GenericMetadataBuilder;

$bankTransferStatusData = BankTransferStatusDataBuilder::init()
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
    ->build();
```

