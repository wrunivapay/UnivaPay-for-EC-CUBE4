
# Restrict Ip After Failed Charge Config

IP restriction policy applied after repeated failed charges.

*This model accepts additional fields of type array.*

## Structure

`RestrictIpAfterFailedChargeConfig`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables temporary IP restrictions after repeated failures. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `count` | `?int` | Optional | Number of failed charges allowed before restriction starts. | getCount(): ?int | setCount(?int count): void |
| `cooldown` | `?string` | Optional | ISO-8601 duration that the IP restriction remains active. | getCooldown(): ?string | setCooldown(?string cooldown): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\RestrictIpAfterFailedChargeConfigBuilder;

$restrictIpAfterFailedChargeConfig = RestrictIpAfterFailedChargeConfigBuilder::init()
    ->enabled(true)
    ->count(5)
    ->cooldown('PT1H')
    ->build();
```

