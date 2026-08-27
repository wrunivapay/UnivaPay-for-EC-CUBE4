
# Payment Error

Payment errors that occur during resource processing (like Charges or Refunds).
The HTTP status will return success (2xx), but the resource `status` will be `failed`, and this object will be populated.

*This model accepts additional fields of type array.*

## Structure

`PaymentError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?int` | Optional | Payment Error Codes.<br><br>\| Code \| Description \|<br>\| :--- \| :--- \|<br>\| 301 \| Card number error. \|<br>\| 302 \| Invalid expiration month. \|<br>\| 303 \| Invalid expiration year. \|<br>\| 304 \| Card expired. \|<br>\| 305 \| Security code (CVV) error. \|<br>\| 306 \| Card declined (authorization screening error). \|<br>\| 307 \| Invalid card. \|<br>\| 308 \| This card has not been approved by the card company. \|<br>\| 309 \| General error occurred. Detailed information can be confirmed in the dashboard. \|<br>\| 310 \| Invalid consumer data (invalid request data). \|<br>\| 311 \| Too many charges on the same card in a short period. Please wait and try again. \|<br>\| 312 \| This charge cannot be canceled. \|<br>\| 313 \| Authorization expired (during charge capture). \|<br>\| 314 \| This card has been reported stolen or invalidated by the issuer. \|<br>\| 315 \| Please contact the card issuer. \|<br>\| 316 \| Cardholder's last name is required. \|<br>\| 317 \| Partial capture is not supported. \|<br>\| 318 \| Partial refund is not supported. \|<br>\| 319 \| Suspected fraud (security restriction). \|<br>\| 320 \| An error occurred in the bank's system. \|<br>\| 321 \| Dynamic descriptor is not supported. \|<br>\| 322 \| Barcode/QR code is invalid. \|<br>\| 323 \| Barcode/QR code has expired. \|<br>\| 324 \| This barcode/QR code has already been processed. \|<br>\| 325 \| This barcode/QR code is currently being processed. \|<br>\| 326 \| Rejected due to a high-risk profile. \|<br>\| 327 \| Payment deadline (5-minute timeout) has expired. \|<br>\| 328 \| Recovery failed. Manual intervention is required. \|<br>\| 329 \| Refund failed. \|<br>\| 330 \| Insufficient funds. \|<br>\| 331 \| Metadata field value is invalid or missing. \|<br>\| 332 \| Cross-border transaction not permitted: missing ID. \|<br>\| 333 \| Cross-border transaction not permitted: missing phone number. \|<br>\| 334 \| Cross-border transaction not permitted: unauthorized payment method. \|<br>\| 335 \| Cross-border transaction not permitted: missing name. \|<br>\| 336 \| Exceeded the payment limit for this payment method. \|<br>\| 337 \| Exceeded the payment limit for this merchant. \|<br>\| 338 \| Payment information not found. \|<br>\| 339 \| Duplicate payment information. \|<br>\| 340 \| This consumer's retail QR account was rejected by the gateway. \|<br>\| 341 \| This merchant lacks the necessary information for this gateway. \|<br>\| 342 \| Cross-border transaction not permitted: unauthorized currency. \|<br>\| 343 \| Payment could not be processed due to a server error at the gateway. \|<br>\| 344 \| The selected payment method is temporarily unavailable from the gateway. \|<br>\| 345 \| The payment has already been canceled. \|<br>\| 346 \| Payment processing timed out due to system delay and was canceled. \|<br>\| 351 \| Invalid transaction. \|<br>\| 355 \| The card does not support the specified payment division (e.g., installments). \|<br>\| 356 \| The card is not registered for 3D Secure. \|<br>\| 358 \| 3D Secure authentication failed (consumer reason, e.g., wrong password). \|<br>\| 359 \| 3D Secure authentication failed (card company reason). \|<br>\| 500 \| A pre-processing error occurred during the request execution. \|<br>\| 501 \| An internal error occurred. Please contact support. \|<br>\| 502 \| The request timed out waiting for a response. \|<br>\| 601 \| A system-released error occurred in this service. Check details. \|<br>\| 602 \| The payment processor rejected the submitted request. Check details. \|<br>\| 603 \| The submitted customer identity verification was rejected by customs. \|<br>\| 604 \| The required customer ID information was not submitted by the merchant. \| | getCode(): ?int | setCode(?int code): void |
| `message` | `?string` | Optional | A brief message detailing why the payment failed. | getMessage(): ?string | setMessage(?string message): void |
| `detail` | `?string` | Optional | Further specific details regarding the payment failure, if available. | getDetail(): ?string | setDetail(?string detail): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\PaymentErrorBuilder;

$paymentError = PaymentErrorBuilder::init()
    ->code(301)
    ->message('Card number error.')
    ->detail('The provided card number failed validation.')
    ->build();
```

