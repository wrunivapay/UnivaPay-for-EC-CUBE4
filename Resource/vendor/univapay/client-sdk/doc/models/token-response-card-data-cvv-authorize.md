
# Token Response Card Data Cvv Authorize

Token Response Card Data Cvv Authorize schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseCardDataCvvAuthorize`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enabled value. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `status` | `?string` | Optional | Current status of the resource. | getStatus(): ?string | setStatus(?string status): void |
| `chargeId` | `?string` | Optional | Charge identifier. | getChargeId(): ?string | setChargeId(?string chargeId): void |
| `credentialsId` | `?string` | Optional | Credentials identifier. | getCredentialsId(): ?string | setCredentialsId(?string credentialsId): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseCardDataCvvAuthorizeBuilder;

$tokenResponseCardDataCvvAuthorize = TokenResponseCardDataCvvAuthorizeBuilder::init()
    ->enabled(true)
    ->status('current')
    ->chargeId(null)
    ->credentialsId(null)
    ->currency('JPY')
    ->build();
```

