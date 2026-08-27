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
use UnivaPay\Events\Webhooks\BankTransferHandler;
use UnivaPay\Models\BankTransferStatusWebhookCallback;

class BankTransferHandlerTest extends TestCase
{
    public function testBankTransferStatusUpdated()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"bank_transfer_status_updated","data":{"id":"11ef0000-0000-4000-8000-000000000002","charge_id":"11ef0000-0000-4000-8000-000000000001","payment_status":"exact","latest_deposit_date":"2026-04-09T07:35:50.000000Z","created_on":"2026-04-09T07:35:50.000000Z","latest_deposit_amount":1000,"balance":0,"currency":"JPY","amount":1000,"amount_difference":0,"token_metadata":{"order_id":"12345"},"charge_metadata":{"order_id":"order_12345"},"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof BankTransferStatusWebhookCallback);
    }

    private function parsePayload(string $payload)
    {
        $request = new Request([], [], [], [], [], [], $payload);
        return BankTransferHandler::parseEvent($request);
    }
}
