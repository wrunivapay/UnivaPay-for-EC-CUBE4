
# Token Created

Fired when a new transaction token is created. The `data` field contains the full TransactionToken object.

## Headers

This event's request contains the following headers.

| Name | Description |
|  --- | --- |
| Idempotency-Key | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| Content-Type |  |

## Payload Type

This event's request payload is of type [TokenWebhookEvent](../../../../doc/models/token-webhook-event.md).

## Payload Example

```json
{
  "id": "11ef0000-0000-4000-8000-000000000001",
  "event": "token_created",
  "data": {
    "id": "6426bbd2-17bd-41bf-883b-1fe970db48ee",
    "store_id": "fc264608-9a9e-495e-844e-a08129a81af4",
    "email": "test@univapay.com",
    "payment_type": "card",
    "active": true,
    "mode": "live",
    "type": "recurring",
    "confirmed": true,
    "metadata": {
      "customer_id": "cust_12345"
    },
    "created_on": "2026-04-09T07:35:50.000000Z",
    "updated_on": "2026-04-09T07:35:50.000000Z",
    "data": {
      "card": {
        "cardholder": "TARO YAMADA",
        "exp_month": 12,
        "exp_year": 2026,
        "brand": "visa",
        "last_four": "4242",
        "card_bin": "card_bin0",
        "exampleAdditionalProperty": {
          "key1": "val1",
          "key2": "val2"
        }
      },
      "cvv_authorize": {
        "enabled": true,
        "status": "current",
        "charge_id": null,
        "credentials_id": null,
        "currency": "JPY",
        "exampleAdditionalProperty": {
          "key1": "val1",
          "key2": "val2"
        }
      },
      "billing": null,
      "cvv_authorize_check": null,
      "three_ds": null,
      "exampleAdditionalProperty": {
        "key1": "val1",
        "key2": "val2"
      }
    },
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
use UnivaPay\Events\Webhooks\TokenHandler;
use UnivaPay\Models\TokenWebhookEvent;

Route::post(
    '/webhooks',
    function (Request $request): Response {
        $result = TokenHandler::parseEvent($request);

        if ($result instanceof TokenWebhookEvent) {
            return response("Received an event of type TokenWebhookEvent: $result");
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

