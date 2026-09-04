
# Charge Create Request

Request payload for creating a charge.

*This model accepts additional fields of type array.*

## Structure

`ChargeCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionTokenId` | `string` | Required | Transaction token identifier. | getTransactionTokenId(): string | setTransactionTokenId(string transactionTokenId): void |
| `amount` | `int` | Required | The charge amount. | getAmount(): int | setAmount(int amount): void |
| `currency` | `string` | Required | ISO-4217 currency code.<br><br>**Default**: `'JPY'` | getCurrency(): string | setCurrency(string currency): void |
| `capture` | `?bool` | Optional | If false, creates an Authorization only (Hold).<br><br>**Default**: `true` | getCapture(): ?bool | setCapture(?bool capture): void |
| `captureAt` | `?DateTime` | Optional | Auto-capture date for cards, or payment deadline for Konbini/Bank. Note: Time specification is ignored for 7-Eleven, Seicomart, and PayEasy. | getCaptureAt(): ?\DateTime | setCaptureAt(?\DateTime captureAt): void |
| `merchantTransactionId` | `?string` | Optional | Unique transaction ID for the merchant.  Required/used by specific brands like we_chat, we_chat_mpm, and we_chat_online.<br><br>**Constraints**: *Maximum Length*: `32` | getMerchantTransactionId(): ?string | setMerchantTransactionId(?string merchantTransactionId): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `clientMetadata` | [`?ChargeCreateRequestClientMetadata`](../../doc/models/charge-create-request-client-metadata.md) | Optional | Charge Create Request Client Metadata schema. | getClientMetadata(): ?ChargeCreateRequestClientMetadata | setClientMetadata(?ChargeCreateRequestClientMetadata clientMetadata): void |
| `redirect` | [`?ChargeCreateRequestRedirect`](../../doc/models/charge-create-request-redirect.md) | Optional | Charge Create Request Redirect schema. | getRedirect(): ?ChargeCreateRequestRedirect | setRedirect(?ChargeCreateRequestRedirect redirect): void |
| `threeDs` | [`?ChargeCreateRequestThreeDs`](../../doc/models/charge-create-request-three-ds.md) | Optional | Charge Create Request Three Ds schema. Either supply `mode` (and optionally `redirect_endpoint`) to have Univapay run 3DS, or supply all six external-MPI fields (`authentication_value` through `transaction_status`) when 3DS authentication was already completed outside of Univapay — in that case `mode` is set to `provided` automatically and must not be sent. | getThreeDs(): ?ChargeCreateRequestThreeDs | setThreeDs(?ChargeCreateRequestThreeDs threeDs): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeCreateRequestBuilder;

$chargeCreateRequest = ChargeCreateRequestBuilder::init(
    'af834c88-7a8f-47ac-aee9-0386a0f98b0d',
    1000,
    'JPY'
)->build();
```

