
# Subscription Installment Plan Response

Installment plan applied to the subscription, as returned by the API. Covers both card-network installment plans (`revolving`, `fixed_cycles`) and legacy fixed-amount installment plans (`fixed_cycle_amount`).

*This model accepts additional fields of type array.*

## Structure

`SubscriptionInstallmentPlanResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `planType` | [`?string(CombinedPlanType)`](../../doc/models/combined-plan-type.md) | Optional | Plan type selector. | getPlanType(): ?string | setPlanType(?string planType): void |
| `fixedCycles` | [`?int(CombinedInstallmentFixedCycles)`](../../doc/models/combined-installment-fixed-cycles.md) | Optional | Number of installment cycles. Present when plan_type is fixed_cycles. | getFixedCycles(): ?int | setFixedCycles(?int fixedCycles): void |
| `fixedCyclesAmount` | `?int` | Optional | Total target amount for the fixed_cycle_amount plan type, in the smallest currency unit. Present when plan_type is fixed_cycle_amount. Note the plural `fixed_cycles_amount` key differs from `subscription_plan`'s singular `fixed_cycle_amount`. | getFixedCyclesAmount(): ?int | setFixedCyclesAmount(?int fixedCyclesAmount): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionInstallmentPlanResponseBuilder;

$subscriptionInstallmentPlanResponse = SubscriptionInstallmentPlanResponseBuilder::init()->build();
```

