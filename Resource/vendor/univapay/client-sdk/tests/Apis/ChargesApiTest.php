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
use UnivaPay\Apis\ChargesApi;
use UnivaPay\Models;

class ChargesApiTest extends BaseTestController
{
    /**
     * @var ChargesApi ChargesApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getChargesApi();
    }

    public function testCreateCharge()
    {
        // Parameters for the API call
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object(
            '{"transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec","amount":1000,"curr' .
            'ency":"JPY","metadata":{"order_id":"12345"},"redirect":{"endpoint":"https://test.ur' .
            'l/"}}',
            Models\ChargeCreateRequest::class
        );

        // Perform API call
        $result = self::$controller->createCharge($idempotencyKey, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef32c2-4010-a312-aaff-4b63e4d5f92d","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec",' .
                '"transaction_token_type":"recurring","subscription_id":null,"merchant_transacti' .
                'on_id":null,"requested_amount":1000,"requested_currency":"JPY","requested_amoun' .
                't_formatted":1000,"charged_amount":null,"charged_currency":null,"charged_amount' .
                '_formatted":null,"fee_amount":null,"fee_currency":null,"fee_amount_formatted":n' .
                'ull,"only_direct_currency":false,"capture_at":null,"descriptor":null,"descripto' .
                'r_phone_number":null,"status":"pending","error":null,"metadata":{"order_id":"12' .
                '345"},"mode":"test","created_on":"2024-06-25T07:12:15.16452Z","redirect":{"endp' .
                'oint":"https://test.url/","redirect_id":"11ef32c2-40cf-f772-8325-1798abb1110d"}' .
                '}'
            )))
            ->assert();
    }

    public function testListAllCharges()
    {
        // Parameters for the API call
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;
        $lastFour = '4242';
        $name = 'TARO YAMADA';
        $expMonth = 12;
        $expYear = 2026;
        $from = '2026-04-01T00:00:00Z';
        $to = '2026-04-30T23:59:59.999000Z';
        $email = 'user@example.com';
        $phone = '+8108012341234';
        $amountFrom = 1000;
        $amountTo = 5000;
        $currency = 'JPY';
        $mode = Models\ModeQuery::LIVE;
        $metadata = 'order_id: 12345';
        $transactionTokenId =
            'f33b673e-564c-4645-ae17-ca03846a86b7';

        // Perform API call
        $result = self::$controller->listAllCharges(
            $limit,
            $cursor,
            $cursorDirection,
            $lastFour,
            $name,
            $expMonth,
            $expYear,
            $from,
            $to,
            $email,
            $phone,
            $amountFrom,
            $amountTo,
            $currency,
            $mode,
            $metadata,
            $transactionTokenId
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"11ef3500-1a2b-4c3d-8e4f-a1b2c3d4e5f0","store_id":"11edf541-c4' .
                '2d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef3501-2b3c-4d5e-9f60-b2c3' .
                'd4e5f011","transaction_token_type":"one_time","subscription_id":null,"merchant_' .
                'transaction_id":null,"requested_amount":1000,"requested_currency":"JPY","reques' .
                'ted_amount_formatted":1000,"charged_amount":1000,"charged_currency":"JPY","char' .
                'ged_amount_formatted":1000,"fee_amount":null,"fee_currency":null,"fee_amount_fo' .
                'rmatted":null,"only_direct_currency":false,"capture_at":null,"descriptor":null,' .
                '"descriptor_phone_number":null,"status":"successful","error":{},"metadata":{"or' .
                'der_id":"ORD-2001"},"mode":"live","created_on":"2026-04-09T07:35:50.000000Z","r' .
                'edirect":{},"merchant_name":"管理画面ガイド","store_name":"管理画面ガイド_TEST店舗"},{"id":"11e' .
                'f3502-3c4d-5e6f-a071-c3d4e5f01122","store_id":"22af6520-d53e-764d-9d4e-ef01b66f' .
                'a6d1","transaction_token_id":"11ef3503-4d5e-6f70-b182-d4e5f0112233","transactio' .
                'n_token_type":"recurring","subscription_id":null,"merchant_transaction_id":null' .
                ',"requested_amount":1250,"requested_currency":"USD","requested_amount_formatted' .
                '":12.5,"charged_amount":1250,"charged_currency":"USD","charged_amount_formatted' .
                '":12.5,"fee_amount":null,"fee_currency":null,"fee_amount_formatted":null,"only_' .
                'direct_currency":false,"capture_at":null,"descriptor":null,"descriptor_phone_nu' .
                'mber":null,"status":"successful","error":{},"metadata":{"order_id":"ORD-2002"},' .
                '"mode":"live","created_on":"2026-04-10T10:20:11.000000Z","redirect":{},"merchan' .
                't_name":"管理画面ガイド","store_name":"管理画面ガイド_Online店舗"},{"id":"11ef3504-5e6f-7081-c2' .
                '93-e5f001223344","store_id":"33af7631-e64f-875e-ae5f-f012c77fb7e2","transaction' .
                '_token_id":"11ef3505-6f70-8192-d3a4-f00112233455","transaction_token_type":"one' .
                '_time","subscription_id":null,"merchant_transaction_id":null,"requested_amount"' .
                ':5000,"requested_currency":"JPY","requested_amount_formatted":5000,"charged_amo' .
                'unt":5000,"charged_currency":"JPY","charged_amount_formatted":5000,"fee_amount"' .
                ':null,"fee_currency":null,"fee_amount_formatted":null,"only_direct_currency":fa' .
                'lse,"capture_at":null,"descriptor":null,"descriptor_phone_number":null,"status"' .
                ':"successful","error":{},"metadata":{"order_id":"ORD-2003"},"mode":"live","crea' .
                'ted_on":"2026-04-11T14:22:08.000000Z","redirect":{},"merchant_name":"管理画面ガイド","' .
                'store_name":"管理画面ガイド_Osaka店舗"}],"has_more":false,"total_hits":3}'
            )))
            ->assert();
    }

    public function testListStoreCharges()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;
        $lastFour = '4242';
        $name = 'TARO YAMADA';
        $expMonth = 12;
        $expYear = 2026;
        $from = '2026-04-01T00:00:00Z';
        $to = '2026-04-30T23:59:59.999000Z';
        $email = 'user@example.com';
        $phone = '+8108012341234';
        $amountFrom = 1000;
        $amountTo = 5000;
        $currency = 'JPY';
        $mode = Models\ModeQuery::LIVE;
        $metadata = 'order_id: 12345';
        $transactionTokenId =
            'f33b673e-564c-4645-ae17-ca03846a86b7';

        // Perform API call
        $result = self::$controller->listStoreCharges(
            $storeId,
            $limit,
            $cursor,
            $cursorDirection,
            $lastFour,
            $name,
            $expMonth,
            $expYear,
            $from,
            $to,
            $email,
            $phone,
            $amountFrom,
            $amountTo,
            $currency,
            $mode,
            $metadata,
            $transactionTokenId
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"11ef32c4-9ea8-169c-a6c8-bfc29867a226","store_id":"11edf541-c4' .
                '2d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef32c4-9e89-0cac-bd63-17b9' .
                'a26af61b","transaction_token_type":"one_time","subscription_id":null,"merchant_' .
                'transaction_id":null,"requested_amount":1000,"requested_currency":"JPY","reques' .
                'ted_amount_formatted":1000,"charged_amount":1000,"charged_currency":"JPY","char' .
                'ged_amount_formatted":1000,"fee_amount":null,"fee_currency":null,"fee_amount_fo' .
                'rmatted":null,"only_direct_currency":false,"capture_at":null,"descriptor":null,' .
                '"descriptor_phone_number":null,"status":"successful","error":{},"metadata":{"un' .
                'ivapay-name":"taro yamada","univapay-phone-number":"8029854583"},"mode":"test",' .
                '"created_on":"2024-06-25T07:29:12.854865Z","redirect":{},"merchant_name":"管理画面ガ' .
                'イド","store_name":"管理画面ガイド_TEST店舗"},{"id":"11ef32c3-3cfe-3bc0-abed-0bb96f792078"' .
                ',"store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","transaction_token_id":"11ef' .
                '32c3-3cdd-df92-9dce-c346b9fdf088","transaction_token_type":"one_time","subscrip' .
                'tion_id":null,"merchant_transaction_id":null,"requested_amount":1000,"requested' .
                '_currency":"JPY","requested_amount_formatted":1000,"charged_amount":1000,"charg' .
                'ed_currency":"JPY","charged_amount_formatted":1000,"fee_amount":null,"fee_curre' .
                'ncy":null,"fee_amount_formatted":null,"only_direct_currency":false,"capture_at"' .
                ':null,"descriptor":null,"descriptor_phone_number":null,"status":"successful","e' .
                'rror":{},"metadata":{"order_id":"12345"},"mode":"test","created_on":"2024-06-25' .
                'T07:19:19.507637Z","redirect":{},"merchant_name":"管理画面ガイド","store_name":"管理画面ガイ' .
                'ド_TEST店舗"}],"has_more":false,"total_hits":2}'
            )))
            ->assert();
    }

    public function testGetCharge()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $polling = true;

        // Perform API call
        $result = self::$controller->getCharge($storeId, $id, $polling)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef32c2-4010-a312-aaff-4b63e4d5f92d","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec",' .
                '"transaction_token_type":"recurring","subscription_id":null,"merchant_transacti' .
                'on_id":null,"requested_amount":1000,"requested_currency":"JPY","requested_amoun' .
                't_formatted":1000,"charged_amount":1000,"charged_currency":"JPY","charged_amoun' .
                't_formatted":1000,"fee_amount":null,"fee_currency":null,"fee_amount_formatted":' .
                'null,"only_direct_currency":false,"capture_at":null,"descriptor":null,"descript' .
                'or_phone_number":null,"status":"successful","error":null,"metadata":{"order_id"' .
                ':"12345"},"mode":"test","created_on":"2024-06-25T07:12:15.16452Z","redirect":{"' .
                'endpoint":"https://test.url/","redirect_id":"11ef32c2-40cf-f772-8325-1798abb111' .
                '0d"}}'
            )))
            ->assert();
    }

    public function testUpdateCharge()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object('{"metadata":{"order_id":"1234"}}', Models\ChargeUpdateRequest::class);

        // Perform API call
        $result = self::$controller->updateCharge($storeId, $id, $idempotencyKey, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef32c2-4010-a312-aaff-4b63e4d5f92d","store_id":"11edf541-c42d-653c-8c' .
                '3d-dfe0a55f95c0","transaction_token_id":"11ef32a7-3a71-8662-803f-1bc27702eeec",' .
                '"transaction_token_type":"recurring","subscription_id":null,"merchant_transacti' .
                'on_id":null,"requested_amount":1000,"requested_currency":"JPY","requested_amoun' .
                't_formatted":1000,"charged_amount":1000,"charged_currency":"JPY","charged_amoun' .
                't_formatted":1000,"fee_amount":null,"fee_currency":null,"fee_amount_formatted":' .
                'null,"only_direct_currency":false,"capture_at":null,"descriptor":null,"descript' .
                'or_phone_number":null,"status":"successful","error":null,"metadata":{"order_id"' .
                ':"1234"},"mode":"test","created_on":"2024-06-25T07:12:15.16452Z","redirect":{"e' .
                'ndpoint":"https://test.url/","redirect_id":"11ef32c2-40cf-f772-8325-1798abb1110' .
                'd"}}'
            )))
            ->assert();
    }

    public function testCaptureCharge()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';
        $body = TestParam::object('{"amount":1000,"currency":"JPY"}', Models\ChargeCaptureRequest::class);

        // Perform API call
        $result = self::$controller->captureCharge($storeId, $id, $idempotencyKey, $body)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object('{}')))
            ->assert();
    }

    public function testGetChargeIssuerToken()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

        // Perform API call
        $result = self::$controller->getChargeIssuerToken($storeId, $id)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"issuer_token":"http://test.com/action","call_method":"http_post","payload":{' .
                '"request_data":"example_value"},"payment_type":"online"}'
            )))
            ->assert();
    }

    public function testGetChargeThreeDsIssuerToken()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

        // Perform API call
        $result = self::$controller->getChargeThreeDsIssuerToken($storeId, $id)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"issuer_token":"http://test.com/action","call_method":"http_post","payload":{' .
                '"request_data":"example_value"},"payment_type":"card","content_type":"applicati' .
                'on/x-www-form-urlencoded; charset=UTF-8"}'
            )))
            ->assert();
    }

    public function testListBankTransferLedgers()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

        // Perform API call
        $result = self::$controller->listBankTransferLedgers($storeId, $id)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"bank_ledger_type":"payment","amount":1000,"balance":0,"virtual_ban' .
                'k_account_holder_name":"test holder name","virtual_bank_account_number":"123456' .
                '7","virtual_account_id":"test account id","transaction_date":"2024-06-25","tran' .
                'saction_timestamp":"2024-06-25T07:29:16.367347Z","mode":"test","created_on":"20' .
                '24-06-25T07:29:16.373181Z"},{"bank_ledger_type":"deposit","amount":1000,"balanc' .
                'e":1000,"virtual_bank_account_holder_name":"test holder name","virtual_bank_acc' .
                'ount_number":"1234567","virtual_account_id":"test account id","transaction_date' .
                '":"2024-06-25","transaction_timestamp":"2024-06-25T07:29:16.36731Z","mode":"tes' .
                't","created_on":"2024-06-25T07:29:16.368093Z"}],"has_more":false,"total_hits":2' .
                '}'
            )))
            ->assert();
    }

    public function testCreateCustomsDeclaration()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $body = TestParam::object(
            '{"customs":"TOKYO","merchant_customs_no":"1234567890","certificate_id":"AB1234567"' .
            ',"certificate_name":"TARO YAMADA"}',
            Models\CustomsDeclarationCreateRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->createCustomsDeclaration($storeId, $chargeId, $body, $idempotencyKey)
            ->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef0000-0000-4000-8000-000000000040","charge_id":"11ef0000-0000-4000-8' .
                '000-000000000001","merchant_id":"11ef0000-0000-4000-8000-000000000020","store_i' .
                'd":"11ef0000-0000-4000-8000-000000000022","mode":"test","gateway":"wechat_onlin' .
                'e","declaration":{"customs":"TOKYO","merchant_customs_no":"1234567890","certifi' .
                'cate_id":"AB1234567","certificate_name":"TARO YAMADA"},"declaration_result":{},' .
                '"status":"pending","error":null,"created_on":"2026-04-09T07:35:50.000000Z"}'
            )))
            ->assert();
    }

    public function testCreateCustomsDeclaration1()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $body = TestParam::object(
            '{"customs":"TOKYO","merchant_customs_no":"1234567890","certificate_id":"AB1234567"' .
            ',"certificate_name":"TARO YAMADA"}',
            Models\CustomsDeclarationCreateRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call with Prefer: code=201 header
        self::$callbackCatcher->setPreferHeader('code=201');
        try {
            $result = self::$controller->createCustomsDeclaration($storeId, $chargeId, $body, $idempotencyKey)
                ->getResult();
        } finally {
            self::$callbackCatcher->setPreferHeader(null);
        }

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(201)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef0000-0000-4000-8000-000000000040","charge_id":"11ef0000-0000-4000-8' .
                '000-000000000001","merchant_id":"11ef0000-0000-4000-8000-000000000020","store_i' .
                'd":"11ef0000-0000-4000-8000-000000000022","mode":"test","gateway":"wechat_onlin' .
                'e","declaration":{"customs":"TOKYO","merchant_customs_no":"1234567890","certifi' .
                'cate_id":"AB1234567","certificate_name":"TARO YAMADA"},"declaration_result":{},' .
                '"status":"pending","error":null,"created_on":"2026-04-09T07:35:50.000000Z"}'
            )))
            ->assert();
    }

    public function testGetCustomsDeclaration()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $id = '11ef0000-0000-4000-8000-000000000040';
        $polling = false;

        // Perform API call
        $result = self::$controller->getCustomsDeclaration($storeId, $chargeId, $id, $polling)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef0000-0000-4000-8000-000000000040","charge_id":"11ef0000-0000-4000-8' .
                '000-000000000001","merchant_id":"11ef0000-0000-4000-8000-000000000020","store_i' .
                'd":"11ef0000-0000-4000-8000-000000000022","mode":"test","gateway":"wechat_onlin' .
                'e","declaration":{"customs":"TOKYO","merchant_customs_no":"1234567890","certifi' .
                'cate_id":"AB1234567","certificate_name":"TARO YAMADA"},"declaration_result":{"a' .
                'pproving_authority":"TOKYO","trade_id":"wx_trade_12345","transaction_id":"wx_tx' .
                'n_12345","charge_transaction_id":"wx_charge_12345"},"status":"successful","erro' .
                'r":null,"created_on":"2026-04-09T07:35:50.000000Z"}'
            )))
            ->assert();
    }

    public function testPatchCustomsDeclaration()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $chargeId = '6efb4e5c-690a-40f3-a4f1-0e19c5f84e98';
        $id = '11ef0000-0000-4000-8000-000000000040';
        $body = TestParam::object(
            '{"merchant_customs_no":"1234567891"}',
            Models\CustomsDeclarationPatchRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->patchCustomsDeclaration($storeId, $chargeId, $id, $body, $idempotencyKey)
            ->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef0000-0000-4000-8000-000000000040","charge_id":"11ef0000-0000-4000-8' .
                '000-000000000001","merchant_id":"11ef0000-0000-4000-8000-000000000020","store_i' .
                'd":"11ef0000-0000-4000-8000-000000000022","mode":"test","gateway":"wechat_onlin' .
                'e","declaration":{"customs":"TOKYO","merchant_customs_no":"1234567891","certifi' .
                'cate_id":"AB1234567","certificate_name":"TARO YAMADA"},"declaration_result":{},' .
                '"status":"pending","error":null,"created_on":"2026-04-09T07:35:50.000000Z"}'
            )))
            ->assert();
    }
}
