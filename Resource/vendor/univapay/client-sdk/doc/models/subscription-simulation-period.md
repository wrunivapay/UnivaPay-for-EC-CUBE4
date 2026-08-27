
# Subscription Simulation Period

Billing frequency for the simulated schedule. Includes `bimonthly`, which is not offered on `SubscriptionPeriod` for live subscription creation.

## Enumeration

`SubscriptionSimulationPeriod`

## Fields

| Name |
|  --- |
| `DAILY` |
| `WEEKLY` |
| `BIWEEKLY` |
| `MONTHLY` |
| `BIMONTHLY` |
| `QUARTERLY` |
| `SEMIANNUALLY` |
| `ANNUALLY` |

## Example

```php
use UnivaPay\Models\SubscriptionSimulationPeriod;

$subscriptionSimulationPeriod = SubscriptionSimulationPeriod::BIWEEKLY;
```

