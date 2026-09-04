# Stores

Store discovery and configuration endpoints for merchant contexts.

```php
$storesApi = $client->getStoresApi();
```

## Class Name

`StoresApi`

## Methods

* [List Stores](../../doc/controllers/stores.md#list-stores)
* [Get Store](../../doc/controllers/stores.md#get-store)
* [Create Customer Id](../../doc/controllers/stores.md#create-customer-id)


# List Stores

Returns stores visible to the current merchant credential. Supports cursor pagination plus `short_id` and free-text `search` filters.

```php
function listStores(
    ?int $limit = 10,
    ?string $cursor = null,
    ?string $cursorDirection = CursorDirectionQuery::DESC,
    ?string $shortId = null,
    ?string $search = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |
| `shortId` | `?string` | Query, Optional | Filter by short identifier. |
| `search` | `?string` | Query, Optional | Case-insensitive free-text search. |

## Response Type

**200**: Paginated store result set.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`StoreList`](../../doc/models/store-list.md).

## Example Usage

```php
$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$shortId = 'st_01hxy9p8zw4d';

$search = 'tokyo';

$storesApi = $client->getStoresApi();
$apiResponse = $storesApi->listStores(
    $limit,
    $cursor,
    $cursorDirection,
    $shortId,
    $search
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'StoreList:';
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
      "id": "11ef0000-0000-4000-8000-000000000022",
      "name": "Tokyo Store",
      "merchant_name": "Example Merchant",
      "created_on": "2026-04-09T07:35:50.000000Z"
    },
    {
      "id": "11ef0000-0000-4000-8000-000000000023",
      "name": "Osaka Store",
      "merchant_name": "Example Merchant",
      "created_on": "2026-04-10T09:12:30.000000Z"
    },
    {
      "id": "11ef0000-0000-4000-8000-000000000024",
      "name": "Online Store",
      "merchant_name": "Example Merchant",
      "created_on": "2026-04-12T14:45:05.000000Z"
    }
  ],
  "has_more": false,
  "total_hits": 3
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Get Store

Returns a single store plus its resolved configuration snapshot for the current merchant context.

```php
function getStore(string $id): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `string` | Template, Required | The unique identifier of the resource. |

## Response Type

**200**: Store resource.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Store`](../../doc/models/store.md).

## Example Usage

```php
$id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

$storesApi = $client->getStoresApi();
$apiResponse = $storesApi->getStore($id);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Store:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11ef0000-0000-4000-8000-000000000022",
  "name": "Tokyo Store",
  "created_on": "2026-04-09T07:35:50.000000Z",
  "configuration": {
    "percent_fee": 3.6,
    "country": "JP",
    "language": "ja",
    "minimum_charge_amounts": [
      {
        "amount": 100,
        "currency": "JPY"
      }
    ],
    "maximum_charge_amounts": [
      {
        "amount": 100000,
        "currency": "JPY"
      }
    ],
    "user_transactions_configuration": {
      "enabled": true,
      "notify_customer": true,
      "notify_on_webhook_failure": true
    },
    "card_configuration": {
      "enabled": true,
      "debit_enabled": true,
      "prepaid_enabled": false,
      "three_ds_required": true
    },
    "online_configuration": {
      "enabled": true
    },
    "bank_transfer_configuration": {
      "enabled": true,
      "match_amount": true,
      "expiration": "P7D"
    },
    "qr_scan_configuration": {
      "enabled": true,
      "forbidden_qr_scan_gateways": [
        "wechat"
      ]
    },
    "convenience_configuration": {
      "enabled": true,
      "expiration": "P3D"
    },
    "paidy_configuration": {
      "enabled": false
    },
    "recurring_token_configuration": {
      "recurring_type": "infinite",
      "charge_wait_period": "P7D",
      "card_charge_cvv_confirmation": {
        "enabled": false
      }
    },
    "security_configuration": {
      "card_charge_cooldown": "PT5M",
      "subscription_cooldown": "PT10M",
      "restrict_ip_after_failed_charge": {
        "enabled": true,
        "count": 5,
        "cooldown": "PT1H"
      },
      "refund_percent_limit": 100,
      "confirmation_required": false,
      "min_refund_threshold": 100,
      "limit_refund_by_sales": {
        "enabled": true,
        "period": "monthly",
        "rolling_window": true
      }
    },
    "installments_configuration": {
      "enabled": true,
      "card_processor": {
        "revolving": true,
        "fixed_cycle": true
      },
      "supported_payment_types": [
        "card"
      ],
      "min_charge_amount": {
        "amount": 3000,
        "currency": "JPY"
      },
      "max_payout_period": "P12M",
      "only_with_processor": true
    },
    "card_brand_percent_fees": {
      "visa": 3.6,
      "mastercard": 3.6,
      "jcb": 3.8
    }
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Create Customer Id

Derives a deterministic, store-scoped UUID from a local customer identifier supplied by the merchant. Calling this endpoint again with the same `customer_id` for the same store always returns the same UUID — the operation has no side effects (nothing is persisted), so it is safe to call repeatedly and does not require an `Idempotency-Key`. App Token Secret is required.

```php
function createCustomerId(string $storeId, CreateCustomerIdRequest $body): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `body` | [`CreateCustomerIdRequest`](../../doc/models/create-customer-id-request.md) | Body, Required | Request payload for deriving a customer ID. |

## Response Type

**200**: Customer ID derived successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`CreateCustomerIdResponse`](../../doc/models/create-customer-id-response.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$body = CreateCustomerIdRequestBuilder::init(
    'local-customer-1902'
)->build();

$storesApi = $client->getStoresApi();
$apiResponse = $storesApi->createCustomerId(
    $storeId,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'CreateCustomerIdResponse:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "customer_id": "8a3f1b8e-2c1a-4b7a-9c2e-6f6b6f6e2b10"
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

