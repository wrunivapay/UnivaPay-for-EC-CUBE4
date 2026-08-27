
# Subscription Patch Payment Request

Request body for updating a scheduled payment. All fields are optional. Omitted fields are left unchanged.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionPatchPaymentRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dueDate` | `?DateTime` | Optional | New due date for this payment (YYYY-MM-DD).  Only available to merchants with permission to edit payment dates. | getDueDate(): ?\DateTime | setDueDate(?\DateTime dueDate): void |
| `isPaid` | `?bool` | Optional | Mark this payment as paid. Setting to `true` will trigger scheduling  of the next payment in the cycle. | getIsPaid(): ?bool | setIsPaid(?bool isPaid): void |
| `terminateWithStatus` | [`?string(SubscriptionTerminateWithStatus)`](../../doc/models/subscription-terminate-with-status.md) | Optional | Schedule a status transition on a payment's due date. Set to `suspended` or `canceled` to schedule termination. Send `null` to cancel a previously scheduled transition. | getTerminateWithStatus(): ?string | setTerminateWithStatus(?string terminateWithStatus): void |
| `retryInterval` | `?string` | Optional | ISO-8601 Duration override for the retry interval on a scheduled payment (for example `P3D`). Send `null` to clear. | getRetryInterval(): ?string | setRetryInterval(?string retryInterval): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionPatchPaymentRequestBuilder;
use UnivaPay\Utils\DateTimeHelper;

$subscriptionPatchPaymentRequest = SubscriptionPatchPaymentRequestBuilder::init()
    ->dueDate(DateTimeHelper::fromSimpleDate('2026-09-01'))
    ->isPaid(false)
    ->terminateWithStatus(null)
    ->retryInterval('P3D')
    ->build();
```

