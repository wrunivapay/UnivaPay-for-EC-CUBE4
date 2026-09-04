
# Transaction Token Create Request Payment Type

Transaction Token Create Request Payment Type schema.

## Enumeration

`TransactionTokenCreateRequestPaymentType`

## Fields

| Name |
|  --- |
| `CARD` |
| `ONLINE` |
| `KONBINI` |
| `BANK_TRANSFER` |
| `QR_SCAN` |
| `QR_MERCHANT` |
| `PAIDY` |

## Example

```php
use UnivaPay\Models\TransactionTokenCreateRequestPaymentType;

$transactionTokenCreateRequestPaymentType = TransactionTokenCreateRequestPaymentType::QR_SCAN;
```

