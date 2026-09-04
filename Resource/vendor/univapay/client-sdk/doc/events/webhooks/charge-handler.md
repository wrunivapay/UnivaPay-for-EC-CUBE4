## Charge Handler

Charge lifecycle events.

Events in this group are uniquely identified by the `event` field.

## Events

Events available in this group. Subscribe to receive webhook notifications when these events occur.

| Name | Description | Event Identifier |
|  --- | --- | --- |
| [chargeUpdated](../../../doc/events/webhooks/charge/charge-updated.md) | Fired whenever a charge transitions to a new status (e.g., `pending` → `awaiting`). The `data` field contains the full Charge object at the time of the event. | charge_updated |
| [chargeFinished](../../../doc/events/webhooks/charge/charge-finished.md) | Fired when a charge reaches a terminal status (`successful`, `failed`, `error`). The `data` field contains the full Charge object. | charge_finished |

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
        } elseif ($result instanceof ChargeWebhookEvent) {
            return response("Received an event of type ChargeWebhookEvent: $result");
        } elseif ($result instanceof UnknownEvent) {
            return response("Received an unknown event with payload: {$result->getData()}", 400);
        }
        return response("No event processed", 400);
    }
);
```

