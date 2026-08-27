## Cancel Handler

Cancel lifecycle events.

Events in this group are uniquely identified by the `event` field.

## Events

Events available in this group. Subscribe to receive webhook notifications when these events occur.

| Name | Description | Event Identifier |
|  --- | --- | --- |
| [cancelFinished](../../../doc/events/webhooks/cancel/cancel-finished.md) | Fired when a cancellation request reaches a terminal status (`successful`, `failed`, `error`). The `data` field contains the full Cancel object. | cancel_finished |

## SDK Usage Example

```php
<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use UnivaPay\Events\UnknownEvent;
use UnivaPay\Events\Webhooks\CancelHandler;
use UnivaPay\Models\CancelWebhookCallback;

Route::post(
    '/webhooks',
    function (Request $request): Response {
        $result = CancelHandler::parseEvent($request);

        if ($result instanceof CancelWebhookCallback) {
            return response("Received an event of type CancelWebhookCallback: $result");
        } elseif ($result instanceof UnknownEvent) {
            return response("Received an unknown event with payload: {$result->getData()}", 400);
        }
        return response("No event processed", 400);
    }
);
```

