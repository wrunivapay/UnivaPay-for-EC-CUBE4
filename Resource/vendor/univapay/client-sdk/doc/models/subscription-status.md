
# Subscription Status

Subscription Status schema.

## Enumeration

`SubscriptionStatus`

## Fields

| Name |
|  --- |
| `UNVERIFIED` |
| `UNCONFIRMED` |
| `CANCELED` |
| `UNPAID` |
| `CURRENT` |
| `SUSPENDED` |
| `COMPLETED` |

## Example

```php
use UnivaPay\Models\SubscriptionStatus;

$subscriptionStatus = SubscriptionStatus::COMPLETED;
```

