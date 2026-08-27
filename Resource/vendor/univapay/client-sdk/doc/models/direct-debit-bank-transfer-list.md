
# Direct Debit Bank Transfer List

Paginated list of direct debit bank transfers.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitBankTransferList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(DirectDebitBankTransfer[])`](../../doc/models/direct-debit-bank-transfer.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitBankTransferListBuilder;
use UnivaPay\Models\Builders\DirectDebitBankTransferBuilder;
use UnivaPay\Models\DirectDebitBankAccountType;
use UnivaPay\Models\DirectDebitDebitDate;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\DirectDebitBankTransferLock;
use UnivaPay\Models\DirectDebitBankTransferStatus;
use UnivaPay\Models\DirectDebitBankTransferError;
use UnivaPay\ApiHelper;

$directDebitBankTransferList = DirectDebitBankTransferListBuilder::init()
    ->items(
        [
            DirectDebitBankTransferBuilder::init()
                ->id('2594976')
                ->legacyStoreId('1283794')
                ->merchantId('01234567-89ab-cdef-0123-456789abcdef')
                ->bankAccountId('1098116')
                ->userNumber('SD02688328')
                ->bankCode('0012')
                ->bankName('ﾗｸﾃﾝｷﾞﾝｺｳ')
                ->branchCode('120')
                ->bankAccountType(DirectDebitBankAccountType::REGULAR)
                ->bankAccountName('ﾀﾅｶﾕﾐｺ')
                ->bankAccountNumber('1234567')
                ->amount(1000)
                ->debitDate(DirectDebitDebitDate::FOURTEEN)
                ->calculatedDebitDate(DateTimeHelper::fromSimpleDate('2026-03-14'))
                ->lock(DirectDebitBankTransferLock::UNLOCKED)
                ->status(DirectDebitBankTransferStatus::AWAITING)
                ->error(null)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            DirectDebitBankTransferBuilder::init()
                ->id('2594977')
                ->legacyStoreId('1283794')
                ->merchantId('01234567-89ab-cdef-0123-456789abcdef')
                ->bankAccountId('1098117')
                ->userNumber('SD02688329')
                ->bankCode('0009')
                ->bankName('ﾐﾂｲｽﾐﾄﾓ')
                ->branchCode('221')
                ->bankAccountType(DirectDebitBankAccountType::CURRENT)
                ->bankAccountName('ｽｽﾞｷﾀﾛｳ')
                ->bankAccountNumber('7654321')
                ->amount(1850)
                ->debitDate(DirectDebitDebitDate::TWENTY_SEVEN)
                ->calculatedDebitDate(DateTimeHelper::fromSimpleDate('2026-03-27'))
                ->lock(DirectDebitBankTransferLock::LOCKED)
                ->status(DirectDebitBankTransferStatus::FAILED)
                ->error(DirectDebitBankTransferError::INSUFFICIENT_FUNDS)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-10T09:12:04.000Z'))
                ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-12T11:03:41.000Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

