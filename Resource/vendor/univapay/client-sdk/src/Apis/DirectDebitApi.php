<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Apis;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use UnivaPay\Exceptions\ApiErrorException;
use UnivaPay\Http\ApiResponse;
use UnivaPay\Models\CursorDirectionQuery;
use UnivaPay\Models\DirectDebitBankAccount;
use UnivaPay\Models\DirectDebitBankAccountCreateRequest;
use UnivaPay\Models\DirectDebitBankAccountList;
use UnivaPay\Models\DirectDebitBankAccountStatus;
use UnivaPay\Models\DirectDebitBankAccountType;
use UnivaPay\Models\DirectDebitBankAccountUpdateRequest;
use UnivaPay\Models\DirectDebitBankTransfer;
use UnivaPay\Models\DirectDebitBankTransferCreateRequest;
use UnivaPay\Models\DirectDebitBankTransferList;
use UnivaPay\Models\DirectDebitBankTransferLock;
use UnivaPay\Models\DirectDebitBankTransferPatchRequest;
use UnivaPay\Models\DirectDebitBankTransferStatus;
use UnivaPay\Models\DirectDebitDebitDate;
use UnivaPay\Models\DirectDebitMerchantConfiguration;
use UnivaPay\Models\DirectDebitNotificationConfiguration;
use UnivaPay\Models\DirectDebitRegistrationOrigin;
use UnivaPay\Models\DirectDebitSchedule;
use UnivaPay\Server;

