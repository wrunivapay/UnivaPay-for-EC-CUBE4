
# Direct Debit Notification Configuration

Which direct debit email notifications the merchant has opted into.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitNotificationConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `notifyDeadlineMailing` | `?bool` | Optional | Notify when the deadline for the bank to receive the signed mandate approaches (郵送期限の通知). | getNotifyDeadlineMailing(): ?bool | setNotifyDeadlineMailing(?bool notifyDeadlineMailing): void |
| `notifyDeadlineDebit` | `?bool` | Optional | Notify when the transfer registration cutoff approaches (締切日の通知). | getNotifyDeadlineDebit(): ?bool | setNotifyDeadlineDebit(?bool notifyDeadlineDebit): void |
| `notifyDebitUpdate` | `?bool` | Optional | Notify when transfer results are reflected (振替結果の通知). | getNotifyDebitUpdate(): ?bool | setNotifyDebitUpdate(?bool notifyDebitUpdate): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitNotificationConfigurationBuilder;
use UnivaPay\ApiHelper;

$directDebitNotificationConfiguration = DirectDebitNotificationConfigurationBuilder::init()
    ->notifyDeadlineMailing(true)
    ->notifyDeadlineDebit(true)
    ->notifyDebitUpdate(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

