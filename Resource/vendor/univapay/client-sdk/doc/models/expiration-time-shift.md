
# Expiration Time Shift

Time-of-day override applied when calculating expirations, shared by convenience-store and bank-transfer configuration.

*This model accepts additional fields of type array.*

## Structure

`ExpirationTimeShift`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `value` | `?string` | Optional | ISO-8601 offset time (HH:mm:ssXXX) that overrides the expiration cutoff. Omitted entirely when no override is configured. | getValue(): ?string | setValue(?string value): void |
| `enabled` | `?bool` | Optional | Whether the time-of-day override is applied. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ExpirationTimeShiftBuilder;
use UnivaPay\ApiHelper;

$expirationTimeShift = ExpirationTimeShiftBuilder::init()
    ->value('23:59:59+09:00')
    ->enabled(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

