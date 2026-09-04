
# Charge Redirect

Charge Redirect schema.

*This model accepts additional fields of type array.*

## Structure

`ChargeRedirect`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endpoint` | `?string` | Optional | Endpoint value. | getEndpoint(): ?string | setEndpoint(?string endpoint): void |
| `redirectId` | `?string` | Optional | Redirect identifier. | getRedirectId(): ?string | setRedirectId(?string redirectId): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeRedirectBuilder;

$chargeRedirect = ChargeRedirectBuilder::init()->build();
```

