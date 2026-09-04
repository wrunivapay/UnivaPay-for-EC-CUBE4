
# Customs Declaration Finished

Fired when a customs declaration associated with a charge reaches a terminal state. The `data` field contains the CustomsDeclaration resource returned by the backend formatter.

## Headers

This event's request contains the following headers.

| Name | Description |
|  --- | --- |
| Idempotency-Key | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| Content-Type |  |

## Payload Type

This event's request payload is of type [CustomsDeclarationWebhookCallback](../../../../doc/models/customs-declaration-webhook-callback.md).

## Payload Example

```json
{
  "id": "11ef0000-0000-4000-8000-000000000001",
  "event": "customs_declaration_finished",
  "data": {
    "id": "11ef0000-0000-4000-8000-000000000040",
    "charge_id": "11ef0000-0000-4000-8000-000000000001",
    "merchant_id": "11ef0000-0000-4000-8000-000000000020",
    "store_id": "11ef0000-0000-4000-8000-000000000022",
    "mode": "test",
    "gateway": "wechat_online",
    "declaration": {
      "customs": "TOKYO",
      "merchant_customs_no": "1234567890",
      "certificate_id": "AB1234567",
      "certificate_name": "TARO YAMADA"
    },
    "declaration_result": {
      "approving_authority": "TOKYO",
      "trade_id": "wx_trade_12345",
      "transaction_id": "wx_txn_12345",
      "charge_transaction_id": "wx_charge_12345"
    },
    "status": "successful",
    "created_on": "2026-04-09T07:35:50.000000Z",
    "platform_id": "00000550-0000-0000-0000-000000000000",
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
use UnivaPay\Events\Webhooks\CustomsHandler;
use UnivaPay\Models\CustomsDeclarationWebhookCallback;

Route::post(
    '/webhooks',
    function (Request $request): Response {
        $result = CustomsHandler::parseEvent($request);

        if ($result instanceof CustomsDeclarationWebhookCallback) {
            return response("Received an event of type CustomsDeclarationWebhookCallback: $result");
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

