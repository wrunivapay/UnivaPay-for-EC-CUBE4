
# Bank Transfer Event

Event type discriminator — always `bank_transfer_status_updated` for this callback.

## Enumeration

`BankTransferEvent`

## Fields

| Name |
|  --- |
| `BANK_TRANSFER_STATUS_UPDATED` |

## Example

```php
use UnivaPay\Models\BankTransferEvent;

$bankTransferEvent = BankTransferEvent::BANK_TRANSFER_STATUS_UPDATED;
```

