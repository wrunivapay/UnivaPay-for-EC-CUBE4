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
use UnivaPay\Models\CreateCustomerIdRequest;
use UnivaPay\Models\CreateCustomerIdResponse;
use UnivaPay\Models\CursorDirectionQuery;
use UnivaPay\Models\Store;
use UnivaPay\Models\StoreList;

class StoresApi extends BaseApi
{
    /**
     * Returns stores visible to the current merchant credential. Supports cursor pagination plus
     * `short_id` and free-text `search` filters.
     *
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     * @param string|null $shortId Filter by short identifier.
     * @param string|null $search Case-insensitive free-text search.
     *
     * @return ApiResponse Response from the API call
     */
    public function listStores(
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC,
        ?string $shortId = null,
        ?string $search = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores')
            ->auth('JWT_TOKEN')
            ->parameters(
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue']),
                QueryParam::init('short_id', $shortId)->unIndexed(),
                QueryParam::init('search', $search)->unIndexed()
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
            ->type(StoreList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a single store plus its resolved configuration snapshot for the current merchant context.
     *
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function getStore(string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{id}')
            ->auth('JWT_TOKEN')
            ->parameters(TemplateParam::init('id', $id)->required());

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
            ->type(Store::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Derives a deterministic, store-scoped UUID from a local customer identifier supplied by the merchant.
     * Calling this endpoint again with the same `customer_id` for the same store always returns the same
     * UUID — the operation has no side effects (nothing is persisted), so it is safe to call repeatedly
     * and does not require an `Idempotency-Key`. App Token Secret is required.
     *
     * @param string $storeId The unique identifier of the store.
     * @param CreateCustomerIdRequest $body Request payload for deriving a customer ID.
     *
     * @return ApiResponse Response from the API call
     */
    public function createCustomerId(string $storeId, CreateCustomerIdRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/stores/{storeId}/create_customer_id')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)->required()
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
            ->type(CreateCustomerIdResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
