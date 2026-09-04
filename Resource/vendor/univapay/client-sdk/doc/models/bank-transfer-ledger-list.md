
# Bank Transfer Ledger List

Paginated list of bank transfer ledger entries.

*This model accepts additional fields of type array.*

## Structure

`BankTransferLedgerList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(BankTransferLedger[])`](../../doc/models/bank-transfer-ledger.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `totalHits` | `?int` | Optional | Total number of matching resources. | getTotalHits(): ?int | setTotalHits(?int totalHits): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\BankTransferLedgerListBuilder;
use UnivaPay\Models\Builders\BankTransferLedgerBuilder;
use UnivaPay\Models\BankTransferLedgerBankLedgerType;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\BankTransferLedgerMode;
use UnivaPay\ApiHelper;

$bankTransferLedgerList = BankTransferLedgerListBuilder::init()
    ->items(
        [
            BankTransferLedgerBuilder::init()
                ->bankLedgerType(BankTransferLedgerBankLedgerType::PAYMENT)
                ->amount(1000)
                ->balance(0)
                ->virtualBankAccountHolderName('test holder name')
                ->virtualBankAccountNumber('1234567')
                ->virtualAccountId('test account id')
                ->transactionDate(DateTimeHelper::fromSimpleDate('2024-06-25'))
                ->transactionTimestamp(DateTimeHelper::fromRfc3339DateTime('2024-06-25T07:29:16.367347Z'))
                ->mode(BankTransferLedgerMode::TEST)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2024-06-25T07:29:16.373181Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build(),
            BankTransferLedgerBuilder::init()
                ->bankLedgerType(BankTransferLedgerBankLedgerType::DEPOSIT)
                ->amount(1000)
                ->balance(1000)
                ->virtualBankAccountHolderName('test holder name')
                ->virtualBankAccountNumber('1234567')
                ->virtualAccountId('test account id')
                ->transactionDate(DateTimeHelper::fromSimpleDate('2024-06-25'))
                ->transactionTimestamp(DateTimeHelper::fromRfc3339DateTime('2024-06-25T07:29:16.36731Z'))
                ->mode(BankTransferLedgerMode::TEST)
                ->createdOn(DateTimeHelper::fromRfc3339DateTime('2024-06-25T07:29:16.368093Z'))
                ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
                ->build()
        ]
    )
    ->hasMore(false)
    ->totalHits(2)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

