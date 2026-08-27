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
use UnivaPay\Events\Webhooks\SubscriptionHandler;
use UnivaPay\Models\SubscriptionWebhookEvent;

class SubscriptionHandlerTest extends TestCase
{
    public function testSubscriptionCreated()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"subscription_created","data":{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"start_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retry_interval":"P7D","termination_mode":"on_next_payment"},"only_direct_currency":false,"first_charge_authorization_only":false,"status":"current","metadata":{"order_id":"12345"},"mode":"test","created_on":"2024-06-26T01:51:28.627023Z","period":"monthly","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof SubscriptionWebhookEvent);
    }

    public function testSubscriptionPayment()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"subscription_payment","data":{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"start_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retry_interval":"P7D","termination_mode":"on_next_payment"},"only_direct_currency":false,"first_charge_authorization_only":false,"status":"current","metadata":{"order_id":"12345"},"mode":"test","created_on":"2024-06-26T01:51:28.627023Z","period":"monthly","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof SubscriptionWebhookEvent);
    }

    public function testSubscriptionCompleted()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"subscription_completed","data":{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"start_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retry_interval":"P7D","termination_mode":"on_next_payment"},"only_direct_currency":false,"first_charge_authorization_only":false,"status":"current","metadata":{"order_id":"12345"},"mode":"test","created_on":"2024-06-26T01:51:28.627023Z","period":"monthly","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof SubscriptionWebhookEvent);
    }

    public function testSubscriptionFailure()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"subscription_failure","data":{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"start_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retry_interval":"P7D","termination_mode":"on_next_payment"},"only_direct_currency":false,"first_charge_authorization_only":false,"status":"current","metadata":{"order_id":"12345"},"mode":"test","created_on":"2024-06-26T01:51:28.627023Z","period":"monthly","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof SubscriptionWebhookEvent);
    }

    public function testSubscriptionCanceled()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"subscription_canceled","data":{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"start_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retry_interval":"P7D","termination_mode":"on_next_payment"},"only_direct_currency":false,"first_charge_authorization_only":false,"status":"current","metadata":{"order_id":"12345"},"mode":"test","created_on":"2024-06-26T01:51:28.627023Z","period":"monthly","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof SubscriptionWebhookEvent);
    }

    public function testSubscriptionSuspended()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"subscription_suspended","data":{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"start_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retry_interval":"P7D","termination_mode":"on_next_payment"},"only_direct_currency":false,"first_charge_authorization_only":false,"status":"current","metadata":{"order_id":"12345"},"mode":"test","created_on":"2024-06-26T01:51:28.627023Z","period":"monthly","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof SubscriptionWebhookEvent);
    }

    private function parsePayload(string $payload)
    {
        $request = new Request([], [], [], [], [], [], $payload);
        return SubscriptionHandler::parseEvent($request);
    }
}
