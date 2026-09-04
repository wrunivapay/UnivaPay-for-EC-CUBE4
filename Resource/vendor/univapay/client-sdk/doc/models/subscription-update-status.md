
# Subscription Update Status

Update the subscription status.  `suspended`: Pause the subscription.  `unpaid`: Resume a suspended subscription.

## Enumeration

`SubscriptionUpdateStatus`

## Fields

| Name |
|  --- |
| `SUSPENDED` |
| `UNPAID` |

## Example

```php
use UnivaPay\Models\SubscriptionUpdateStatus;

$subscriptionUpdateStatus = SubscriptionUpdateStatus::SUSPENDED;
```

