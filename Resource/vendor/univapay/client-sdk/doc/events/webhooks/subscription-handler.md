## Subscription Handler

Subscription lifecycle events.

Events in this group are uniquely identified by the `event` field.

## Events

Events available in this group. Subscribe to receive webhook notifications when these events occur.

| Name | Description | Event Identifier |
|  --- | --- | --- |
| [subscriptionCreated](../../../doc/events/webhooks/subscription/subscription-created.md) | Fired when a new subscription is created and its first payment has been initiated. The `data` field contains the full Subscription object. | subscription_created |
| [subscriptionPayment](../../../doc/events/webhooks/subscription/subscription-payment.md) | Fired when a scheduled subscription payment is successfully processed. The `data` field contains the full Subscription object. | subscription_payment |
| [subscriptionCompleted](../../../doc/events/webhooks/subscription/subscription-completed.md) | Fired when a subscription completes all of its scheduled payments. The `data` field contains the full Subscription object. | subscription_completed |
| [subscriptionFailure](../../../doc/events/webhooks/subscription/subscription-failure.md) | Fired when a scheduled subscription payment fails. The `data` field contains the full Subscription object. | subscription_failure |
| [subscriptionCanceled](../../../doc/events/webhooks/subscription/subscription-canceled.md) | Fired when a subscription is cancelled before all payments complete. The `data` field contains the full Subscription object. | subscription_canceled |
| [subscriptionSuspended](../../../doc/events/webhooks/subscription/subscription-suspended.md) | Fired when a subscription is suspended (paused). The `data` field contains the full Subscription object. | subscription_suspended |

## SDK Usage Example

```php
<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use UnivaPay\Events\UnknownEvent;
use UnivaPay\Events\Webhooks\SubscriptionHandler;
use UnivaPay\Models\SubscriptionWebhookEvent;

Route::post(
    '/webhooks',
    function (Request $request): Response {
        $result = SubscriptionHandler::parseEvent($request);

        if ($result instanceof SubscriptionWebhookEvent) {
            return response("Received an event of type SubscriptionWebhookEvent: $result");
        } elseif ($result instanceof SubscriptionWebhookEvent) {
            return response("Received an event of type SubscriptionWebhookEvent: $result");
        } elseif ($result instanceof SubscriptionWebhookEvent) {
            return response("Received an event of type SubscriptionWebhookEvent: $result");
        } elseif ($result instanceof UnknownEvent) {
            return response("Received an unknown event with payload: {$result->getData()}", 400);
        }
        return response("No event processed", 400);
    }
);
```

