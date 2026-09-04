
# Subscription Next Payment

Next scheduled payment details for a subscription.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionNextPayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier. | getId(): ?string | setId(?string id): void |
| `dueDate` | `?DateTime` | Optional | Scheduled due date. | getDueDate(): ?\DateTime | setDueDate(?\DateTime dueDate): void |
| `zoneId` | `?string` | Optional | IANA timezone identifier. | getZoneId(): ?string | setZoneId(?string zoneId): void |
| `amount` | `?int` | Optional | Amount in the smallest currency unit. | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `amountFormatted` | `?float` | Optional | Amount formatted for display. | getAmountFormatted(): ?float | setAmountFormatted(?float amountFormatted): void |
| `isPaid` | `?bool` | Optional | Whether the payment has been paid. | getIsPaid(): ?bool | setIsPaid(?bool isPaid): void |
| `isLastPayment` | `?bool` | Optional | Whether this is the final payment in the schedule. | getIsLastPayment(): ?bool | setIsLastPayment(?bool isLastPayment): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the resource was last updated. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `retryDate` | `?DateTime` | Optional | Scheduled retry date. | getRetryDate(): ?\DateTime | setRetryDate(?\DateTime retryDate): void |
| `terminateWithStatus` | [`?string(SubscriptionTerminateWithStatus)`](../../doc/models/subscription-terminate-with-status.md) | Optional | Schedule a status transition on a payment's due date. Set to `suspended` or `canceled` to schedule termination. Send `null` to cancel a previously scheduled transition. | getTerminateWithStatus(): ?string | setTerminateWithStatus(?string terminateWithStatus): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionNextPaymentBuilder;

$subscriptionNextPayment = SubscriptionNextPaymentBuilder::init()->build();
```

