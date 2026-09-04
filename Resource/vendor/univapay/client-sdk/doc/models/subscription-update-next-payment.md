
# Subscription Update Next Payment

Fields that can be updated on the next scheduled payment.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionUpdateNextPayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dueDate` | `?DateTime` | Optional | Next payment date (YYYY-MM-DD).  Note: Only available for merchants permitted to edit next payment dates. | getDueDate(): ?\DateTime | setDueDate(?\DateTime dueDate): void |
| `amount` | `?int` | Optional | Next payment amount. Not available for limited-cycle subscriptions.  Only available for permitted merchants.  This does not change subsequent cycle amounts. | getAmount(): ?int | setAmount(?int amount): void |
| `terminateWithStatus` | [`?string(SubscriptionTerminateWithStatus)`](../../doc/models/subscription-terminate-with-status.md) | Optional | Schedule a status transition on a payment's due date. Set to `suspended` or `canceled` to schedule termination. Send `null` to cancel a previously scheduled transition. | getTerminateWithStatus(): ?string | setTerminateWithStatus(?string terminateWithStatus): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionUpdateNextPaymentBuilder;

$subscriptionUpdateNextPayment = SubscriptionUpdateNextPaymentBuilder::init()->build();
```

