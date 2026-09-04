
# Bank Transfer Status Updated

Fired when the payment status of a bank transfer charge changes (e.g., when a deposit is received and matched against the expected amount). The `data` field contains a `BankTransferStatusData` object with the extension record, deposit amounts, and originating charge/token metadata.

## Headers

This event's request contains the following headers.

| Name | Description |
|  --- | --- |
| Idempotency-Key | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| Content-Type |  |

## Payload Type

This event's request payload is of type [BankTransferStatusWebhookCallback](../../../../doc/models/bank-transfer-status-webhook-callback.md).

## Payload Example

```json
{
  "id": "11ef0000-0000-4000-8000-000000000001",
  "event": "bank_transfer_status_updated",
  "data": {
    "id": "11ef0000-0000-4000-8000-000000000002",
    "charge_id": "11ef0000-0000-4000-8000-000000000001",
    "payment_status": "exact",
    "latest_deposit_date": "2026-04-09T07:35:50.000000Z",
    "created_on": "2026-04-09T07:35:50.000000Z",
    "latest_deposit_amount": 1000,
    "balance": 0,
    "currency": "JPY",
    "amount": 1000,
    "amount_difference": 0,
    "token_metadata": {
      "order_id": "12345"
    },
    "charge_metadata": {
      "order_id": "order_12345"
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
use UnivaPay\Events\Webhooks\BankTransferHandler;
use UnivaPay\Models\BankTransferStatusWebhookCallback;

Route::post(
    '/webhooks',
    function (Request $request): Response {
        $result = BankTransferHandler::parseEvent($request);

        if ($result instanceof BankTransferStatusWebhookCallback) {
            return response("Received an event of type BankTransferStatusWebhookCallback: $result");
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

