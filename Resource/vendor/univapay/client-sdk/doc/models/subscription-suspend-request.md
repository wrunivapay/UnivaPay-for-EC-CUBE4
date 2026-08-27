
# Subscription Suspend Request

Request body for suspending a subscription. The `schedule_settings.termination_mode`  field controls when the suspension takes effect.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionSuspendRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `scheduleSettings` | [`?SuspendScheduleSettings`](../../doc/models/suspend-schedule-settings.md) | Optional | Schedule-related settings. | getScheduleSettings(): ?SuspendScheduleSettings | setScheduleSettings(?SuspendScheduleSettings scheduleSettings): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionSuspendRequestBuilder;
use UnivaPay\Models\Builders\SuspendScheduleSettingsBuilder;
use UnivaPay\Models\SubscriptionTerminationMode;

$subscriptionSuspendRequest = SubscriptionSuspendRequestBuilder::init()
    ->scheduleSettings(
        SuspendScheduleSettingsBuilder::init()
            ->terminationMode(SubscriptionTerminationMode::ON_NEXT_PAYMENT)
            ->build()
    )
    ->build();
```

