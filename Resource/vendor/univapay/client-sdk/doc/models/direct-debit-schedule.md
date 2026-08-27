
# Direct Debit Schedule

The key dates for one debit cycle. Use these to work out whether the current month's registration window is still open.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitSchedule`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `merchantBankAccountTransferDate` | `?DateTime` | Optional | The date funds are pulled from consumer accounts (指定振替日). | getMerchantBankAccountTransferDate(): ?\DateTime | setMerchantBankAccountTransferDate(?\DateTime merchantBankAccountTransferDate): void |
| `merchantBankAccountRegistrationDeadline` | `?DateTime` | Optional | The date by which the bank must receive the signed direct debit mandate (振替依頼書到着期限). | getMerchantBankAccountRegistrationDeadline(): ?\DateTime | setMerchantBankAccountRegistrationDeadline(?\DateTime merchantBankAccountRegistrationDeadline): void |
| `merchantBankTransferUploadDeadline` | `?DateTime` | Optional | The last date transfers can be registered or edited for this cycle (振替データアップロード期限). After this, transfers lock. | getMerchantBankTransferUploadDeadline(): ?\DateTime | setMerchantBankTransferUploadDeadline(?\DateTime merchantBankTransferUploadDeadline): void |
| `platformResultRegistrationDate` | `?DateTime` | Optional | The date transfer results are reflected on the platform (振替結果反映日). | getPlatformResultRegistrationDate(): ?\DateTime | setPlatformResultRegistrationDate(?\DateTime platformResultRegistrationDate): void |
| `platformScheduledPayout` | `?DateTime` | Optional | The date collected funds are paid out to the merchant (支払日). | getPlatformScheduledPayout(): ?\DateTime | setPlatformScheduledPayout(?\DateTime platformScheduledPayout): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitScheduleBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$directDebitSchedule = DirectDebitScheduleBuilder::init()
    ->merchantBankAccountTransferDate(DateTimeHelper::fromSimpleDate('2026-03-14'))
    ->merchantBankAccountRegistrationDeadline(DateTimeHelper::fromSimpleDate('2026-02-20'))
    ->merchantBankTransferUploadDeadline(DateTimeHelper::fromSimpleDate('2026-03-04'))
    ->platformResultRegistrationDate(DateTimeHelper::fromSimpleDate('2026-03-24'))
    ->platformScheduledPayout(DateTimeHelper::fromSimpleDate('2026-03-31'))
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

