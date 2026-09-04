# Checkout

Endpoints to retrieve the merchant's checkout widget configuration — enabled payment methods, limits, branding, and per-brand feature support.

```php
$checkoutApi = $client->getCheckoutApi();
```

## Class Name

`CheckoutApi`


# Get Checkout Info

Returns the merchant's checkout configuration: enabled payment methods and their limits, installment/subscription plan settings, convenience-store and bank-transfer settings, widget theme, and per-brand feature support. Resolved entirely from the bearer credential — takes no parameters.

```php
function getCheckoutInfo(): ApiResponse
```

## Authentication

This endpoint requires [JWT_TOKEN](../../doc/auth/oauth-2-bearer-token.md)

## Response Type

**200**: Checkout configuration.

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`CheckoutInfo`](../../doc/models/checkout-info.md).

## Example Usage

```php
$checkoutApi = $client->getCheckoutApi();
$apiResponse = $checkoutApi->getCheckoutInfo();

// Extracting response status code
var_dump($apiResponse->getStatusCode());
// Extracting response headers
var_dump($apiResponse->getHeaders());

if ($apiResponse->isSuccess()) {
    echo 'CheckoutInfo:';
    var_dump($apiResponse->getResult());
} else {
    $error = $apiResponse->getResult();
    var_dump($error);
}
```

## Example Response *(as JSON)*

```json
{
  "mode": "test",
  "recurring_token_privilege": "none",
  "name": "Test store",
  "card_configuration": {
    "enabled": true,
    "debit_enabled": true,
    "prepaid_enabled": true,
    "debit_authorization_enabled": false,
    "prepaid_authorization_enabled": false,
    "only_direct_currency": false,
    "forbidden_card_brands": null,
    "allowed_countries_by_ip": null,
    "foreign_cards_allowed": true,
    "fail_on_new_email": null,
    "card_limit": null,
    "allow_empty_cvv": null,
    "allow_direct_token_creation": true,
    "three_ds_required": false,
    "three_ds_address_required": false,
    "three_ds_skip_enabled": false,
    "three_ds_phone_number_required": true
  },
  "subscription_configuration": {
    "enabled": true
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
      "amount": 1000,
      "amount_formatted": 1000,
      "currency": "JPY"
    },
    "max_payout_period": "P2Y",
    "only_with_processor": true
  },
  "subscription_plan_configuration": {
    "enabled": true,
    "fixed_cycle": true,
    "fixed_cycle_amount": true,
    "supported_payment_types": [
      "card"
    ],
    "min_charge_amount": null,
    "max_payout_period": null
  },
  "checkout_configuration": {
    "ec_email": {
      "enabled": false
    },
    "ec_products": {
      "enabled": false
    }
  },
  "qr_scan_configuration": {
    "enabled": true,
    "forbidden_qr_scan_gateways": null
  },
  "convenience_configuration": {
    "enabled": true,
    "expiration": "PT720H",
    "expiration_time_shift": {
      "enabled": false
    }
  },
  "paidy_configuration": {
    "enabled": true
  },
  "paidy_public_key": null,
  "logo_image": null,
  "theme": {
    "colors": {
      "main_background": "#FFFFFF",
      "secondary_background": "#F5F8FC",
      "main_color": "#4C5F85",
      "main_text": "#FFFFFF",
      "primary_text": "#4C5F85",
      "secondary_text": "#4C5F85",
      "base_text": "#4C5F85",
      "body_background": "#FFFFFF"
    }
  },
  "recurring_card_charge_cvv_confirmation": {
    "enabled": false,
    "threshold": null
  },
  "online_configuration": {
    "enabled": true
  },
  "bank_transfer_configuration": {
    "enabled": true,
    "match_amount": "disabled",
    "expiration": "PT72H",
    "expiration_time_shift": {
      "enabled": false
    },
    "virtual_bank_accounts_threshold": 5,
    "virtual_bank_accounts_fetch_count": 10,
    "default_extension_period": "PT168H",
    "maximum_extension_period": "PT168H",
    "automatic_extension_enabled": false,
    "charge_request_notification_enabled": false,
    "charge_request_canceled_notification_enabled": false,
    "charge_expired_notification_enabled": false,
    "deposit_received_notification_enabled": false,
    "deposit_insufficient_notification_enabled": false,
    "deposit_exceeded_notification_enabled": false,
    "extension_notification_enabled": false,
    "remind_notification_period": "PT168H",
    "remind_notification_enabled": false
  },
  "supported_brands": [
    {
      "payment_type": "card",
      "brand": "visa",
      "card_brand": "visa",
      "dynamic_info": false,
      "support_auth_capture": true,
      "requires_full_name": false,
      "requires_cvv": true,
      "countries_allowed": null,
      "supported_currencies": null,
      "cvv_auth": false,
      "installment_capable": true,
      "mcp_capable": false,
      "mcp_only": false
    },
    {
      "payment_type": "qr_merchant",
      "brand": "alipay_merchant_qr",
      "qr_brand": "alipay_merchant_qr",
      "dynamic_info": false,
      "support_auth_capture": false,
      "requires_full_name": false,
      "requires_cvv": false,
      "countries_allowed": null,
      "supported_currencies": null,
      "cvv_auth": false,
      "installment_capable": false,
      "mcp_capable": false,
      "mcp_only": false
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 401 | Unauthorized (401). Authentication failed.  Common codes: AUTH_HEADER_MISSING, INVALID_APP_TOKEN, INVALID_CREDENTIALS. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 403 | Forbidden (403). The request is understood, but access is refused.  This occurs if permissions are insufficient or if a security lock is triggered. | [`ApiErrorException`](../../doc/models/api-error-exception.md) |
| 429 | Too Many Requests (429). Rate limit exceeded. Returns an empty JSON object in this spec. | `ApiException` |

