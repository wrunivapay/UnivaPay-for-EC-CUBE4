
# Charge Event

Event type discriminator — `charge_updated` or `charge_finished`.

## Enumeration

`ChargeEvent`

## Fields

| Name |
|  --- |
| `CHARGE_UPDATED` |
| `CHARGE_FINISHED` |

## Example

```php
use UnivaPay\Models\ChargeEvent;

$chargeEvent = ChargeEvent::CHARGE_UPDATED;
```

