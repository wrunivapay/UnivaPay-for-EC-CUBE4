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
use UnivaPay\Apis\SubscriptionsApi;
use UnivaPay\Models;

class SubscriptionsApiTest extends BaseTestController
{
    /**
     * @var SubscriptionsApi SubscriptionsApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getSubscriptionsApi();
    }

    public function testCreateSubscription()
    {
        // Parameters for the API call
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object(
            '{"transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1000,"curr' .
            'ency":"JPY","period":"monthly"}',
            Models\SubscriptionCreateRequest::class
        );

        // Perform API call
        $result = self::$controller->createSubscription($idempotencyKey, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec",' .
                '"amount":1250,"currency":"USD","amount_formatted":12.5,"initial_amount":1000,"i' .
                'nitial_amount_formatted":10.0,"subsequent_cycles_start":null,"schedule_settings' .
                '":{"start_on":"2024-06-26","zone_id":"Asia/Tokyo","preserve_end_of_month":false' .
                ',"retry_interval":"P7D","termination_mode":"immediate"},"only_direct_currency":' .
                'false,"first_charge_authorization_only":false,"status":"current","metadata":{"o' .
                'rder_id":"ORD-987"},"mode":"live","created_on":"2024-06-26T01:51:28.627023Z","t' .
                'hree_ds":{"mode":"normal","redirect_endpoint":null,"redirect_id":null},"period"' .
                ':"monthly","next_payment":{"id":"11ef3360-1f9a-c54a-8313-7f9847da313b","due_dat' .
                'e":"2024-07-26","zone_id":"Asia/Tokyo","amount":1250,"currency":"USD","amount_f' .
                'ormatted":12.5,"is_paid":false}}'
            )))
            ->assert();
    }

    public function testListAllSubscriptions()
    {
        // Parameters for the API call
        $search = 'order_id:12345';
        $status = Models\SubscriptionStatus::CURRENT;
        $mode = Models\ChargeMode::LIVE;
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listAllSubscriptions(
            $search,
            $status,
            $mode,
            $limit,
            $cursor,
            $cursorDirection
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"11ef3410-aaaa-4bcd-8e1f-1a2b3c4d5e60","store_id":"11edf541-c4' .
                '2d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef3413-dddd-4ef0-b142-4d5e' .
                '6f809193","amount":1250,"currency":"USD","amount_formatted":12.5,"status":"curr' .
                'ent","mode":"live","created_on":"2024-06-26T01:51:28.627023Z","three_ds":{"mode' .
                '":"normal","redirect_endpoint":null,"redirect_id":null},"schedule_settings":{"z' .
                'one_id":"Asia/Tokyo","retry_interval":"P7D","termination_mode":"immediate"},"su' .
                'bscription_plan":{"plan_type":"fixed_cycles","fixed_cycles":12},"merchant_name"' .
                ':"管理画面ガイド","store_name":"管理画面ガイド_TEST店舗","payment_type":"card","next_payment_da' .
                'te":"2024-07-26","user_data":{"type":"charge","cardholder_name":"taro yamada","' .
                'email":"taro@test.com","brand":"visa"}},{"id":"11ef3411-bbbb-4cde-9f20-2b3c4d5e' .
                '6f71","store_id":"22af6520-d53e-764d-9d4e-ef01b66fa6d1","transaction_token_id":' .
                '"11ef3414-eeee-4f01-c253-5e6f80919204","amount":3000,"currency":"JPY","amount_f' .
                'ormatted":3000,"status":"current","mode":"live","created_on":"2024-07-11T09:20:' .
                '00.627023Z","three_ds":{"mode":"normal","redirect_endpoint":null,"redirect_id":' .
                'null},"schedule_settings":{"zone_id":"Asia/Tokyo","retry_interval":"P7D","termi' .
                'nation_mode":"immediate"},"installment_plan":{"plan_type":"fixed_cycle_amount",' .
                '"fixed_cycles":null,"fixed_cycles_amount":30000},"merchant_name":"管理画面ガイド","sto' .
                're_name":"管理画面ガイド_Online店舗","payment_type":"card","next_payment_date":"2024-08-' .
                '10","user_data":{"type":"charge","cardholder_name":"hanako suzuki","email":"han' .
                'ako@test.com","brand":"mastercard"}},{"id":"11ef3412-cccc-4def-a031-3c4d5e6f808' .
                '2","store_id":"33af7631-e64f-875e-ae5f-f012c77fb7e2","transaction_token_id":"11' .
                'ef3415-ffff-4012-d364-6f8091920315","amount":9800,"currency":"JPY","amount_form' .
                'atted":9800,"status":"suspended","mode":"live","created_on":"2024-08-15T13:05:2' .
                '2.627023Z","three_ds":{"mode":"normal","redirect_endpoint":null,"redirect_id":n' .
                'ull},"schedule_settings":{"zone_id":"Asia/Tokyo","retry_interval":"P7D","termin' .
                'ation_mode":"on_next_payment"},"installment_plan":{"plan_type":"revolving","fix' .
                'ed_cycles":null,"fixed_cycles_amount":null},"merchant_name":"管理画面ガイド","store_na' .
                'me":"管理画面ガイド_Osaka店舗","payment_type":"card","next_payment_date":"2024-09-15","u' .
                'ser_data":{"type":"charge","cardholder_name":"jiro tanaka","email":"jiro@test.c' .
                'om","brand":"jcb"}}],"has_more":false,"total_hits":3}'
            )))
            ->assert();
    }

    public function testSimulateSubscriptionPlan()
    {
        // Parameters for the API call
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object(
            '{"amount":1000,"currency":"JPY","payment_type":"card","period":"monthly","schedule' .
            '_settings":{"zone_id":"Asia/Tokyo"}}',
            Models\SubscriptionSimulationRequest::class
        );

        // Perform API call
        $result = self::$controller->simulateSubscriptionPlan($idempotencyKey, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '[{"due_date":"2026-09-01","zone_id":"Asia/Tokyo","amount":1000,"currency":"JPY' .
                '","is_paid":false,"is_last_payment":false,"successful_payment_date":null,"termi' .
                'nate_with_status":null,"retry_interval":null},{"due_date":"2026-10-01","zone_id' .
                '":"Asia/Tokyo","amount":1000,"currency":"JPY","is_paid":false,"is_last_payment"' .
                ':true,"successful_payment_date":null,"terminate_with_status":null,"retry_interv' .
                'al":null}]'
            )))
            ->assert();
    }

    public function testListStoreSubscriptions()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $search = 'order_id:12345';
        $status = Models\SubscriptionStatus::CURRENT;
        $mode = Models\ChargeMode::LIVE;
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listStoreSubscriptions(
            $storeId,
            $search,
            $status,
            $mode,
            $limit,
            $cursor,
            $cursorDirection
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c4' .
                '2d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc2' .
                '7702eeec","amount":1250,"currency":"USD","amount_formatted":12.5,"status":"curr' .
                'ent","mode":"live","created_on":"2024-06-26T01:51:28.627023Z","three_ds":{"mode' .
                '":"normal","redirect_endpoint":null,"redirect_id":null},"schedule_settings":{"z' .
                'one_id":"Asia/Tokyo","retry_interval":"P7D","termination_mode":"immediate"},"su' .
                'bscription_plan":{"plan_type":"fixed_cycles","fixed_cycles":12},"merchant_name"' .
                ':"管理画面ガイド","store_name":"管理画面ガイド_TEST店舗","payment_type":"card","next_payment_da' .
                'te":"2024-07-26","user_data":{"type":"charge","cardholder_name":"taro yamada","' .
                'email":"test@test.com","brand":"visa"}},{"id":"11ef3401-1a2b-4c3d-8e4f-5a6b7c8d' .
                '9e0f","store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":' .
                '"11ef3402-2b3c-4d5e-9f60-6b7c8d9e0f11","amount":5000,"currency":"JPY","amount_f' .
                'ormatted":5000,"status":"current","mode":"live","created_on":"2024-07-01T10:00:' .
                '00.627023Z","three_ds":{"mode":"normal","redirect_endpoint":null,"redirect_id":' .
                'null},"schedule_settings":{"zone_id":"Asia/Tokyo","retry_interval":"P7D","termi' .
                'nation_mode":"immediate"},"merchant_name":"管理画面ガイド","store_name":"管理画面ガイド_TEST店' .
                '舗","payment_type":"card","next_payment_date":"2024-08-01","user_data":{"type":"' .
                'charge","cardholder_name":"hanako suzuki","email":"hanako@test.com","brand":"ma' .
                'stercard"}},{"id":"11ef3403-3c4d-5e6f-a071-7c8d9e0f1122","store_id":"11edf541-c' .
                '42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef3404-4d5e-6f70-b182-8d9' .
                'e0f112233","amount":9800,"currency":"JPY","amount_formatted":9800,"status":"sus' .
                'pended","mode":"live","created_on":"2024-08-15T13:05:22.627023Z","three_ds":{"m' .
                'ode":"normal","redirect_endpoint":null,"redirect_id":null},"schedule_settings":' .
                '{"zone_id":"Asia/Tokyo","retry_interval":"P7D","termination_mode":"on_next_paym' .
                'ent"},"installment_plan":{"plan_type":"revolving","fixed_cycles":null,"fixed_cy' .
                'cles_amount":null},"merchant_name":"管理画面ガイド","store_name":"管理画面ガイド_TEST店舗","pay' .
                'ment_type":"card","next_payment_date":"2024-09-15","user_data":{"type":"charge"' .
                ',"cardholder_name":"jiro tanaka","email":"jiro@test.com","brand":"jcb"}}],"has_' .
                'more":false,"total_hits":3}'
            )))
            ->assert();
    }

    public function testSimulateStoreSubscriptionPlan()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object(
            '{"amount":1000,"currency":"JPY","payment_type":"card","period":"monthly","schedule' .
            '_settings":{"zone_id":"Asia/Tokyo"}}',
            Models\SubscriptionSimulationRequest::class
        );

        // Perform API call
        $result = self::$controller->simulateStoreSubscriptionPlan($storeId, $idempotencyKey, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '[{"due_date":"2026-09-01","zone_id":"Asia/Tokyo","amount":1000,"currency":"JPY' .
                '","is_paid":false,"is_last_payment":false,"successful_payment_date":null,"termi' .
                'nate_with_status":null,"retry_interval":null},{"due_date":"2026-10-01","zone_id' .
                '":"Asia/Tokyo","amount":1000,"currency":"JPY","is_paid":false,"is_last_payment"' .
                ':true,"successful_payment_date":null,"terminate_with_status":null,"retry_interv' .
                'al":null}]'
            )))
            ->assert();
    }

    public function testGetSubscription()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = '11ef335e-9aa5-c54a-8313-7f9847da313a';
        $polling = true;

        // Perform API call
        $result = self::$controller->getSubscription($storeId, $id, $polling)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec",' .
                '"amount":1250,"currency":"USD","amount_formatted":12.5,"initial_amount":null,"i' .
                'nitial_amount_formatted":null,"subsequent_cycles_start":null,"schedule_settings' .
                '":{"start_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false' .
                ',"retry_interval":"P7D","termination_mode":"immediate"},"only_direct_currency":' .
                'false,"first_charge_capture_after":null,"first_charge_authorization_only":false' .
                ',"status":"current","metadata":{"order_id":"12345"},"mode":"test","created_on":' .
                '"2024-06-26T01:51:28.627023Z","three_ds":{"mode":"normal","redirect_endpoint":n' .
                'ull,"redirect_id":null},"period":"monthly","next_payment":{"id":"11ef335e-9ae2-' .
                '8322-8e79-e7ba4b56234e","due_date":"2024-07-26","zone_id":"Asia/Tokyo","amount"' .
                ':1250,"currency":"USD","amount_formatted":12.5,"is_paid":false,"is_last_payment' .
                '":false,"created_on":"2024-06-26T01:51:29.025129Z","updated_on":"2024-06-26T01:' .
                '51:29.025129Z","retry_date":null},"cycles_left":5,"subscription_plan":{"plan_ty' .
                'pe":"fixed_cycles","fixed_cycles":12},"amount_left":6250,"amount_left_formatted' .
                '":62.5}'
            )))
            ->assert();
    }

    public function testUpdateSubscription()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object(
            '{"metadata":{"order_id":"12345"},"schedule_settings":{"termination_mode":"on_next_payment"}}',
            Models\SubscriptionUpdateRequest::class
        );

        // Perform API call
        $result = self::$controller->updateSubscription($storeId, $id, $idempotencyKey, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef3362-3700-c54a-9baa-6f7e6527c9d9",' .
                '"amount":1250,"currency":"USD","amount_formatted":12.5,"initial_amount":null,"i' .
                'nitial_amount_formatted":null,"subsequent_cycles_start":null,"schedule_settings' .
                '":{"start_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false' .
                ',"retry_interval":"P7D","termination_mode":"on_next_payment"},"only_direct_curr' .
                'ency":false,"first_charge_capture_after":null,"first_charge_authorization_only"' .
                ':false,"status":"current","metadata":{"order_id":"12345"},"mode":"test","create' .
                'd_on":"2024-06-26T01:51:28.627023Z","three_ds":{"mode":"normal","redirect_endpo' .
                'int":null,"redirect_id":null},"period":"monthly","next_payment":{"id":"11ef335e' .
                '-9ae2-8322-8e79-e7ba4b56234e","due_date":"2030-01-01","zone_id":"Asia/Tokyo","a' .
                'mount":1250,"currency":"USD","amount_formatted":12.5,"is_paid":false,"is_last_p' .
                'ayment":false,"created_on":"2024-06-26T01:51:29.025129Z","updated_on":"2024-06-' .
                '26T01:51:29.025129Z","retry_date":null}}'
            )))
            ->assert();
    }

    public function testCancelSubscription()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

        // Perform API call
        $result = self::$controller->cancelSubscription($storeId, $id)->getResult();

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(204)->assert();
    }

    public function testListSubscriptionPayments()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listSubscriptionPayments(
            $storeId,
            $subscriptionId,
            $limit,
            $cursor,
            $cursorDirection
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"11e89a0a-8cee-d660-b984-3fcaaed46e7c","due_date":"2018-08-21"' .
                ',"zone_id":"Asia/Tokyo","amount":10000,"currency":"JPY","amount_formatted":1000' .
                '0,"is_paid":false,"is_last_payment":false,"created_on":"2018-08-07T06:24:33.961' .
                '256Z","updated_on":"2018-08-07T06:24:33.961256Z"},{"id":"11e89a0a-8cc5-2662-946' .
                '0-2b14b1a601ba","due_date":"2018-08-07","zone_id":"Asia/Tokyo","amount":1000,"c' .
                'urrency":"JPY","amount_formatted":1000,"is_paid":true,"is_last_payment":false,"' .
                'created_on":"2018-08-07T06:24:33.646223Z","updated_on":"2018-08-07T06:24:33.887' .
                '760Z"}],"has_more":false}'
            )))
            ->assert();
    }

    public function testGetSubscriptionPayment()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';
        $paymentId = '11e89a0a-8cee-d660-b984-3fcaaed46e7c';

        // Perform API call
        $result = self::$controller->getSubscriptionPayment($storeId, $subscriptionId, $paymentId)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11e89a0a-8cee-d660-b984-3fcaaed46e7c","due_date":"2018-08-21","zone_id"' .
                ':"Asia/Tokyo","amount":10000,"currency":"JPY","amount_formatted":10000,"is_paid' .
                '":false,"is_last_payment":false,"created_on":"2018-08-07T06:24:33.961256Z"}'
            )))
            ->assert();
    }

    public function testUpdateSubscriptionPayment()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';
        $paymentId = '11e89a0a-8cee-d660-b984-3fcaaed46e7c';
        $body = TestParam::object(
            '{"due_date":"2026-09-01","is_paid":false}',
            Models\SubscriptionPatchPaymentRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->updateSubscriptionPayment(
            $storeId,
            $subscriptionId,
            $paymentId,
            $body,
            $idempotencyKey
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11e89a0a-8cee-d660-b984-3fcaaed46e7c","due_date":"2026-09-01","zone_id"' .
                ':"Asia/Tokyo","amount":10000,"currency":"JPY","amount_formatted":10000,"is_paid' .
                '":false,"is_last_payment":false,"created_on":"2018-08-07T06:24:33.961256Z","upd' .
                'ated_on":"2026-04-22T06:00:00.000000Z"}'
            )))
            ->assert();
    }

    public function testGetSubscriptionLatestCharge()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';

        // Perform API call
        $result = self::$controller->getSubscriptionLatestCharge($storeId, $subscriptionId)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec",' .
                '"transaction_token_type":"recurring","subscription_id":"11ef335e-9aa5-c54a-8313' .
                '-7f9847da313a","requested_amount":1250,"requested_currency":"USD","requested_am' .
                'ount_formatted":12.5,"charged_amount":1250,"charged_currency":"USD","charged_am' .
                'ount_formatted":12.5,"only_direct_currency":false,"status":"successful","error"' .
                ':null,"mode":"test","created_on":"2024-06-26T01:51:30.000000Z"}'
            )))
            ->assert();
    }

    public function testListSubscriptionCharges()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listSubscriptionCharges(
            $merchantId,
            $storeId,
            $subscriptionId,
            $limit,
            $cursor,
            $cursorDirection
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","store_id":"11edf541-c4' .
                '2d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc2' .
                '7702eeec","transaction_token_type":"recurring","subscription_id":"11ef335e-9aa5' .
                '-c54a-8313-7f9847da313a","requested_amount":1250,"requested_currency":"USD","re' .
                'quested_amount_formatted":12.5,"charged_amount":1250,"charged_currency":"USD","' .
                'charged_amount_formatted":12.5,"only_direct_currency":false,"status":"successfu' .
                'l","error":{},"mode":"test","created_on":"2024-06-26T01:51:30.000000Z"}],"has_m' .
                'ore":false,"total_hits":1}'
            )))
            ->assert();
    }

    public function testListChargesForSubscriptionPayment()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';
        $paymentId = '11e89a0a-8cee-d660-b984-3fcaaed46e7c';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listChargesForSubscriptionPayment(
            $storeId,
            $subscriptionId,
            $paymentId,
            $limit,
            $cursor,
            $cursorDirection
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","store_id":"11edf541-c4' .
                '2d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc2' .
                '7702eeec","transaction_token_type":"recurring","subscription_id":"11ef335e-9aa5' .
                '-c54a-8313-7f9847da313a","requested_amount":1250,"requested_currency":"USD","re' .
                'quested_amount_formatted":12.5,"charged_amount":1250,"charged_currency":"USD","' .
                'charged_amount_formatted":12.5,"only_direct_currency":false,"status":"successfu' .
                'l","error":{},"mode":"test","created_on":"2024-06-26T01:51:30.000000Z"}],"has_m' .
                'ore":false,"total_hits":1}'
            )))
            ->assert();
    }

    public function testSuspendSubscription()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '11ef335e-9aa5-c54a-8313-7f9847da313a';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object(
            '{"schedule_settings":{"termination_mode":"on_next_payment"}}',
            Models\SubscriptionSuspendRequest::class
        );

        // Perform API call
        $result = self::$controller->suspendSubscription($storeId, $subscriptionId, $idempotencyKey, $body)
            ->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec",' .
                '"amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"st' .
                'art_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retr' .
                'y_interval":"P7D","termination_mode":"on_next_payment"},"status":"suspended","m' .
                'ode":"test","created_on":"2024-06-26T01:51:28.627023Z","three_ds":{"mode":"norm' .
                'al","redirect_endpoint":null,"redirect_id":null},"period":"monthly"}'
            )))
            ->assert();
    }

    public function testUnsuspendSubscription()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '11ef335e-9aa5-c54a-8313-7f9847da313a';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->unsuspendSubscription($storeId, $subscriptionId, $idempotencyKey)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec",' .
                '"amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"st' .
                'art_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retr' .
                'y_interval":"P7D","termination_mode":"immediate"},"status":"unpaid","mode":"tes' .
                't","created_on":"2024-06-26T01:51:28.627023Z","three_ds":{"mode":"normal","redi' .
                'rect_endpoint":null,"redirect_id":null},"period":"monthly"}'
            )))
            ->assert();
    }

    public function testUpdateSubscriptionToken()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $subscriptionId = '11ef335e-9aa5-c54a-8313-7f9847da313a';
        $body = TestParam::object(
            '{"transaction_token_id":"11ef3362-3700-c54a-9baa-6f7e6527c9d9"}',
            Models\SubscriptionPatchTokenRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->updateSubscriptionToken($storeId, $subscriptionId, $body, $idempotencyKey)
            ->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef335e-9aa5-c54a-8313-7f9847da313a","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef3362-3700-c54a-9baa-6f7e6527c9d9",' .
                '"amount":1250,"currency":"USD","amount_formatted":12.5,"schedule_settings":{"st' .
                'art_on":"2024-07-01","zone_id":"Asia/Tokyo","preserve_end_of_month":false,"retr' .
                'y_interval":"P7D","termination_mode":"immediate"},"status":"current","mode":"te' .
                'st","created_on":"2024-06-26T01:51:28.627023Z","three_ds":{"mode":"normal","red' .
                'irect_endpoint":null,"redirect_id":null},"period":"monthly"}'
            )))
            ->assert();
    }
}
