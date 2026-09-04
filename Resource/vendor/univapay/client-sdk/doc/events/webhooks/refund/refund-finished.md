
# Refund Finished

Fired when a refund reaches a terminal status (`successful`, `failed`, `error`). The `data` field contains the full Refund object.

## Headers

This event's request contains the following headers.

| Name | Description |
|  --- | --- |
| Idempotency-Key | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| Content-Type |  |

## Payload Type

This event's request payload is of type [RefundWebhookCallback](../../../../doc/models/refund-webhook-callback.md).

## Payload Example

```json
{
  "id": "11ef0000-0000-4000-8000-000000000001",
  "event": "refund_finished",
  "data": {
    "id": "b4d9fea9-c9b3-4e76-a25d-b61f7e4821b6",
    "store_id": "76cf4a64-02bc-4cb3-9a28-74622e5928a1",
    "charge_id": "6efb4e5c-690a-40f3-a4f1-0e19c5f84e98",
    "status": "successful",
    "amount": 1000,
    "currency": "JPY",
    "amount_formatted": 1000,
    "reason": "customer_request",
    "message": "Customer returned item",
    "error": null,
    "metadata": {
      "order_id": "order_12345"
    },
    "mode": "live",
    "created_on": "2026-04-09T07:35:50.000000Z",
    "updated_on": "2026-04-09T07:36:00.000000Z",
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
use UnivaPay\Events\Webhooks\RefundHandler;
use UnivaPay\Models\RefundWebhookCallback;

Route::post(
    '/webhooks',
    function (Request $request): Response {
        $result = RefundHandler::parseEvent($request);

        if ($result instanceof RefundWebhookCallback) {
            return response("Received an event of type RefundWebhookCallback: $result");
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

