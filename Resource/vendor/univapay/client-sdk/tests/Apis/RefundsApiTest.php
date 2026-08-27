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
use UnivaPay\Apis\RefundsApi;
use UnivaPay\Models;

class RefundsApiTest extends BaseTestController
{
    /**
     * @var RefundsApi RefundsApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getRefundsApi();
    }

    public function testListRefunds()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;
        $metadata = 'order_id: 12345';

        // Perform API call
        $result = self::$controller->listRefunds($storeId, $chargeId, $limit, $cursor, $cursorDirection, $metadata)
            ->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"b4d9fea9-c9b3-4e76-a25d-b61f7e4821b6","store_id":"76cf4a64-02' .
                'bc-4cb3-9a28-74622e5928a1","charge_id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","' .
                'status":"successful","amount":1000,"currency":"JPY","amount_formatted":1000,"re' .
                'ason":"customer_request","message":"Customer returned item","error":{},"metadat' .
                'a":{},"mode":"live","created_on":"2026-04-09T07:35:50.000000Z","updated_on":"20' .
                '26-04-09T07:36:00.000000Z"},{"id":"c5e0afb0-dac4-5f87-b36e-c72f8f5932c7","store' .
                '_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","charge_id":"7fac5f6d-7a1b-51e4-b5f' .
                '2-1f2ad6f95fa9","status":"pending","amount":2500,"currency":"JPY","amount_forma' .
                'tted":2500,"reason":"duplicate","message":"Duplicate charge","error":{},"metada' .
                'ta":{"order_id":"ORD-1002"},"mode":"live","created_on":"2026-04-10T10:00:00.000' .
                '000Z","updated_on":"2026-04-10T10:00:05.000000Z"},{"id":"d6f1bac1-ebd5-6098-c47' .
                'f-d83a906043d8","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","charge_id":"' .
                '80bd6a7e-8b2c-62f5-c6a3-2a3be7a06aba","status":"successful","amount":500,"curre' .
                'ncy":"JPY","amount_formatted":500,"reason":"fraud","message":"Fraudulent transa' .
                'ction reversed","error":{},"metadata":{},"mode":"live","created_on":"2026-04-11' .
                'T14:22:08.000000Z","updated_on":"2026-04-11T14:22:20.000000Z"}],"has_more":fals' .
                'e,"total_hits":3}'
            )))
            ->assert();
    }

    public function testCreateRefund()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $body = TestParam::object(
            '{"amount":1000,"currency":"JPY","reason":"customer_request"}',
            Models\RefundCreateRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->createRefund($storeId, $chargeId, $body, $idempotencyKey)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"b4d9fea9-c9b3-4e76-a25d-b61f7e4821b6","store_id":"76cf4a64-02bc-4cb3-9a' .
                '28-74622e5928a1","charge_id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","status":"p' .
                'ending","amount":1000,"currency":"JPY","amount_formatted":1000,"reason":"custom' .
                'er_request","message":"Customer returned item","error":null,"metadata":{},"mode' .
                '":"live","created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07' .
                ':35:50.000000Z"}'
            )))
            ->assert();
    }

    public function testGetRefund()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $polling = true;

        // Perform API call
        $result = self::$controller->getRefund($storeId, $chargeId, $id, $polling)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"b4d9fea9-c9b3-4e76-a25d-b61f7e4821b6","store_id":"76cf4a64-02bc-4cb3-9a' .
                '28-74622e5928a1","charge_id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","status":"s' .
                'uccessful","amount":1000,"currency":"JPY","amount_formatted":1000,"reason":"cus' .
                'tomer_request","message":"Customer returned item","error":null,"metadata":{},"m' .
                'ode":"live","created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09' .
                'T07:36:00.000000Z"}'
            )))
            ->assert();
    }

    public function testUpdateRefund()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $body = TestParam::object(
            '{"message":"Updated reason note","metadata":{"order_id":"12345"}}',
            Models\RefundUpdateRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->updateRefund($storeId, $chargeId, $id, $body, $idempotencyKey)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"b4d9fea9-c9b3-4e76-a25d-b61f7e4821b6","store_id":"76cf4a64-02bc-4cb3-9a' .
                '28-74622e5928a1","charge_id":"6efb4e5c-690a-40f3-a4f1-0e19c5f84e98","status":"s' .
                'uccessful","amount":1000,"currency":"JPY","amount_formatted":1000,"reason":"cus' .
                'tomer_request","message":"Updated reason note","error":null,"metadata":{"order_' .
                'id":"12345"},"mode":"live","created_on":"2026-04-09T07:35:50.000000Z","updated_' .
                'on":"2026-04-09T08:00:00.000000Z"}'
            )))
            ->assert();
    }
}
