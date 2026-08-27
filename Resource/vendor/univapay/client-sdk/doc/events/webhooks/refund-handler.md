## Refund Handler

Refund lifecycle events.

Events in this group are uniquely identified by the `event` field.

## Events

Events available in this group. Subscribe to receive webhook notifications when these events occur.

| Name | Description | Event Identifier |
|  --- | --- | --- |
| [refundFinished](../../../doc/events/webhooks/refund/refund-finished.md) | Fired when a refund reaches a terminal status (`successful`, `failed`, `error`). The `data` field contains the full Refund object. | refund_finished |

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

