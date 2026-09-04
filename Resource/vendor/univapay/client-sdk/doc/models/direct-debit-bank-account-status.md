
# Direct Debit Bank Account Status

Bank account state (有効・無効・登録失敗). Only an `active` account can have transfers registered against it. `registration_failed` means the bank rejected the account details.

## Enumeration

`DirectDebitBankAccountStatus`

## Fields

| Name |
|  --- |
| `ACTIVE` |
| `INACTIVE` |
| `REGISTRATION_FAILED` |

## Example

```php
use UnivaPay\Models\DirectDebitBankAccountStatus;

$directDebitBankAccountStatus = DirectDebitBankAccountStatus::ACTIVE;
```

