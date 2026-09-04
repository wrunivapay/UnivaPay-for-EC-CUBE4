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
use UnivaPay\Models\Charge;
use UnivaPay\Models\ChargeList;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Models\CursorDirectionQuery;
use UnivaPay\Models\Subscription;
use UnivaPay\Models\SubscriptionCreateRequest;
use UnivaPay\Models\SubscriptionList;
use UnivaPay\Models\SubscriptionPatchPaymentRequest;
use UnivaPay\Models\SubscriptionPatchTokenRequest;
use UnivaPay\Models\SubscriptionPayment;
use UnivaPay\Models\SubscriptionPaymentList;
use UnivaPay\Models\SubscriptionSimulationPayment;
use UnivaPay\Models\SubscriptionSimulationRequest;
use UnivaPay\Models\SubscriptionStatus;
use UnivaPay\Models\SubscriptionSuspendRequest;
use UnivaPay\Models\SubscriptionUpdateRequest;

class SubscriptionsApi extends BaseApi
{
    /**
     * Creates a new subscription.
     *
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param SubscriptionCreateRequest|null $body Create Subscription request
     *
     * @return ApiResponse Response from the API call
     */
    public function createSubscription(
        ?string $idempotencyKey = null,
        ?SubscriptionCreateRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions')
            ->auth('JWT_TOKEN')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                HeaderParam::init('Idempotency-Key', $idempotencyKey),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate('HTTP 401 Unauthorized: {$response.body#/code}')
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
            ->type(Subscription::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all subscriptions across all stores.
     *
     * @param string|null $search Search by metadata values.
     * @param string|null $status Filter subscriptions by current status.
     * @param string|null $mode Filter subscriptions by processing mode.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listAllSubscriptions(
        ?string $search = null,
        ?string $status = null,
        ?string $mode = null,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/subscriptions')
            ->auth('JWT_TOKEN')
            ->parameters(
                QueryParam::init('search', $search)->unIndexed(),
                QueryParam::init('status', $status)
                    ->unIndexed()
                    ->serializeBy([SubscriptionStatus::class, 'checkValue']),
                QueryParam::init('mode', $mode)->unIndexed()->serializeBy([ChargeMode::class, 'checkValue']),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate('HTTP 401 Unauthorized: {$response.body#/code}')
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
            ->type(SubscriptionList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Simulates the payment schedule that a subscription would follow, without creating a live
     * subscription or a transaction token. Returns a bare array of the scheduled payments that would
     * result from the given amount, currency, period (or cyclical period), and plan settings.
     *
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param SubscriptionSimulationRequest|null $body Subscription Plan Simulation request
     *
     * @return ApiResponse Response from the API call
     */
    public function simulateSubscriptionPlan(
        ?string $idempotencyKey = null,
        ?SubscriptionSimulationRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/subscriptions/simulate_plan')
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
            ->type(SubscriptionSimulationPayment::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all subscriptions for a specific store.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string|null $search Search by metadata values.
     * @param string|null $status Filter subscriptions by current status.
     * @param string|null $mode Filter subscriptions by processing mode.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listStoreSubscriptions(
        string $storeId,
        ?string $search = null,
        ?string $status = null,
        ?string $mode = null,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/subscriptions')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                QueryParam::init('search', $search)->unIndexed(),
                QueryParam::init('status', $status)
                    ->unIndexed()
                    ->serializeBy([SubscriptionStatus::class, 'checkValue']),
                QueryParam::init('mode', $mode)->unIndexed()->serializeBy([ChargeMode::class, 'checkValue']),
                QueryParam::init('limit', $limit)->unIndexed(),
                QueryParam::init('cursor', $cursor)->unIndexed(),
                QueryParam::init('cursor_direction', $cursorDirection)
                    ->unIndexed()
                    ->serializeBy([CursorDirectionQuery::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn(
                '401',
                ErrorType::initWithErrorTemplate('HTTP 401 Unauthorized: {$response.body#/code}')
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
            ->type(SubscriptionList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Simulates the payment schedule that a subscription would follow for a specific store, without
     * creating a live subscription or a transaction token. Returns a bare array of the scheduled payments
     * that would result from the given amount, currency, period (or cyclical period), and plan settings.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param SubscriptionSimulationRequest|null $body Subscription Plan Simulation request
     *
     * @return ApiResponse Response from the API call
     */
    public function simulateStoreSubscriptionPlan(
        string $storeId,
        ?string $idempotencyKey = null,
        ?SubscriptionSimulationRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/stores/{storeId}/subscriptions/simulate_plan')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
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
            ->type(SubscriptionSimulationPayment::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the details of an existing subscription.  Supports internal polling to wait for status
     * changes.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The Subscription ID.
     * @param bool|null $polling If set to true, instructs the API to internally poll the
     *        subscription  status until it changes from 'unverified' (the initial status) to
     *        another status.
     *
     * @return ApiResponse Response from the API call
     */
    public function getSubscription(string $storeId, string $id, ?bool $polling = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/subscriptions/{id}')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
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
            ->type(Subscription::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the configuration, payment method, or schedule of a specific subscription.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param SubscriptionUpdateRequest|null $body Properties to update on the subscription.
     *
     * @return ApiResponse Response from the API call
     */
    public function updateSubscription(
        string $storeId,
        string $id,
        ?string $idempotencyKey = null,
        ?SubscriptionUpdateRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PATCH, '/stores/{storeId}/subscriptions/{id}')
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
                '404',
                ErrorType::initWithErrorTemplate(
                    'HTTP 404 Not Found: {$response.body#/code}',
                    ApiErrorException::class
                )
            )
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
            ->type(Subscription::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Cancels an existing subscription. The subscription status will be  permanently changed to `canceled`
     * and it cannot be resumed.  Please proceed with caution.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $id The unique identifier of the resource.
     *
     * @return ApiResponse Response from the API call
     */
    public function cancelSubscription(string $storeId, string $id): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/stores/{storeId}/subscriptions/{id}')
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
     * Retrieves a list of all historical and scheduled payments for a  specific subscription.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listSubscriptionPayments(
        string $storeId,
        string $subscriptionId,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/subscriptions/{subscriptionId}/payments'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required(),
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
            ->type(SubscriptionPaymentList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the details of an individual payment associated with a specific subscription.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     * @param string $paymentId The unique identifier of the scheduled payment of a subscription
     *
     * @return ApiResponse Response from the API call
     */
    public function getSubscriptionPayment(string $storeId, string $subscriptionId, string $paymentId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/subscriptions/{subscriptionId}/payments/{paymentId}'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required(),
                TemplateParam::init('paymentId', $paymentId)->required()
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
            ->type(SubscriptionPayment::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates properties of a specific scheduled payment for a subscription. Can be used to change the due
     * date when permitted, mark the payment as paid, schedule a termination status, or set a retry
     * interval.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     * @param string $paymentId The unique identifier of the scheduled payment of a subscription
     * @param SubscriptionPatchPaymentRequest $body Request payload for updating a scheduled
     *        subscription payment.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function updateSubscriptionPayment(
        string $storeId,
        string $subscriptionId,
        string $paymentId,
        SubscriptionPatchPaymentRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/stores/{storeId}/subscriptions/{subscriptionId}/payments/{paymentId}'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required(),
                TemplateParam::init('paymentId', $paymentId)->required(),
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
            ->type(SubscriptionPayment::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the most recent charge created for a specific subscription. Returns 404 if no charges have
     * been attempted yet.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     *
     * @return ApiResponse Response from the API call
     */
    public function getSubscriptionLatestCharge(string $storeId, string $subscriptionId): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/subscriptions/{subscriptionId}/charges/latest'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required()
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
            ->type(Charge::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a paginated list of charges linked to a subscription. Backend search uses the same charge
     * search surface as normal charge listing and adds a subscription filter for the requested
     * subscription.
     *
     * @param string $merchantId The unique identifier of the merchant.
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listSubscriptionCharges(
        string $merchantId,
        string $storeId,
        string $subscriptionId,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/merchants/{merchantId}/stores/{storeId}/subscriptions/{subscriptionId}/charges'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('merchantId', $merchantId)->required(),
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required(),
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
            ->type(ChargeList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves a paginated list of all charge attempts made for a specific scheduled payment of a
     * subscription. Useful for inspecting retry history.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     * @param string $paymentId The unique identifier of the scheduled payment of a subscription
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listChargesForSubscriptionPayment(
        string $storeId,
        string $subscriptionId,
        string $paymentId,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/stores/{storeId}/subscriptions/{subscriptionId}/payments/{paymentId}/charges'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required(),
                TemplateParam::init('paymentId', $paymentId)->required(),
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
            ->type(ChargeList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Suspends a subscription that is currently `current` or `unpaid`. The `termination_mode` controls
     * when the suspension takes effect: `immediate` (default) suspends right away, `on_next_payment` waits
     * until the next scheduled payment date before suspending.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     * @param SubscriptionSuspendRequest|null $body Request payload for suspending a subscription.
     *
     * @return ApiResponse Response from the API call
     */
    public function suspendSubscription(
        string $storeId,
        string $subscriptionId,
        ?string $idempotencyKey = null,
        ?SubscriptionSuspendRequest $body = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/stores/{storeId}/subscriptions/{subscriptionId}/suspend'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required(),
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
            ->type(Subscription::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Resumes a subscription that is currently `suspended`, setting its status back to `unpaid` and
     * rescheduling the next payment. No request body is required.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function unsuspendSubscription(
        string $storeId,
        string $subscriptionId,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/stores/{storeId}/subscriptions/{subscriptionId}/unsuspend'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required(),
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
            ->type(Subscription::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Replaces the payment method (transaction token) used for a subscription. Useful when a card expires
     * or a customer wants to switch payment methods. The new token must belong to the same store, be
     * active, and match the subscription's processing mode (live/test). One-time tokens are not accepted;
     * use a recurring or subscription token.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string $subscriptionId The unique identifier of the subscription.
     * @param SubscriptionPatchTokenRequest $body Request payload for replacing a subscription
     *        payment token.
     * @param string|null $idempotencyKey An optional idempotency key to prevent double charges and
     *        duplicate operations. We recommend a randomly generated UUID (v4).
     *
     * @return ApiResponse Response from the API call
     */
    public function updateSubscriptionToken(
        string $storeId,
        string $subscriptionId,
        SubscriptionPatchTokenRequest $body,
        ?string $idempotencyKey = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PATCH,
            '/stores/{storeId}/subscriptions/{subscriptionId}/token'
        )
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                TemplateParam::init('subscriptionId', $subscriptionId)->required(),
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
            ->type(Subscription::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    // ── Hand-authored customization (kept at end of class to minimize regen conflicts) ──

    /**
     * Polls the subscription status using `getSubscription` with `polling=true` until a terminal status is reached.
     *
     * @param string $storeId     The unique identifier of the store.
     * @param string $id          The Subscription ID.
     * @param int    $maxAttempts The maximum number of polling attempts. Default is 10.
     *
     * @return ApiResponse Response from the API call containing the final terminal state (or latest state if timed out)
     */
    public function pollSubscription(string $storeId, string $id, int $maxAttempts = 10): ApiResponse
    {
        $attempts = 0;
        while ($attempts < $maxAttempts) {
            $response = $this->getSubscription($storeId, $id, true);
            if ($response !== null && $response->getResult() !== null) {
                $status = $response->getResult()->getStatus();
                if ($status !== SubscriptionStatus::UNVERIFIED) {
                    return $response;
                }
            }
            $attempts++;
        }
        return $this->getSubscription($storeId, $id, true);
    }
}
