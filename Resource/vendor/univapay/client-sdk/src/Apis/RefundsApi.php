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
use UnivaPay\Models\Refund;
use UnivaPay\Models\RefundCreateRequest;
use UnivaPay\Models\RefundList;
use UnivaPay\Models\RefundUpdateRequest;
use UnivaPay\Models\RefundStatus;

class RefundsApi extends BaseApi
{
    /**
     * Retrieves a list of all refunds for a specific charge.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $chargeId The unique identifier of the charge.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     * @param string|null $metadata Filter refunds by metadata content.
     *
     * @return ApiResponse Response from the API call
     */
    public function listRefunds(
        string $storeId,
        string $chargeId,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC,
        ?string $metadata = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/charges/{chargeId}/refunds')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('chargeId', $chargeId)->required(),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue']),
                QueryParam::init('metadata', $metadata)->unIndexed()
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
            ->type(RefundList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a refund for a successful charge. The charge must have status `successful`. Konbini and bank
     * transfer charges cannot be refunded. The refund is processed asynchronously — the initial status
     * will be `pending`.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $chargeId The unique identifier of the charge.
     * @param RefundCreateRequest $body Request payload for creating a refund.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function createRefund(
        string $storeId,
        string $chargeId,
        RefundCreateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/stores/{storeId}/charges/{chargeId}/refunds')
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
            ->type(Refund::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the details of a specific refund. Supports long polling — set `polling=true` to wait until
     * the refund status changes from `pending` to a terminal state (`successful`, `failed`, or `error`).
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $chargeId The unique identifier of the charge.
     * @param string $id The unique identifier of the resource.
     * @param bool|null $polling If `true`, the server holds the connection open until the refund
     *        status transitions from `pending` to a terminal state, or until the polling timeout
     *        is reached.
     *
     * @return ApiResponse Response from the API call
     */
    public function getRefund(string $storeId, string $chargeId, string $id, ?bool $polling = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/charges/{chargeId}/refunds/{id}'
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
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('403', ErrorType::initWithErrorTemplate('HTTP 403 Forbidden: {$response.body#/code}'))
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
            ->type(Refund::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates metadata, message, or reason on an existing refund.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $chargeId The unique identifier of the charge.
     * @param string $id The unique identifier of the resource.
     * @param RefundUpdateRequest $body Request payload for updating refund metadata or reason.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function updateRefund(
        string $storeId,
        string $chargeId,
        string $id,
        RefundUpdateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/stores/{storeId}/charges/{chargeId}/refunds/{id}'
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
            ->type(Refund::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    // ── Hand-authored customization (kept at end of class to minimize regen conflicts) ──

    /**
     * Polls the refund status using `getRefund` with `polling=true` until a terminal status is reached.
     *
     * @param string $storeId     The unique identifier of the store.
     * @param string $chargeId    The unique identifier of the charge.
     * @param string $id          The unique identifier of the resource.
     * @param int    $maxAttempts The maximum number of polling attempts. Default is 10.
     *
     * @return ApiResponse Response from the API call containing the final terminal state (or latest state if timed out)
     */
    public function pollRefund(string $storeId, string $chargeId, string $id, int $maxAttempts = 10): ApiResponse
    {
        $terminalStatuses = [
            RefundStatus::SUCCESSFUL,
            RefundStatus::FAILED,
            RefundStatus::ERROR
        ];
        $attempts = 0;
        while ($attempts < $maxAttempts) {
            $response = $this->getRefund($storeId, $chargeId, $id, true);
            if ($response !== null && $response->getResult() !== null) {
                $status = $response->getResult()->getStatus();
                if (in_array($status, $terminalStatuses, true)) {
                    return $response;
                }
            }
            $attempts++;
        }
        return $this->getRefund($storeId, $chargeId, $id, true);
    }
}
