
# Subscription Simulation Plan Settings

Cycle-limiting plan configuration used to simulate an installment plan or a Univapay-side subscription plan.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionSimulationPlanSettings`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planType` | [`?string(SimulationPlanSettingsType)`](../../doc/models/simulation-plan-settings-type.md) | Optional | Plan type selector. | getPlanType(): ?string | setPlanType(?string planType): void |
| `fixedCycles` | `?int` | Optional | Number of cycles for the fixed_cycles plan. Must be greater than 1. | getFixedCycles(): ?int | setFixedCycles(?int fixedCycles): void |
| `fixedCycleAmount` | `?int` | Optional | Total target amount for the fixed_cycle_amount plan. Must not exceed the requested amount. | getFixedCycleAmount(): ?int | setFixedCycleAmount(?int fixedCycleAmount): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionSimulationPlanSettingsBuilder;

$subscriptionSimulationPlanSettings = SubscriptionSimulationPlanSettingsBuilder::init()->build();
```

