<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Exceptions;

use UnivaPay\ApiHelper;

/**
 * Standard API error response payload.
 */
class ApiErrorException extends ApiException
{
    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $codeProperty;

    /**
     * @var \UnivaPay\Models\ApiErrorDetail[]|null
     */
    private $errors;

    /**
     * @param string $reason
     * @param \UnivaPay\Http\HttpRequest $request
     * @param \UnivaPay\Http\HttpResponse $response
     * @param string $codeProperty
     */
    public function __construct(
        string $reason,
        \UnivaPay\Http\HttpRequest $request,
        \UnivaPay\Http\HttpResponse $response,
        string $codeProperty
    ) {
        parent::__construct($reason, $request, $response);
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Status.
     * Always returns 'error'.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Always returns 'error'.
     *
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Code Property.
     * API Request Error Codes.
     *
     * | HTTP | Error Code | Description |
     * | :--- | :--- | :--- |
     * | 400 | ALREADY_CAPTURED | The target charge is already captured or authorization is incomplete. |
     * | 400 | AUTH_NOT_SUPPORTED | The configured gateway does not support authorization. |
     * | 400 | CANCEL_NOT_ALLOWED | This payment method does not support cancellation, or the charge status
     * cannot be canceled. |
     * | 400 | CANNOT_CHANGE_CANCELED_SUBSCRIPTION | A canceled subscription cannot be modified. |
     * | 400 | CANNOT_CHANGE_TOKEN | The transaction token for a subscription in this state cannot be
     * changed. |
     * | 400 | CANNOT_REFUND_UNSUCCESSFUL_CHARGE | Charges in a state other than 'successful' cannot be
     * refunded. |
     * | 400 | CAPTURE_AMOUNT_TOO_LARGE | The capture amount exceeds the authorized amount. |
     * | 400 | CARD_BRAND_NOT_SUPPORTED | The configured gateway does not support the specified card brand.
     * |
     * | 400 | CARD_COUNTRY_NOT_SUPPORTED | The configured gateway does not support the specified card
     * issuing country. |
     * | 400 | CARD_PROCESSING_DISABLED | Card processing is disabled for this payment method. |
     * | 400 | CHARGE_TOO_QUICK | Attempted to create multiple charges with the same amount within 30
     * seconds for the same card or recurring token. |
     * | 400 | CONVENIENCE_PROCESSING_DISABLED | Konbini processing is disabled for this payment method. |
     * | 400 | CURRENCY_MUST_MATCH_CHARGE | The refund currency must match the original charge currency. |
     * | 400 | CVV_REQUIRED | CVV is required. |
     * | 400 | CVV_AUTHORIZATION_NOT_COMPLETED | CVV authorization failed. |
     * | 400 | FILE_INVALID_TYPE | The uploaded file has an incorrect MIME type. |
     * | 400 | FILE_MAX_SIZE_EXCEEDED | The uploaded file size is too large. |
     * | 400 | FORBIDDEN_IP | The country determined by the request's IP address is not permitted. |
     * | 400 | INSTALLMENT_MAX_PAYOUT_PERIOD_EXCEEDED | The installment payment period exceeds the maximum
     * allowed period. |
     * | 400 | INSTALLMENT_PAYMENT_TYPE_NOT_ALLOWED_FOR_PLAN | The payment method is not allowed for this
     * installment plan. |
     * | 400 | INSTALLMENT_INVALID_CYCLES_COUNT | The number of installment cycles is unavailable. |
     * | 400 | INSTALLMENT_INVALID_PLAN | Unsupported installment plan. |
     * | 400 | INVALID_PLATFORM | Invalid platform specified. |
     * | 400 | INVALID_TOKEN_TYPE | Invalid transaction token type. |
     * | 400 | INVALID_QR_SCAN_GATEWAY | The QR code scanning gateway is not configured or not active. |
     * | 400 | LAST_NAME_REQUIRED | A space-separated last name is required for the cardholder. |
     * | 400 | LIVE_MODE_NOT_ENABLED_WHEN_UNVERIFIED | Account review must be completed to use live mode.
     * |
     * | 400 | NO_DIRECT_CURRENCY_GATEWAY | No gateway available to process the payment without currency
     * conversion. |
     * | 400 | NO_GATEWAYS_AVAILABLE | No available gateways found. |
     * | 400 | NO_TEST_CARD_IN_LIVE_MODE | Test cards cannot be used in live mode. |
     * | 400 | NON_SUBSCRIPTION_PAYMENT | Please specify a one-time token or recurring token to create a
     * charge. |
     * | 400 | NOT_ONE_TIME_TOKEN | Only one-time tokens are supported. |
     * | 400 | NOT_SUBSCRIPTION_TOKEN | Please specify a subscription or recurring token. |
     * | 400 | PARTIAL_CAPTURE_NOT_SUPPORTED | Partial capture is not supported. |
     * | 400 | PAYMENT_EXPIRATION_EXCEEDS_PERIOD | Payment expiration date exceeds the allowed cycle. |
     * | 400 | PROCESSING_MODE_MISMATCH | Application token and transaction token modes do not match (e.g.,
     * live vs. test). |
     * | 400 | QR_PROCESSING_DISABLED | QR processing is disabled for this payment method. |
     * | 400 | RECURRING_TOKEN_DISABLED | Transaction token is disabled or the account lacks permission to
     * use recurring tokens. |
     * | 400 | RECURRING_USAGE_LIMIT_REQUIRED | The `usage_limit` parameter is required. |
     * | 400 | RECURRING_USAGE_REQUIRES_CVV | CVV is required for recurring usage. |
     * | 400 | REFUND_EXCEEDS_CHARGE_AMOUNT | The refund amount exceeds the charge amount. |
     * | 400 | REFUND_NOT_ALLOWED | The payment method does not support refunds, or the refund was declined.
     * |
     * | 400 | REFUND_EXCEEDS_SALES | The refund amount exceeds the merchant's available balance limit. |
     * | 400 | REFUND_NOT_WITHIN_BOUNDS | The combined partial refund amounts exceed the total charge
     * amount. |
     * | 400 | RESOURCE_LIMIT_REACHED | Resource limit reached. |
     * | 400 | SUBSCRIPTION_ALREADY_ENDED | The subscription has already ended. |
     * | 400 | TOKEN_FOR_WRONG_STORE | The transaction token's store differs from the subscription's store.
     * |
     * | 400 | TRANSACTION_ALREADY_PROCESSED | Used transaction tokens cannot be specified again. |
     * | 400 | TRANSACTION_TOKEN_EXPIRED | The transaction token has expired. |
     * | 400 | USAGE_LIMIT_NOT_APPLICABLE | `usage_limit` cannot be specified here. |
     * | 400 | VALIDATION_ERROR | There is a validation error in the request parameters. Check `errors` for
     * details. |
     * | 400 | CHARGE_AMOUNT_TOO_HIGH | The charge amount exceeds the maximum allowed limit. |
     * | 400 | NOT_SUPPORTED_BY_PROCESSOR | The gateway does not support this request. |
     * | 401 | AUTH_HEADER_MISSING | The `Authorization` header is missing. |
     * | 401 | EXPIRED_LOGIN_TOKEN | The login token has expired. |
     * | 401 | INVALID_APP_TOKEN | The specified application token is invalid. |
     * | 401 | INVALID_CREDENTIALS | Authentication credentials are invalid. |
     * | 401 | INVALID_DOMAIN | The requested `Origin` domain is not registered for the specified
     * application token. |
     * | 401 | INVALID_LOGIN_TOKEN | The login token is invalid. |
     * | 401 | DIRECT_CARD_TOKEN_CREATION_DISABLED | Cannot send raw card data due to lack of PCI DSS
     * compliance. |
     * | 403 | CARD_LOCKED | This card is temporarily locked due to exceeding the failure threshold within
     * a certain period. |
     * | 403 | INVALID_PERMISSIONS | The application token type is incorrect or the account lacks
     * sufficient permissions. |
     * | 403 | INSTALLMENT_PROCESSOR_INITIAL_AMOUNTS_NOT_SUPPORTED | Initial installment amount
     * specification is not supported by this gateway. |
     * | 403 | OUTDATED_APP_TOKEN | Application token version is outdated. Please create a new one. |
     * | 403 | TEST_CARD_CANNOT_BE_BANNED | Test cards cannot be banned. |
     * | 403 | INSTALLMENTS_NOT_ENABLED | Installment payments are not enabled. |
     * | 409 | IDEMPOTENCY_KEY_CONFLICT | The specified idempotency key has been used previously for a
     * different request. |
     * | 409 | NON_UNIQUE_ACTIVE_TOKEN | An active transaction token already exists. |
     * | 409 | WEBHOOK_URL_EXISTS | The specified Webhook URL is already registered. |
     * | 500 | COULD_NOT_REFRESH_AUTH | Failed to refresh the login token. |
     * | 500 | DB_ERROR | Internal database error. |
     * | 500 | FILE_UPLOAD_ERROR | File upload failed. |
     * | 500 | IMPROPER_AUTH | Authorization state is improper. |
     * | 500 | TIMEOUT | A timeout occurred during internal processing. |
     * | 500 | UNABLE_TO_GET_IDEMPOTENT_RESULT | Cache found for idempotency key, but failed to retrieve
     * the previous processing result. |
     * | 500 | UNKNOWN_ERROR | An unexpected error occurred. |
     * | 503 | SERVICE_UNAVAILABLE_TRY_AGAIN | Service is temporarily unavailable. Please try again later.
     * |
     * | 504 | NO_GATEWAY_AVAILABLE_TO_PROCESS_THE_REQUEST | This request is not supported by the connected
     * gateway system. |
     */
    public function getCodeProperty(): string
    {
        return $this->codeProperty;
    }

    /**
     * Sets Code Property.
     * API Request Error Codes.
     *
     * | HTTP | Error Code | Description |
     * | :--- | :--- | :--- |
     * | 400 | ALREADY_CAPTURED | The target charge is already captured or authorization is incomplete. |
     * | 400 | AUTH_NOT_SUPPORTED | The configured gateway does not support authorization. |
     * | 400 | CANCEL_NOT_ALLOWED | This payment method does not support cancellation, or the charge status
     * cannot be canceled. |
     * | 400 | CANNOT_CHANGE_CANCELED_SUBSCRIPTION | A canceled subscription cannot be modified. |
     * | 400 | CANNOT_CHANGE_TOKEN | The transaction token for a subscription in this state cannot be
     * changed. |
     * | 400 | CANNOT_REFUND_UNSUCCESSFUL_CHARGE | Charges in a state other than 'successful' cannot be
     * refunded. |
     * | 400 | CAPTURE_AMOUNT_TOO_LARGE | The capture amount exceeds the authorized amount. |
     * | 400 | CARD_BRAND_NOT_SUPPORTED | The configured gateway does not support the specified card brand.
     * |
     * | 400 | CARD_COUNTRY_NOT_SUPPORTED | The configured gateway does not support the specified card
     * issuing country. |
     * | 400 | CARD_PROCESSING_DISABLED | Card processing is disabled for this payment method. |
     * | 400 | CHARGE_TOO_QUICK | Attempted to create multiple charges with the same amount within 30
     * seconds for the same card or recurring token. |
     * | 400 | CONVENIENCE_PROCESSING_DISABLED | Konbini processing is disabled for this payment method. |
     * | 400 | CURRENCY_MUST_MATCH_CHARGE | The refund currency must match the original charge currency. |
     * | 400 | CVV_REQUIRED | CVV is required. |
     * | 400 | CVV_AUTHORIZATION_NOT_COMPLETED | CVV authorization failed. |
     * | 400 | FILE_INVALID_TYPE | The uploaded file has an incorrect MIME type. |
     * | 400 | FILE_MAX_SIZE_EXCEEDED | The uploaded file size is too large. |
     * | 400 | FORBIDDEN_IP | The country determined by the request's IP address is not permitted. |
     * | 400 | INSTALLMENT_MAX_PAYOUT_PERIOD_EXCEEDED | The installment payment period exceeds the maximum
     * allowed period. |
     * | 400 | INSTALLMENT_PAYMENT_TYPE_NOT_ALLOWED_FOR_PLAN | The payment method is not allowed for this
     * installment plan. |
     * | 400 | INSTALLMENT_INVALID_CYCLES_COUNT | The number of installment cycles is unavailable. |
     * | 400 | INSTALLMENT_INVALID_PLAN | Unsupported installment plan. |
     * | 400 | INVALID_PLATFORM | Invalid platform specified. |
     * | 400 | INVALID_TOKEN_TYPE | Invalid transaction token type. |
     * | 400 | INVALID_QR_SCAN_GATEWAY | The QR code scanning gateway is not configured or not active. |
     * | 400 | LAST_NAME_REQUIRED | A space-separated last name is required for the cardholder. |
     * | 400 | LIVE_MODE_NOT_ENABLED_WHEN_UNVERIFIED | Account review must be completed to use live mode.
     * |
     * | 400 | NO_DIRECT_CURRENCY_GATEWAY | No gateway available to process the payment without currency
     * conversion. |
     * | 400 | NO_GATEWAYS_AVAILABLE | No available gateways found. |
     * | 400 | NO_TEST_CARD_IN_LIVE_MODE | Test cards cannot be used in live mode. |
     * | 400 | NON_SUBSCRIPTION_PAYMENT | Please specify a one-time token or recurring token to create a
     * charge. |
     * | 400 | NOT_ONE_TIME_TOKEN | Only one-time tokens are supported. |
     * | 400 | NOT_SUBSCRIPTION_TOKEN | Please specify a subscription or recurring token. |
     * | 400 | PARTIAL_CAPTURE_NOT_SUPPORTED | Partial capture is not supported. |
     * | 400 | PAYMENT_EXPIRATION_EXCEEDS_PERIOD | Payment expiration date exceeds the allowed cycle. |
     * | 400 | PROCESSING_MODE_MISMATCH | Application token and transaction token modes do not match (e.g.,
     * live vs. test). |
     * | 400 | QR_PROCESSING_DISABLED | QR processing is disabled for this payment method. |
     * | 400 | RECURRING_TOKEN_DISABLED | Transaction token is disabled or the account lacks permission to
     * use recurring tokens. |
     * | 400 | RECURRING_USAGE_LIMIT_REQUIRED | The `usage_limit` parameter is required. |
     * | 400 | RECURRING_USAGE_REQUIRES_CVV | CVV is required for recurring usage. |
     * | 400 | REFUND_EXCEEDS_CHARGE_AMOUNT | The refund amount exceeds the charge amount. |
     * | 400 | REFUND_NOT_ALLOWED | The payment method does not support refunds, or the refund was declined.
     * |
     * | 400 | REFUND_EXCEEDS_SALES | The refund amount exceeds the merchant's available balance limit. |
     * | 400 | REFUND_NOT_WITHIN_BOUNDS | The combined partial refund amounts exceed the total charge
     * amount. |
     * | 400 | RESOURCE_LIMIT_REACHED | Resource limit reached. |
     * | 400 | SUBSCRIPTION_ALREADY_ENDED | The subscription has already ended. |
     * | 400 | TOKEN_FOR_WRONG_STORE | The transaction token's store differs from the subscription's store.
     * |
     * | 400 | TRANSACTION_ALREADY_PROCESSED | Used transaction tokens cannot be specified again. |
     * | 400 | TRANSACTION_TOKEN_EXPIRED | The transaction token has expired. |
     * | 400 | USAGE_LIMIT_NOT_APPLICABLE | `usage_limit` cannot be specified here. |
     * | 400 | VALIDATION_ERROR | There is a validation error in the request parameters. Check `errors` for
     * details. |
     * | 400 | CHARGE_AMOUNT_TOO_HIGH | The charge amount exceeds the maximum allowed limit. |
     * | 400 | NOT_SUPPORTED_BY_PROCESSOR | The gateway does not support this request. |
     * | 401 | AUTH_HEADER_MISSING | The `Authorization` header is missing. |
     * | 401 | EXPIRED_LOGIN_TOKEN | The login token has expired. |
     * | 401 | INVALID_APP_TOKEN | The specified application token is invalid. |
     * | 401 | INVALID_CREDENTIALS | Authentication credentials are invalid. |
     * | 401 | INVALID_DOMAIN | The requested `Origin` domain is not registered for the specified
     * application token. |
     * | 401 | INVALID_LOGIN_TOKEN | The login token is invalid. |
     * | 401 | DIRECT_CARD_TOKEN_CREATION_DISABLED | Cannot send raw card data due to lack of PCI DSS
     * compliance. |
     * | 403 | CARD_LOCKED | This card is temporarily locked due to exceeding the failure threshold within
     * a certain period. |
     * | 403 | INVALID_PERMISSIONS | The application token type is incorrect or the account lacks
     * sufficient permissions. |
     * | 403 | INSTALLMENT_PROCESSOR_INITIAL_AMOUNTS_NOT_SUPPORTED | Initial installment amount
     * specification is not supported by this gateway. |
     * | 403 | OUTDATED_APP_TOKEN | Application token version is outdated. Please create a new one. |
     * | 403 | TEST_CARD_CANNOT_BE_BANNED | Test cards cannot be banned. |
     * | 403 | INSTALLMENTS_NOT_ENABLED | Installment payments are not enabled. |
     * | 409 | IDEMPOTENCY_KEY_CONFLICT | The specified idempotency key has been used previously for a
     * different request. |
     * | 409 | NON_UNIQUE_ACTIVE_TOKEN | An active transaction token already exists. |
     * | 409 | WEBHOOK_URL_EXISTS | The specified Webhook URL is already registered. |
     * | 500 | COULD_NOT_REFRESH_AUTH | Failed to refresh the login token. |
     * | 500 | DB_ERROR | Internal database error. |
     * | 500 | FILE_UPLOAD_ERROR | File upload failed. |
     * | 500 | IMPROPER_AUTH | Authorization state is improper. |
     * | 500 | TIMEOUT | A timeout occurred during internal processing. |
     * | 500 | UNABLE_TO_GET_IDEMPOTENT_RESULT | Cache found for idempotency key, but failed to retrieve
     * the previous processing result. |
     * | 500 | UNKNOWN_ERROR | An unexpected error occurred. |
     * | 503 | SERVICE_UNAVAILABLE_TRY_AGAIN | Service is temporarily unavailable. Please try again later.
     * |
     * | 504 | NO_GATEWAY_AVAILABLE_TO_PROCESS_THE_REQUEST | This request is not supported by the connected
     * gateway system. |
     *
     * @required
     * @maps code
     */
    public function setCodeProperty(string $codeProperty): void
    {
        $this->codeProperty = $codeProperty;
    }

    /**
     * Returns Errors.
     * List of detailed API errors.
     *
     * @return \UnivaPay\Models\ApiErrorDetail[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * List of detailed API errors.
     *
     * @maps errors
     *
     * @param \UnivaPay\Models\ApiErrorDetail[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the ApiErrorException object to a human-readable string representation.
     *
     * @return string The string representation of the ApiErrorException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApiErrorException',
            [
                'status' => $this->status,
                'codeProperty' => $this->codeProperty,
                'errors' => $this->errors,
                'additionalProperties' => $this->additionalProperties
            ],
            parent::__toString()
        );
    }

    protected $propertyNames = ['status', 'code', 'errors'];

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        if (in_array($name, $this->propertyNames, true)) {
            throw new \InvalidArgumentException(
                "The additional property key, '$name' conflicts with one of the model's properties"
            );
        }

        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }
}
