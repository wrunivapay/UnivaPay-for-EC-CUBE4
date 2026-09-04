
# Subscription Schedule Settings

Schedule settings applied to a subscription.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionScheduleSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startOn` | `?DateTime` | Optional | Date when the recurring schedule starts (YYYY-MM-DD). | getStartOn(): ?\DateTime | setStartOn(?\DateTime startOn): void |
| `zoneId` | `?string` | Optional | IANA Timezone ID. | getZoneId(): ?string | setZoneId(?string zoneId): void |
| `preserveEndOfMonth` | `?bool` | Optional | If true, subsequent charges will always occur on the last day of the month. | getPreserveEndOfMonth(): ?bool | setPreserveEndOfMonth(?bool preserveEndOfMonth): void |
| `retryInterval` | `?string` | Optional | ISO-8601 Duration for retry interval if payment fails (e.g., P5D). | getRetryInterval(): ?string | setRetryInterval(?string retryInterval): void |
| `terminationMode` | [`?string(SubscriptionTerminationMode)`](../../doc/models/subscription-termination-mode.md) | Optional | Subscription Termination Mode schema.<br><br>**Default**: `SubscriptionTerminationMode::IMMEDIATE` | getTerminationMode(): ?string | setTerminationMode(?string terminationMode): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionScheduleSettingsBuilder;

$subscriptionScheduleSettings = SubscriptionScheduleSettingsBuilder::init()->build();
```

