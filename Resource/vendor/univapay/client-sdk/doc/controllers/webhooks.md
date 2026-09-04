# Webhooks

Endpoints to create and manage store-level webhook subscriptions and view delivery history.

```php
$webhooksApi = $client->getWebhooksApi();
```

## Class Name

`WebhooksApi`

## Methods

* [List Webhooks](../../doc/controllers/webhooks.md#list-webhooks)
* [Create Webhook](../../doc/controllers/webhooks.md#create-webhook)
* [Get Webhook](../../doc/controllers/webhooks.md#get-webhook)
* [Update Webhook](../../doc/controllers/webhooks.md#update-webhook)
* [Delete Webhook](../../doc/controllers/webhooks.md#delete-webhook)
* [List Webhook Events](../../doc/controllers/webhooks.md#list-webhook-events)


# List Webhooks

Returns a paginated list of webhooks for the specified store. Requires a secret-bearing token.

```php
function listWebhooks(
    string $storeId,
    ?int $limit = 10,
    ?string $cursor = null,
    ?string $cursorDirection = CursorDirectionQuery::DESC,
    ?bool $active = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |
| `active` | `?bool` | Query, Optional | Filter by active status. |

## Response Type

**200**: Paginated list of webhooks.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`WebhookList`](../../doc/models/webhook-list.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$active = true;

$webhooksApi = $client->getWebhooksApi();
$apiResponse = $webhooksApi->listWebhooks(
    $storeId,
    $limit,
    $cursor,
    $cursorDirection,
    $active
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'WebhookList:';
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
      "id": "d3e4f5a6-b7c8-9012-def0-123456789abc",
      "store_id": "76cf4a64-02bc-4cb3-9a28-74622e5928a1",
      "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
      "triggers": [
        "charge_finished",
        "refund_finished"
      ],
      "url": "https://example.com/webhooks/payments",
      "auth_token": "my-secret-token",
      "active": true,
      "is_integration": false,
      "created_on": "2026-04-01T00:00:00.000000Z",
      "updated_on": "2026-04-02T00:00:00.000000Z"
    },
    {
      "id": "e4f5a6b7-c8d9-0123-ef01-23456789abcd",
      "store_id": "76cf4a64-02bc-4cb3-9a28-74622e5928a1",
      "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
      "triggers": [
        "subscription_payment",
        "subscription_failure"
      ],
      "url": "https://example.com/webhooks/subscriptions",
      "auth_token": null,
      "active": true,
      "is_integration": false,
      "created_on": "2026-04-03T08:30:00.000000Z",
      "updated_on": "2026-04-03T08:30:00.000000Z"
    },
    {
      "id": "f5a6b7c8-d9e0-1234-f012-3456789abcde",
      "store_id": "76cf4a64-02bc-4cb3-9a28-74622e5928a1",
      "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
      "triggers": [
        "cancel_finished"
      ],
      "url": "https://example.com/webhooks/cancels",
      "auth_token": "legacy-token",
      "active": false,
      "is_integration": false,
      "created_on": "2026-03-20T12:00:00.000000Z",
      "updated_on": "2026-04-05T09:15:00.000000Z"
    }
  ],
  "has_more": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Create Webhook

Creates a new webhook subscription for the specified store. Requires a secret-bearing token. Duplicate URLs within the same scope are not allowed. There is a maximum limit on the number of webhooks per store.

```php
function createWebhook(string $storeId, WebhookCreateRequest $body, ?string $idempotencyKey = null): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `body` | [`WebhookCreateRequest`](../../doc/models/webhook-create-request.md) | Body, Required | Request payload for creating a store webhook subscription. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**201**: Webhook created successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Webhook`](../../doc/models/webhook.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$body = WebhookCreateRequestBuilder::init(
    [
        WebhookTrigger::CHARGE_FINISHED
    ],
    'https://example.com/webhooks/payments'
)
    ->authToken('my-secret-token')
    ->build();

$idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

$webhooksApi = $client->getWebhooksApi();
$apiResponse = $webhooksApi->createWebhook(
    $storeId,
    $body,
    $idempotencyKey
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Webhook:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "d3e4f5a6-b7c8-9012-def0-123456789abc",
  "store_id": "76cf4a64-02bc-4cb3-9a28-74622e5928a1",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "triggers": [
    "charge_finished",
    "refund_finished"
  ],
  "url": "https://example.com/webhooks/payments",
  "auth_token": "my-secret-token",
  "active": true,
  "is_integration": false,
  "created_on": "2026-04-01T00:00:00.000000Z",
  "updated_on": "2026-04-01T00:00:00.000000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Get Webhook

Retrieves a specific webhook by ID.

```php
function getWebhook(string $storeId, string $id): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `id` | `string` | Template, Required | The unique identifier of the resource. |

## Response Type

**200**: Webhook details retrieved successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Webhook`](../../doc/models/webhook.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

$webhooksApi = $client->getWebhooksApi();
$apiResponse = $webhooksApi->getWebhook(
    $storeId,
    $id
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Webhook:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "d3e4f5a6-b7c8-9012-def0-123456789abc",
  "store_id": "76cf4a64-02bc-4cb3-9a28-74622e5928a1",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "triggers": [
    "charge_finished"
  ],
  "url": "https://example.com/webhooks/payments",
  "active": true
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Update Webhook

Updates an existing webhook. All fields are optional; omitted fields are left unchanged. Duplicate URLs within the same scope are not allowed.

```php
function updateWebhook(
    string $storeId,
    string $id,
    WebhookUpdateRequest $body,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `id` | `string` | Template, Required | The unique identifier of the resource. |
| `body` | [`WebhookUpdateRequest`](../../doc/models/webhook-update-request.md) | Body, Required | Request payload for updating a store webhook subscription. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Webhook updated successfully.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Webhook`](../../doc/models/webhook.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

$body = WebhookUpdateRequestBuilder::init()
    ->active(false)
    ->build();

$idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

$webhooksApi = $client->getWebhooksApi();
$apiResponse = $webhooksApi->updateWebhook(
    $storeId,
    $id,
    $body,
    $idempotencyKey
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Webhook:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "d3e4f5a6-b7c8-9012-def0-123456789abc",
  "store_id": "76cf4a64-02bc-4cb3-9a28-74622e5928a1",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "triggers": [
    "charge_finished"
  ],
  "url": "https://example.com/webhooks/v2",
  "active": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The request was invalid or could not be processed.  Common codes: VALIDATION_ERROR, INVALID_TOKEN_TYPE, NOT_SUPPORTED_BY_PROCESSOR. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# Delete Webhook

Deactivates and deletes a webhook subscription.

```php
function deleteWebhook(string $storeId, string $id): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `storeId` | `string` | Template, Required | The unique identifier of the store. |
| `id` | `string` | Template, Required | The unique identifier of the resource. |

## Response Type

**204**: Webhook deleted successfully. No content.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance.

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

$webhooksApi = $client->getWebhooksApi();
$apiResponse = $webhooksApi->deleteWebhook(
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
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |


# List Webhook Events

Returns a paginated list of webhook delivery events for the specified webhook. Each event captures the result of a single webhook delivery attempt.

```php
function listWebhookEvents(
    string $storeId,
    string $id,
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
| `id` | `string` | Template, Required | The unique identifier of the resource. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue. |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |

## Response Type

**200**: Paginated list of webhook events.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`WebhookEventList`](../../doc/models/webhook-event-list.md).

## Example Usage

```php
$storeId = '0cab399b-5621-425b-993b-f8507eba1e78';

$id = 'c4e87129-cad4-47fb-8ded-b4c0a4ae0dd4';

$limit = 10;

$cursor = '3541d4fa-596d-428e-8a36-f274e1b3d505';

$cursorDirection = CursorDirectionQuery::ASC;

$webhooksApi = $client->getWebhooksApi();
$apiResponse = $webhooksApi->listWebhookEvents(
    $storeId,
    $id,
    $limit,
    $cursor,
    $cursorDirection
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'WebhookEventList:';
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
      "id": "e1f2a3b4-c5d6-7890-efab-123456789cde",
      "webhook_id": "d3e4f5a6-b7c8-9012-def0-123456789abc",
      "event": "charge_finished",
      "successful": true,
      "fired_on": "2026-04-09T07:36:00.000000Z",
      "error_message": null,
      "created_on": "2026-04-09T07:35:50.000000Z"
    },
    {
      "id": "f2a3b4c5-d6e7-8901-fabc-23456789cdef",
      "webhook_id": "d3e4f5a6-b7c8-9012-def0-123456789abc",
      "event": "refund_finished",
      "successful": true,
      "fired_on": "2026-04-10T11:00:05.000000Z",
      "error_message": null,
      "created_on": "2026-04-10T11:00:00.000000Z"
    },
    {
      "id": "a3b4c5d6-e7f8-9012-abcd-3456789cdef0",
      "webhook_id": "d3e4f5a6-b7c8-9012-def0-123456789abc",
      "event": "cancel_finished",
      "successful": false,
      "fired_on": "2026-04-11T15:30:10.000000Z",
      "error_message": "Connection timed out after 10s",
      "created_on": "2026-04-11T15:30:00.000000Z"
    }
  ],
  "has_more": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |

