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
use UnivaPay\Models\BankTransferLedgerList;
use UnivaPay\Models\Charge;
use UnivaPay\Models\ChargeCaptureRequest;
use UnivaPay\Models\ChargeCreateRequest;
use UnivaPay\Models\ChargeList;
use UnivaPay\Models\ChargeUpdateRequest;
use UnivaPay\Models\CursorDirectionQuery;
use UnivaPay\Models\CustomsDeclarationCreateRequest;
use UnivaPay\Models\CustomsDeclarationPatchRequest;
use UnivaPay\Models\CustomsDeclarationWebhookData;
use UnivaPay\Models\IssuerToken;
use UnivaPay\Models\ModeQuery;
use UnivaPay\Models\ThreeDsIssuerToken;
use UnivaPay\Models\ChargeStatus;

class ChargesApi extends BaseApi
{
    /**
     * Creates a charge on a payment instrument (e.g. transaction token).
     *
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param ChargeCreateRequest|null $body Request payload for creating a charge.
     *
     * @return ApiResponse Response from the API call
     */
    public function createCharge(?string $idempotencyKey = null, ?ChargeCreateRequest $body = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/charges')
            ->auth('JWT_TOKEN')
            ->parameters(
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
            ->type(Charge::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all charges across all stores for the authenticated user.
     *
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     * @param string|null $lastFour Filter by the last 4 digits of the card. **Note:** If specified,
     *        `name`, `exp_month`, and `exp_year` must also be included.
     * @param string|null $name Filter by cardholder name. **Note:** If specified, `last_four`,
     *        `exp_month`, and `exp_year` must also be included.
     * @param int|null $expMonth Filter by expiration month. **Note:** If specified, `last_four`,
     *        `name`, and `exp_year` must also be included.
     * @param int|null $expYear Filter by expiration year. **Note:** If specified, `last_four`,
     *        `name`, and `exp_month` must also be included.
     * @param string|null $from Show charges created on or after this date (ISO-8601).
     * @param string|null $to Show charges created before this date (ISO-8601).
     * @param string|null $email Filter by email address.
     * @param string|null $phone Filter by phone number.
     * @param int|null $amountFrom Show charges with an amount greater than or equal to this value.
     * @param int|null $amountTo Show charges with an amount strictly less than this value.
     * @param string|null $currency Filter by currency (ISO-4217).
     * @param string|null $mode Filter by environment mode.
     * @param string|null $metadata Filter by metadata.
     * @param string|null $transactionTokenId Filter by transaction token ID.
     *
     * @return ApiResponse Response from the API call
     */
    public function listAllCharges(
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC,
        ?string $lastFour = null,
        ?string $name = null,
        ?int $expMonth = null,
        ?int $expYear = null,
        ?string $from = null,
        ?string $to = null,
        ?string $email = null,
        ?string $phone = null,
        ?int $amountFrom = null,
        ?int $amountTo = null,
        ?string $currency = null,
        ?string $mode = null,
        ?string $metadata = null,
        ?string $transactionTokenId = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/charges')
            ->auth('JWT_TOKEN')
            ->parameters(
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue']),
                QueryParam::init('last_four', $lastFour)->unIndexed(),
                QueryParam::init('name', $name)->unIndexed(),
                QueryParam::init('exp_month', $expMonth)->unIndexed(),
                QueryParam::init('exp_year', $expYear)->unIndexed(),
                QueryParam::init('from', $from)->unIndexed(),
                QueryParam::init('to', $to)->unIndexed(),
                QueryParam::init('email', $email)->unIndexed(),
                QueryParam::init('phone', $phone)->unIndexed(),
                QueryParam::init('amount_from', $amountFrom)->unIndexed(),
                QueryParam::init('amount_to', $amountTo)->unIndexed(),
                QueryParam::init('currency', $currency)->unIndexed(),
                QueryParam::init('mode', $mode)->unIndexed()->serializeBy([ModeQuery::class, 'checkValue']),
                QueryParam::init('metadata', $metadata)->unIndexed(),
                QueryParam::init('transaction_token_id', $transactionTokenId)->unIndexed()
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
            ->type(ChargeList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all charges for a specific store.
     *
     * @param string $storeId The unique identifier of the store.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     * @param string|null $lastFour Filter by the last 4 digits of the card. **Note:** If specified,
     *        `name`, `exp_month`, and `exp_year` must also be included.
     * @param string|null $name Filter by cardholder name. **Note:** If specified, `last_four`,
     *        `exp_month`, and `exp_year` must also be included.
     * @param int|null $expMonth Filter by expiration month. **Note:** If specified, `last_four`,
     *        `name`, and `exp_year` must also be included.
     * @param int|null $expYear Filter by expiration year. **Note:** If specified, `last_four`,
     *        `name`, and `exp_month` must also be included.
     * @param string|null $from Show charges created on or after this date (ISO-8601).
     * @param string|null $to Show charges created before this date (ISO-8601).
     * @param string|null $email Filter by email address.
     * @param string|null $phone Filter by phone number.
     * @param int|null $amountFrom Show charges with an amount greater than or equal to this value.
     * @param int|null $amountTo Show charges with an amount strictly less than this value.
     * @param string|null $currency Filter by currency (ISO-4217).
     * @param string|null $mode Filter by environment mode.
     * @param string|null $metadata Filter by metadata.
     * @param string|null $transactionTokenId Filter by transaction token ID.
     *
     * @return ApiResponse Response from the API call
     */
    public function listStoreCharges(
        string $storeId,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC,
        ?string $lastFour = null,
        ?string $name = null,
        ?int $expMonth = null,
        ?int $expYear = null,
        ?string $from = null,
        ?string $to = null,
        ?string $email = null,
        ?string $phone = null,
        ?int $amountFrom = null,
        ?int $amountTo = null,
        ?string $currency = null,
        ?string $mode = null,
        ?string $metadata = null,
        ?string $transactionTokenId = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/charges')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue']),
                QueryParam::init('last_four', $lastFour)->unIndexed(),
                QueryParam::init('name', $name)->unIndexed(),
                QueryParam::init('exp_month', $expMonth)->unIndexed(),
                QueryParam::init('exp_year', $expYear)->unIndexed(),
                QueryParam::init('from', $from)->unIndexed(),
                QueryParam::init('to', $to)->unIndexed(),
                QueryParam::init('email', $email)->unIndexed(),
                QueryParam::init('phone', $phone)->unIndexed(),
                QueryParam::init('amount_from', $amountFrom)->unIndexed(),
                QueryParam::init('amount_to', $amountTo)->unIndexed(),
                QueryParam::init('currency', $currency)->unIndexed(),
                QueryParam::init('mode', $mode)->unIndexed()->serializeBy([ModeQuery::class, 'checkValue']),
                QueryParam::init('metadata', $metadata)->unIndexed(),
                QueryParam::init('transaction_token_id', $transactionTokenId)->unIndexed()
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
            ->type(ChargeList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the details of an existing charge.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param bool|null $polling If set to true, instructs the API to internally poll the charge
     *        status  until it changes from 'pending' (the initial status) to another status.
     *
     * @return ApiResponse Response from the API call
     */
    public function getCharge(string $storeId, string $id, ?bool $polling = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/charges/{id}')
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
            ->type(Charge::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Use this request to add or modify arbitrary metadata on an existing charge.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param ChargeUpdateRequest|null $body Request payload for updating charge metadata.
     *
     * @return ApiResponse Response from the API call
     */
    public function updateCharge(
        string $storeId,
        string $id,
        ?string $idempotencyKey = null,
        ?ChargeUpdateRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/stores/{storeId}/charges/{id}')
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
            ->type(Charge::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Captures a previously authorized charge (where `capture` was set to false during creation).  The
     * capture amount must be less than or equal to the authorized amount, and the currency must match. The
     * request body — and both of its fields — is optional: if omitted entirely, the full outstanding
     * authorized amount (in the originally requested currency) is captured.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param ChargeCaptureRequest|null $body Optional request payload for capturing an authorized
     *        charge. Omit entirely to capture the full outstanding authorized amount.
     *
     * @return ApiResponse Response from the API call
     */
    public function captureCharge(
        string $storeId,
        string $id,
        ?string $idempotencyKey = null,
        ?ChargeCaptureRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/stores/{storeId}/charges/{id}/capture')
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
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the necessary payment execution URL (for online payments) or bank account details (for
     * bank transfers).
     * **⚠️ Prerequisite:** The charge `status` must be `awaiting` before requesting the issuer token.  If
     * requested while the charge is in any other status, an error will be returned.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function getChargeIssuerToken(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/charges/{id}/issuer_token')
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
            ->type(IssuerToken::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the 3-D Secure issuer token details required to authenticate a card charge.
     * **⚠️ Prerequisites:** 1. The charge must be created with `three_ds.mode` set to `normal` or `force`.
     * 2. You must poll the charge until its `status` becomes `awaiting` before making this request.
     * **Execution Flow:** Once retrieved, the client (browser) must execute an `http_post` request to the
     * `issuer_token` URL.  The `payload` object must be formatted according to the `content_type` (e.g.,
     * URL-encoded) and sent in the body. You can execute this via a redirect or inside an iframe. If using
     * an iframe, continue polling the charge status  in the background until it reaches `successful`,
     * `failed`, or `error`.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function getChargeThreeDsIssuerToken(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/charges/{id}/three_ds/issuer_token'
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

    /**
     * Retrieves bank transfer ledger entries associated with a charge. This is an optional reconciliation
     * endpoint — not part of the required create-charge-and-poll flow.
     * **⚠️ Requires a merchant-level application token**, unlike the rest of the bank transfer flow. A
     * store application token (`Bearer {secret}.{jwt}` scoped to a `store_id`) is not sufficient here,
     * even though the path is store-scoped.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function listBankTransferLedgers(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/charges/{id}/bank_transfer_ledgers'
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
            ->type(BankTransferLedgerList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a customs declaration for a successful charge. Backend only accepts this request for WeChat
     * Online and WeChat MPM charges. If a declaration already exists and is no longer pending, the backend
     * updates its identity fields and restarts processing instead of creating a new record.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $chargeId The unique identifier of the charge.
     * @param CustomsDeclarationCreateRequest $body Request payload for creating a customs
     *        declaration.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function createCustomsDeclaration(
        string $storeId,
        string $chargeId,
        CustomsDeclarationCreateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/stores/{storeId}/charges/{chargeId}/customs')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('chargeId', $chargeId)->required(),
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
            ->type(CustomsDeclarationWebhookData::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a customs declaration for a charge. Supports long polling when `polling=true`, returning
     * once the declaration leaves its current state or the polling timeout is reached.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $chargeId The unique identifier of the charge.
     * @param string $id The unique identifier of the customs declaration.
     * @param bool|null $polling Hold the request open while waiting for a status change.
     *
     * @return ApiResponse Response from the API call
     */
    public function getCustomsDeclaration(
        string $storeId,
        string $chargeId,
        string $id,
        ?bool $polling = false
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/charges/{chargeId}/customs/{id}'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('chargeId', $chargeId)->required(),
                TemplateParam::init('id', $id)->required(),
                QueryParam::init('polling', $polling)->unIndexed()
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
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(CustomsDeclarationWebhookData::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates a customs declaration and requeues processing. Backend patching preserves the original
     * `customs`, `certificate_id`, and `certificate_name` values and only accepts a new
     * `merchant_customs_no`. Pending declarations cannot be patched.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $chargeId The unique identifier of the charge.
     * @param string $id The unique identifier of the customs declaration.
     * @param CustomsDeclarationPatchRequest $body Request payload for patching a customs
     *        declaration.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function patchCustomsDeclaration(
        string $storeId,
        string $chargeId,
        string $id,
        CustomsDeclarationPatchRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/stores/{storeId}/charges/{chargeId}/customs/{id}'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('chargeId', $chargeId)->required(),
                TemplateParam::init('id', $id)->required(),
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
            ->type(CustomsDeclarationWebhookData::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    // ── Hand-authored customization (kept at end of class to minimize regen conflicts) ──

    /**
     * Polls the charge status using `getCharge` with `polling=true` until it transitions out of its
     * current status. Transition-aware: polling a `pending` charge stops on any other status, polling
     * an `awaiting` charge (e.g. after a 3DS redirect) waits for `authorized`/`successful`/`failed`/
     * `error`/`canceled`, and polling an `authorized` charge waits for its capture outcome. A charge
     * already in a final status is returned immediately.
     *
     * @param string $storeId     The unique identifier of the store.
     * @param string $id          The unique identifier of the resource.
     * @param int    $maxAttempts The maximum number of held polling requests. Default is 10.
     *
     * @return ApiResponse Response from the API call containing the transitioned state (or latest state if timed out)
     */
    public function pollCharge(string $storeId, string $id, int $maxAttempts = 10): ApiResponse
    {
        // Valid transitions out of each non-final status; polling stops only when the charge
        // reaches a status reachable from where it started.
        $transitions = [
            ChargeStatus::PENDING => [
                ChargeStatus::AWAITING,
                ChargeStatus::AUTHORIZED,
                ChargeStatus::SUCCESSFUL,
                ChargeStatus::FAILED,
                ChargeStatus::ERROR,
                ChargeStatus::CANCELED
            ],
            ChargeStatus::AWAITING => [
                ChargeStatus::AUTHORIZED,
                ChargeStatus::SUCCESSFUL,
                ChargeStatus::FAILED,
                ChargeStatus::ERROR,
                ChargeStatus::CANCELED
            ],
            ChargeStatus::AUTHORIZED => [
                ChargeStatus::SUCCESSFUL,
                ChargeStatus::FAILED,
                ChargeStatus::ERROR,
                ChargeStatus::CANCELED
            ]
        ];
        // Instant read (no hold) to key the transition map off the charge's current status;
        // a held first read could observe a transition and re-key the map one state too far.
        $response = $this->getCharge($storeId, $id);
        $status = $response->getResult() !== null ? $response->getResult()->getStatus() : null;
        if ($status !== null && !array_key_exists($status, $transitions)) {
            return $response;
        }
        $targets = $transitions[$status ?? ChargeStatus::PENDING];
        $attempts = 0;
        while ($attempts < $maxAttempts) {
            $response = $this->getCharge($storeId, $id, true);
            if (
                $response !== null && $response->getResult() !== null
                && in_array($response->getResult()->getStatus(), $targets, true)
            ) {
                return $response;
            }
            $attempts++;
        }
        // Attempts exhausted: a poll timeout, not a failure — the caller should fall
        // back to the webhook rather than treating the charge as failed.
        return $response;
    }
}
