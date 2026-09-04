<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Apis;

use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use UnivaPay\Exceptions\ApiErrorException;
use UnivaPay\Http\ApiResponse;
use UnivaPay\Models\CheckoutInfo;

class CheckoutApi extends BaseApi
{
    /**
     * Returns the merchant's checkout configuration: enabled payment methods and their limits,
     * installment/subscription plan settings, convenience-store and bank-transfer settings, widget theme,
     * and per-brand feature support. Resolved entirely from the bearer credential — takes no parameters.
     *
     * @return ApiResponse Response from the API call
     */
    public function getCheckoutInfo(): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/checkout_info')->auth('JWT_TOKEN');

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
                '429',
                ErrorType::initWithErrorTemplate('HTTP 429 Rate Limited: {$response.body#/code}')
            )
            ->throwErrorOn('400', ErrorType::initWithErrorTemplate('HTTP 400 Bad Request: {$response.body#/code}'))
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('HTTP 404 Not Found: {$response.body#/code}'))
            ->throwErrorOn('409', ErrorType::initWithErrorTemplate('HTTP 409 Conflict: {$response.body#/code}'))
            ->throwErrorOn(
                '500',
                ErrorType::initWithErrorTemplate('HTTP 500 Server Error: {$response.body#/code}')
            )
            ->throwErrorOn('503', ErrorType::initWithErrorTemplate('HTTP 503 Unavailable: {$response.body#/code}'))
            ->throwErrorOn('504', ErrorType::initWithErrorTemplate('HTTP 504 Timeout: {$response.body#/code}'))
            ->throwErrorOn('0', ErrorType::initWithErrorTemplate('HTTP {$statusCode}: {$response.body#/code}'))
            ->type(CheckoutInfo::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
