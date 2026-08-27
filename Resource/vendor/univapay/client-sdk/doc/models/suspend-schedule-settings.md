
# Suspend Schedule Settings

Schedule-related settings.

*This model accepts additional fields of type array.*

## Structure

`SuspendScheduleSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `terminationMode` | [`?string(SubscriptionTerminationMode)`](../../doc/models/subscription-termination-mode.md) | Optional | Subscription Termination Mode schema.<br><br>**Default**: `SubscriptionTerminationMode::IMMEDIATE` | getTerminationMode(): ?string | setTerminationMode(?string terminationMode): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SuspendScheduleSettingsBuilder;

$suspendScheduleSettings = SuspendScheduleSettingsBuilder::init()->build();
```

