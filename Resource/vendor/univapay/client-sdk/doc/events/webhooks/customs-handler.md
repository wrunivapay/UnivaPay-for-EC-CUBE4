## Customs Handler

Customs declaration lifecycle events.

Events in this group are uniquely identified by the `event` field.

## Events

Events available in this group. Subscribe to receive webhook notifications when these events occur.

| Name | Description | Event Identifier |
|  --- | --- | --- |
| [customsDeclarationFinished](../../../doc/events/webhooks/customs/customs-declaration-finished.md) | Fired when a customs declaration associated with a charge reaches a terminal state. The `data` field contains the CustomsDeclaration resource returned by the backend formatter. | customs_declaration_finished |

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

