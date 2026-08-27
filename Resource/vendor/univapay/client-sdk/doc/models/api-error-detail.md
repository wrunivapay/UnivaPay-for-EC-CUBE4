
# Api Error Detail

Structured detail entry describing a single API validation or business error.

*This model accepts additional fields of type array.*

## Structure

`ApiErrorDetail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `field` | `?string` | Optional | The field name of the parameter that caused the error (lower_snake_case). | getField(): ?string | setField(?string field): void |
| `reason` | `?string` | Optional | Detailed reason for the nested error (UPPER_SNAKE_CASE or English description). | getReason(): ?string | setReason(?string reason): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ApiErrorDetailBuilder;

$apiErrorDetail = ApiErrorDetailBuilder::init()
    ->field('card_number')
    ->reason('INVALID_CARD_NUMBER')
    ->build();
```

