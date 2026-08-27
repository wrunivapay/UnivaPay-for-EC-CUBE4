
# Transaction History Service Provider

The processor or service provider that handled the payment.

## Enumeration

`TransactionHistoryServiceProvider`

## Fields

| Name |
|  --- |
| `CREDIT` |
| `CONVENIENCE` |
| `BANK_TRANSFER` |
| `PAIDY` |
| `PAY_PAY` |
| `ALIPAY` |
| `WE_CHAT` |
| `DOCOMO` |
| `MERCARI` |
| `AU` |
| `RAKUTEN` |
| `BARTONG` |
| `JKOPAY` |
| `GINKO_PAY` |
| `AEON_PAY` |
| `EROMNET` |
| `TEST` |

## Example

```php
use UnivaPay\Models\TransactionHistoryServiceProvider;

$transactionHistoryServiceProvider = TransactionHistoryServiceProvider::MERCARI;
```

