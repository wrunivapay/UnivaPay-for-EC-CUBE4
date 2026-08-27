
# Charge Status

Charge Status schema.

## Enumeration

`ChargeStatus`

## Fields

| Name |
|  --- |
| `PENDING` |
| `AWAITING` |
| `AUTHORIZED` |
| `SUCCESSFUL` |
| `FAILED` |
| `ERROR` |
| `CANCELED` |

## Example

```php
use UnivaPay\Models\ChargeStatus;

$chargeStatus = ChargeStatus::AWAITING;
```

