
# Transaction Token Payment Type

Transaction Token Payment Type schema.

## Enumeration

`TransactionTokenPaymentType`

## Fields

| Name |
|  --- |
| `CARD` |
| `PAIDY` |
| `ONLINE` |
| `KONBINI` |
| `BANK_TRANSFER` |
| `QR_SCAN` |
| `QR_MERCHANT` |

## Example

```php
use UnivaPay\Models\TransactionTokenPaymentType;

$transactionTokenPaymentType = TransactionTokenPaymentType::CARD;
```

