
# Terminate with Status

The status the subscription would transition to on this payment's due date, if a termination is scheduled. `null` when no termination applies.

## Enumeration

`TerminateWithStatus`

## Fields

| Name |
|  --- |
| `SUSPENDED` |
| `CANCELED` |

## Example

```php
use UnivaPay\Models\TerminateWithStatus;

$terminateWithStatus = TerminateWithStatus::SUSPENDED;
```

