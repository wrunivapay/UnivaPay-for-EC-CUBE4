<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Tests\FrameworkIntegrations\Webhooks;

use Orchestra\Testbench\TestCase;

class ChargeHandlerIntegrationTest extends TestCase
{
    protected function defineRoutes($router): void
    {
        require __DIR__ . '/Apps/LaravelApp.php';
    }

    public function testChargeUpdatedEventReturn200()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"charge_updated","data":{"id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","transaction_token_type":"recurring","subscription_id":"11ef335e-9aa5-c54a-8313-7f9847da313a","requested_amount":1250,"requested_currency":"USD","requested_amount_formatted":12.5,"charged_amount":1250,"charged_currency":"USD","charged_amount_formatted":12.5,"only_direct_currency":false,"status":"successful","error":null,"mode":"test","created_on":"2024-06-26T01:51:30.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $dataArray = json_decode($payload, true);
        $response = $this->postJson('/webhooks', $dataArray);

        $response->assertStatus(200);
    }
}
