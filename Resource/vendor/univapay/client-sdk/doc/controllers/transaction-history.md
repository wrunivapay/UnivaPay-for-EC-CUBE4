# Transaction History

```php
$transactionHistoryApi = $client->getTransactionHistoryApi();
```

## Class Name

`TransactionHistoryApi`

## Methods

* [List Transaction History](../../doc/controllers/transaction-history.md#list-transaction-history)
* [List Store Transaction History](../../doc/controllers/transaction-history.md#list-store-transaction-history)


# List Transaction History

Returns a paginated, searchable history of charges and refunds across all of the merchant's stores, combining both resource types into a single unified row shape.

```php
function listTransactionHistory(
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
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `mode` | [`?string(TransactionHistoryMode)`](../../doc/models/transaction-history-mode.md) | Query, Optional | Filter by environment mode. |
| `shortId` | `?string` | Query, Optional | Filter by the last 6 characters of a resource's UUID. Must be exactly 6 characters. |
| `from` | `?string` | Query, Optional | Show rows created on or after this date. Accepts epoch-millis or an ISO-8601 date-time. Must not be later than `to`. |
| `to` | `?string` | Query, Optional | Show rows created on or before this date. Accepts epoch-millis or an ISO-8601 date-time. Must not be earlier than `from`. |
| `status` | [`?string(TransactionHistoryStatus)`](../../doc/models/transaction-history-status.md) | Query, Optional | Filter by status. Accepts any charge or refund status value. |
| `type` | [`?string(TransactionHistoryType)`](../../doc/models/transaction-history-type.md) | Query, Optional | Filter by row type. |
| `search` | `?string` | Query, Optional | Free-text search across cardholder/customer name and email. Wrap a value in quotes (`"first last"`) for an exact-phrase match; an unquoted value matches partially. |
| `email` | `?string` | Query, Optional | Filter by email address. |
| `id` | `?string` | Query, Optional | Filter by exact charge or refund ID. |
| `metadata` | `?string` | Query, Optional | Filter by metadata. |
| `cardExp` | `?string` | Query, Optional | Filter by card expiration, in `yyyy-MM` format. |
| `cardLastFour` | `?string` | Query, Optional | Filter by the last 4 digits of the card. Must be exactly 4 characters. |
| `cardholder` | `?string` | Query, Optional | Filter by cardholder name. Partial match by default; wrap in quotes for an exact-phrase match. |
| `cardBrand` | `?(string[])` | Query, Optional | Deprecated legacy alias of `brand`; use `brand` instead. Repeatable via the `[]` suffix (e.g. `card_brand[]=visa&card_brand[]=jcb`). Raw brand identifiers vary by payment type — see the `user_data.brand` field on this endpoint's response. |
| `brand` | `?(string[])` | Query, Optional | Filter by brand. Repeatable via the `[]` suffix (e.g. `brand[]=visa&brand[]=jcb`). Raw brand identifiers vary by payment type — see the `user_data.brand` field on this endpoint's response. |
| `brands` | `?(string[])` | Query, Optional | Deprecated legacy alias of `brand`; use `brand` instead. Repeatable via the `[]` suffix (e.g. `brands[]=visa&brands[]=jcb`). Raw brand identifiers vary by payment type — see the `user_data.brand` field on this endpoint's response. |
| `currency` | `?string` | Query, Optional | Filter by currency (ISO-4217). |
| `serviceProvider` | [`?string(TransactionHistoryServiceProvider)`](../../doc/models/transaction-history-service-provider.md) | Query, Optional | Filter by service provider. |
| `serviceProviders` | [`?(string(TransactionHistoryServiceProvider)[])`](../../doc/models/transaction-history-service-provider.md) | Query, Optional | Filter by service provider. Repeatable via the `[]` suffix (e.g. `service_providers[]=credit&service_providers[]=paidy`). Must not be empty; duplicate values are deduplicated. |
| `gatewayTransactionId` | `?string` | Query, Optional | Filter by the gateway's own transaction ID (free text). |
| `bankTransferPaymentStatuses` | [`?(string(BankTransferPaymentStatus)[])`](../../doc/models/bank-transfer-payment-status.md) | Query, Optional | Filter bank transfer rows by payment status. Repeatable via the `[]` suffix (e.g. `bank_transfer_payment_statuses[]=unpaid&bank_transfer_payment_statuses[]=exact`). |
| `bankTransferLatestDepositDateFrom` | `?string` | Query, Optional | Start of the range (inclusive) for `bank_transfer_latest_deposit_date`. Accepts epoch-millis or an ISO-8601 date-time. |
| `bankTransferLatestDepositDateTo` | `?string` | Query, Optional | End of the range (inclusive) for `bank_transfer_latest_deposit_date`. Accepts epoch-millis or an ISO-8601 date-time. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |

## Response Type

**200**: Paginated transaction history.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`TransactionHistoryList`](../../doc/models/transaction-history-list.md).

## Example Usage

```php
$mode = TransactionHistoryMode::TEST;

$shortId = '8bfc29';

$from = '04/01/2026 00:00:00';

$to = '04/30/2026 23:59:59';

$status = TransactionHistoryStatus::SUCCESSFUL;

$type = TransactionHistoryType::CHARGE;

$search = 'Taro Yamada';

$email = 'user@example.com';

$id = '11ef0000-0000-4000-8000-000000000070';

$metadata = 'order_id: 12345';

$cardExp = '2026-04';

$cardLastFour = '4242';

$cardholder = 'TARO YAMADA';

$cardBrand = Liquid error: Value cannot be null. (Parameter 'key');

$brand = Liquid error: Value cannot be null. (Parameter 'key');

$brands = Liquid error: Value cannot be null. (Parameter 'key');

$currency = 'JPY';

$serviceProvider = TransactionHistoryServiceProvider::CREDIT;

$serviceProviders = Liquid error: Value cannot be null. (Parameter 'key');

$gatewayTransactionId = 'gw-txn-00123456';

$bankTransferPaymentStatuses = Liquid error: Value cannot be null. (Parameter 'key');

$bankTransferLatestDepositDateFrom = '04/01/2026 00:00:00';

$bankTransferLatestDepositDateTo = '04/30/2026 23:59:59';

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$transactionHistoryApi = $client->getTransactionHistoryApi();
$apiResponse = $transactionHistoryApi->listTransactionHistory(
    $mode,
    $shortId,
    $from,
    $to,
    $status,
    $type,
    $search,
    $email,
    $id,
    $metadata,
    $cardExp,
    $cardLastFour,
    $cardholder,
    $cardBrand,
    $brand,
    $brands,
    $currency,
    $serviceProvider,
    $serviceProviders,
    $gatewayTransactionId,
    $bankTransferPaymentStatuses,
    $bankTransferLatestDepositDateFrom,
    $bankTransferLatestDepositDateTo,
    $limit,
    $cursor,
    $cursorDirection
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'TransactionHistoryList:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "items": [
    {
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "resource_id": "11ef0000-0000-4000-8000-000000000070",
      "charge_id": null,
      "amount": 1000,
      "currency": "JPY",
      "amount_formatted": 1000,
      "type": "charge",
      "status": "successful",
      "metadata": {},
      "created_on": "2024-05-01T12:34:56.789Z",
      "mode": "test",
      "merchant_name": "Test merchant",
      "store_name": "Test store",
      "payment_type": "card",
      "user_data": {
        "type": "charge",
        "cardholder_name": "Some Guy",
        "cardholder_email_address": "test4@univapay.com",
        "brand": "visa",
        "gateway": "test",
        "service_provider": "credit",
        "refunds": [
          {
            "refund_id": "11ef0000-0000-4000-8000-000000000010",
            "amount": 500,
            "currency": "JPY",
            "amount_formatted": 500,
            "status": "successful"
          }
        ]
      },
      "bank_transfer_payment_status": null,
      "bank_transfer_latest_deposit_date": null,
      "mcp_token_id": null,
      "charge_type": "normal"
    },
    {
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "resource_id": "11ef0000-0000-4000-8000-000000000010",
      "charge_id": "11ef0000-0000-4000-8000-000000000070",
      "amount": 500,
      "currency": "JPY",
      "amount_formatted": 500,
      "type": "refund",
      "status": "successful",
      "metadata": {},
      "created_on": "2024-05-01T13:00:00.000000Z",
      "mode": "test",
      "merchant_name": "Test merchant",
      "store_name": "Test store",
      "payment_type": "card",
      "user_data": {
        "type": "refund",
        "reason": "customer_request"
      },
      "bank_transfer_payment_status": null,
      "bank_transfer_latest_deposit_date": null,
      "mcp_token_id": null,
      "charge_type": null
    }
  ],
  "has_more": false,
  "total_hits": 2
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# List Store Transaction History

Returns a paginated, searchable history of charges and refunds for a single store, combining both resource types into a single unified row shape.

```php
function listStoreTransactionHistory(
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
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `mode` | [`?string(TransactionHistoryMode)`](../../doc/models/transaction-history-mode.md) | Query, Optional | Filter by environment mode. |
| `shortId` | `?string` | Query, Optional | Filter by the last 6 characters of a resource's UUID. Must be exactly 6 characters. |
| `from` | `?string` | Query, Optional | Show rows created on or after this date. Accepts epoch-millis or an ISO-8601 date-time. Must not be later than `to`. |
| `to` | `?string` | Query, Optional | Show rows created on or before this date. Accepts epoch-millis or an ISO-8601 date-time. Must not be earlier than `from`. |
| `status` | [`?string(TransactionHistoryStatus)`](../../doc/models/transaction-history-status.md) | Query, Optional | Filter by status. Accepts any charge or refund status value. |
| `type` | [`?string(TransactionHistoryType)`](../../doc/models/transaction-history-type.md) | Query, Optional | Filter by row type. |
| `search` | `?string` | Query, Optional | Free-text search across cardholder/customer name and email. Wrap a value in quotes (`"first last"`) for an exact-phrase match; an unquoted value matches partially. |
| `email` | `?string` | Query, Optional | Filter by email address. |
| `id` | `?string` | Query, Optional | Filter by exact charge or refund ID. |
| `metadata` | `?string` | Query, Optional | Filter by metadata. |
| `cardExp` | `?string` | Query, Optional | Filter by card expiration, in `yyyy-MM` format. |
| `cardLastFour` | `?string` | Query, Optional | Filter by the last 4 digits of the card. Must be exactly 4 characters. |
| `cardholder` | `?string` | Query, Optional | Filter by cardholder name. Partial match by default; wrap in quotes for an exact-phrase match. |
| `cardBrand` | `?(string[])` | Query, Optional | Deprecated legacy alias of `brand`; use `brand` instead. Repeatable via the `[]` suffix (e.g. `card_brand[]=visa&card_brand[]=jcb`). Raw brand identifiers vary by payment type — see the `user_data.brand` field on this endpoint's response. |
| `brand` | `?(string[])` | Query, Optional | Filter by brand. Repeatable via the `[]` suffix (e.g. `brand[]=visa&brand[]=jcb`). Raw brand identifiers vary by payment type — see the `user_data.brand` field on this endpoint's response. |
| `brands` | `?(string[])` | Query, Optional | Deprecated legacy alias of `brand`; use `brand` instead. Repeatable via the `[]` suffix (e.g. `brands[]=visa&brands[]=jcb`). Raw brand identifiers vary by payment type — see the `user_data.brand` field on this endpoint's response. |
| `currency` | `?string` | Query, Optional | Filter by currency (ISO-4217). |
| `serviceProvider` | [`?string(TransactionHistoryServiceProvider)`](../../doc/models/transaction-history-service-provider.md) | Query, Optional | Filter by service provider. |
| `serviceProviders` | [`?(string(TransactionHistoryServiceProvider)[])`](../../doc/models/transaction-history-service-provider.md) | Query, Optional | Filter by service provider. Repeatable via the `[]` suffix (e.g. `service_providers[]=credit&service_providers[]=paidy`). Must not be empty; duplicate values are deduplicated. |
| `gatewayTransactionId` | `?string` | Query, Optional | Filter by the gateway's own transaction ID (free text). |
| `bankTransferPaymentStatuses` | [`?(string(BankTransferPaymentStatus)[])`](../../doc/models/bank-transfer-payment-status.md) | Query, Optional | Filter bank transfer rows by payment status. Repeatable via the `[]` suffix (e.g. `bank_transfer_payment_statuses[]=unpaid&bank_transfer_payment_statuses[]=exact`). |
| `bankTransferLatestDepositDateFrom` | `?string` | Query, Optional | Start of the range (inclusive) for `bank_transfer_latest_deposit_date`. Accepts epoch-millis or an ISO-8601 date-time. |
| `bankTransferLatestDepositDateTo` | `?string` | Query, Optional | End of the range (inclusive) for `bank_transfer_latest_deposit_date`. Accepts epoch-millis or an ISO-8601 date-time. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |

## Response Type

**200**: Paginated transaction history for the store.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`TransactionHistoryList`](../../doc/models/transaction-history-list.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$mode = TransactionHistoryMode::TEST;

$shortId = '8bfc29';

$from = '04/01/2026 00:00:00';

$to = '04/30/2026 23:59:59';

$status = TransactionHistoryStatus::SUCCESSFUL;

$type = TransactionHistoryType::CHARGE;

$search = 'Taro Yamada';

$email = 'user@example.com';

$id = '11ef0000-0000-4000-8000-000000000070';

$metadata = 'order_id: 12345';

$cardExp = '2026-04';

$cardLastFour = '4242';

$cardholder = 'TARO YAMADA';

$cardBrand = Liquid error: Value cannot be null. (Parameter 'key');

$brand = Liquid error: Value cannot be null. (Parameter 'key');

$brands = Liquid error: Value cannot be null. (Parameter 'key');

$currency = 'JPY';

$serviceProvider = TransactionHistoryServiceProvider::CREDIT;

$serviceProviders = Liquid error: Value cannot be null. (Parameter 'key');

$gatewayTransactionId = 'gw-txn-00123456';

$bankTransferPaymentStatuses = Liquid error: Value cannot be null. (Parameter 'key');

$bankTransferLatestDepositDateFrom = '04/01/2026 00:00:00';

$bankTransferLatestDepositDateTo = '04/30/2026 23:59:59';

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$transactionHistoryApi = $client->getTransactionHistoryApi();
$apiResponse = $transactionHistoryApi->listStoreTransactionHistory(
    $storeId,
    $mode,
    $shortId,
    $from,
    $to,
    $status,
    $type,
    $search,
    $email,
    $id,
    $metadata,
    $cardExp,
    $cardLastFour,
    $cardholder,
    $cardBrand,
    $brand,
    $brands,
    $currency,
    $serviceProvider,
    $serviceProviders,
    $gatewayTransactionId,
    $bankTransferPaymentStatuses,
    $bankTransferLatestDepositDateFrom,
    $bankTransferLatestDepositDateTo,
    $limit,
    $cursor,
    $cursorDirection
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'TransactionHistoryList:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "items": [
    {
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "resource_id": "11ef0000-0000-4000-8000-000000000072",
      "charge_id": null,
      "amount": 2500,
      "currency": "JPY",
      "amount_formatted": 2500,
      "type": "charge",
      "status": "awaiting",
      "metadata": {},
      "created_on": "2024-05-03T10:00:00.000000Z",
      "mode": "live",
      "merchant_name": "Test merchant",
      "store_name": "Test store",
      "payment_type": "bank_transfer",
      "user_data": {
        "type": "charge",
        "cardholder_email_address": "test_bank_transfer@test.com",
        "brand": "aozora_bank",
        "gateway": "aozora_bank",
        "service_provider": "bank_transfer",
        "refunds": []
      },
      "bank_transfer_payment_status": "unpaid",
      "bank_transfer_latest_deposit_date": null,
      "mcp_token_id": null,
      "charge_type": "normal"
    }
  ],
  "has_more": false,
  "total_hits": 1
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |

