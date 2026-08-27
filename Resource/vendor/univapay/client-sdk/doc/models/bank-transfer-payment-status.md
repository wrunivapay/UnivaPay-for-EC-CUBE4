
# Bank Transfer Payment Status

Payment status of a bank transfer charge.

## Enumeration

`BankTransferPaymentStatus`

## Fields

| Name |
|  --- |
| `UNPAID` |
| `INSUFFICIENT` |
| `EXACT` |
| `EXCEEDED` |

## Example

```php
use UnivaPay\Models\BankTransferPaymentStatus;

$bankTransferPaymentStatus = BankTransferPaymentStatus::EXACT;
```

