
# Cancel Event

Event type discriminator — always `cancel_finished` for this callback.

## Enumeration

`CancelEvent`

## Fields

| Name |
|  --- |
| `CANCEL_FINISHED` |

## Example

```php
use UnivaPay\Models\CancelEvent;

$cancelEvent = CancelEvent::CANCEL_FINISHED;
```

