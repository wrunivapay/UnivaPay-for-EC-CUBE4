# Direct Debit

```php
$directDebitApi = $client->getDirectDebitApi();
```

## Class Name

`DirectDebitApi`

## Methods

* [Get Direct Debit Configuration](../../doc/controllers/direct-debit.md#get-direct-debit-configuration)
* [Get Direct Debit Notification Configuration](../../doc/controllers/direct-debit.md#get-direct-debit-notification-configuration)
* [Get Direct Debit Current Schedule](../../doc/controllers/direct-debit.md#get-direct-debit-current-schedule)
* [List Direct Debit Bank Accounts](../../doc/controllers/direct-debit.md#list-direct-debit-bank-accounts)
* [Create Direct Debit Bank Account](../../doc/controllers/direct-debit.md#create-direct-debit-bank-account)
* [Get Direct Debit Bank Account](../../doc/controllers/direct-debit.md#get-direct-debit-bank-account)
* [Update Direct Debit Bank Account](../../doc/controllers/direct-debit.md#update-direct-debit-bank-account)
* [Deactivate Direct Debit Bank Account](../../doc/controllers/direct-debit.md#deactivate-direct-debit-bank-account)
* [Reenable Direct Debit Bank Account](../../doc/controllers/direct-debit.md#reenable-direct-debit-bank-account)
* [Create Direct Debit Bank Transfer](../../doc/controllers/direct-debit.md#create-direct-debit-bank-transfer)
* [List Direct Debit Bank Transfers](../../doc/controllers/direct-debit.md#list-direct-debit-bank-transfers)
* [Get Direct Debit Bank Transfer](../../doc/controllers/direct-debit.md#get-direct-debit-bank-transfer)
* [Update Direct Debit Bank Transfer](../../doc/controllers/direct-debit.md#update-direct-debit-bank-transfer)
* [Delete Direct Debit Bank Transfer](../../doc/controllers/direct-debit.md#delete-direct-debit-bank-transfer)


# Get Direct Debit Configuration

Retrieves the merchant's direct debit configuration — whether direct debit is enabled and which monthly debit cycle applies.

```php
function getDirectDebitConfiguration(string $merchantId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |

## Response Type

**200**: Direct Debit Configuration

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitMerchantConfiguration`](../../doc/models/direct-debit-merchant-configuration.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->getDirectDebitConfiguration($merchantId);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitMerchantConfiguration:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "legacy_id": "1283794",
  "enabled": true,
  "debit_date": "fourteen",
  "consignor_code": "135456",
  "classifier": "99",
  "signature": "モモサン"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Get Direct Debit Notification Configuration

Retrieves which direct debit email notifications the merchant has opted into.

```php
function getDirectDebitNotificationConfiguration(string $merchantId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |

## Response Type

**200**: Notification Configuration

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitNotificationConfiguration`](../../doc/models/direct-debit-notification-configuration.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->getDirectDebitNotificationConfiguration($merchantId);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitNotificationConfiguration:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "notify_deadline_mailing": true,
  "notify_deadline_debit": true,
  "notify_debit_update": false
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Get Direct Debit Current Schedule

Retrieves the key dates for the debit cycle currently in progress, based on the merchant's configured cycle. Compare `merchant_bank_transfer_upload_deadline` against today to decide whether transfers can still be registered or edited this month.

```php
function getDirectDebitCurrentSchedule(string $merchantId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |

## Response Type

**200**: Current Debit Cycle

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitSchedule`](../../doc/models/direct-debit-schedule.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->getDirectDebitCurrentSchedule($merchantId);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitSchedule:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "merchant_bank_account_transfer_date": "2026-03-14",
  "merchant_bank_account_registration_deadline": "2026-02-20",
  "merchant_bank_transfer_upload_deadline": "2026-03-04",
  "platform_result_registration_date": "2026-03-24",
  "platform_scheduled_payout": "2026-03-31"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# List Direct Debit Bank Accounts

Lists the consumer bank accounts registered for direct debit under this merchant.

```php
function listDirectDebitBankAccounts(
    string $merchantId,
    ?int $limit = 10,
    ?string $cursor = null,
    ?string $cursorDirection = CursorDirectionQuery::DESC,
    ?string $userNumber = null,
    ?string $bankAccountId = null,
    ?string $bankCode = null,
    ?string $bankName = null,
    ?string $branchCode = null,
    ?string $bankAccountType = null,
    ?string $bankAccountNumber = null,
    ?string $bankAccountName = null,
    ?string $registrationOrigin = null,
    ?string $bankAccountStatus = null,
    ?string $from = null,
    ?string $to = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |
| `userNumber` | `?string` | Query, Optional | Filter by the merchant's own membership number for the consumer (会員番号).<br><br>**Constraints**: *Pattern*: `^[a-zA-Z0-9]+$` |
| `bankAccountId` | `?string` | Query, Optional | Filter by a single bank account ID.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |
| `bankCode` | `?string` | Query, Optional | Filter by the 4-digit bank code (銀行コード).<br><br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^[0-9]{4}$` |
| `bankName` | `?string` | Query, Optional | Filter by bank name in half-width katakana (銀行名).<br><br>**Constraints**: *Maximum Length*: `15` |
| `branchCode` | `?string` | Query, Optional | Filter by the 3-digit branch code (支店コード).<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3`, *Pattern*: `^[0-9]{3}$` |
| `bankAccountType` | [`?string(DirectDebitBankAccountType)`](../../doc/models/direct-debit-bank-account-type.md) | Query, Optional | Filter by deposit account type (預金種類). |
| `bankAccountNumber` | `?string` | Query, Optional | Filter by the 7-digit account number (口座番号).<br><br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7`, *Pattern*: `^[0-9]{7}$` |
| `bankAccountName` | `?string` | Query, Optional | Filter by account holder name in half-width katakana (口座名義).<br><br>**Constraints**: *Maximum Length*: `30`, *Pattern*: `^[A-Z0-9ｱ-ﾝﾞﾟ().\- ]{1,30}$` |
| `registrationOrigin` | [`?string(DirectDebitRegistrationOrigin)`](../../doc/models/direct-debit-registration-origin.md) | Query, Optional | Filter by where the bank account was registered from. |
| `bankAccountStatus` | [`?string(DirectDebitBankAccountStatus)`](../../doc/models/direct-debit-bank-account-status.md) | Query, Optional | Filter by bank account status. Omit to return every status. |
| `from` | `?string` | Query, Optional | Show bank accounts created on or after this date (ISO-8601). |
| `to` | `?string` | Query, Optional | Show bank accounts created before this date (ISO-8601). |

## Response Type

**200**: List of Bank Accounts

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankAccountList`](../../doc/models/direct-debit-bank-account-list.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$limit = 10;

$cursor = '1098116';

$cursorDirection = CursorDirectionQuery::ASC;

$userNumber = 'SD02688328';

$bankAccountId = '1098116';

$bankCode = '0012';

$bankName = 'ﾗｸﾃﾝｷﾞﾝｺｳ';

$branchCode = '120';

$bankAccountType = DirectDebitBankAccountType::REGULAR;

$bankAccountNumber = '1234567';

$bankAccountName = 'ﾀﾅｶﾕﾐｺ';

$registrationOrigin = DirectDebitRegistrationOrigin::MERCHANT_CONSOLE;

$bankAccountStatus = DirectDebitBankAccountStatus::ACTIVE;

$from = '04/01/2026 00:00:00';

$to = '04/30/2026 23:59:59';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->listDirectDebitBankAccounts(
    $merchantId,
    $limit,
    $cursor,
    $cursorDirection,
    $userNumber,
    $bankAccountId,
    $bankCode,
    $bankName,
    $branchCode,
    $bankAccountType,
    $bankAccountNumber,
    $bankAccountName,
    $registrationOrigin,
    $bankAccountStatus,
    $from,
    $to
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankAccountList:';
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
      "id": "1098116",
      "legacy_store_id": "1283794",
      "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
      "user_number": "SD02688328",
      "bank_code": "0012",
      "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
      "branch_code": "120",
      "bank_account_type": "regular",
      "bank_account_name": "ﾀﾅｶﾕﾐｺ",
      "bank_account_number": "1234567",
      "registration_origin": "merchant_console",
      "status": "active",
      "created_on": "2026-04-09T07:35:50.000Z",
      "updated_on": "2026-04-09T07:35:50.000Z"
    },
    {
      "id": "1098117",
      "legacy_store_id": "1283794",
      "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
      "user_number": "SD02688329",
      "bank_code": "0009",
      "bank_name": "ﾐﾂｲｽﾐﾄﾓ",
      "branch_code": "221",
      "bank_account_type": "current",
      "bank_account_name": "ｽｽﾞｷﾀﾛｳ",
      "bank_account_number": "7654321",
      "registration_origin": "anywhere",
      "status": "inactive",
      "created_on": "2026-04-10T09:12:04.000Z",
      "updated_on": "2026-04-12T11:03:41.000Z"
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
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Create Direct Debit Bank Account

Registers a consumer bank account for direct debit. The account is created and then verified against the bank, so it starts out unusable — poll its `status` until it becomes `active` (or `registration_failed`) before scheduling transfers against it.

```php
function createDirectDebitBankAccount(
    string $merchantId,
    DirectDebitBankAccountCreateRequest $body,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `body` | [`DirectDebitBankAccountCreateRequest`](../../doc/models/direct-debit-bank-account-create-request.md) | Body, Required | Request payload for registering a consumer bank account. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Bank Account Registered

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankAccount`](../../doc/models/direct-debit-bank-account.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$body = DirectDebitBankAccountCreateRequestBuilder::init(
    'SD02688328',
    '0012',
    'ﾗｸﾃﾝｷﾞﾝｺｳ',
    '120',
    DirectDebitBankAccountType::REGULAR,
    'ﾀﾅｶﾕﾐｺ',
    '1234567'
)->build();

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->createDirectDebitBankAccount(
    $merchantId,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankAccount:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "1098116",
  "legacy_store_id": "1283794",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "user_number": "SD02688328",
  "bank_code": "0012",
  "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
  "branch_code": "120",
  "bank_account_type": "regular",
  "bank_account_name": "ﾀﾅｶﾕﾐｺ",
  "bank_account_number": "1234567",
  "registration_origin": "merchant_console",
  "status": "active",
  "created_on": "2026-04-09T07:35:50.000Z",
  "updated_on": "2026-04-09T07:35:50.000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). One or more bank account fields failed validation. Common reasons: REQUIRED_VALUE, INVALID_FORMAT, NOT_ALLOWED_VALUE. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Get Direct Debit Bank Account

Retrieves a single registered bank account, including its current verification status.

```php
function getDirectDebitBankAccount(string $merchantId, string $bankAccountId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `bankAccountId` | `string` | Template, Required | The unique identifier of the direct debit bank account.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |

## Response Type

**200**: Bank Account

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankAccount`](../../doc/models/direct-debit-bank-account.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$bankAccountId = '1098116';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->getDirectDebitBankAccount(
    $merchantId,
    $bankAccountId
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankAccount:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "1098116",
  "legacy_store_id": "1283794",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "user_number": "SD02688328",
  "bank_code": "0012",
  "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
  "branch_code": "120",
  "bank_account_type": "regular",
  "bank_account_name": "ﾀﾅｶﾕﾐｺ",
  "bank_account_number": "1234567",
  "registration_origin": "merchant_console",
  "status": "active",
  "created_on": "2026-04-09T07:35:50.000Z",
  "updated_on": "2026-04-09T07:35:50.000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Update Direct Debit Bank Account

Updates a registered bank account. Changing bank details re-triggers verification with the bank. Transfers already registered keep the details they were created with.

```php
function updateDirectDebitBankAccount(
    string $merchantId,
    string $bankAccountId,
    DirectDebitBankAccountUpdateRequest $body,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `bankAccountId` | `string` | Template, Required | The unique identifier of the direct debit bank account.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |
| `body` | [`DirectDebitBankAccountUpdateRequest`](../../doc/models/direct-debit-bank-account-update-request.md) | Body, Required | Request payload for updating a registered bank account. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Bank Account Updated

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankAccount`](../../doc/models/direct-debit-bank-account.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$bankAccountId = '1098116';

$body = DirectDebitBankAccountUpdateRequestBuilder::init()
    ->bankAccountName('ﾀﾅｶﾕﾐｺ')
    ->build();

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->updateDirectDebitBankAccount(
    $merchantId,
    $bankAccountId,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankAccount:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "1098116",
  "legacy_store_id": "1283794",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "user_number": "SD02688328",
  "bank_code": "0012",
  "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
  "branch_code": "120",
  "bank_account_type": "regular",
  "bank_account_name": "ﾀﾅｶﾕﾐｺ",
  "bank_account_number": "1234567",
  "registration_origin": "merchant_console",
  "status": "active",
  "created_on": "2026-04-09T07:35:50.000Z",
  "updated_on": "2026-04-09T07:35:50.000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). One or more bank account fields failed validation. Common reasons: INVALID_FORMAT, NOT_ALLOWED_VALUE. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Deactivate Direct Debit Bank Account

Deactivates a bank account so no further transfers can be registered against it. The record is retained (status becomes `inactive`) rather than deleted, and can be re-enabled later.

```php
function deactivateDirectDebitBankAccount(string $merchantId, string $bankAccountId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `bankAccountId` | `string` | Template, Required | The unique identifier of the direct debit bank account.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |

## Response Type

**200**: Bank Account Deactivated

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankAccount`](../../doc/models/direct-debit-bank-account.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$bankAccountId = '1098116';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->deactivateDirectDebitBankAccount(
    $merchantId,
    $bankAccountId
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankAccount:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "1098116",
  "legacy_store_id": "1283794",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "user_number": "SD02688328",
  "bank_code": "0012",
  "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
  "branch_code": "120",
  "bank_account_type": "regular",
  "bank_account_name": "ﾀﾅｶﾕﾐｺ",
  "bank_account_number": "1234567",
  "registration_origin": "merchant_console",
  "status": "inactive",
  "created_on": "2026-04-09T07:35:50.000Z",
  "updated_on": "2026-04-14T02:11:07.000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Reenable Direct Debit Bank Account

Returns a deactivated bank account to `active` so transfers can be registered against it again. The account must currently be `inactive`.

```php
function reenableDirectDebitBankAccount(
    string $merchantId,
    string $bankAccountId,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `bankAccountId` | `string` | Template, Required | The unique identifier of the direct debit bank account.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Bank Account Re-enabled

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankAccount`](../../doc/models/direct-debit-bank-account.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$bankAccountId = '1098116';

$idempotencyKey = 'f64be872-353d-4c3c-84cb-3dc617fe89f7';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->reenableDirectDebitBankAccount(
    $merchantId,
    $bankAccountId,
    $idempotencyKey
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankAccount:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "1098116",
  "legacy_store_id": "1283794",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "user_number": "SD02688328",
  "bank_code": "0012",
  "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
  "branch_code": "120",
  "bank_account_type": "regular",
  "bank_account_name": "ﾀﾅｶﾕﾐｺ",
  "bank_account_number": "1234567",
  "registration_origin": "merchant_console",
  "status": "active",
  "created_on": "2026-04-09T07:35:50.000Z",
  "updated_on": "2026-04-09T07:35:50.000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The bank account is not inactive. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Create Direct Debit Bank Transfer

Schedules a pull of funds from an active bank account. The transfer is queued for the merchant's next debit cycle and stays editable until that cycle's upload deadline passes.

```php
function createDirectDebitBankTransfer(
    string $merchantId,
    string $bankAccountId,
    DirectDebitBankTransferCreateRequest $body,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `bankAccountId` | `string` | Template, Required | The unique identifier of the direct debit bank account.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |
| `body` | [`DirectDebitBankTransferCreateRequest`](../../doc/models/direct-debit-bank-transfer-create-request.md) | Body, Required | Request payload for scheduling a transfer, in JPY. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Bank Transfer Scheduled

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankTransfer`](../../doc/models/direct-debit-bank-transfer.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$bankAccountId = '1098116';

$body = DirectDebitBankTransferCreateRequestBuilder::init(
    1000
)->build();

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->createDirectDebitBankTransfer(
    $merchantId,
    $bankAccountId,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankTransfer:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "2594976",
  "legacy_store_id": "1283794",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "bank_account_id": "1098116",
  "user_number": "SD02688328",
  "bank_code": "0012",
  "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
  "branch_code": "120",
  "bank_account_type": "regular",
  "bank_account_name": "ﾀﾅｶﾕﾐｺ",
  "bank_account_number": "1234567",
  "amount": 1000,
  "debit_date": "fourteen",
  "calculated_debit_date": "2026-03-14",
  "lock": "unlocked",
  "status": "awaiting",
  "error": null,
  "created_on": "2026-04-09T07:35:50.000Z",
  "updated_on": "2026-04-09T07:35:50.000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The bank account is not active, or the amount is invalid. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# List Direct Debit Bank Transfers

Lists the direct debit transfers registered under this merchant, across all bank accounts.

```php
function listDirectDebitBankTransfers(
    string $merchantId,
    ?int $limit = 10,
    ?string $cursor = null,
    ?string $cursorDirection = CursorDirectionQuery::DESC,
    ?string $bankTransferId = null,
    ?string $bankTransferStart = null,
    ?string $bankTransferEnd = null,
    ?string $debitDate = null,
    ?string $userNumber = null,
    ?string $bankAccountNumber = null,
    ?string $bankAccountName = null,
    ?string $lockStatus = null,
    ?string $bankTransferStatus = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `limit` | `?int` | Query, Optional | Maximum number of resources to return in one page.<br><br>**Default**: `10`<br><br>**Constraints**: `<= 100` |
| `cursor` | `?string` | Query, Optional | Cursor pointing to the resource after which pagination should continue.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |
| `cursorDirection` | [`?string(CursorDirectionQuery)`](../../doc/models/cursor-direction-query.md) | Query, Optional | Pagination direction relative to the supplied cursor.<br><br>**Default**: `CursorDirectionQuery::DESC` |
| `bankTransferId` | `?string` | Query, Optional | Filter by a single bank transfer ID.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |
| `bankTransferStart` | `?string` | Query, Optional | Start of the year-month range in which the transfer is scheduled to occur.<br><br>**Constraints**: *Pattern*: `^[0-9]{4}-[0-9]{2}$` |
| `bankTransferEnd` | `?string` | Query, Optional | End of the year-month range in which the transfer is scheduled to occur.<br><br>**Constraints**: *Pattern*: `^[0-9]{4}-[0-9]{2}$` |
| `debitDate` | [`?string(DirectDebitDebitDate)`](../../doc/models/direct-debit-debit-date.md) | Query, Optional | Filter by monthly debit cycle. |
| `userNumber` | `?string` | Query, Optional | Filter by the merchant's own membership number for the consumer (会員番号).<br><br>**Constraints**: *Pattern*: `^[a-zA-Z0-9]+$` |
| `bankAccountNumber` | `?string` | Query, Optional | Filter by the 7-digit account number (口座番号).<br><br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7`, *Pattern*: `^[0-9]{7}$` |
| `bankAccountName` | `?string` | Query, Optional | Filter by account holder name in half-width katakana (口座名義).<br><br>**Constraints**: *Maximum Length*: `30`, *Pattern*: `^[A-Z0-9ｱ-ﾝﾞﾟ().\- ]{1,30}$` |
| `lockStatus` | [`?string(DirectDebitBankTransferLock)`](../../doc/models/direct-debit-bank-transfer-lock.md) | Query, Optional | Filter by lock status. Omit to return both locked and unlocked transfers. |
| `bankTransferStatus` | [`?string(DirectDebitBankTransferStatus)`](../../doc/models/direct-debit-bank-transfer-status.md) | Query, Optional | Filter by transfer status. Omit to return every status. |

## Response Type

**200**: List of Bank Transfers

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankTransferList`](../../doc/models/direct-debit-bank-transfer-list.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$limit = 10;

$cursor = '1098116';

$cursorDirection = CursorDirectionQuery::ASC;

$bankTransferId = '2594976';

$bankTransferStart = '2026-01';

$bankTransferEnd = '2026-03';

$debitDate = DirectDebitDebitDate::FOURTEEN;

$userNumber = 'SD02688328';

$bankAccountNumber = '1234567';

$bankAccountName = 'ﾀﾅｶﾕﾐｺ';

$lockStatus = DirectDebitBankTransferLock::UNLOCKED;

$bankTransferStatus = DirectDebitBankTransferStatus::AWAITING;

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->listDirectDebitBankTransfers(
    $merchantId,
    $limit,
    $cursor,
    $cursorDirection,
    $bankTransferId,
    $bankTransferStart,
    $bankTransferEnd,
    $debitDate,
    $userNumber,
    $bankAccountNumber,
    $bankAccountName,
    $lockStatus,
    $bankTransferStatus
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankTransferList:';
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
      "id": "2594976",
      "legacy_store_id": "1283794",
      "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
      "bank_account_id": "1098116",
      "user_number": "SD02688328",
      "bank_code": "0012",
      "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
      "branch_code": "120",
      "bank_account_type": "regular",
      "bank_account_name": "ﾀﾅｶﾕﾐｺ",
      "bank_account_number": "1234567",
      "amount": 1000,
      "debit_date": "fourteen",
      "calculated_debit_date": "2026-03-14",
      "lock": "unlocked",
      "status": "awaiting",
      "error": null,
      "created_on": "2026-04-09T07:35:50.000Z",
      "updated_on": "2026-04-09T07:35:50.000Z"
    },
    {
      "id": "2594977",
      "legacy_store_id": "1283794",
      "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
      "bank_account_id": "1098117",
      "user_number": "SD02688329",
      "bank_code": "0009",
      "bank_name": "ﾐﾂｲｽﾐﾄﾓ",
      "branch_code": "221",
      "bank_account_type": "current",
      "bank_account_name": "ｽｽﾞｷﾀﾛｳ",
      "bank_account_number": "7654321",
      "amount": 1850,
      "debit_date": "twenty_seven",
      "calculated_debit_date": "2026-03-27",
      "lock": "locked",
      "status": "failed",
      "error": "insufficient_funds",
      "created_on": "2026-04-10T09:12:04.000Z",
      "updated_on": "2026-04-12T11:03:41.000Z"
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
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Get Direct Debit Bank Transfer

Retrieves a single transfer. Poll this after the cycle's result registration date to pick up the outcome and, on failure, the bank's reason.

```php
function getDirectDebitBankTransfer(string $merchantId, string $bankTransferId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `bankTransferId` | `string` | Template, Required | The unique identifier of the direct debit bank transfer.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |

## Response Type

**200**: Bank Transfer

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankTransfer`](../../doc/models/direct-debit-bank-transfer.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$bankTransferId = '2594976';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->getDirectDebitBankTransfer(
    $merchantId,
    $bankTransferId
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankTransfer:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "2594976",
  "legacy_store_id": "1283794",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "bank_account_id": "1098116",
  "user_number": "SD02688328",
  "bank_code": "0012",
  "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
  "branch_code": "120",
  "bank_account_type": "regular",
  "bank_account_name": "ﾀﾅｶﾕﾐｺ",
  "bank_account_number": "1234567",
  "amount": 1000,
  "debit_date": "fourteen",
  "calculated_debit_date": "2026-03-14",
  "lock": "unlocked",
  "status": "awaiting",
  "error": null,
  "created_on": "2026-04-09T07:35:50.000Z",
  "updated_on": "2026-04-09T07:35:50.000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Update Direct Debit Bank Transfer

Changes a scheduled transfer's amount. Only permitted while the transfer is `unlocked` — once its cycle's upload deadline passes the amount is fixed.

```php
function updateDirectDebitBankTransfer(
    string $merchantId,
    string $bankTransferId,
    DirectDebitBankTransferPatchRequest $body,
    ?string $idempotencyKey = null
): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `bankTransferId` | `string` | Template, Required | The unique identifier of the direct debit bank transfer.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |
| `body` | [`DirectDebitBankTransferPatchRequest`](../../doc/models/direct-debit-bank-transfer-patch-request.md) | Body, Required | Request payload for changing the transfer amount. |
| `idempotencyKey` | `?string` | Header, Optional | An optional idempotency key to prevent double charges and duplicate operations. We recommend a randomly generated UUID (v4). |

## Response Type

**200**: Bank Transfer Updated

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DirectDebitBankTransfer`](../../doc/models/direct-debit-bank-transfer.md).

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$bankTransferId = '2594976';

$body = DirectDebitBankTransferPatchRequestBuilder::init(
    1850
)->build();

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->updateDirectDebitBankTransfer(
    $merchantId,
    $bankTransferId,
    $body
);

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'DirectDebitBankTransfer:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "2594976",
  "legacy_store_id": "1283794",
  "merchant_id": "01234567-89ab-cdef-0123-456789abcdef",
  "bank_account_id": "1098116",
  "user_number": "SD02688328",
  "bank_code": "0012",
  "bank_name": "ﾗｸﾃﾝｷﾞﾝｺｳ",
  "branch_code": "120",
  "bank_account_type": "regular",
  "bank_account_name": "ﾀﾅｶﾕﾐｺ",
  "bank_account_number": "1234567",
  "amount": 1000,
  "debit_date": "fourteen",
  "calculated_debit_date": "2026-03-14",
  "lock": "unlocked",
  "status": "awaiting",
  "error": null,
  "created_on": "2026-04-09T07:35:50.000Z",
  "updated_on": "2026-04-09T07:35:50.000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request (400). The transfer is locked, or the amount is invalid. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |


# Delete Direct Debit Bank Transfer

Cancels a scheduled transfer so it is not sent to the bank. Only permitted while the transfer is `unlocked`.

```php
function deleteDirectDebitBankTransfer(string $merchantId, string $bankTransferId): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `merchantId` | `string` | Template, Required | The unique identifier of the merchant. |
| `bankTransferId` | `string` | Template, Required | The unique identifier of the direct debit bank transfer.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` |

## Response Type

**204**: Bank Transfer Deleted. Returns no content.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance.

## Example Usage

```php
$merchantId = '01234567-89ab-cdef-0123-456789abcdef';

$bankTransferId = '2594976';

$directDebitApi = $client->getDirectDebitApi();
$apiResponse = $directDebitApi->deleteDirectDebitBankTransfer(
    $merchantId,
    $bankTransferId
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
| 400 | Bad Request (400). The transfer is locked and can no longer be deleted. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 404 | Not Found (404). The requested resource (e.g., Store ID or Token ID) does not exist. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |

