
# Charge Three Ds

Charge Three Ds schema.

*This model accepts additional fields of type array.*

## Structure

`ChargeThreeDs`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `redirectEndpoint` | `?string` | Optional | Redirect endpoint URL. | getRedirectEndpoint(): ?string | setRedirectEndpoint(?string redirectEndpoint): void |
| `mode` | `?string` | Optional | Processing mode for the resource. | getMode(): ?string | setMode(?string mode): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeThreeDsBuilder;

$chargeThreeDs = ChargeThreeDsBuilder::init()->build();
```

