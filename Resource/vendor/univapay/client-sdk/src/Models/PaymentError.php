<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use stdClass;
use UnivaPay\ApiHelper;

/**
 * Payment errors that occur during resource processing (like Charges or Refunds).
 * The HTTP status will return success (2xx), but the resource `status` will be `failed`, and this
 * object will be populated.
 */
class PaymentError implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $detail;

    /**
     * Returns Code.
     * Payment Error Codes.
     *
     * | Code | Description |
     * | :--- | :--- |
     * | 301 | Card number error. |
     * | 302 | Invalid expiration month. |
     * | 303 | Invalid expiration year. |
     * | 304 | Card expired. |
     * | 305 | Security code (CVV) error. |
     * | 306 | Card declined (authorization screening error). |
     * | 307 | Invalid card. |
     * | 308 | This card has not been approved by the card company. |
     * | 309 | General error occurred. Detailed information can be confirmed in the dashboard. |
     * | 310 | Invalid consumer data (invalid request data). |
     * | 311 | Too many charges on the same card in a short period. Please wait and try again. |
     * | 312 | This charge cannot be canceled. |
     * | 313 | Authorization expired (during charge capture). |
     * | 314 | This card has been reported stolen or invalidated by the issuer. |
     * | 315 | Please contact the card issuer. |
     * | 316 | Cardholder's last name is required. |
     * | 317 | Partial capture is not supported. |
     * | 318 | Partial refund is not supported. |
     * | 319 | Suspected fraud (security restriction). |
     * | 320 | An error occurred in the bank's system. |
     * | 321 | Dynamic descriptor is not supported. |
     * | 322 | Barcode/QR code is invalid. |
     * | 323 | Barcode/QR code has expired. |
     * | 324 | This barcode/QR code has already been processed. |
     * | 325 | This barcode/QR code is currently being processed. |
     * | 326 | Rejected due to a high-risk profile. |
     * | 327 | Payment deadline (5-minute timeout) has expired. |
     * | 328 | Recovery failed. Manual intervention is required. |
     * | 329 | Refund failed. |
     * | 330 | Insufficient funds. |
     * | 331 | Metadata field value is invalid or missing. |
     * | 332 | Cross-border transaction not permitted: missing ID. |
     * | 333 | Cross-border transaction not permitted: missing phone number. |
     * | 334 | Cross-border transaction not permitted: unauthorized payment method. |
     * | 335 | Cross-border transaction not permitted: missing name. |
     * | 336 | Exceeded the payment limit for this payment method. |
     * | 337 | Exceeded the payment limit for this merchant. |
     * | 338 | Payment information not found. |
     * | 339 | Duplicate payment information. |
     * | 340 | This consumer's retail QR account was rejected by the gateway. |
     * | 341 | This merchant lacks the necessary information for this gateway. |
     * | 342 | Cross-border transaction not permitted: unauthorized currency. |
     * | 343 | Payment could not be processed due to a server error at the gateway. |
     * | 344 | The selected payment method is temporarily unavailable from the gateway. |
     * | 345 | The payment has already been canceled. |
     * | 346 | Payment processing timed out due to system delay and was canceled. |
     * | 351 | Invalid transaction. |
     * | 355 | The card does not support the specified payment division (e.g., installments). |
     * | 356 | The card is not registered for 3D Secure. |
     * | 358 | 3D Secure authentication failed (consumer reason, e.g., wrong password). |
     * | 359 | 3D Secure authentication failed (card company reason). |
     * | 500 | A pre-processing error occurred during the request execution. |
     * | 501 | An internal error occurred. Please contact support. |
     * | 502 | The request timed out waiting for a response. |
     * | 601 | A system-released error occurred in this service. Check details. |
     * | 602 | The payment processor rejected the submitted request. Check details. |
     * | 603 | The submitted customer identity verification was rejected by customs. |
     * | 604 | The required customer ID information was not submitted by the merchant. |
     */
    public function getCode(): ?int
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Payment Error Codes.
     *
     * | Code | Description |
     * | :--- | :--- |
     * | 301 | Card number error. |
     * | 302 | Invalid expiration month. |
     * | 303 | Invalid expiration year. |
     * | 304 | Card expired. |
     * | 305 | Security code (CVV) error. |
     * | 306 | Card declined (authorization screening error). |
     * | 307 | Invalid card. |
     * | 308 | This card has not been approved by the card company. |
     * | 309 | General error occurred. Detailed information can be confirmed in the dashboard. |
     * | 310 | Invalid consumer data (invalid request data). |
     * | 311 | Too many charges on the same card in a short period. Please wait and try again. |
     * | 312 | This charge cannot be canceled. |
     * | 313 | Authorization expired (during charge capture). |
     * | 314 | This card has been reported stolen or invalidated by the issuer. |
     * | 315 | Please contact the card issuer. |
     * | 316 | Cardholder's last name is required. |
     * | 317 | Partial capture is not supported. |
     * | 318 | Partial refund is not supported. |
     * | 319 | Suspected fraud (security restriction). |
     * | 320 | An error occurred in the bank's system. |
     * | 321 | Dynamic descriptor is not supported. |
     * | 322 | Barcode/QR code is invalid. |
     * | 323 | Barcode/QR code has expired. |
     * | 324 | This barcode/QR code has already been processed. |
     * | 325 | This barcode/QR code is currently being processed. |
     * | 326 | Rejected due to a high-risk profile. |
     * | 327 | Payment deadline (5-minute timeout) has expired. |
     * | 328 | Recovery failed. Manual intervention is required. |
     * | 329 | Refund failed. |
     * | 330 | Insufficient funds. |
     * | 331 | Metadata field value is invalid or missing. |
     * | 332 | Cross-border transaction not permitted: missing ID. |
     * | 333 | Cross-border transaction not permitted: missing phone number. |
     * | 334 | Cross-border transaction not permitted: unauthorized payment method. |
     * | 335 | Cross-border transaction not permitted: missing name. |
     * | 336 | Exceeded the payment limit for this payment method. |
     * | 337 | Exceeded the payment limit for this merchant. |
     * | 338 | Payment information not found. |
     * | 339 | Duplicate payment information. |
     * | 340 | This consumer's retail QR account was rejected by the gateway. |
     * | 341 | This merchant lacks the necessary information for this gateway. |
     * | 342 | Cross-border transaction not permitted: unauthorized currency. |
     * | 343 | Payment could not be processed due to a server error at the gateway. |
     * | 344 | The selected payment method is temporarily unavailable from the gateway. |
     * | 345 | The payment has already been canceled. |
     * | 346 | Payment processing timed out due to system delay and was canceled. |
     * | 351 | Invalid transaction. |
     * | 355 | The card does not support the specified payment division (e.g., installments). |
     * | 356 | The card is not registered for 3D Secure. |
     * | 358 | 3D Secure authentication failed (consumer reason, e.g., wrong password). |
     * | 359 | 3D Secure authentication failed (card company reason). |
     * | 500 | A pre-processing error occurred during the request execution. |
     * | 501 | An internal error occurred. Please contact support. |
     * | 502 | The request timed out waiting for a response. |
     * | 601 | A system-released error occurred in this service. Check details. |
     * | 602 | The payment processor rejected the submitted request. Check details. |
     * | 603 | The submitted customer identity verification was rejected by customs. |
     * | 604 | The required customer ID information was not submitted by the merchant. |
     *
     * @maps code
     */
    public function setCode(?int $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Message.
     * A brief message detailing why the payment failed.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     * A brief message detailing why the payment failed.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Detail.
     * Further specific details regarding the payment failure, if available.
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     * Further specific details regarding the payment failure, if available.
     *
     * @maps detail
     */
    public function setDetail(?string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * Converts the PaymentError object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentError object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentError',
            [
                'code' => $this->code,
                'message' => $this->message,
                'detail' => $this->detail,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['code', 'message', 'detail'];

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

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->code)) {
            $json['code']    = $this->code;
        }
        if (isset($this->message)) {
            $json['message'] = $this->message;
        }
        if (isset($this->detail)) {
            $json['detail']  = $this->detail;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
