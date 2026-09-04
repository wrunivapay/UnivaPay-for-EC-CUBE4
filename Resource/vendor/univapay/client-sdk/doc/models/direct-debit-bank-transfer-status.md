
# Direct Debit Bank Transfer Status

Transfer state. `awaiting` until the bank reports back, then `successful` or `failed`. Results are reflected days after the debit date, not immediately.

## Enumeration

`DirectDebitBankTransferStatus`

## Fields

| Name |
|  --- |
| `AWAITING` |
| `SUCCESSFUL` |
| `FAILED` |

## Example

```php
use UnivaPay\Models\DirectDebitBankTransferStatus;

$directDebitBankTransferStatus = DirectDebitBankTransferStatus::SUCCESSFUL;
```

