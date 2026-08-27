<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Apis;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use UnivaPay\Exceptions\ApiErrorException;
use UnivaPay\Http\ApiResponse;
use UnivaPay\Models\BankTransferPaymentStatus;
use UnivaPay\Models\CursorDirectionQuery;
use UnivaPay\Models\TransactionHistoryList;
use UnivaPay\Models\TransactionHistoryMode;
use UnivaPay\Models\TransactionHistoryServiceProvider;
use UnivaPay\Models\TransactionHistoryStatus;
use UnivaPay\Models\TransactionHistoryType;

class TransactionHistoryApi extends BaseApi
{
    /**
     * Returns a paginated, searchable history of charges and refunds across all of the merchant's stores,
     * combining both resource types into a single unified row shape.
     *
     * @param string|null $mode Filter by environment mode.
     * @param string|null $shortId Filter by the last 6 characters of a resource's UUID. Must be
     *        exactly 6 characters.
     * @param string|null $from Show rows created on or after this date. Accepts epoch-millis or an
     *        ISO-8601 date-time. Must not be later than `to`.
     * @param string|null $to Show rows created on or before this date. Accepts epoch-millis or an
     *        ISO-8601 date-time. Must not be earlier than `from`.
     * @param string|null $status Filter by status. Accepts any charge or refund status value.
     * @param string|null $type Filter by row type.
     * @param string|null $search Free-text search across cardholder/customer name and email. Wrap a
     *        value in quotes (`"first last"`) for an exact-phrase match; an unquoted value
     *        matches partially.
     * @param string|null $email Filter by email address.
     * @param string|null $id Filter by exact charge or refund ID.
     * @param string|null $metadata Filter by metadata.
     * @param string|null $cardExp Filter by card expiration, in `yyyy-MM` format.
     * @param string|null $cardLastFour Filter by the last 4 digits of the card. Must be exactly 4
     *        characters.
     * @param string|null $cardholder Filter by cardholder name. Partial match by default; wrap in
     *        quotes for an exact-phrase match.
     * @param string[]|null $cardBrand Deprecated legacy alias of `brand`; use `brand` instead.
     *        Repeatable via the `[]` suffix (e.g. `card_brand[]=visa&card_brand[]=jcb`). Raw
     *        brand identifiers vary by payment type — see the `user_data.brand` field on this
     *        endpoint's response.
     * @param string[]|null $brand Filter by brand. Repeatable via the `[]` suffix (e.g.
     *        `brand[]=visa&brand[]=jcb`). Raw brand identifiers vary by payment type — see the
     *        `user_data.brand` field on this endpoint's response.
     * @param string[]|null $brands Deprecated legacy alias of `brand`; use `brand` instead.
     *        Repeatable via the `[]` suffix (e.g. `brands[]=visa&brands[]=jcb`). Raw brand
     *        identifiers vary by payment type — see the `user_data.brand` field on this
     *        endpoint's response.
     * @param string|null $currency Filter by currency (ISO-4217).
     * @param string|null $serviceProvider Filter by service provider.
     * @param string[]|null $serviceProviders Filter by service provider. Repeatable via the `[]`
     *        suffix (e.g. `service_providers[]=credit&service_providers[]=paidy`). Must not be
     *        empty; duplicate values are deduplicated.
     * @param string|null $gatewayTransactionId Filter by the gateway's own transaction ID (free
     *        text).
     * @param string[]|null $bankTransferPaymentStatuses Filter bank transfer rows by payment
     *        status. Repeatable via the `[]` suffix (e.g.
     *        `bank_transfer_payment_statuses[]=unpaid&bank_transfer_payment_statuses[]=exact`).
     * @param string|null $bankTransferLatestDepositDateFrom Start of the range (inclusive) for
     *        `bank_transfer_latest_deposit_date`. Accepts epoch-millis or an ISO-8601 date-time.
     * @param string|null $bankTransferLatestDepositDateTo End of the range (inclusive) for
     *        `bank_transfer_latest_deposit_date`. Accepts epoch-millis or an ISO-8601 date-time.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listTransactionHistory(
        ?string $mode = null,
        ?string $shortId = null,
        ?string $from = null,
        ?string $to = null,
        ?string $status = null,
        ?string $type = null,
        ?string $search = null,
        ?string $email = null,
        ?string $id = null,
        ?string $metadata = null,
        ?string $cardExp = null,
        ?string $cardLastFour = null,
        ?string $cardholder = null,
        ?array $cardBrand = null,
        ?array $brand = null,
        ?array $brands = null,
        ?string $currency = null,
        ?string $serviceProvider = null,
        ?array $serviceProviders = null,
        ?string $gatewayTransactionId = null,
        ?array $bankTransferPaymentStatuses = null,
        ?string $bankTransferLatestDepositDateFrom = null,
        ?string $bankTransferLatestDepositDateTo = null,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/transaction_history')
            ->auth('JWT_TOKEN')
            ->parameters(
                QueryParam::init('mode', $mode)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryMode::class, 'checkValue']),
                QueryParam::init('short_id', $shortId)->unIndexed(),
                QueryParam::init('from', $from)->unIndexed(),
                QueryParam::init('to', $to)->unIndexed(),
                QueryParam::init('status', $status)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryStatus::class, 'checkValue']),
                QueryParam::init('type', $type)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryType::class, 'checkValue']),
                QueryParam::init('search', $search)->unIndexed(),
                QueryParam::init('email', $email)->unIndexed(),
                QueryParam::init('id', $id)->unIndexed(),
                QueryParam::init('metadata', $metadata)->unIndexed(),
                QueryParam::init('card_exp', $cardExp)->unIndexed(),
                QueryParam::init('card_last_four', $cardLastFour)->unIndexed(),
                QueryParam::init('cardholder', $cardholder)->unIndexed(),
                QueryParam::init('card_brand[]', $cardBrand)->unIndexed(),
                QueryParam::init('brand[]', $brand)->unIndexed(),
                QueryParam::init('brands[]', $brands)->unIndexed(),
                QueryParam::init('currency', $currency)->unIndexed(),
                QueryParam::init('service_provider', $serviceProvider)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryServiceProvider::class, 'checkValue']),
                QueryParam::init('service_providers[]', $serviceProviders)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryServiceProvider::class, 'checkValue']),
                QueryParam::init('gateway_transaction_id', $gatewayTransactionId)->unIndexed(),
                QueryParam::init('bank_transfer_payment_statuses[]', $bankTransferPaymentStatuses)
                    ->unIndexed()
                    ->serializeBy([BankTransferPaymentStatus::class, 'checkValue']),
                QueryParam::init('bank_transfer_latest_deposit_date.from', $bankTransferLatestDepositDateFrom)
                    ->unIndexed(),
                QueryParam::init('bank_transfer_latest_deposit_date.to', $bankTransferLatestDepositDateTo)
                    ->unIndexed(),
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
            ->type(TransactionHistoryList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Returns a paginated, searchable history of charges and refunds for a single store, combining both
     * resource types into a single unified row shape.
     *
     * @param string $storeId The unique identifier of the store.
     * @param string|null $mode Filter by environment mode.
     * @param string|null $shortId Filter by the last 6 characters of a resource's UUID. Must be
     *        exactly 6 characters.
     * @param string|null $from Show rows created on or after this date. Accepts epoch-millis or an
     *        ISO-8601 date-time. Must not be later than `to`.
     * @param string|null $to Show rows created on or before this date. Accepts epoch-millis or an
     *        ISO-8601 date-time. Must not be earlier than `from`.
     * @param string|null $status Filter by status. Accepts any charge or refund status value.
     * @param string|null $type Filter by row type.
     * @param string|null $search Free-text search across cardholder/customer name and email. Wrap a
     *        value in quotes (`"first last"`) for an exact-phrase match; an unquoted value
     *        matches partially.
     * @param string|null $email Filter by email address.
     * @param string|null $id Filter by exact charge or refund ID.
     * @param string|null $metadata Filter by metadata.
     * @param string|null $cardExp Filter by card expiration, in `yyyy-MM` format.
     * @param string|null $cardLastFour Filter by the last 4 digits of the card. Must be exactly 4
     *        characters.
     * @param string|null $cardholder Filter by cardholder name. Partial match by default; wrap in
     *        quotes for an exact-phrase match.
     * @param string[]|null $cardBrand Deprecated legacy alias of `brand`; use `brand` instead.
     *        Repeatable via the `[]` suffix (e.g. `card_brand[]=visa&card_brand[]=jcb`). Raw
     *        brand identifiers vary by payment type — see the `user_data.brand` field on this
     *        endpoint's response.
     * @param string[]|null $brand Filter by brand. Repeatable via the `[]` suffix (e.g.
     *        `brand[]=visa&brand[]=jcb`). Raw brand identifiers vary by payment type — see the
     *        `user_data.brand` field on this endpoint's response.
     * @param string[]|null $brands Deprecated legacy alias of `brand`; use `brand` instead.
     *        Repeatable via the `[]` suffix (e.g. `brands[]=visa&brands[]=jcb`). Raw brand
     *        identifiers vary by payment type — see the `user_data.brand` field on this
     *        endpoint's response.
     * @param string|null $currency Filter by currency (ISO-4217).
     * @param string|null $serviceProvider Filter by service provider.
     * @param string[]|null $serviceProviders Filter by service provider. Repeatable via the `[]`
     *        suffix (e.g. `service_providers[]=credit&service_providers[]=paidy`). Must not be
     *        empty; duplicate values are deduplicated.
     * @param string|null $gatewayTransactionId Filter by the gateway's own transaction ID (free
     *        text).
     * @param string[]|null $bankTransferPaymentStatuses Filter bank transfer rows by payment
     *        status. Repeatable via the `[]` suffix (e.g.
     *        `bank_transfer_payment_statuses[]=unpaid&bank_transfer_payment_statuses[]=exact`).
     * @param string|null $bankTransferLatestDepositDateFrom Start of the range (inclusive) for
     *        `bank_transfer_latest_deposit_date`. Accepts epoch-millis or an ISO-8601 date-time.
     * @param string|null $bankTransferLatestDepositDateTo End of the range (inclusive) for
     *        `bank_transfer_latest_deposit_date`. Accepts epoch-millis or an ISO-8601 date-time.
     * @param int|null $limit Maximum number of resources to return in one page.
     * @param string|null $cursor Cursor pointing to the resource after which pagination should
     *        continue.
     * @param string|null $cursorDirection Pagination direction relative to the supplied cursor.
     *
     * @return ApiResponse Response from the API call
     */
    public function listStoreTransactionHistory(
        string $storeId,
        ?string $mode = null,
        ?string $shortId = null,
        ?string $from = null,
        ?string $to = null,
        ?string $status = null,
        ?string $type = null,
        ?string $search = null,
        ?string $email = null,
        ?string $id = null,
        ?string $metadata = null,
        ?string $cardExp = null,
        ?string $cardLastFour = null,
        ?string $cardholder = null,
        ?array $cardBrand = null,
        ?array $brand = null,
        ?array $brands = null,
        ?string $currency = null,
        ?string $serviceProvider = null,
        ?array $serviceProviders = null,
        ?string $gatewayTransactionId = null,
        ?array $bankTransferPaymentStatuses = null,
        ?string $bankTransferLatestDepositDateFrom = null,
        ?string $bankTransferLatestDepositDateTo = null,
        ?int $limit = 10,
        ?string $cursor = null,
        ?string $cursorDirection = CursorDirectionQuery::DESC
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/stores/{storeId}/transaction_history')
            ->auth('JWT_TOKEN')
            ->parameters(
                TemplateParam::init('storeId', $storeId)->required(),
                QueryParam::init('mode', $mode)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryMode::class, 'checkValue']),
                QueryParam::init('short_id', $shortId)->unIndexed(),
                QueryParam::init('from', $from)->unIndexed(),
                QueryParam::init('to', $to)->unIndexed(),
                QueryParam::init('status', $status)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryStatus::class, 'checkValue']),
                QueryParam::init('type', $type)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryType::class, 'checkValue']),
                QueryParam::init('search', $search)->unIndexed(),
                QueryParam::init('email', $email)->unIndexed(),
                QueryParam::init('id', $id)->unIndexed(),
                QueryParam::init('metadata', $metadata)->unIndexed(),
                QueryParam::init('card_exp', $cardExp)->unIndexed(),
                QueryParam::init('card_last_four', $cardLastFour)->unIndexed(),
                QueryParam::init('cardholder', $cardholder)->unIndexed(),
                QueryParam::init('card_brand[]', $cardBrand)->unIndexed(),
                QueryParam::init('brand[]', $brand)->unIndexed(),
                QueryParam::init('brands[]', $brands)->unIndexed(),
                QueryParam::init('currency', $currency)->unIndexed(),
                QueryParam::init('service_provider', $serviceProvider)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryServiceProvider::class, 'checkValue']),
                QueryParam::init('service_providers[]', $serviceProviders)
                    ->unIndexed()
                    ->serializeBy([TransactionHistoryServiceProvider::class, 'checkValue']),
                QueryParam::init('gateway_transaction_id', $gatewayTransactionId)->unIndexed(),
                QueryParam::init('bank_transfer_payment_statuses[]', $bankTransferPaymentStatuses)
                    ->unIndexed()
                    ->serializeBy([BankTransferPaymentStatus::class, 'checkValue']),
                QueryParam::init('bank_transfer_latest_deposit_date.from', $bankTransferLatestDepositDateFrom)
                    ->unIndexed(),
                QueryParam::init('bank_transfer_latest_deposit_date.to', $bankTransferLatestDepositDateTo)
                    ->unIndexed(),
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
            ->type(TransactionHistoryList::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
