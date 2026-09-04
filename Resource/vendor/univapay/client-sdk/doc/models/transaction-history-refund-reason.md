
# Transaction History Refund Reason

Reason code for a refund.

## Enumeration

`TransactionHistoryRefundReason`

## Fields

| Name |
|  --- |
| `DUPLICATE` |
| `FRAUD` |
| `CUSTOMER_REQUEST` |
| `SYSTEM_FAILURE` |
| `CHARGEBACK` |
| `CHARGEBACK_FEE_EXEMPT` |
| `CHARGEBACK_REVERSE` |

## Example

```php
use UnivaPay\Models\TransactionHistoryRefundReason;

$transactionHistoryRefundReason = TransactionHistoryRefundReason::CHARGEBACK;
```

