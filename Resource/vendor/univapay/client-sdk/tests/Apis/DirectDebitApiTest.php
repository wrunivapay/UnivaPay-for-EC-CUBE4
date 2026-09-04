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
use UnivaPay\Apis\DirectDebitApi;
use UnivaPay\Models;

class DirectDebitApiTest extends BaseTestController
{
    /**
     * @var DirectDebitApi DirectDebitApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getDirectDebitApi();
    }

    public function testGetDirectDebitConfiguration()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';

        // Perform API call
        $result = self::$controller->getDirectDebitConfiguration($merchantId)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"legacy_id":"1283794","enabled":true,"debit_date":"fourteen","consignor_code"' .
                ':"135456","classifier":"99","signature":"モモサン"}'
            )))
            ->assert();
    }

    public function testGetDirectDebitNotificationConfiguration()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';

        // Perform API call
        $result = self::$controller->getDirectDebitNotificationConfiguration($merchantId)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"notify_deadline_mailing":true,"notify_deadline_debit":true,"notify_debit_update":false}'
            )))
            ->assert();
    }

    public function testGetDirectDebitCurrentSchedule()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';

        // Perform API call
        $result = self::$controller->getDirectDebitCurrentSchedule($merchantId)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"merchant_bank_account_transfer_date":"2026-03-14","merchant_bank_account_reg' .
                'istration_deadline":"2026-02-20","merchant_bank_transfer_upload_deadline":"2026' .
                '-03-04","platform_result_registration_date":"2026-03-24","platform_scheduled_pa' .
                'yout":"2026-03-31"}'
            )))
            ->assert();
    }

    public function testListDirectDebitBankAccounts()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $limit = 10;
        $cursor = '1098116';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;
        $userNumber = 'SD02688328';
        $bankAccountId = '1098116';
        $bankCode = '0012';
        $bankName = 'ﾗｸﾃﾝｷﾞﾝｺｳ';
        $branchCode = '120';
        $bankAccountType =
            Models\DirectDebitBankAccountType::REGULAR;
        $bankAccountNumber =
            '1234567';
        $bankAccountName =
            'ﾀﾅｶﾕﾐｺ';
        $registrationOrigin =
            Models\DirectDebitRegistrationOrigin::MERCHANT_CONSOLE;
        $bankAccountStatus =
            Models\DirectDebitBankAccountStatus::ACTIVE;
        $from = '2026-04-01T00:00:00.000Z';
        $to = '2026-04-30T23:59:59.999Z';

        // Perform API call
        $result = self::$controller->listDirectDebitBankAccounts(
            $merchantId,
            $limit,
            $cursor,
            $cursorDirection,
            $userNumber,
            $bankAccountId,
            $bankCode,
            $bankName,
            $branchCode,
            $bankAccountType,
            $bankAccountNumber,
            $bankAccountName,
            $registrationOrigin,
            $bankAccountStatus,
            $from,
            $to
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"1098116","legacy_store_id":"1283794","merchant_id":"01234567-' .
                '89ab-cdef-0123-456789abcdef","user_number":"SD02688328","bank_code":"0012","ban' .
                'k_name":"ﾗｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"regular","bank_acc' .
                'ount_name":"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","registration_origin":"merc' .
                'hant_console","status":"active","created_on":"2026-04-09T07:35:50.000Z","update' .
                'd_on":"2026-04-09T07:35:50.000Z"},{"id":"1098117","legacy_store_id":"1283794","' .
                'merchant_id":"01234567-89ab-cdef-0123-456789abcdef","user_number":"SD02688329",' .
                '"bank_code":"0009","bank_name":"ﾐﾂｲｽﾐﾄﾓ","branch_code":"221","bank_account_type' .
                '":"current","bank_account_name":"ｽｽﾞｷﾀﾛｳ","bank_account_number":"7654321","regi' .
                'stration_origin":"anywhere","status":"inactive","created_on":"2026-04-10T09:12:' .
                '04.000Z","updated_on":"2026-04-12T11:03:41.000Z"}],"has_more":false}'
            )))
            ->assert();
    }

    public function testCreateDirectDebitBankAccount()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $body = TestParam::object(
            '{"user_number":"SD02688328","bank_code":"0012","bank_name":"ﾗｸﾃﾝｷﾞﾝｺｳ","branch_cod' .
            'e":"120","bank_account_type":"regular","bank_account_name":"ﾀﾅｶﾕﾐｺ","bank_account_n' .
            'umber":"1234567"}',
            Models\DirectDebitBankAccountCreateRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->createDirectDebitBankAccount($merchantId, $body, $idempotencyKey)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"1098116","legacy_store_id":"1283794","merchant_id":"01234567-89ab-cdef-' .
                '0123-456789abcdef","user_number":"SD02688328","bank_code":"0012","bank_name":"ﾗ' .
                'ｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"regular","bank_account_name"' .
                ':"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","registration_origin":"merchant_conso' .
                'le","status":"active","created_on":"2026-04-09T07:35:50.000Z","updated_on":"202' .
                '6-04-09T07:35:50.000Z"}'
            )))
            ->assert();
    }

    public function testGetDirectDebitBankAccount()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $bankAccountId = '1098116';

        // Perform API call
        $result = self::$controller->getDirectDebitBankAccount($merchantId, $bankAccountId)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"1098116","legacy_store_id":"1283794","merchant_id":"01234567-89ab-cdef-' .
                '0123-456789abcdef","user_number":"SD02688328","bank_code":"0012","bank_name":"ﾗ' .
                'ｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"regular","bank_account_name"' .
                ':"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","registration_origin":"merchant_conso' .
                'le","status":"active","created_on":"2026-04-09T07:35:50.000Z","updated_on":"202' .
                '6-04-09T07:35:50.000Z"}'
            )))
            ->assert();
    }

    public function testUpdateDirectDebitBankAccount()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $bankAccountId = '1098116';
        $body = TestParam::object(
            '{"bank_account_name":"ﾀﾅｶﾕﾐｺ"}',
            Models\DirectDebitBankAccountUpdateRequest::class
        );
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->updateDirectDebitBankAccount(
            $merchantId,
            $bankAccountId,
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
                '{"id":"1098116","legacy_store_id":"1283794","merchant_id":"01234567-89ab-cdef-' .
                '0123-456789abcdef","user_number":"SD02688328","bank_code":"0012","bank_name":"ﾗ' .
                'ｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"regular","bank_account_name"' .
                ':"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","registration_origin":"merchant_conso' .
                'le","status":"active","created_on":"2026-04-09T07:35:50.000Z","updated_on":"202' .
                '6-04-09T07:35:50.000Z"}'
            )))
            ->assert();
    }

    public function testDeactivateDirectDebitBankAccount()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $bankAccountId = '1098116';

        // Perform API call
        $result = self::$controller->deactivateDirectDebitBankAccount($merchantId, $bankAccountId)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"1098116","legacy_store_id":"1283794","merchant_id":"01234567-89ab-cdef-' .
                '0123-456789abcdef","user_number":"SD02688328","bank_code":"0012","bank_name":"ﾗ' .
                'ｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"regular","bank_account_name"' .
                ':"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","registration_origin":"merchant_conso' .
                'le","status":"inactive","created_on":"2026-04-09T07:35:50.000Z","updated_on":"2' .
                '026-04-14T02:11:07.000Z"}'
            )))
            ->assert();
    }

    public function testReenableDirectDebitBankAccount()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $bankAccountId = '1098116';
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->reenableDirectDebitBankAccount($merchantId, $bankAccountId, $idempotencyKey)
            ->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"1098116","legacy_store_id":"1283794","merchant_id":"01234567-89ab-cdef-' .
                '0123-456789abcdef","user_number":"SD02688328","bank_code":"0012","bank_name":"ﾗ' .
                'ｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"regular","bank_account_name"' .
                ':"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","registration_origin":"merchant_conso' .
                'le","status":"active","created_on":"2026-04-09T07:35:50.000Z","updated_on":"202' .
                '6-04-09T07:35:50.000Z"}'
            )))
            ->assert();
    }

    public function testCreateDirectDebitBankTransfer()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $bankAccountId = '1098116';
        $body = TestParam::object('{"amount":1000}', Models\DirectDebitBankTransferCreateRequest::class);
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->createDirectDebitBankTransfer(
            $merchantId,
            $bankAccountId,
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
                '{"id":"2594976","legacy_store_id":"1283794","merchant_id":"01234567-89ab-cdef-' .
                '0123-456789abcdef","bank_account_id":"1098116","user_number":"SD02688328","bank' .
                '_code":"0012","bank_name":"ﾗｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"' .
                'regular","bank_account_name":"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","amount":' .
                '1000,"debit_date":"fourteen","calculated_debit_date":"2026-03-14","lock":"unloc' .
                'ked","status":"awaiting","error":null,"created_on":"2026-04-09T07:35:50.000Z","' .
                'updated_on":"2026-04-09T07:35:50.000Z"}'
            )))
            ->assert();
    }

    public function testListDirectDebitBankTransfers()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $limit = 10;
        $cursor = '1098116';
        $cursorDirection =
            Models\CursorDirectionQuery::DESC;
        $bankTransferId = '2594976';
        $bankTransferStart =
            '2026-01';
        $bankTransferEnd =
            '2026-03';
        $debitDate = Models\DirectDebitDebitDate::FOURTEEN;
        $userNumber = 'SD02688328';
        $bankAccountNumber =
            '1234567';
        $bankAccountName =
            'ﾀﾅｶﾕﾐｺ';
        $lockStatus = Models\DirectDebitBankTransferLock::UNLOCKED;
        $bankTransferStatus =
            Models\DirectDebitBankTransferStatus::AWAITING;

        // Perform API call
        $result = self::$controller->listDirectDebitBankTransfers(
            $merchantId,
            $limit,
            $cursor,
            $cursorDirection,
            $bankTransferId,
            $bankTransferStart,
            $bankTransferEnd,
            $debitDate,
            $userNumber,
            $bankAccountNumber,
            $bankAccountName,
            $lockStatus,
            $bankTransferStatus
        )->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"items":[{"id":"2594976","legacy_store_id":"1283794","merchant_id":"01234567-' .
                '89ab-cdef-0123-456789abcdef","bank_account_id":"1098116","user_number":"SD02688' .
                '328","bank_code":"0012","bank_name":"ﾗｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_accou' .
                'nt_type":"regular","bank_account_name":"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567"' .
                ',"amount":1000,"debit_date":"fourteen","calculated_debit_date":"2026-03-14","lo' .
                'ck":"unlocked","status":"awaiting","error":null,"created_on":"2026-04-09T07:35:' .
                '50.000Z","updated_on":"2026-04-09T07:35:50.000Z"},{"id":"2594977","legacy_store' .
                '_id":"1283794","merchant_id":"01234567-89ab-cdef-0123-456789abcdef","bank_accou' .
                'nt_id":"1098117","user_number":"SD02688329","bank_code":"0009","bank_name":"ﾐﾂｲ' .
                'ｽﾐﾄﾓ","branch_code":"221","bank_account_type":"current","bank_account_name":"ｽｽ' .
                'ﾞｷﾀﾛｳ","bank_account_number":"7654321","amount":1850,"debit_date":"twenty_seven' .
                '","calculated_debit_date":"2026-03-27","lock":"locked","status":"failed","error' .
                '":"insufficient_funds","created_on":"2026-04-10T09:12:04.000Z","updated_on":"20' .
                '26-04-12T11:03:41.000Z"}],"has_more":false}'
            )))
            ->assert();
    }

    public function testGetDirectDebitBankTransfer()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $bankTransferId = '2594976';

        // Perform API call
        $result = self::$controller->getDirectDebitBankTransfer($merchantId, $bankTransferId)->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"2594976","legacy_store_id":"1283794","merchant_id":"01234567-89ab-cdef-' .
                '0123-456789abcdef","bank_account_id":"1098116","user_number":"SD02688328","bank' .
                '_code":"0012","bank_name":"ﾗｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"' .
                'regular","bank_account_name":"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","amount":' .
                '1000,"debit_date":"fourteen","calculated_debit_date":"2026-03-14","lock":"unloc' .
                'ked","status":"awaiting","error":null,"created_on":"2026-04-09T07:35:50.000Z","' .
                'updated_on":"2026-04-09T07:35:50.000Z"}'
            )))
            ->assert();
    }

    public function testUpdateDirectDebitBankTransfer()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $bankTransferId = '2594976';
        $body = TestParam::object('{"amount":1850}', Models\DirectDebitBankTransferPatchRequest::class);
        $idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

        // Perform API call
        $result = self::$controller->updateDirectDebitBankTransfer(
            $merchantId,
            $bankTransferId,
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
                '{"id":"2594976","legacy_store_id":"1283794","merchant_id":"01234567-89ab-cdef-' .
                '0123-456789abcdef","bank_account_id":"1098116","user_number":"SD02688328","bank' .
                '_code":"0012","bank_name":"ﾗｸﾃﾝｷﾞﾝｺｳ","branch_code":"120","bank_account_type":"' .
                'regular","bank_account_name":"ﾀﾅｶﾕﾐｺ","bank_account_number":"1234567","amount":' .
                '1000,"debit_date":"fourteen","calculated_debit_date":"2026-03-14","lock":"unloc' .
                'ked","status":"awaiting","error":null,"created_on":"2026-04-09T07:35:50.000Z","' .
                'updated_on":"2026-04-09T07:35:50.000Z"}'
            )))
            ->assert();
    }

    public function testDeleteDirectDebitBankTransfer()
    {
        // Parameters for the API call
        $merchantId = '01234567-89ab-cdef-0123-456789abcdef';
        $bankTransferId = '2594976';

        // Perform API call
        $result = self::$controller->deleteDirectDebitBankTransfer($merchantId, $bankTransferId)->getResult();

        // Assert result with expected response
        $this->newTestCase(null)->expectStatus(204)->assert();
    }
}
