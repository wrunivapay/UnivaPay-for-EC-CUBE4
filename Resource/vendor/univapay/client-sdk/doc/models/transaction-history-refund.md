
# Transaction History Refund

A single refund issued against the charge this row describes.

*This model accepts additional fields of type array.*

## Structure

`TransactionHistoryRefund`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refundId` | `?string` | Optional | Unique identifier of the refund. | getRefundId(): ?string | setRefundId(?string refundId): void |
| `amount` | `?int` | Optional | Refunded amount, in the currency's minor unit. | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `amountFormatted` | `?float` | Optional | Refunded amount, formatted per the currency's display scale. | getAmountFormatted(): ?float | setAmountFormatted(?float amountFormatted): void |
| `status` | [`?string(TransactionHistoryRefundStatus)`](../../doc/models/transaction-history-refund-status.md) | Optional | Status of a single refund entry. | getStatus(): ?string | setStatus(?string status): void |
| `reason` | [`?string(TransactionHistoryRefundReason)`](../../doc/models/transaction-history-refund-reason.md) | Optional | Reason code for a refund. | getReason(): ?string | setReason(?string reason): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionHistoryRefundBuilder;
use UnivaPay\Models\TransactionHistoryRefundStatus;
use UnivaPay\Models\TransactionHistoryRefundReason;
use UnivaPay\ApiHelper;

$transactionHistoryRefund = TransactionHistoryRefundBuilder::init()
    ->refundId('11ef0000-0000-4000-8000-000000000010')
    ->amount(500)
    ->currency('JPY')
    ->amountFormatted(500)
    ->status(TransactionHistoryRefundStatus::SUCCESSFUL)
    ->reason(TransactionHistoryRefundReason::CUSTOMER_REQUEST)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

