<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Events\Webhooks;

use Core\Utils\CoreHelper;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use UnivaPay\ApiHelper;
use UnivaPay\Events\UnknownEvent;
use UnivaPay\Models\CancelWebhookCallback;

class CancelHandler
{
    /**
     * Parse the payload of the incoming event's request.
     *
     * @param Request $request The incoming HTTP request to be parsed.
     *
     * @return CancelWebhookCallback|UnknownEvent The result of the event's payload parsing.
     */
    public static function parseEvent(Request $request)
    {
        $payload = CoreHelper::deserialize($request->getContent(), false);

        try {
            return ApiHelper::getJsonHelper()->mapTypes(
                $payload,
                'oneOf{event4}(CancelWebhookCallback{cancelFinished})'
            );
        } catch (Exception $_) {
            return UnknownEvent::init($payload);
        }
    }
}
