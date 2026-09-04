
# Transaction History Charge Type

Whether the underlying charge was a normal charge or a CVV authorization.

## Enumeration

`TransactionHistoryChargeType`

## Fields

| Name |
|  --- |
| `NORMAL` |
| `CVV_AUTH` |

## Example

```php
use UnivaPay\Models\TransactionHistoryChargeType;

$transactionHistoryChargeType = TransactionHistoryChargeType::NORMAL;
```

