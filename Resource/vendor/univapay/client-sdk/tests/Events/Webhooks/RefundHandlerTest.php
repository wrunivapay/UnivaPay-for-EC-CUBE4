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
use UnivaPay\Events\Webhooks\RefundHandler;
use UnivaPay\Models\RefundWebhookCallback;

class RefundHandlerTest extends TestCase
{
    public function testRefundFinished()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"refund_finished","data":{"id":"b4d9fea9-c9b3-4e76-a25d-b61f7e4821b6","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","charge_id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","status":"successful","amount":1000,"currency":"JPY","amount_formatted":1000,"reason":"customer_request","message":"Customer returned item","error":null,"metadata":{"order_id":"order_12345"},"mode":"live","created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:36:00.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof RefundWebhookCallback);
    }

    private function parsePayload(string $payload)
    {
        $request = new Request([], [], [], [], [], [], $payload);
        return RefundHandler::parseEvent($request);
    }
}
