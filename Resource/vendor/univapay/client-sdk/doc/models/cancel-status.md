
# Cancel Status

Current status of the cancel operation.

## Enumeration

`CancelStatus`

## Fields

| Name |
|  --- |
| `PENDING` |
| `SUCCESSFUL` |
| `FAILED` |
| `ERROR` |

## Example

```php
use UnivaPay\Models\CancelStatus;

$cancelStatus = CancelStatus::PENDING;
```

