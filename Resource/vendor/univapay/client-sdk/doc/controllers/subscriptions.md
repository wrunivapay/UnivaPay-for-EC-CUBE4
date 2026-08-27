# Subscriptions

Endpoints to create and manage recurring subscription payments.

```php
$subscriptionsApi = $client->getSubscriptionsApi();
```

## Class Name

`SubscriptionsApi`

## Methods

* [Create Subscription](../../doc/controllers/subscriptions.md#create-subscription)
* [List All Subscriptions](../../doc/controllers/subscriptions.md#list-all-subscriptions)
* [Simulate Subscription Plan](../../doc/controllers/subscriptions.md#simulate-subscription-plan)
* [List Store Subscriptions](../../doc/controllers/subscriptions.md#list-store-subscriptions)
* [Simulate Store Subscription Plan](../../doc/controllers/subscriptions.md#simulate-store-subscription-plan)
* [Get Subscription](../../doc/controllers/subscriptions.md#get-subscription)
* [Update Subscription](../../doc/controllers/subscriptions.md#update-subscription)
* [Cancel Subscription](../../doc/controllers/subscriptions.md#cancel-subscription)
* [List Subscription Payments](../../doc/controllers/subscriptions.md#list-subscription-payments)
* [Get Subscription Payment](../../doc/controllers/subscriptions.md#get-subscription-payment)
* [Update Subscription Payment](../../doc/controllers/subscriptions.md#update-subscription-payment)
* [Get Subscription Latest Charge](../../doc/controllers/subscriptions.md#get-subscription-latest-charge)
* [List Subscription Charges](../../doc/controllers/subscriptions.md#list-subscription-charges)
* [List Charges for Subscription Payment](../../doc/controllers/subscriptions.md#list-charges-for-subscription-payment)
* [Suspend Subscription](../../doc/controllers/subscriptions.md#suspend-subscription)
* [Unsuspend Subscription](../../doc/controllers/subscriptions.md#unsuspend-subscription)
* [Update Subscription Token](../../doc/controllers/subscriptions.md#update-subscription-token)


# Create Subscription

Creates a new subscription.

```php
function createSubscription(
    ?string $idempotencyKey = null,
    ?SubscriptionCreateRequest $body = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| `body` | [`?SubscriptionCreateRequest`](../../doc/models/subscription-create-request.md) | Body, Optional | Create Subscription request |

## Response Type

**201**: Subscription Created

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Subscription`](../../doc/models/subscription.md).

## Example Usage

```php
$body = SubscriptionCreateRequestBuilder::init(
    '11ef32a7-3a71-8662-803f-1bc27702eeec',
    1000,
    'JPY'
)
    ->period(SubscriptionPeriod::MONTHLY)
    ->build();

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->createSubscription(
    null,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Subscription:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
  "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
  "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
  "amount": 1250,
  "currency": "USD",
  "amount_formatted": 12.5,
  "initial_amount": 1000,
  "initial_amount_formatted": 10.0,
  "subsequent_cycles_start": null,
  "schedule_settings": {
    "start_on": "2024-06-26",
    "zone_id": "Asia/Tokyo",
    "preserve_end_of_month": false,
    "retry_interval": "P7D",
    "termination_mode": "immediate"
  },
  "only_direct_currency": false,
  "first_charge_authorization_only": false,
  "status": "current",
  "metadata": {
    "order_id": "ORD-987"
  },
  "mode": "live",
  "created_on": "2024-06-26T01:51:28.627023Z",
  "three_ds": {
    "mode": "normal",
    "redirect_endpoint": null,
    "redirect_id": null
  },
  "period": "monthly",
  "next_payment": {
    "id": "11ef3360-1f9a-c54a-8313-7f9847da313b",
    "due_date": "2024-07-26",
    "zone_id": "Asia/Tokyo",
    "amount": 1250,
    "currency": "USD",
    "amount_formatted": 12.5,
    "is_paid": false
  }
}
```


# List All Subscriptions

Lists all subscriptions across all stores.

```php
function listAllSubscriptions(
    ?string $search = null,
    ?string $status = null,
    ?string $mode = null,
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
| `search` | `?string` | Query, Optional | Search by metadata values. |
| `status` | [`?string(SubscriptionStatus)`](../../doc/models/subscription-status.md) | Query, Optional | Filter subscriptions by current status. |
| `mode` | [`?string(ChargeMode)`](../../doc/models/charge-mode.md) | Query, Optional | Filter subscriptions by processing mode. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |

## Response Type

**200**: List of Subscriptions

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`SubscriptionList`](../../doc/models/subscription-list.md).

## Example Usage

```php
$search = 'order_id:12345';

$status = SubscriptionStatus::CURRENT;

$mode = ChargeMode::LIVE;

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->listAllSubscriptions(
    $search,
    $status,
    $mode,
    $limit,
    $cursor,
    $cursorDirection
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'SubscriptionList:';
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
      "id": "11ef3410-aaaa-4bcd-8e1f-1a2b3c4d5e60",
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "transaction_token_id": "11ef3413-dddd-4ef0-b142-4d5e6f809193",
      "amount": 1250,
      "currency": "USD",
      "amount_formatted": 12.5,
      "status": "current",
      "mode": "live",
      "created_on": "2024-06-26T01:51:28.627023Z",
      "three_ds": {
        "mode": "normal",
        "redirect_endpoint": null,
        "redirect_id": null
      },
      "schedule_settings": {
        "zone_id": "Asia/Tokyo",
        "retry_interval": "P7D",
        "termination_mode": "immediate"
      },
      "subscription_plan": {
        "plan_type": "fixed_cycles",
        "fixed_cycles": 12
      },
      "merchant_name": "管理画面ガイド",
      "store_name": "管理画面ガイド_TEST店舗",
      "payment_type": "card",
      "next_payment_date": "2024-07-26",
      "user_data": {
        "type": "charge",
        "cardholder_name": "taro yamada",
        "email": "taro@test.com",
        "brand": "visa"
      }
    },
    {
      "id": "11ef3411-bbbb-4cde-9f20-2b3c4d5e6f71",
      "store_id": "22af6520-d53e-764d-9d4e-ef01b66fa6d1",
      "transaction_token_id": "11ef3414-eeee-4f01-c253-5e6f80919204",
      "amount": 3000,
      "currency": "JPY",
      "amount_formatted": 3000,
      "status": "current",
      "mode": "live",
      "created_on": "2024-07-11T09:20:00.627023Z",
      "three_ds": {
        "mode": "normal",
        "redirect_endpoint": null,
        "redirect_id": null
      },
      "schedule_settings": {
        "zone_id": "Asia/Tokyo",
        "retry_interval": "P7D",
        "termination_mode": "immediate"
      },
      "installment_plan": {
        "plan_type": "fixed_cycle_amount",
        "fixed_cycles": null,
        "fixed_cycles_amount": 30000
      },
      "merchant_name": "管理画面ガイド",
      "store_name": "管理画面ガイド_Online店舗",
      "payment_type": "card",
      "next_payment_date": "2024-08-10",
      "user_data": {
        "type": "charge",
        "cardholder_name": "hanako suzuki",
        "email": "hanako@test.com",
        "brand": "mastercard"
      }
    },
    {
      "id": "11ef3412-cccc-4def-a031-3c4d5e6f8082",
      "store_id": "33af7631-e64f-875e-ae5f-f012c77fb7e2",
      "transaction_token_id": "11ef3415-ffff-4012-d364-6f8091920315",
      "amount": 9800,
      "currency": "JPY",
      "amount_formatted": 9800,
      "status": "suspended",
      "mode": "live",
      "created_on": "2024-08-15T13:05:22.627023Z",
      "three_ds": {
        "mode": "normal",
        "redirect_endpoint": null,
        "redirect_id": null
      },
      "schedule_settings": {
        "zone_id": "Asia/Tokyo",
        "retry_interval": "P7D",
        "termination_mode": "on_next_payment"
      },
      "installment_plan": {
        "plan_type": "revolving",
        "fixed_cycles": null,
        "fixed_cycles_amount": null
      },
      "merchant_name": "管理画面ガイド",
      "store_name": "管理画面ガイド_Osaka店舗",
      "payment_type": "card",
      "next_payment_date": "2024-09-15",
      "user_data": {
        "type": "charge",
        "cardholder_name": "jiro tanaka",
        "email": "jiro@test.com",
        "brand": "jcb"
      }
    }
  ],
  "has_more": false,
  "total_hits": 3
}
```


# Simulate Subscription Plan

Simulates the payment schedule that a subscription would follow, without creating a live subscription or a transaction token. Returns a bare array of the scheduled payments that would result from the given amount, currency, period (or cyclical period), and plan settings.

```php
function simulateSubscriptionPlan(
    ?string $idempotencyKey = null,
    ?SubscriptionSimulationRequest $body = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| `body` | [`?SubscriptionSimulationRequest`](../../doc/models/subscription-simulation-request.md) | Body, Optional | Subscription Plan Simulation request |

## Response Type

**200**: Simulated Subscription Payment Schedule

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`SubscriptionSimulationPayment[]`](../../doc/models/subscription-simulation-payment.md).

## Example Usage

```php
$body = SubscriptionSimulationRequestBuilder::init(
    1000,
    'JPY',
    TransactionTokenPaymentType::CARD,
    SubscriptionScheduleSettingsBuilder::init()
        ->zoneId('Asia/Tokyo')
        ->build()
)
    ->period(SubscriptionSimulationPeriod::MONTHLY)
    ->build();

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->simulateSubscriptionPlan(
    null,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'SubscriptionSimulationPayment[]:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
[
  {
    "due_date": "2026-09-01",
    "zone_id": "Asia/Tokyo",
    "amount": 1000,
    "currency": "JPY",
    "is_paid": false,
    "is_last_payment": false,
    "successful_payment_date": null,
    "terminate_with_status": null,
    "retry_interval": null
  },
  {
    "due_date": "2026-10-01",
    "zone_id": "Asia/Tokyo",
    "amount": 1000,
    "currency": "JPY",
    "is_paid": false,
    "is_last_payment": true,
    "successful_payment_date": null,
    "terminate_with_status": null,
    "retry_interval": null
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# List Store Subscriptions

Lists all subscriptions for a specific store.

```php
function listStoreSubscriptions(
    string $storeId,
    ?string $search = null,
    ?string $status = null,
    ?string $mode = null,
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
| `search` | `?string` | Query, Optional | Search by metadata values. |
| `status` | [`?string(SubscriptionStatus)`](../../doc/models/subscription-status.md) | Query, Optional | Filter subscriptions by current status. |
| `mode` | [`?string(ChargeMode)`](../../doc/models/charge-mode.md) | Query, Optional | Filter subscriptions by processing mode. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |

## Response Type

**200**: List of subscriptions retrieved successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`SubscriptionList`](../../doc/models/subscription-list.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$search = 'order_id:12345';

$status = SubscriptionStatus::CURRENT;

$mode = ChargeMode::LIVE;

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->listStoreSubscriptions(
    $storeId,
    $search,
    $status,
    $mode,
    $limit,
    $cursor,
    $cursorDirection
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'SubscriptionList:';
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
      "id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
      "amount": 1250,
      "currency": "USD",
      "amount_formatted": 12.5,
      "status": "current",
      "mode": "live",
      "created_on": "2024-06-26T01:51:28.627023Z",
      "three_ds": {
        "mode": "normal",
        "redirect_endpoint": null,
        "redirect_id": null
      },
      "schedule_settings": {
        "zone_id": "Asia/Tokyo",
        "retry_interval": "P7D",
        "termination_mode": "immediate"
      },
      "subscription_plan": {
        "plan_type": "fixed_cycles",
        "fixed_cycles": 12
      },
      "merchant_name": "管理画面ガイド",
      "store_name": "管理画面ガイド_TEST店舗",
      "payment_type": "card",
      "next_payment_date": "2024-07-26",
      "user_data": {
        "type": "charge",
        "cardholder_name": "taro yamada",
        "email": "test@test.com",
        "brand": "visa"
      }
    },
    {
      "id": "11ef3401-1a2b-4c3d-8e4f-5a6b7c8d9e0f",
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "transaction_token_id": "11ef3402-2b3c-4d5e-9f60-6b7c8d9e0f11",
      "amount": 5000,
      "currency": "JPY",
      "amount_formatted": 5000,
      "status": "current",
      "mode": "live",
      "created_on": "2024-07-01T10:00:00.627023Z",
      "three_ds": {
        "mode": "normal",
        "redirect_endpoint": null,
        "redirect_id": null
      },
      "schedule_settings": {
        "zone_id": "Asia/Tokyo",
        "retry_interval": "P7D",
        "termination_mode": "immediate"
      },
      "merchant_name": "管理画面ガイド",
      "store_name": "管理画面ガイド_TEST店舗",
      "payment_type": "card",
      "next_payment_date": "2024-08-01",
      "user_data": {
        "type": "charge",
        "cardholder_name": "hanako suzuki",
        "email": "hanako@test.com",
        "brand": "mastercard"
      }
    },
    {
      "id": "11ef3403-3c4d-5e6f-a071-7c8d9e0f1122",
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "transaction_token_id": "11ef3404-4d5e-6f70-b182-8d9e0f112233",
      "amount": 9800,
      "currency": "JPY",
      "amount_formatted": 9800,
      "status": "suspended",
      "mode": "live",
      "created_on": "2024-08-15T13:05:22.627023Z",
      "three_ds": {
        "mode": "normal",
        "redirect_endpoint": null,
        "redirect_id": null
      },
      "schedule_settings": {
        "zone_id": "Asia/Tokyo",
        "retry_interval": "P7D",
        "termination_mode": "on_next_payment"
      },
      "installment_plan": {
        "plan_type": "revolving",
        "fixed_cycles": null,
        "fixed_cycles_amount": null
      },
      "merchant_name": "管理画面ガイド",
      "store_name": "管理画面ガイド_TEST店舗",
      "payment_type": "card",
      "next_payment_date": "2024-09-15",
      "user_data": {
        "type": "charge",
        "cardholder_name": "jiro tanaka",
        "email": "jiro@test.com",
        "brand": "jcb"
      }
    }
  ],
  "has_more": false,
  "total_hits": 3
}
```


# Simulate Store Subscription Plan

Simulates the payment schedule that a subscription would follow for a specific store, without creating a live subscription or a transaction token. Returns a bare array of the scheduled payments that would result from the given amount, currency, period (or cyclical period), and plan settings.

```php
function simulateStoreSubscriptionPlan(
    string $storeId,
    ?string $idempotencyKey = null,
    ?SubscriptionSimulationRequest $body = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| `body` | [`?SubscriptionSimulationRequest`](../../doc/models/subscription-simulation-request.md) | Body, Optional | Subscription Plan Simulation request |

## Response Type

**200**: Simulated Subscription Payment Schedule

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`SubscriptionSimulationPayment[]`](../../doc/models/subscription-simulation-payment.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$body = SubscriptionSimulationRequestBuilder::init(
    1000,
    'JPY',
    TransactionTokenPaymentType::CARD,
    SubscriptionScheduleSettingsBuilder::init()
        ->zoneId('Asia/Tokyo')
        ->build()
)
    ->period(SubscriptionSimulationPeriod::MONTHLY)
    ->build();

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->simulateStoreSubscriptionPlan(
    $storeId,
    null,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'SubscriptionSimulationPayment[]:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
[
  {
    "due_date": "2026-09-01",
    "zone_id": "Asia/Tokyo",
    "amount": 1000,
    "currency": "JPY",
    "is_paid": false,
    "is_last_payment": false,
    "successful_payment_date": null,
    "terminate_with_status": null,
    "retry_interval": null
  },
  {
    "due_date": "2026-10-01",
    "zone_id": "Asia/Tokyo",
    "amount": 1000,
    "currency": "JPY",
    "is_paid": false,
    "is_last_payment": true,
    "successful_payment_date": null,
    "terminate_with_status": null,
    "retry_interval": null
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Get Subscription

Retrieves the details of an existing subscription.  Supports internal polling to wait for status changes.

```php
function getSubscription(string $storeId, string $id, ?bool $polling = null): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `id` | `string` | Template, Required | The Subscription ID. |
| `polling` | `?bool` | Query, Optional | If set to true, instructs the API to internally poll the subscription  status until it changes from 'unverified' (the initial status) to  another status. |

## Response Type

**200**: Subscription Details retrieved successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Subscription`](../../doc/models/subscription.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$id = '11ef335e-9aa5-c54a-8313-7f9847da313a';

$polling = true;

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->getSubscription(
    $storeId,
    $id,
    $polling
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Subscription:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
  "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
  "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
  "amount": 1250,
  "currency": "USD",
  "amount_formatted": 12.5,
  "initial_amount": null,
  "initial_amount_formatted": null,
  "subsequent_cycles_start": null,
  "schedule_settings": {
    "start_on": "2024-07-01",
    "zone_id": "Asia/Tokyo",
    "preserve_end_of_month": false,
    "retry_interval": "P7D",
    "termination_mode": "immediate"
  },
  "only_direct_currency": false,
  "first_charge_capture_after": null,
  "first_charge_authorization_only": false,
  "status": "current",
  "metadata": {
    "order_id": "12345"
  },
  "mode": "test",
  "created_on": "2024-06-26T01:51:28.627023Z",
  "three_ds": {
    "mode": "normal",
    "redirect_endpoint": null,
    "redirect_id": null
  },
  "period": "monthly",
  "next_payment": {
    "id": "11ef335e-9ae2-8322-8e79-e7ba4b56234e",
    "due_date": "2024-07-26",
    "zone_id": "Asia/Tokyo",
    "amount": 1250,
    "currency": "USD",
    "amount_formatted": 12.5,
    "is_paid": false,
    "is_last_payment": false,
    "created_on": "2024-06-26T01:51:29.025129Z",
    "updated_on": "2024-06-26T01:51:29.025129Z",
    "retry_date": null
  },
  "cycles_left": 5,
  "subscription_plan": {
    "plan_type": "fixed_cycles",
    "fixed_cycles": 12
  },
  "amount_left": 6250,
  "amount_left_formatted": 62.5
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Update Subscription

Updates the configuration, payment method, or schedule of a specific subscription.

```php
function updateSubscription(
    string $storeId,
    string $id,
    ?string $idempotencyKey = null,
    ?SubscriptionUpdateRequest $body = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `id` | `string` | Template, Required | The unique identifier of the resource. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| `body` | [`?SubscriptionUpdateRequest`](../../doc/models/subscription-update-request.md) | Body, Optional | Properties to update on the subscription. |

## Response Type

**200**: Subscription Updated successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Subscription`](../../doc/models/subscription.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

$idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

$body = SubscriptionUpdateRequestBuilder::init()
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->build()
    )
    ->scheduleSettings(
        SubscriptionUpdateScheduleSettingsBuilder::init()
            ->terminationMode(SubscriptionTerminationMode::ON_NEXT_PAYMENT)
            ->build()
    )
    ->build();

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->updateSubscription(
    $storeId,
    $id,
    $idempotencyKey,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Subscription:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
  "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
  "transaction_token_id": "11ef3362-3700-c54a-9baa-6f7e6527c9d9",
  "amount": 1250,
  "currency": "USD",
  "amount_formatted": 12.5,
  "initial_amount": null,
  "initial_amount_formatted": null,
  "subsequent_cycles_start": null,
  "schedule_settings": {
    "start_on": "2024-07-01",
    "zone_id": "Asia/Tokyo",
    "preserve_end_of_month": false,
    "retry_interval": "P7D",
    "termination_mode": "on_next_payment"
  },
  "only_direct_currency": false,
  "first_charge_capture_after": null,
  "first_charge_authorization_only": false,
  "status": "current",
  "metadata": {
    "order_id": "12345"
  },
  "mode": "test",
  "created_on": "2024-06-26T01:51:28.627023Z",
  "three_ds": {
    "mode": "normal",
    "redirect_endpoint": null,
    "redirect_id": null
  },
  "period": "monthly",
  "next_payment": {
    "id": "11ef335e-9ae2-8322-8e79-e7ba4b56234e",
    "due_date": "2030-01-01",
    "zone_id": "Asia/Tokyo",
    "amount": 1250,
    "currency": "USD",
    "amount_formatted": 12.5,
    "is_paid": false,
    "is_last_payment": false,
    "created_on": "2024-06-26T01:51:29.025129Z",
    "updated_on": "2024-06-26T01:51:29.025129Z",
    "retry_date": null
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Cancel Subscription

Cancels an existing subscription. The subscription status will be  permanently changed to `canceled` and it cannot be resumed.  Please proceed with caution.

```php
function cancelSubscription(string $storeId, string $id): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `id` | `string` | Template, Required | The unique identifier of the resource. |

## Response Type

**204**: Subscription successfully canceled. No content.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance.

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->cancelSubscription(
    $storeId,
    $id
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'void:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
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


# List Subscription Payments

Retrieves a list of all historical and scheduled payments for a  specific subscription.

```php
function listSubscriptionPayments(
    string $storeId,
    string $subscriptionId,
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
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |

## Response Type

**200**: List of subscription payments retrieved successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`SubscriptionPaymentList`](../../doc/models/subscription-payment-list.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->listSubscriptionPayments(
    $storeId,
    $subscriptionId,
    $limit,
    $cursor,
    $cursorDirection
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'SubscriptionPaymentList:';
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
      "id": "11e89a0a-8cee-d660-b984-3fcaaed46e7c",
      "due_date": "2018-08-21",
      "zone_id": "Asia/Tokyo",
      "amount": 10000,
      "currency": "JPY",
      "amount_formatted": 10000,
      "is_paid": false,
      "is_last_payment": false,
      "created_on": "2018-08-07T06:24:33.961256Z",
      "updated_on": "2018-08-07T06:24:33.961256Z"
    },
    {
      "id": "11e89a0a-8cc5-2662-9460-2b14b1a601ba",
      "due_date": "2018-08-07",
      "zone_id": "Asia/Tokyo",
      "amount": 1000,
      "currency": "JPY",
      "amount_formatted": 1000,
      "is_paid": true,
      "is_last_payment": false,
      "created_on": "2018-08-07T06:24:33.646223Z",
      "updated_on": "2018-08-07T06:24:33.887760Z"
    }
  ],
  "has_more": false
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


# Get Subscription Payment

Retrieves the details of an individual payment associated with a specific subscription.

```php
function getSubscriptionPayment(string $storeId, string $subscriptionId, string $paymentId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |
| `paymentId` | `string` | Template, Required | The unique identifier of the scheduled payment of a subscription |

## Response Type

**200**: Subscription Payment retrieved successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`SubscriptionPayment`](../../doc/models/subscription-payment.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';

$paymentId = '11e89a0a-8cee-d660-b984-3fcaaed46e7c';

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->getSubscriptionPayment(
    $storeId,
    $subscriptionId,
    $paymentId
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'SubscriptionPayment:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11e89a0a-8cee-d660-b984-3fcaaed46e7c",
  "due_date": "2018-08-21",
  "zone_id": "Asia/Tokyo",
  "amount": 10000,
  "currency": "JPY",
  "amount_formatted": 10000,
  "is_paid": false,
  "is_last_payment": false,
  "created_on": "2018-08-07T06:24:33.961256Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Update Subscription Payment

Updates properties of a specific scheduled payment for a subscription. Can be used to change the due date when permitted, mark the payment as paid, schedule a termination status, or set a retry interval.

```php
function updateSubscriptionPayment(
    string $storeId,
    string $subscriptionId,
    string $paymentId,
    SubscriptionPatchPaymentRequest $body,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |
| `paymentId` | `string` | Template, Required | The unique identifier of the scheduled payment of a subscription |
| `body` | [`SubscriptionPatchPaymentRequest`](../../doc/models/subscription-patch-payment-request.md) | Body, Required | Request payload for updating a scheduled subscription payment. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Scheduled payment updated successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`SubscriptionPayment`](../../doc/models/subscription-payment.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';

$paymentId = '11e89a0a-8cee-d660-b984-3fcaaed46e7c';

$body = SubscriptionPatchPaymentRequestBuilder::init()
    ->dueDate(DateTimeHelper::fromSimpleDate('2026-09-01'))
    ->isPaid(false)
    ->build();

$idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->updateSubscriptionPayment(
    $storeId,
    $subscriptionId,
    $paymentId,
    $body,
    $idempotencyKey
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'SubscriptionPayment:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11e89a0a-8cee-d660-b984-3fcaaed46e7c",
  "due_date": "2026-09-01",
  "zone_id": "Asia/Tokyo",
  "amount": 10000,
  "currency": "JPY",
  "amount_formatted": 10000,
  "is_paid": false,
  "is_last_payment": false,
  "created_on": "2018-08-07T06:24:33.961256Z",
  "updated_on": "2026-04-22T06:00:00.000000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Subscription Latest Charge

Retrieves the most recent charge created for a specific subscription. Returns 404 if no charges have been attempted yet.

```php
function getSubscriptionLatestCharge(string $storeId, string $subscriptionId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |

## Response Type

**200**: Latest charge retrieved successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Charge`](../../doc/models/charge.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->getSubscriptionLatestCharge(
    $storeId,
    $subscriptionId
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Charge:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "6efb4e5c-690a-40f3-a4f1-0e19c5f84e98",
  "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
  "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
  "transaction_token_type": "recurring",
  "subscription_id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
  "requested_amount": 1250,
  "requested_currency": "USD",
  "requested_amount_formatted": 12.5,
  "charged_amount": 1250,
  "charged_currency": "USD",
  "charged_amount_formatted": 12.5,
  "only_direct_currency": false,
  "status": "successful",
  "error": null,
  "mode": "test",
  "created_on": "2024-06-26T01:51:30.000000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# List Subscription Charges

Retrieves a paginated list of charges linked to a subscription. Backend search uses the same charge search surface as normal charge listing and adds a subscription filter for the requested subscription.

```php
function listSubscriptionCharges(
    string $merchantId,
    string $storeId,
    string $subscriptionId,
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
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |

## Response Type

**200**: Subscription charges retrieved successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`ChargeList`](../../doc/models/charge-list.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->listSubscriptionCharges(
    $merchantId,
    $storeId,
    $subscriptionId,
    $limit,
    $cursor,
    $cursorDirection
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'ChargeList:';
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
      "id": "6efb4e5c-690a-40f3-a4f1-0e19c5f84e98",
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
      "transaction_token_type": "recurring",
      "subscription_id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
      "requested_amount": 1250,
      "requested_currency": "USD",
      "requested_amount_formatted": 12.5,
      "charged_amount": 1250,
      "charged_currency": "USD",
      "charged_amount_formatted": 12.5,
      "only_direct_currency": false,
      "status": "successful",
      "error": {},
      "mode": "test",
      "created_on": "2024-06-26T01:51:30.000000Z"
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


# List Charges for Subscription Payment

Retrieves a paginated list of all charge attempts made for a specific scheduled payment of a subscription. Useful for inspecting retry history.

```php
function listChargesForSubscriptionPayment(
    string $storeId,
    string $subscriptionId,
    string $paymentId,
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
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |
| `paymentId` | `string` | Template, Required | The unique identifier of the scheduled payment of a subscription |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |

## Response Type

**200**: List of charges for the scheduled payment retrieved successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`ChargeList`](../../doc/models/charge-list.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '25d0fb2c-18ef-11e7-9dd3-db8fb7b820e7';

$paymentId = '11e89a0a-8cee-d660-b984-3fcaaed46e7c';

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->listChargesForSubscriptionPayment(
    $storeId,
    $subscriptionId,
    $paymentId,
    $limit,
    $cursor,
    $cursorDirection
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'ChargeList:';
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
      "id": "6efb4e5c-690a-40f3-a4f1-0e19c5f84e98",
      "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
      "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
      "transaction_token_type": "recurring",
      "subscription_id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
      "requested_amount": 1250,
      "requested_currency": "USD",
      "requested_amount_formatted": 12.5,
      "charged_amount": 1250,
      "charged_currency": "USD",
      "charged_amount_formatted": 12.5,
      "only_direct_currency": false,
      "status": "successful",
      "error": {},
      "mode": "test",
      "created_on": "2024-06-26T01:51:30.000000Z"
    }
  ],
  "has_more": false,
  "total_hits": 1
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Suspend Subscription

Suspends a subscription that is currently `current` or `unpaid`. The `termination_mode` controls when the suspension takes effect: `immediate` (default) suspends right away, `on_next_payment` waits until the next scheduled payment date before suspending.

```php
function suspendSubscription(
    string $storeId,
    string $subscriptionId,
    ?string $idempotencyKey = null,
    ?SubscriptionSuspendRequest $body = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |
| `body` | [`?SubscriptionSuspendRequest`](../../doc/models/subscription-suspend-request.md) | Body, Optional | Request payload for suspending a subscription. |

## Response Type

**200**: Subscription suspended successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Subscription`](../../doc/models/subscription.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '11ef335e-9aa5-c54a-8313-7f9847da313a';

$idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

$body = SubscriptionSuspendRequestBuilder::init()
    ->scheduleSettings(
        SuspendScheduleSettingsBuilder::init()
            ->terminationMode(SubscriptionTerminationMode::ON_NEXT_PAYMENT)
            ->build()
    )
    ->build();

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->suspendSubscription(
    $storeId,
    $subscriptionId,
    $idempotencyKey,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Subscription:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
  "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
  "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
  "amount": 1250,
  "currency": "USD",
  "amount_formatted": 12.5,
  "schedule_settings": {
    "start_on": "2024-07-01",
    "zone_id": "Asia/Tokyo",
    "preserve_end_of_month": false,
    "retry_interval": "P7D",
    "termination_mode": "on_next_payment"
  },
  "status": "suspended",
  "mode": "test",
  "created_on": "2024-06-26T01:51:28.627023Z",
  "three_ds": {
    "mode": "normal",
    "redirect_endpoint": null,
    "redirect_id": null
  },
  "period": "monthly"
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


# Unsuspend Subscription

Resumes a subscription that is currently `suspended`, setting its status back to `unpaid` and rescheduling the next payment. No request body is required.

```php
function unsuspendSubscription(
    string $storeId,
    string $subscriptionId,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Subscription unsuspended successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Subscription`](../../doc/models/subscription.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '11ef335e-9aa5-c54a-8313-7f9847da313a';

$idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->unsuspendSubscription(
    $storeId,
    $subscriptionId,
    $idempotencyKey
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Subscription:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
  "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
  "transaction_token_id": "11ef32a7-3a71-8662-803f-1bc27702eeec",
  "amount": 1250,
  "currency": "USD",
  "amount_formatted": 12.5,
  "schedule_settings": {
    "start_on": "2024-07-01",
    "zone_id": "Asia/Tokyo",
    "preserve_end_of_month": false,
    "retry_interval": "P7D",
    "termination_mode": "immediate"
  },
  "status": "unpaid",
  "mode": "test",
  "created_on": "2024-06-26T01:51:28.627023Z",
  "three_ds": {
    "mode": "normal",
    "redirect_endpoint": null,
    "redirect_id": null
  },
  "period": "monthly"
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


# Update Subscription Token

Replaces the payment method (transaction token) used for a subscription. Useful when a card expires or a customer wants to switch payment methods. The new token must belong to the same store, be active, and match the subscription's processing mode (live/test). One-time tokens are not accepted; use a recurring or subscription token.

```php
function updateSubscriptionToken(
    string $storeId,
    string $subscriptionId,
    SubscriptionPatchTokenRequest $body,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `subscriptionId` | `string` | Template, Required | The unique identifier of the subscription. |
| `body` | [`SubscriptionPatchTokenRequest`](../../doc/models/subscription-patch-token-request.md) | Body, Required | Request payload for replacing a subscription payment token. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Subscription token updated successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Subscription`](../../doc/models/subscription.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$subscriptionId = '11ef335e-9aa5-c54a-8313-7f9847da313a';

$body = SubscriptionPatchTokenRequestBuilder::init(
    '11ef3362-3700-c54a-9baa-6f7e6527c9d9'
)->build();

$idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

$subscriptionsApi = $client->getSubscriptionsApi();
$apiResponse = $subscriptionsApi->updateSubscriptionToken(
    $storeId,
    $subscriptionId,
    $body,
    $idempotencyKey
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Subscription:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11ef335e-9aa5-c54a-8313-7f9847da313a",
  "store_id": "11edf541-c42d-653c-8c3d-dfe0a55f95c0",
  "transaction_token_id": "11ef3362-3700-c54a-9baa-6f7e6527c9d9",
  "amount": 1250,
  "currency": "USD",
  "amount_formatted": 12.5,
  "schedule_settings": {
    "start_on": "2024-07-01",
    "zone_id": "Asia/Tokyo",
    "preserve_end_of_month": false,
    "retry_interval": "P7D",
    "termination_mode": "immediate"
  },
  "status": "current",
  "mode": "test",
  "created_on": "2024-06-26T01:51:28.627023Z",
  "three_ds": {
    "mode": "normal",
    "redirect_endpoint": null,
    "redirect_id": null
  },
  "period": "monthly"
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

