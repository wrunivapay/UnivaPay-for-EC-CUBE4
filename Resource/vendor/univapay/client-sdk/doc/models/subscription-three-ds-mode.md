
# Subscription Three Ds Mode

3-D Secure authentication mode applied to the subscription's payments. `if_available` enforces 3DS only if credentials are available for the recurring token and it has not already completed 3DS. `provided` indicates externally supplied MPI authentication data was used.

## Enumeration

`SubscriptionThreeDsMode`

## Fields

| Name |
|  --- |
| `NORMAL` |
| `REQUIRE_` |
| `FORCE` |
| `SKIP` |
| `IF_AVAILABLE` |
| `PROVIDED` |

## Example

```php
use UnivaPay\Models\SubscriptionThreeDsMode;

$subscriptionThreeDsMode = SubscriptionThreeDsMode::IF_AVAILABLE;
```

