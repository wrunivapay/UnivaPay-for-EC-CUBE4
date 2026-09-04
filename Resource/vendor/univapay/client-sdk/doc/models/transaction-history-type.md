
# Transaction History Type

Whether this row represents a charge or a refund.

## Enumeration

`TransactionHistoryType`

## Fields

| Name |
|  --- |
| `CHARGE` |
| `REFUND` |

## Example

```php
use UnivaPay\Models\TransactionHistoryType;

$transactionHistoryType = TransactionHistoryType::CHARGE;
```

