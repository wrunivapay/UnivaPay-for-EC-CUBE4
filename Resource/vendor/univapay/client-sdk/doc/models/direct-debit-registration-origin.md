
# Direct Debit Registration Origin

Where the bank account was registered from — `merchant_console` for the merchant dashboard, `anywhere` otherwise.

## Enumeration

`DirectDebitRegistrationOrigin`

## Fields

| Name |
|  --- |
| `ANYWHERE` |
| `MERCHANT_CONSOLE` |

## Example

```php
use UnivaPay\Models\DirectDebitRegistrationOrigin;

$directDebitRegistrationOrigin = DirectDebitRegistrationOrigin::ANYWHERE;
```

