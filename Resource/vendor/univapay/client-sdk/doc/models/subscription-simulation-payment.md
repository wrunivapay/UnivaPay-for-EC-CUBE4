
# Subscription Simulation Payment

A single scheduled payment produced by the subscription plan simulation.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionSimulationPayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dueDate` | `?DateTime` | Optional | Scheduled due date for this simulated payment (YYYY-MM-DD). | getDueDate(): ?\DateTime | setDueDate(?\DateTime dueDate): void |
| `zoneId` | `?string` | Optional | IANA timezone identifier used to resolve the due date. | getZoneId(): ?string | setZoneId(?string zoneId): void |
| `amount` | `?int` | Optional | Amount to be charged on this cycle, in the smallest currency unit.<br><br>**Constraints**: `>= 0` | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `isPaid` | `?bool` | Optional | Always `false` for simulated payments — no real payment has been made. | getIsPaid(): ?bool | setIsPaid(?bool isPaid): void |
| `isLastPayment` | `?bool` | Optional | Whether this is the final payment in the simulated schedule. | getIsLastPayment(): ?bool | setIsLastPayment(?bool isLastPayment): void |
| `successfulPaymentDate` | `?DateTime` | Optional | Always `null` for simulated payments — populated only once a real payment settles. | getSuccessfulPaymentDate(): ?\DateTime | setSuccessfulPaymentDate(?\DateTime successfulPaymentDate): void |
| `terminateWithStatus` | [`?string(TerminateWithStatus)`](../../doc/models/terminate-with-status.md) | Optional | The status the subscription would transition to on this payment's due date, if a termination is scheduled. `null` when no termination applies. | getTerminateWithStatus(): ?string | setTerminateWithStatus(?string terminateWithStatus): void |
| `retryInterval` | `?string` | Optional | ISO-8601 Duration for the retry interval applied if this payment fails (e.g., P5D). `null` if no retry interval is configured. | getRetryInterval(): ?string | setRetryInterval(?string retryInterval): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionSimulationPaymentBuilder;

$subscriptionSimulationPayment = SubscriptionSimulationPaymentBuilder::init()->build();
```

