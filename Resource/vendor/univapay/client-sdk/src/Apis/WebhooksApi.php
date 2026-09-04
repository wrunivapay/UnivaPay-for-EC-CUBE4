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
use UnivaPay\Models\Webhook;
use UnivaPay\Models\WebhookCreateRequest;
use UnivaPay\Models\WebhookEventList;
use UnivaPay\Models\WebhookList;
use UnivaPay\Models\WebhookUpdateRequest;

class WebhooksApi extends BaseApi
{
    /**
     * Returns a paginated list of webhooks for the specified store. Requires a secret-bearing token.
     *
     * @param string $storeId The unique identifier of the store.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     * @param bool|null $active Filter by active status.
     *
     * @return ApiResponse Response from the API call
     */
    public function listWebhooks(
        string $storeId,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC,
        ?bool $active = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/webhooks')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue']),
                QueryParam::init('active', $active)->unIndexed()
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
            ->type(WebhookList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Creates a new webhook subscription for the specified store. Requires a secret-bearing token.
     * Duplicate URLs within the same scope are not allowed. There is a maximum limit on the number of
     * webhooks per store.
     *
     * @param string $storeId The unique identifier of the store.
     * @param WebhookCreateRequest $body Request payload for creating a store webhook subscription.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function createWebhook(
        string $storeId,
        WebhookCreateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/stores/{storeId}/webhooks')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
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
            ->throwErrorOn('403', ErrorType::initWithErrorTemplate('HTTP 403 Forbidden: {$response.body#/code}'))
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('HTTP 404 Not Found: {$response.body#/code}'))
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
            ->type(Webhook::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a specific webhook by ID.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function getWebhook(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/webhooks/{id}')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required()
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
            ->type(Webhook::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates an existing webhook. All fields are optional; omitted fields are left unchanged. Duplicate
     * URLs within the same scope are not allowed.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param WebhookUpdateRequest $body Request payload for updating a store webhook subscription.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function updateWebhook(
        string $storeId,
        string $id,
        WebhookUpdateRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/stores/{storeId}/webhooks/{id}')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
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
            ->type(Webhook::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deactivates and deletes a webhook subscription.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function deleteWebhook(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/stores/{storeId}/webhooks/{id}')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required()
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
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a paginated list of webhook delivery events for the specified webhook. Each event captures
     * the result of a single webhook delivery attempt.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listWebhookEvents(
        string $storeId,
        string $id,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/webhooks/{id}/events')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('id', $id)->required(),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue'])
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
            ->type(WebhookEventList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
