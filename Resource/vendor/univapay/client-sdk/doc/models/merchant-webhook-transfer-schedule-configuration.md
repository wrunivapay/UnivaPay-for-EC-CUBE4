
# Merchant Webhook Transfer Schedule Configuration

Transfer schedule configuration inherited by the merchant.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookTransferScheduleConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `waitPeriod` | `?string` | Optional | ISO-8601 period before charges become payable. | getWaitPeriod(): ?string | setWaitPeriod(?string waitPeriod): void |
| `period` | `?string` | Optional | Transfer period selected for payouts. | getPeriod(): ?string | setPeriod(?string period): void |
| `fullPeriodRequired` | `?bool` | Optional | Whether the first transfer period must be fully completed. | getFullPeriodRequired(): ?bool | setFullPeriodRequired(?bool fullPeriodRequired): void |
| `dayOfWeek` | `?string` | Optional | Payout day of week when using weekly schedules. | getDayOfWeek(): ?string | setDayOfWeek(?string dayOfWeek): void |
| `weekOfMonth` | `?int` | Optional | Week of month used by monthly schedules. | getWeekOfMonth(): ?int | setWeekOfMonth(?int weekOfMonth): void |
| `dayOfMonth` | `?int` | Optional | Day of month used by monthly schedules. | getDayOfMonth(): ?int | setDayOfMonth(?int dayOfMonth): void |
| `weeklyClosingDay` | `?string` | Optional | Weekly closing day for balance aggregation. | getWeeklyClosingDay(): ?string | setWeeklyClosingDay(?string weeklyClosingDay): void |
| `weeklyPayoutDay` | `?string` | Optional | Weekly payout day. | getWeeklyPayoutDay(): ?string | setWeeklyPayoutDay(?string weeklyPayoutDay): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookTransferScheduleConfigurationBuilder;

$merchantWebhookTransferScheduleConfiguration = MerchantWebhookTransferScheduleConfigurationBuilder::init()
    ->waitPeriod('P7D')
    ->period('weekly')
    ->fullPeriodRequired(false)
    ->weeklyClosingDay('sunday')
    ->weeklyPayoutDay('friday')
    ->build();
```