class DirectDebitApi extends BaseApi
{
    /**
     * Retrieves the merchant's direct debit configuration — whether direct debit is enabled and which
     * monthly debit cycle applies.
     *
     * @param string $merchantId The unique identifier of the merchant.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDirectDebitConfiguration(string $merchantId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/merchants/{merchantId}/configuration')
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(TemplateParam::init('merchantId', $merchantId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitMerchantConfiguration::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves which direct debit email notifications the merchant has opted into.
     *
     * @param string $merchantId The unique identifier of the merchant.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDirectDebitNotificationConfiguration(string $merchantId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/merchants/{merchantId}/notification-configuration'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(TemplateParam::init('merchantId', $merchantId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitNotificationConfiguration::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the key dates for the debit cycle currently in progress, based on the merchant's
     * configured cycle. Compare `merchant_bank_transfer_upload_deadline` against today to decide whether
     * transfers can still be registered or edited this month.
     *
     * @param string $merchantId The unique identifier of the merchant.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDirectDebitCurrentSchedule(string $merchantId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/merchants/{merchantId}/schedules/current')
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(TemplateParam::init('merchantId', $merchantId)->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitSchedule::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists the consumer bank accounts registered for direct debit under this merchant.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     * @param string|null $userNumber Filter by the merchant's own membership number for the
     *        consumer (会員番号).
     * @param string|null $bankAccountId Filter by a single bank account ID.
     * @param string|null $bankCode Filter by the 4-digit bank code (銀行コード).
     * @param string|null $bankName Filter by bank name in half-width katakana (銀行名).
     * @param string|null $branchCode Filter by the 3-digit branch code (支店コード).
     * @param string|null $bankAccountType Filter by deposit account type (預金種類).
     * @param string|null $bankAccountNumber Filter by the 7-digit account number (口座番号).
     * @param string|null $bankAccountName Filter by account holder name in half-width katakana
     *        (口座名義).
     * @param string|null $registrationOrigin Filter by where the bank account was registered from.
     * @param string|null $bankAccountStatus Filter by bank account status. Omit to return every
     *        status.
     * @param string|null $from Show bank accounts created on or after this date (ISO-8601).
     * @param string|null $to Show bank accounts created before this date (ISO-8601).
     *
     * @return ApiResponse Response from the API call
     */
    public function listDirectDebitBankAccounts(
        string $merchantId,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC,
        ?string $userNumber = null,
        ?string $bankAccountId = null,
        ?string $bankCode = null,
        ?string $bankName = null,
        ?string $branchCode = null,
        ?string $bankAccountType = null,
        ?string $bankAccountNumber = null,
        ?string $bankAccountName = null,
        ?string $registrationOrigin = null,
        ?string $bankAccountStatus = null,
        ?string $from = null,
        ?string $to = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/merchants/{merchantId}/bank-accounts')
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue']),
                QueryParam::init('user_number', $userNumber)->unIndexed(),
                QueryParam::init('bank_account_id', $bankAccountId)->unIndexed(),
                QueryParam::init('bank_code', $bankCode)->unIndexed(),
                QueryParam::init('bank_name', $bankName)->unIndexed(),
                QueryParam::init('branch_code', $branchCode)->unIndexed(),
                QueryParam::init('bank_account_type', $bankAccountType)
                    ->unIndexed()
                    ->serializeBy([DirectDebitBankAccountType::class, 'checkValue']),
                QueryParam::init('bank_account_number', $bankAccountNumber)->unIndexed(),
                QueryParam::init('bank_account_name', $bankAccountName)->unIndexed(),
                QueryParam::init('registration_origin', $registrationOrigin)
                    ->unIndexed()
                    ->serializeBy([DirectDebitRegistrationOrigin::class, 'checkValue']),
                QueryParam::init('bank_account_status', $bankAccountStatus)
                    ->unIndexed()
                    ->serializeBy([DirectDebitBankAccountStatus::class, 'checkValue']),
                QueryParam::init('from', $from)->unIndexed(),
                QueryParam::init('to', $to)->unIndexed()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP 400 Bad Request: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('HTTP 404 Not Found: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankAccountList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Registers a consumer bank account for direct debit. The account is created and then verified against
     * the bank, so it starts out unusable — poll its `status` until it becomes `active` (or
     * `registration_failed`) before scheduling transfers against it.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param DirectDebitBankAccountCreateRequest $body Request payload for registering a consumer
     *        bank account.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function createDirectDebitBankAccount(
        string $merchantId,
        DirectDebitBankAccountCreateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/merchants/{merchantId}/bank-accounts')
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->required(),
                HeaderParam::init('Idempotency-Key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP 400 Bad Request: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('HTTP 404 Not Found: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankAccount::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a single registered bank account, including its current verification status.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $bankAccountId The unique identifier of the direct debit bank account.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDirectDebitBankAccount(string $merchantId, string $bankAccountId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/merchants/{merchantId}/bank-accounts/{bankAccountId}'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('bankAccountId', $bankAccountId)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankAccount::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates a registered bank account. Changing bank details re-triggers verification with the bank.
     * Transfers already registered keep the details they were created with.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $bankAccountId The unique identifier of the direct debit bank account.
     * @param DirectDebitBankAccountUpdateRequest $body Request payload for updating a registered
     *        bank account.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function updateDirectDebitBankAccount(
        string $merchantId,
        string $bankAccountId,
        DirectDebitBankAccountUpdateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/merchants/{merchantId}/bank-accounts/{bankAccountId}'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('bankAccountId', $bankAccountId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->required(),
                HeaderParam::init('Idempotency-Key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP 400 Bad Request: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankAccount::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deactivates a bank account so no further transfers can be registered against it. The record is
     * retained (status becomes `inactive`) rather than deleted, and can be re-enabled later.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $bankAccountId The unique identifier of the direct debit bank account.
     *
     * @return ApiResponse Response from the API call
     */
    public function deactivateDirectDebitBankAccount(string $merchantId, string $bankAccountId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/merchants/{merchantId}/bank-accounts/{bankAccountId}'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('bankAccountId', $bankAccountId)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankAccount::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a deactivated bank account to `active` so transfers can be registered against it again. The
     * account must currently be `inactive`.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $bankAccountId The unique identifier of the direct debit bank account.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function reenableDirectDebitBankAccount(
        string $merchantId,
        string $bankAccountId,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/merchants/{merchantId}/bank-accounts/{bankAccountId}/re-enable'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('bankAccountId', $bankAccountId)->required(),
                HeaderParam::init('Idempotency-Key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP 400 Bad Request: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankAccount::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Schedules a pull of funds from an active bank account. The transfer is queued for the merchant's
     * next debit cycle and stays editable until that cycle's upload deadline passes.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $bankAccountId The unique identifier of the direct debit bank account.
     * @param DirectDebitBankTransferCreateRequest $body Request payload for scheduling a transfer,
     *        in JPY.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function createDirectDebitBankTransfer(
        string $merchantId,
        string $bankAccountId,
        DirectDebitBankTransferCreateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/merchants/{merchantId}/bank-accounts/{bankAccountId}/bank-transfers'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('bankAccountId', $bankAccountId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->required(),
                HeaderParam::init('Idempotency-Key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP 400 Bad Request: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankTransfer::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists the direct debit transfers registered under this merchant, across all bank accounts.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     * @param string|null $bankTransferId Filter by a single bank transfer ID.
     * @param string|null $bankTransferStart Start of the year-month range in which the transfer is
     *        scheduled to occur.
     * @param string|null $bankTransferEnd End of the year-month range in which the transfer is
     *        scheduled to occur.
     * @param string|null $debitDate Filter by monthly debit cycle.
     * @param string|null $userNumber Filter by the merchant's own membership number for the
     *        consumer (会員番号).
     * @param string|null $bankAccountNumber Filter by the 7-digit account number (口座番号).
     * @param string|null $bankAccountName Filter by account holder name in half-width katakana
     *        (口座名義).
     * @param string|null $lockStatus Filter by lock status. Omit to return both locked and unlocked
     *        transfers.
     * @param string|null $bankTransferStatus Filter by transfer status. Omit to return every
     *        status.
     *
     * @return ApiResponse Response from the API call
     */
    public function listDirectDebitBankTransfers(
        string $merchantId,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC,
        ?string $bankTransferId = null,
        ?string $bankTransferStart = null,
        ?string $bankTransferEnd = null,
        ?string $debitDate = null,
        ?string $userNumber = null,
        ?string $bankAccountNumber = null,
        ?string $bankAccountName = null,
        ?string $lockStatus = null,
        ?string $bankTransferStatus = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/merchants/{merchantId}/bank-transfers')
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue']),
                QueryParam::init('bank_transfer_id', $bankTransferId)->unIndexed(),
                QueryParam::init('bank_transfer_start', $bankTransferStart)->unIndexed(),
                QueryParam::init('bank_transfer_end', $bankTransferEnd)->unIndexed(),
                QueryParam::init('debit_date', $debitDate)
                    ->unIndexed()
                    ->serializeBy([DirectDebitDebitDate::class, 'checkValue']),
                QueryParam::init('user_number', $userNumber)->unIndexed(),
                QueryParam::init('bank_account_number', $bankAccountNumber)->unIndexed(),
                QueryParam::init('bank_account_name', $bankAccountName)->unIndexed(),
                QueryParam::init('lock_status', $lockStatus)
                    ->unIndexed()
                    ->serializeBy([DirectDebitBankTransferLock::class, 'checkValue']),
                QueryParam::init('bank_transfer_status', $bankTransferStatus)
                    ->unIndexed()
                    ->serializeBy([DirectDebitBankTransferStatus::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP 400 Bad Request: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('HTTP 404 Not Found: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankTransferList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a single transfer. Poll this after the cycle's result registration date to pick up the
     * outcome and, on failure, the bank's reason.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $bankTransferId The unique identifier of the direct debit bank transfer.
     *
     * @return ApiResponse Response from the API call
     */
    public function getDirectDebitBankTransfer(string $merchantId, string $bankTransferId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/merchants/{merchantId}/bank-transfers/{bankTransferId}'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('bankTransferId', $bankTransferId)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankTransfer::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Changes a scheduled transfer's amount. Only permitted while the transfer is `unlocked` — once its
     * cycle's upload deadline passes the amount is fixed.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $bankTransferId The unique identifier of the direct debit bank transfer.
     * @param DirectDebitBankTransferPatchRequest $body Request payload for changing the transfer
     *        amount.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function updateDirectDebitBankTransfer(
        string $merchantId,
        string $bankTransferId,
        DirectDebitBankTransferPatchRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/merchants/{merchantId}/bank-transfers/{bankTransferId}'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('bankTransferId', $bankTransferId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->required(),
                HeaderParam::init('Idempotency-Key', $idempotencyKey)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP 400 Bad Request: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(DirectDebitBankTransfer::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Cancels a scheduled transfer so it is not sent to the bank. Only permitted while the transfer is
     * `unlocked`.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $bankTransferId The unique identifier of the direct debit bank transfer.
     *
     * @return ApiResponse Response from the API call
     */
    public function deleteDirectDebitBankTransfer(string $merchantId, string $bankTransferId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/merchants/{merchantId}/bank-transfers/{bankTransferId}'
        )
            ->server(Server::DIRECTDEBIT)
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('bankTransferId', $bankTransferId)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '400',
                ErrorType::initWithErrorTemplate(
                    'HTTP 400 Bad Request: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate(
                    'HTTP 401 Unauthorized: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '403',
                ErrorType::initWithErrorTemplate(
                    'HTTP 403 Forbidden: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
