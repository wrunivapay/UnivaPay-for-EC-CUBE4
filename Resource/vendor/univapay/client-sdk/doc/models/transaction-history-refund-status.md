
# Transaction History Refund Status

Status of a single refund entry.

## Enumeration

`TransactionHistoryRefundStatus`

## Fields

| Name |
|  --- |
| `PENDING` |
| `SUCCESSFUL` |
| `FAILED` |
| `ERROR` |

## Example

```php
use UnivaPay\Models\TransactionHistoryRefundStatus;

$transactionHistoryRefundStatus = TransactionHistoryRefundStatus::FAILED;
```

