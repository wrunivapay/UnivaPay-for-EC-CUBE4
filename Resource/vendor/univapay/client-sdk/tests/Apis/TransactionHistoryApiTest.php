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
use UnivaPay\Apis\TransactionHistoryApi;
use UnivaPay\Models;

class TransactionHistoryApiTest extends BaseTestController
{
    /**
     * @var TransactionHistoryApi TransactionHistoryApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getTransactionHistoryApi();
    }

    public function testListTransactionHistory()
    {
        // Parameters for the API call
        $mode = Models\TransactionHistoryMode::TEST;
        $shortId = '8bfc29';
        $from = '2026-04-01T00:00:00Z';
        $to = '2026-04-30T23:59:59.999Z';
        $status = Models\TransactionHistoryStatus::SUCCESSFUL;
        $type = Models\TransactionHistoryType::CHARGE;
        $search = 'Taro Yamada';
        $email = 'user@example.com';
        $id = '11ef0000-0000-4000-8000-000000000070';
        $metadata = 'order_id: 12345';
        $cardExp = '2026-04';
        $cardLastFour = '4242';
        $cardholder = 'TARO YAMADA';
        $cardBrand = TestParam::object('["visa"]');
        $brand = TestParam::object('["visa"]');
        $brands = TestParam::object('["visa","jcb"]');
        $currency = 'JPY';
        $serviceProvider =
            Models\TransactionHistoryServiceProvider::CREDIT;
        $serviceProviders = TestParam::object('["credit","paidy"]');
        $gatewayTransactionId =
            'gw-txn-00123456';
        $bankTransferPaymentStatuses = TestParam::object('["exact"]');
        $bankTransferLatestDepositDateFrom =
            '2026-04-01T00:00:00Z';
        $bankTransferLatestDepositDateTo =
            '2026-04-30T23:59:59.999Z';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listTransactionHistory(
            $mode,
            $shortId,
            $from,
            $to,
            $status,
            $type,
            $search,
            $email,
            $id,
            $metadata,
            $cardExp,
            $cardLastFour,
            $cardholder,
            $cardBrand,
            $brand,
            $brands,
            $currency,
            $serviceProvider,
            $serviceProviders,
            $gatewayTransactionId,
            $bankTransferPaymentStatuses,
            $bankTransferLatestDepositDateFrom,
            $bankTransferLatestDepositDateTo,
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
                '{"items":[{"store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","resource_id":"11' .
                'ef0000-0000-4000-8000-000000000070","charge_id":null,"amount":1000,"currency":"' .
                'JPY","amount_formatted":1000,"type":"charge","status":"successful","metadata":{' .
                '},"created_on":"2024-05-01T12:34:56.789Z","mode":"test","merchant_name":"Test m' .
                'erchant","store_name":"Test store","payment_type":"card","user_data":{"type":"c' .
                'harge","cardholder_name":"Some Guy","cardholder_email_address":"test4@univapay.' .
                'com","brand":"visa","gateway":"test","service_provider":"credit","refunds":[{"r' .
                'efund_id":"11ef0000-0000-4000-8000-000000000010","amount":500,"currency":"JPY",' .
                '"amount_formatted":500,"status":"successful"}]},"bank_transfer_payment_status":' .
                'null,"bank_transfer_latest_deposit_date":null,"mcp_token_id":null,"charge_type"' .
                ':"normal"},{"store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","resource_id":"11' .
                'ef0000-0000-4000-8000-000000000010","charge_id":"11ef0000-0000-4000-8000-000000' .
                '000070","amount":500,"currency":"JPY","amount_formatted":500,"type":"refund","s' .
                'tatus":"successful","metadata":{},"created_on":"2024-05-01T13:00:00.000000Z","m' .
                'ode":"test","merchant_name":"Test merchant","store_name":"Test store","payment_' .
                'type":"card","user_data":{"type":"refund","reason":"customer_request"},"bank_tr' .
                'ansfer_payment_status":null,"bank_transfer_latest_deposit_date":null,"mcp_token' .
                '_id":null,"charge_type":null}],"has_more":false,"total_hits":2}'
            )))
            ->assert();
    }

    public function testListStoreTransactionHistory()
    {
        // Parameters for the API call
        $storeId = '0cab399b-5621-425b-993b-f8507eba1e78';
        $mode = Models\TransactionHistoryMode::TEST;
        $shortId = '8bfc29';
        $from = '2026-04-01T00:00:00Z';
        $to = '2026-04-30T23:59:59.999Z';
        $status = Models\TransactionHistoryStatus::SUCCESSFUL;
        $type = Models\TransactionHistoryType::CHARGE;
        $search = 'Taro Yamada';
        $email = 'user@example.com';
        $id = '11ef0000-0000-4000-8000-000000000070';
        $metadata = 'order_id: 12345';
        $cardExp = '2026-04';
        $cardLastFour = '4242';
        $cardholder = 'TARO YAMADA';
        $cardBrand = TestParam::object('["visa"]');
        $brand = TestParam::object('["visa"]');
        $brands = TestParam::object('["visa","jcb"]');
        $currency = 'JPY';
        $serviceProvider =
            Models\TransactionHistoryServiceProvider::CREDIT;
        $serviceProviders = TestParam::object('["credit","paidy"]');
        $gatewayTransactionId =
            'gw-txn-00123456';
        $bankTransferPaymentStatuses = TestParam::object('["exact"]');
        $bankTransferLatestDepositDateFrom =
            '2026-04-01T00:00:00Z';
        $bankTransferLatestDepositDateTo =
            '2026-04-30T23:59:59.999Z';
        $limit = 10;
        $cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;

        // Perform API call
        $result = self::$controller->listStoreTransactionHistory(
            $storeId,
            $mode,
            $shortId,
            $from,
            $to,
            $status,
            $type,
            $search,
            $email,
            $id,
            $metadata,
            $cardExp,
            $cardLastFour,
            $cardholder,
            $cardBrand,
            $brand,
            $brands,
            $currency,
            $serviceProvider,
            $serviceProviders,
            $gatewayTransactionId,
            $bankTransferPaymentStatuses,
            $bankTransferLatestDepositDateFrom,
            $bankTransferLatestDepositDateTo,
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
                '{"items":[{"store_id":"11edf541-c42d-653c-8c3d-dfe0a55f95c0","resource_id":"11' .
                'ef0000-0000-4000-8000-000000000072","charge_id":null,"amount":2500,"currency":"' .
                'JPY","amount_formatted":2500,"type":"charge","status":"awaiting","metadata":{},' .
                '"created_on":"2024-05-03T10:00:00.000000Z","mode":"live","merchant_name":"Test ' .
                'merchant","store_name":"Test store","payment_type":"bank_transfer","user_data":' .
                '{"type":"charge","cardholder_email_address":"test_bank_transfer@test.com","bran' .
                'd":"aozora_bank","gateway":"aozora_bank","service_provider":"bank_transfer","re' .
                'funds":[]},"bank_transfer_payment_status":"unpaid","bank_transfer_latest_deposi' .
                't_date":null,"mcp_token_id":null,"charge_type":"normal"}],"has_more":false,"tot' .
                'al_hits":1}'
            )))
            ->assert();
    }
}
