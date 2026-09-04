<?php

declare(strict_types=1);

/*
 * Custom test (not auto-generated): verifies APIMatic dynamic error messages.
 *
 * Forces Prism to return the 400 BadRequest example via the `Prefer: code=400`
 * header (injected by HttpCallbackCatcher).
 *
 * NOTE: this SDK is generated with ReturnCompleteHttpResponse, so the PHP
 * controllers use `returnApiResponse()` — they do NOT throw on error; instead
 * the error is deserialized into the ApiResponse result. The interpolated
 * ErrorTemplate message only materialises when an error is *thrown*, which PHP
 * does not do here, so this test verifies what is observable in PHP: the error
 * status, code, and the full typed `errors[]` array on the mapped result.
 */

namespace UnivaPay\Tests\Apis;

use Core\TestCase\TestParam;
use UnivaPay\Apis\ChargesApi;
use UnivaPay\Models;

class ErrorMessagesTest extends BaseTestController
{
    /**
     * @var ChargesApi ChargesApi instance
     */
    protected static $controller;

    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getChargesApi();
    }

    public function testDynamicErrorMessageAndErrorsArray()
    {
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object(
            '{"transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1000,"curr' .
            'ency":"JPY","metadata":{"order_id":"12345"},"redirect":{"endpoint":"https://test.ur' .
            'l/"}}',
            Models\ChargeCreateRequest::class
        );

        self::$callbackCatcher->setPreferHeader('code=400');
        try {
            $response = self::$controller->createCharge($idempotencyKey, $body);
        } finally {
            self::$callbackCatcher->setPreferHeader(null);
        }

        // The error response is returned on the ApiResponse (no exception thrown).
        $this->assertEquals(400, $response->getStatusCode());
        $this->assertTrue($response->isError());

        // Full error body — including the errors[] array — is accessible.
        $body = json_decode((string) $response->getBody(), true);
        $this->assertEquals('VALIDATION_ERROR', $body['code']);
        $this->assertArrayHasKey('errors', $body);
        $this->assertGreaterThanOrEqual(1, count($body['errors']));
        $this->assertEquals('INVALID_CARD_NUMBER', $body['errors'][0]['reason']);
    }
}
