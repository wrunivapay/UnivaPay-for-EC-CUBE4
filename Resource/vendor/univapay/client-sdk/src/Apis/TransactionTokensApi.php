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
use UnivaPay\Models\EnableTokenThreeDsRequest;
use UnivaPay\Models\ModeQuery;
use UnivaPay\Models\ThreeDsIssuerToken;
use UnivaPay\Models\TransactionTokenActiveFilter;
use UnivaPay\Models\TransactionTokenCreateRequest;
use UnivaPay\Models\TransactionTokenList;
use UnivaPay\Models\TransactionTokenListType;
use UnivaPay\Models\TransactionTokenUpdateRequest;

class TransactionTokensApi extends BaseApi
{
    /**
     * Exchange raw payment data for a secure token. **PCI DSS Compliance Required** if sending raw card
     * numbers.
     *
     * @param TransactionTokenCreateRequest $body Request payload for creating a transaction token.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function createTransactionToken(
        TransactionTokenCreateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/tokens')
            ->auth('JWT_TOKEN')
            ->parameters(
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
            ->typeGroup('oneOf{paymentType}(CardTransactionToken{card},KonbiniTransactionToken{konbini},Onl' .
            'ineTransactionToken{online},BankTransferTransactionToken{bankTransfer},PaidyTransac' .
            'tionToken{paidy},QrScanTransactionToken{qrScan},QrMerchantTransactionToken{qrMercha' .
            'nt})')
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all transaction tokens across all stores.
     *
     * @param string|null $search Case-insensitive free-text search.
     * @param string|null $customerId Filter by customer ID.
     * @param string|null $type Filter by token type. `one_time` tokens are excluded from listings
     *        and cannot be filtered on; filtering to `recurring` requires the App Token Secret.
     * @param string|null $mode Filter by environment mode.
     * @param string|null $active Filter recurring tokens by whether they are still active.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listAllTransactionTokens(
        ?string $search = null,
        ?string $customerId = null,
        ?string $type = null,
        ?string $mode = null,
        ?string $active = TransactionTokenActiveFilter::ACTIVE,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/tokens')
            ->auth('JWT_TOKEN')
            ->parameters(
                QueryParam::init('search', $search)->unIndexed(),
                QueryParam::init('customer_id', $customerId)->unIndexed(),
                QueryParam::init('type', $type)
                    ->unIndexed()
                    ->serializeBy([TransactionTokenListType::class, 'checkValue']),
                QueryParam::init('mode', $mode)->unIndexed()->serializeBy([ModeQuery::class, 'checkValue']),
                QueryParam::init('active', $active)
                    ->unIndexed()
                    ->serializeBy([TransactionTokenActiveFilter::class, 'checkValue']),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue'])
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
            ->type(TransactionTokenList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all transaction tokens for a specific store.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string|null $search Case-insensitive free-text search.
     * @param string|null $customerId Filter by customer ID.
     * @param string|null $type Filter by token type. `one_time` tokens are excluded from listings
     *        and cannot be filtered on; filtering to `recurring` requires the App Token Secret.
     * @param string|null $mode Filter by environment mode.
     * @param string|null $active Filter recurring tokens by whether they are still active.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listStoreTransactionTokens(
        string $storeId,
        ?string $search = null,
        ?string $customerId = null,
        ?string $type = null,
        ?string $mode = null,
        ?string $active = TransactionTokenActiveFilter::ACTIVE,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/tokens')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                QueryParam::init('search', $search)->unIndexed(),
                QueryParam::init('customer_id', $customerId)->unIndexed(),
                QueryParam::init('type', $type)
                    ->unIndexed()
                    ->serializeBy([TransactionTokenListType::class, 'checkValue']),
                QueryParam::init('mode', $mode)->unIndexed()->serializeBy([ModeQuery::class, 'checkValue']),
                QueryParam::init('active', $active)
                    ->unIndexed()
                    ->serializeBy([TransactionTokenActiveFilter::class, 'checkValue']),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue'])
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
            ->type(TransactionTokenList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the details of an existing transaction token.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param bool|null $polling If set to true, instructs the API to internally poll the token's
     *        3DS or CVV authorization sub-status until it transitions to another status, or until
     *        the ~3 second server-side timeout is reached.
     *
     * @return ApiResponse Response from the API call
     */
    public function getTransactionToken(string $storeId, string $id, ?bool $polling = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/tokens/{id}')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required(),
                QueryParam::init('polling', $polling)->unIndexed()
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
            ->typeGroup('oneOf{paymentType}(CardTransactionToken{card},KonbiniTransactionToken{konbini},Onl' .
            'ineTransactionToken{online},BankTransferTransactionToken{bankTransfer},PaidyTransac' .
            'tionToken{paidy},QrScanTransactionToken{qrScan},QrMerchantTransactionToken{qrMercha' .
            'nt})')
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * ⚠️ **LEGACY WARNING: Discouraged Operation**
     * While it is technically possible to update a transaction token, this practice is highly discouraged
     * and is maintained solely for legacy reasons.
     * **Updating raw card details requires your server environment to be fully PCI DSS compliant.**
     * **Recommended Approach:** Instead of updating an existing token, it is best practice to create an
     * entirely new transaction token using Univapay's frontend integrations (**Link Form**, **Widget**, or
     * **Inline Form**). This allows Univapay to securely handle the customer's payment data without it
     * ever touching your servers.
     * --- **Legacy Usage:** Updates CVV, Address, Email, or Card Details.  *Note: If updating only the CVV
     * to resolve a `RECURRING_USAGE_REQUIRES_CVV` error, the application token secret is not required.*
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param TransactionTokenUpdateRequest|null $body Request payload for updating a transaction
     *        token.
     *
     * @return ApiResponse Response from the API call
     */
    public function updateTransactionToken(
        string $storeId,
        string $id,
        ?string $idempotencyKey = null,
        ?TransactionTokenUpdateRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/stores/{storeId}/tokens/{id}')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                HeaderParam::init('Idempotency-Key', $idempotencyKey),
                BodyParam::init($body)
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
            ->typeGroup('oneOf{paymentType}(CardTransactionToken{card},KonbiniTransactionToken{konbini},Onl' .
            'ineTransactionToken{online},BankTransferTransactionToken{bankTransfer},PaidyTransac' .
            'tionToken{paidy},QrScanTransactionToken{qrScan},QrMerchantTransactionToken{qrMercha' .
            'nt})')
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes a specific transaction token.
     * ⚠️ **WARNING: Breaks Linked Subscriptions**
     * Please note that deleting a transaction token will immediately prevent any linked recurring charges
     * or subscriptions from being processed. Proceed with caution.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function deleteTransactionToken(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/stores/{storeId}/tokens/{id}')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required()
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

    /**
     * Enables 3-D Secure on an existing `recurring` transaction token that was created without it. Only
     * applies to `recurring` tokens; returns an error if 3DS is already enabled. After calling this
     * endpoint, poll the token until `data.three_ds.status` becomes `awaiting`, then use the token 3DS
     * issuer token endpoint to complete authentication.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param EnableTokenThreeDsRequest|null $body Optional request payload. Omit entirely, or omit
     *        `redirect_endpoint`, if no redirect is needed.
     *
     * @return ApiResponse Response from the API call
     */
    public function enableTokenThreeDs(
        string $storeId,
        string $id,
        ?string $idempotencyKey = null,
        ?EnableTokenThreeDsRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/stores/{storeId}/tokens/{id}/three_ds')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                HeaderParam::init('Idempotency-Key', $idempotencyKey),
                BodyParam::init($body)
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
            ->typeGroup('oneOf{paymentType}(CardTransactionToken{card},KonbiniTransactionToken{konbini},Onl' .
            'ineTransactionToken{online},BankTransferTransactionToken{bankTransfer},PaidyTransac' .
            'tionToken{paidy},QrScanTransactionToken{qrScan},QrMerchantTransactionToken{qrMercha' .
            'nt})')
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Disables 3-D Secure on an existing `recurring` transaction token. Only applies to `recurring` tokens.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function disableTokenThreeDs(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/stores/{storeId}/tokens/{id}/three_ds')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required()
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
            ->typeGroup('oneOf{paymentType}(CardTransactionToken{card},KonbiniTransactionToken{konbini},Onl' .
            'ineTransactionToken{online},BankTransferTransactionToken{bankTransfer},PaidyTransac' .
            'tionToken{paidy},QrScanTransactionToken{qrScan},QrMerchantTransactionToken{qrMercha' .
            'nt})')
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the information required to execute 3-D Secure authentication when creating a recurring
     * transaction token.
     * **⚠️ Important Notes:** 1. **PCI DSS Compliance:** This endpoint is only available to PCI DSS
     * compliant merchants who are authorized to send raw card data directly via the API to create tokens.
     * 2. **Target Tokens:** This only applies to tokens where `type` is `recurring`. For `one_time` or
     * `subscription` tokens, 3-D Secure is requested during charge creation, not token creation. 3.
     * **Execution Flow:**
     * - After creating the token, poll the token object until `data.three_ds.status` becomes `awaiting`.
     * - Once `awaiting`, use this endpoint to fetch the issuer token details.
     * - Format the returned `payload` according to the `content_type` (e.g., URL-encoded) and execute
     * an `http_post` request from the consumer's browser to the `issuer_token` URL.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function getTokenThreeDsIssuerToken(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/tokens/{id}/three_ds/issuer_token'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required()
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
            ->type(ThreeDsIssuerToken::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
