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
use UnivaPay\Apis\WebhooksApi;
use UnivaPay\Models;

class WebhooksApiTest extends BaseTestController
{
    /**
     * @var WebhooksApi WebhooksApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getWebhooksApi();
    }

    public function testListWebhooks()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;
        $active = true;

        // Perform API call
        $result = self::$controller->listWebhooks($storeId, $limit, $cursor, $cursorDirection, $active)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"d3e4f5a6-b7c8-9012-def0-123456789abc","store_id":"76cf4a64-02' .
                'bc-4cb3-9a28-74622e5928a1","merchant_id":"01234567-89ab-cdef-0123-456789abcdef"' .
                ',"triggers":["charge_finished","refund_finished"],"url":"https://example.com/we' .
                'bhooks/payments","auth_token":"my-secret-token","active":true,"is_integration":' .
                'false,"created_on":"2026-04-01T00:00:00.000000Z","updated_on":"2026-04-02T00:00' .
                ':00.000000Z"},{"id":"e4f5a6b7-c8d9-0123-ef01-23456789abcd","store_id":"76cf4a64' .
                '-02bc-4cb3-9a28-74622e5928a1","merchant_id":"01234567-89ab-cdef-0123-456789abcd' .
                'ef","triggers":["subscription_payment","subscription_failure"],"url":"https://e' .
                'xample.com/webhooks/subscriptions","auth_token":null,"active":true,"is_integrat' .
                'ion":false,"created_on":"2026-04-03T08:30:00.000000Z","updated_on":"2026-04-03T' .
                '08:30:00.000000Z"},{"id":"f5a6b7c8-d9e0-1234-f012-3456789abcde","store_id":"76c' .
                'f4a64-02bc-4cb3-9a28-74622e5928a1","merchant_id":"01234567-89ab-cdef-0123-45678' .
                '9abcdef","triggers":["cancel_finished"],"url":"https://example.com/webhooks/can' .
                'cels","auth_token":"legacy-token","active":false,"is_integration":false,"create' .
                'd_on":"2026-03-20T12:00:00.000000Z","updated_on":"2026-04-05T09:15:00.000000Z"}' .
                '],"has_more":false}'
            )))
            ->assert();
    }

    public function testCreateWebhook()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $body = TestParam::object(
            '{"triggers":["charge_finished"],"url":"https://example.com/webhooks/payments","aut' .
            'h_token":"my-secret-token"}',
            Models\WebhookCreateRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->createWebhook($storeId, $body, $idempotencyKey)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"d3e4f5a6-b7c8-9012-def0-123456789abc","store_id":"76cf4a64-02bc-4cb3-9a' .
                '28-74622e5928a1","merchant_id":"01234567-89ab-cdef-0123-456789abcdef","triggers' .
                '":["charge_finished","refund_finished"],"url":"https://example.com/webhooks/pay' .
                'ments","auth_token":"my-secret-token","active":true,"is_integration":false,"cre' .
                'ated_on":"2026-04-01T00:00:00.000000Z","updated_on":"2026-04-01T00:00:00.000000' .
                'Z"}'
            )))
            ->assert();
    }

    public function testGetWebhook()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

        // Perform API call
        $result = self::$controller->getWebhook($storeId, $id)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"d3e4f5a6-b7c8-9012-def0-123456789abc","store_id":"76cf4a64-02bc-4cb3-9a' .
                '28-74622e5928a1","merchant_id":"01234567-89ab-cdef-0123-456789abcdef","triggers' .
                '":["charge_finished"],"url":"https://example.com/webhooks/payments","active":tr' .
                'ue}'
            )))
            ->assert();
    }

    public function testUpdateWebhook()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $body = TestParam::object('{"active":false}', Models\WebhookUpdateRequest::class);
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->updateWebhook($storeId, $id, $body, $idempotencyKey)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"d3e4f5a6-b7c8-9012-def0-123456789abc","store_id":"76cf4a64-02bc-4cb3-9a' .
                '28-74622e5928a1","merchant_id":"01234567-89ab-cdef-0123-456789abcdef","triggers' .
                '":["charge_finished"],"url":"https://example.com/webhooks/v2","active":false}'
            )))
            ->assert();
    }

    public function testDeleteWebhook()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

        // Perform API call
        $result = self::$controller->deleteWebhook($storeId, $id)->getResult();

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(204)->assert();
    }

    public function testListWebhookEvents()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listWebhookEvents($storeId, $id, $limit, $cursor, $cursorDirection)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"e1f2a3b4-c5d6-7890-efab-123456789cde","webhook_id":"d3e4f5a6-' .
                'b7c8-9012-def0-123456789abc","event":"charge_finished","successful":true,"fired' .
                '_on":"2026-04-09T07:36:00.000000Z","error_message":null,"created_on":"2026-04-0' .
                '9T07:35:50.000000Z"},{"id":"f2a3b4c5-d6e7-8901-fabc-23456789cdef","webhook_id":' .
                '"d3e4f5a6-b7c8-9012-def0-123456789abc","event":"refund_finished","successful":t' .
                'rue,"fired_on":"2026-04-10T11:00:05.000000Z","error_message":null,"created_on":' .
                '"2026-04-10T11:00:00.000000Z"},{"id":"a3b4c5d6-e7f8-9012-abcd-3456789cdef0","we' .
                'bhook_id":"d3e4f5a6-b7c8-9012-def0-123456789abc","event":"cancel_finished","suc' .
                'cessful":false,"fired_on":"2026-04-11T15:30:10.000000Z","error_message":"Connec' .
                'tion timed out after 10s","created_on":"2026-04-11T15:30:00.000000Z"}],"has_mor' .
                'e":false}'
            )))
            ->assert();
    }

    public function testRedeliverWebhookEvent()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $eventId = 'e1f2a3b4-c5d6-7890-efab-123456789cde';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->redeliverWebhookEvent($storeId, $id, $eventId, $idempotencyKey)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(202)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object('{}')))
            ->assert();
    }
}
