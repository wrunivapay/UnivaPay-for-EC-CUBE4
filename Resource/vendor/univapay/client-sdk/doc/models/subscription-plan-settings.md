
# Subscription Plan Settings

Configuration for limited-cycle subscriptions (Univapay side).

*This model accepts additional fields of type array.*

## Structure

`SubscriptionPlanSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planType` | [`?string(PlanSettingsType)`](../../doc/models/plan-settings-type.md) | Optional | Plan type selector. | getPlanType(): ?string | setPlanType(?string planType): void |
| `fixedCycles` | `?int` | Optional | Number of cycles for fixed_cycles plan. | getFixedCycles(): ?int | setFixedCycles(?int fixedCycles): void |
| `fixedCycleAmount` | `?int` | Optional | Total target amount for fixed_cycle_amount plan. | getFixedCycleAmount(): ?int | setFixedCycleAmount(?int fixedCycleAmount): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionPlanSettingsBuilder;

$subscriptionPlanSettings = SubscriptionPlanSettingsBuilder::init()->build();
```

