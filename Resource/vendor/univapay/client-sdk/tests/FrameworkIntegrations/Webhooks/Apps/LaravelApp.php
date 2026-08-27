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
