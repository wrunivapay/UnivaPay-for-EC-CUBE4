
# Checkout Bank Transfer Match Amount

Deposit-matching policy applied to bank transfer payments.

## Enumeration

`CheckoutBankTransferMatchAmount`

## Fields

| Name |
|  --- |
| `EXACT` |
| `MAXIMUM` |
| `MINIMUM` |
| `DISABLED` |

## Example

```php
use UnivaPay\Models\CheckoutBankTransferMatchAmount;

$checkoutBankTransferMatchAmount = CheckoutBankTransferMatchAmount::MINIMUM;
```

