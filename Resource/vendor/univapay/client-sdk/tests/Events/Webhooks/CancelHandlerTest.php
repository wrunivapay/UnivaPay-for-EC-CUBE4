<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Tests\Events\Webhooks;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use UnivaPay\Events\Webhooks\CancelHandler;
use UnivaPay\Models\CancelWebhookCallback;

class CancelHandlerTest extends TestCase
{
    public function testCancelFinished()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"cancel_finished","data":{"id":"a1b2c3d4-e5f6-7890-abcd-ef1234567890","charge_id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","status":"successful","error":null,"metadata":{"order_id":"order_12345"},"mode":"live","created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:36:00.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof CancelWebhookCallback);
    }

    private function parsePayload(string $payload)
    {
        $request = new Request([], [], [], [], [], [], $payload);
        return CancelHandler::parseEvent($request);
    }
}
