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
use UnivaPay\Apis\CancelsApi;
use UnivaPay\Models;

class CancelsApiTest extends BaseTestController
{
    /**
     * @var CancelsApi CancelsApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getCancelsApi();
    }

    public function testListCancels()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listCancels($storeId, $chargeId, $limit, $cursor, $cursorDirection)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"a1b2c3d4-e5f6-7890-abcd-ef1234567890","charge_id":"6efb4e5c-6' .
                '90a-40f3-a4f1-0e19c5f84e98","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","' .
                'status":"successful","error":{},"metadata":{"order_id":"ORD-987"},"mode":"live"' .
                ',"created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:36:00.0' .
                '00000Z"},{"id":"b2c3d4e5-f6a7-8901-bcde-f23456789012","charge_id":"7fac5f6d-7a1' .
                'b-51e4-b5f2-1f2ad6f95fa9","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","st' .
                'atus":"successful","error":{},"metadata":{"order_id":"ORD-988"},"mode":"live","' .
                'created_on":"2026-04-10T10:00:00.000000Z","updated_on":"2026-04-10T10:00:12.000' .
                '000Z"},{"id":"c3d4e5f6-a7b8-9012-cdef-345678901234","charge_id":"80bd6a7e-8b2c-' .
                '62f5-c6a3-2a3be7a06aba","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","stat' .
                'us":"pending","error":{},"metadata":{},"mode":"live","created_on":"2026-04-11T1' .
                '4:22:08.000000Z","updated_on":"2026-04-11T14:22:08.000000Z"}],"has_more":false}' .
                ''
            )))
            ->assert();
    }

    public function testCreateCancel()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object('{"metadata":{"order_id":"ORD-987"}}', Models\CancelCreateRequest::class);

        // Perform API call
        $result = self::$controller->createCancel($storeId, $chargeId, $idempotencyKey, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"a1b2c3d4-e5f6-7890-abcd-ef1234567890","charge_id":"6efb4e5c-690a-40f3-a' .
                '4f1-0e19c5f84e98","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","status":"p' .
                'ending","error":null,"metadata":{},"mode":"live","created_on":"2026-04-09T07:35' .
                ':50.000000Z","updated_on":"2026-04-09T07:35:50.000000Z"}'
            )))
            ->assert();
    }

    public function testGetCancel()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $polling = false;

        // Perform API call
        $result = self::$controller->getCancel($storeId, $chargeId, $id, $polling)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"a1b2c3d4-e5f6-7890-abcd-ef1234567890","charge_id":"6efb4e5c-690a-40f3-a' .
                '4f1-0e19c5f84e98","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","status":"s' .
                'uccessful","error":null,"metadata":{},"mode":"live","created_on":"2026-04-09T07' .
                ':35:50.000000Z","updated_on":"2026-04-09T07:36:00.000000Z"}'
            )))
            ->assert();
    }

    public function testUpdateCancel()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $body = TestParam::object('{"metadata":{"order_id":"12345"}}', Models\CancelUpdateRequest::class);
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->updateCancel($storeId, $chargeId, $id, $body, $idempotencyKey)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"a1b2c3d4-e5f6-7890-abcd-ef1234567890","charge_id":"6efb4e5c-690a-40f3-a' .
                '4f1-0e19c5f84e98","store_id":"76cf4a64-02bc-4cb3-9a28-74622e5928a1","status":"s' .
                'uccessful","error":null,"metadata":{"order_id":"12345"},"mode":"live","created_' .
                'on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T08:00:00.000000Z"}'
            )))
            ->assert();
    }
}
