
# Checkout Payment Type

Payment type identifier used throughout the checkout configuration.

## Enumeration

`CheckoutPaymentType`

## Fields

| Name |
|  --- |
| `CARD` |
| `QR_SCAN` |
| `QR_MERCHANT` |
| `KONBINI` |
| `APPLE_PAY` |
| `PAIDY` |
| `ONLINE` |
| `BANK_TRANSFER` |

## Example

```php
use UnivaPay\Models\CheckoutPaymentType;

$checkoutPaymentType = CheckoutPaymentType::APPLE_PAY;
```

