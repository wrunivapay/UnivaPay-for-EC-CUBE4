
# Subscription Suspended

Fired when a subscription is suspended (paused). The `data` field contains the full Subscription object.

## Headers

This event's request contains the following headers.

| Name | Description |
|  --- | --- |
| Idempotency-Key | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| Content-Type |  |

## Payload Type

This event's request payload is of type [SubscriptionWebhookEvent](../../../../doc/models/subscription-webhook-event.md).

## Payload Example

```json
{
  "id": "11ef0000-0000-4000-8000-000000000001",
  "event": "subscription_suspended",
  "data": {
    "id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
    "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
    "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
    "amount": 1250,
    "currency": "USD",
    "amount_formatted": 12.5,
    "schedule_settings": {
      "start_on": "2024-07-01",
      "zone_id": "Asia/Tokyo",
      "preserve_end_of_month": false,
      "retry_interval": "P7D",
      "termination_mode": "on_next_payment"
    },
    "only_direct_currency": false,
    "first_charge_authorization_only": false,
    "status": "current",
    "metadata": {
      "order_id": "12345"
    },
    "mode": "test",
    "created_on": "2024-06-26T01:51:28.627023Z",
    "period": "monthly",
    "exampleAdditionalProperty": {
      "key1": "val1",
      "key2": "val2"
    }
  },
  "created_on": "2026-04-09T07:35:50.000000Z",
  "exampleAdditionalProperty": {
    "key1": "val1",
    "key2": "val2"
  }
}
```

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
        } elseif ($result instanceof UnknownEvent) {
            return response("Received an unknown event with payload: {$result->getData()}", 400);
        }
        return response("No event processed", 400);
    }
);
```

## Accepted Server Responses

The server should responds with one of the following status codes:

| Status Code | Description |
|  --- | --- |
| 200 | Return 200 to acknowledge receipt of the event. Returns an empty JSON object. |

