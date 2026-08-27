
# Subscription Terminate with Status

The status to transition the subscription to on the next payment date.

## Enumeration

`SubscriptionTerminateWithStatus`

## Fields

| Name |
|  --- |
| `SUSPENDED` |
| `CANCELED` |

## Example

```php
use UnivaPay\Models\SubscriptionTerminateWithStatus;

$subscriptionTerminateWithStatus = SubscriptionTerminateWithStatus::SUSPENDED;
```

