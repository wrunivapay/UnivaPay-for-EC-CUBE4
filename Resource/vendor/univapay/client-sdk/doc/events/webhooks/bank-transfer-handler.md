## Bank-Transfer Handler

Bank transfer status update events.

Events in this group are uniquely identified by the `event` field.

## Events

Events available in this group. Subscribe to receive webhook notifications when these events occur.

| Name | Description | Event Identifier |
|  --- | --- | --- |
| [bankTransferStatusUpdated](../../../doc/events/webhooks/bank_transfer/bank-transfer-status-updated.md) | Fired when the payment status of a bank transfer charge changes (e.g., when a deposit is received and matched against the expected amount). The `data` field contains a `BankTransferStatusData` object with the extension record, deposit amounts, and originating charge/token metadata. | bank_transfer_status_updated |

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

