<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Tests\Apis;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use UnivaPay\Apis\StoresApi;
use UnivaPay\Models;

class StoresApiTest extends BaseTestController
{
    /**
     * @var StoresApi StoresApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getStoresApi();
    }

    public function testListStores()
    {
        // Parameters for the API call
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;
        $shortId = 'st_01hxy9p8zw4d';
        $search = 'tokyo';

        // Perform API call
        $result = self::$controller->listStores($limit, $cursor, $cursorDirection, $shortId, $search)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"11ef0000-0000-4000-8000-000000000022","name":"Tokyo Store","m' .
                'erchant_name":"Example Merchant","created_on":"2026-04-09T07:35:50.000000Z"},{"' .
                'id":"11ef0000-0000-4000-8000-000000000023","name":"Osaka Store","merchant_name"' .
                ':"Example Merchant","created_on":"2026-04-10T09:12:30.000000Z"},{"id":"11ef0000' .
                '-0000-4000-8000-000000000024","name":"Online Store","merchant_name":"Example Me' .
                'rchant","created_on":"2026-04-12T14:45:05.000000Z"}],"has_more":false,"total_hi' .
                'ts":3}'
            )))
            ->assert();
    }

    public function testGetStore()
    {
        // Parameters for the API call
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

        // Perform API call
        $result = self::$controller->getStore($id)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef0000-0000-4000-8000-000000000022","name":"Tokyo Store","created_on"' .
                ':"2026-04-09T07:35:50.000000Z","configuration":{"percent_fee":3.6,"country":"JP' .
                '","language":"ja","minimum_charge_amounts":[{"amount":100,"currency":"JPY"}],"m' .
                'aximum_charge_amounts":[{"amount":100000,"currency":"JPY"}],"user_transactions_' .
                'configuration":{"enabled":true,"notify_customer":true,"notify_on_webhook_failur' .
                'e":true},"card_configuration":{"enabled":true,"debit_enabled":true,"prepaid_ena' .
                'bled":false,"three_ds_required":true},"online_configuration":{"enabled":true},"' .
                'bank_transfer_configuration":{"enabled":true,"match_amount":true,"expiration":"' .
                'P7D"},"qr_scan_configuration":{"enabled":true,"forbidden_qr_scan_gateways":["we' .
                'chat"]},"convenience_configuration":{"enabled":true,"expiration":"P3D"},"paidy_' .
                'configuration":{"enabled":false},"recurring_token_configuration":{"recurring_ty' .
                'pe":"infinite","charge_wait_period":"P7D","card_charge_cvv_confirmation":{"enab' .
                'led":false}},"security_configuration":{"card_charge_cooldown":"PT5M","subscript' .
                'ion_cooldown":"PT10M","restrict_ip_after_failed_charge":{"enabled":true,"count"' .
                ':5,"cooldown":"PT1H"},"refund_percent_limit":100,"confirmation_required":false,' .
                '"min_refund_threshold":100,"limit_refund_by_sales":{"enabled":true,"period":"mo' .
                'nthly","rolling_window":true}},"installments_configuration":{"enabled":true,"ca' .
                'rd_processor":{"revolving":true,"fixed_cycle":true},"supported_payment_types":[' .
                '"card"],"min_charge_amount":{"amount":3000,"currency":"JPY"},"max_payout_period' .
                '":"P12M","only_with_processor":true},"card_brand_percent_fees":{"visa":3.6,"mas' .
                'tercard":3.6,"jcb":3.8}}}'
            )))
            ->assert();
    }

    public function testCreateCustomerId()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $body = TestParam::object('{"customer_id":"local-customer-1902"}', Models\CreateCustomerIdRequest::class);

        // Perform API call
        $result = self::$controller->createCustomerId($storeId, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(
                KeysBodyMatcher::init(TestParam::object('{"customer_id":"8a3f1b8e-2c1a-4b7a-9c2e-6f6b6f6e2b10"}'))
            )
            ->assert();
    }
}
