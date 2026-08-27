
# Charge Create Request Client Metadata

Charge Create Request Client Metadata schema.

*This model accepts additional fields of type array.*

## Structure

`ChargeCreateRequestClientMetadata`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ipAddress` | `?string` | Optional | Consumer's IPv4 address. | getIpAddress(): ?string | setIpAddress(?string ipAddress): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeCreateRequestClientMetadataBuilder;

$chargeCreateRequestClientMetadata = ChargeCreateRequestClientMetadataBuilder::init()
    ->ipAddress('198.51.100.14')
    ->build();
```

