# Merchants

Merchant identity and effective configuration endpoints for authenticated operators.

```php
$merchantsApi = $client->getMerchantsApi();
```

## Class Name

`MerchantsApi`


# Get Current Merchant

Returns merchant identity and the effective configuration resolved from bearer credentials. Treat this as the canonical introspection endpoint for merchant integrations.

```php
function getCurrentMerchant(): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Response Type

**200**: Current merchant context.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`Merchant`](../../doc/models/merchant.md).

## Example Usage

```php
$merchantsApi = $client->getMerchantsApi();
$apiResponse = $merchantsApi->getCurrentMerchant();

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'Merchant:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "id": "11ef0000-0000-4000-8000-000000000020",
  "verification_data_id": "11ef0000-0000-4000-8000-000000000021",
  "name": "Example Merchant",
  "email": "owner@example.com",
  "notification_email": "alerts@example.com",
  "finance_notification_email": "finance@example.com",
  "verified": true,
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
  },
  "created_on": "2026-04-09T07:35:50.000000Z"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |

