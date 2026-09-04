
# Token Create Card Data Cvv Authorize

Token Create Card Data Cvv Authorize schema.

*This model accepts additional fields of type array.*

## Structure

`TokenCreateCardDataCvvAuthorize`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enabled value.<br><br>**Default**: `false` | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenCreateCardDataCvvAuthorizeBuilder;

$tokenCreateCardDataCvvAuthorize = TokenCreateCardDataCvvAuthorizeBuilder::init()
    ->enabled(false)
    ->currency('JPY')
    ->build();
```

