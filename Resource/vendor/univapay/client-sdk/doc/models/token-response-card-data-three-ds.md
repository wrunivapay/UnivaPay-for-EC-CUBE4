
# Token Response Card Data Three Ds

Token Response Card Data Three Ds schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseCardDataThreeDs`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enabled value. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `status` | [`?string(TokenResponseCardDataThreeDsStatus)`](../../doc/models/token-response-card-data-three-ds-status.md) | Optional | Token Response Card Data Three Ds Status schema. | getStatus(): ?string | setStatus(?string status): void |
| `redirectEndpoint` | `?string` | Optional | Redirect endpoint URL. | getRedirectEndpoint(): ?string | setRedirectEndpoint(?string redirectEndpoint): void |
| `redirectId` | `?string` | Optional | Redirect identifier. | getRedirectId(): ?string | setRedirectId(?string redirectId): void |
| `exempted` | `?bool` | Optional | Indicates if the 3DS check was exempted. When creating charge 3DS check will not be required. | getExempted(): ?bool | setExempted(?bool exempted): void |
| `error` | [`?PaymentError`](../../doc/models/payment-error.md) | Optional | Payment error details, or null if successful. | getError(): ?PaymentError | setError(?PaymentError error): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseCardDataThreeDsBuilder;
use UnivaPay\Models\TokenResponseCardDataThreeDsStatus;

$tokenResponseCardDataThreeDs = TokenResponseCardDataThreeDsBuilder::init()
    ->enabled(true)
    ->status(TokenResponseCardDataThreeDsStatus::SUCCESSFUL)
    ->redirectEndpoint(null)
    ->redirectId(null)
    ->exempted(false)
    ->error(
        null
    )
    ->build();
```

