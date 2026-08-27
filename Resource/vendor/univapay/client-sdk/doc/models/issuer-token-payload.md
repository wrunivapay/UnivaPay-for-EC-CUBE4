
# Issuer Token Payload

A dictionary containing necessary key-value pairs for sending the request.

*This model accepts additional fields of type array.*

## Structure

`IssuerTokenPayload`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `requestData` | `?string` | Optional | Generic payload key used by most payment providers. | getRequestData(): ?string | setRequestData(?string requestData): void |
| `sSpcd` | `?string` | Optional | d-barai payment service code. | getSSpcd(): ?string | setSSpcd(?string sSpcd): void |
| `sCptok` | `?string` | Optional | d-barai coupon token. | getSCptok(): ?string | setSCptok(?string sCptok): void |
| `sTerkn` | `?string` | Optional | d-barai terminal key. | getSTerkn(): ?string | setSTerkn(?string sTerkn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\IssuerTokenPayloadBuilder;

$issuerTokenPayload = IssuerTokenPayloadBuilder::init()->build();
```

