
# Refund Event

Event type discriminator — always `refund_finished` for this callback.

## Enumeration

`RefundEvent`

## Fields

| Name |
|  --- |
| `REFUND_FINISHED` |

## Example

```php
use UnivaPay\Models\RefundEvent;

$refundEvent = RefundEvent::REFUND_FINISHED;
```

