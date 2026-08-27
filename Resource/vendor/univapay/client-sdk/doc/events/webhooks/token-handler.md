## Token Handler

Transaction token lifecycle events.

Events in this group are uniquely identified by the `event` field.

## Events

Events available in this group. Subscribe to receive webhook notifications when these events occur.

| Name | Description | Event Identifier |
|  --- | --- | --- |
| [tokenCreated](../../../doc/events/webhooks/token/token-created.md) | Fired when a new transaction token is created. The `data` field contains the full TransactionToken object. | token_created |
| [tokenUpdated](../../../doc/events/webhooks/token/token-updated.md) | Fired when a transaction token is updated (e.g., metadata change). The `data` field contains the full TransactionToken object. | token_updated |
| [tokenThreeDsUpdated](../../../doc/events/webhooks/token/token-three-ds-updated.md) | Fired when the 3-D Secure data associated with a token is updated. The `data` field contains the full TransactionToken object. | token_three_d_s_updated |
| [tokenCvvAuthUpdated](../../../doc/events/webhooks/token/token-cvv-auth-updated.md) | Fired when the CVV authorization result for a token is updated. The `data` field contains the full TransactionToken object. | token_cvv_auth_updated |
| [tokenCvvAuthCheckUpdated](../../../doc/events/webhooks/token/token-cvv-auth-check-updated.md) | Fired when the CVV auth check status for a token changes. The `data` field contains the full TransactionToken object. | token_cvv_auth_check_updated |
| [tokenReplaced](../../../doc/events/webhooks/token/token-replaced.md) | Fired when a transaction token is replaced by a new token (e.g., after card update). The `data` field contains the replacement TransactionToken object. | token_replaced |
| [recurringTokenDeleted](../../../doc/events/webhooks/token/recurring-token-deleted.md) | Fired when a recurring transaction token is deleted. The `data` field contains the deleted TransactionToken object. | recurring_token_deleted |

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
        } elseif ($result instanceof TokenWebhookEvent) {
            return response("Received an event of type TokenWebhookEvent: $result");
        } elseif ($result instanceof TokenWebhookEvent) {
            return response("Received an event of type TokenWebhookEvent: $result");
        } elseif ($result instanceof UnknownEvent) {
            return response("Received an unknown event with payload: {$result->getData()}", 400);
        }
        return response("No event processed", 400);
    }
);
```

