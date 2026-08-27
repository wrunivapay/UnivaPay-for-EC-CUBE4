
# Charge Updated

Fired whenever a charge transitions to a new status (e.g., `pending` → `awaiting`). The `data` field contains the full Charge object at the time of the event.

## Headers

This event's request contains the following headers.

| Name | Description |
|  --- | --- |
| Idempotency-Key | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| Content-Type |  |

## Payload Type

This event's request payload is of type [ChargeWebhookEvent](../../../../doc/models/charge-webhook-event.md).

## Payload Example

```json
{
  "id": "11ef0000-0000-4000-8000-000000000001",
  "event": "charge_updated",
  "data": {
    "id": "6efb4e5c-690a-40f3-a4f1-0e19c5f84e98",
    "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
    "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
    "transaction_token_type": "recurring",
    "subscription_id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
    "requested_amount": 1250,
    "requested_currency": "USD",
    "requested_amount_formatted": 12.5,
    "charged_amount": 1250,
    "charged_currency": "USD",
    "charged_amount_formatted": 12.5,
    "only_direct_currency": false,
    "status": "successful",
    "error": null,
    "mode": "test",
    "created_on": "2024-06-26T01:51:30.000000Z",
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
use UnivaPay\Events\Webhooks\ChargeHandler;
use UnivaPay\Models\ChargeWebhookEvent;

Route::post(
    '/webhooks',
    function (Request $request): Response {
        $result = ChargeHandler::parseEvent($request);

        if ($result instanceof ChargeWebhookEvent) {
            return response("Received an event of type ChargeWebhookEvent: $result");
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

