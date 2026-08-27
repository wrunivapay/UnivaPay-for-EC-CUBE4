
# Bank Transfer Ledger

Single bank transfer ledger entry associated with a charge.

*This model accepts additional fields of type array.*

## Structure

`BankTransferLedger`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `bankLedgerType` | [`?string(BankTransferLedgerBankLedgerType)`](../../doc/models/bank-transfer-ledger-bank-ledger-type.md) | Optional | Bank Transfer Ledger Bank Ledger Type schema. | getBankLedgerType(): ?string | setBankLedgerType(?string bankLedgerType): void |
| `amount` | `?int` | Optional | Amount in the smallest currency unit. | getAmount(): ?int | setAmount(?int amount): void |
| `balance` | `?int` | Optional | Current balance in the smallest currency unit. | getBalance(): ?int | setBalance(?int balance): void |
| `virtualBankAccountHolderName` | `?string` | Optional | Virtual bank account holder name. | getVirtualBankAccountHolderName(): ?string | setVirtualBankAccountHolderName(?string virtualBankAccountHolderName): void |
| `virtualBankAccountNumber` | `?string` | Optional | Virtual bank account number. | getVirtualBankAccountNumber(): ?string | setVirtualBankAccountNumber(?string virtualBankAccountNumber): void |
| `virtualAccountId` | `?string` | Optional | Virtual account id value. | getVirtualAccountId(): ?string | setVirtualAccountId(?string virtualAccountId): void |
| `transactionDate` | `?DateTime` | Optional | Transaction date. | getTransactionDate(): ?\DateTime | setTransactionDate(?\DateTime transactionDate): void |
| `transactionTimestamp` | `?DateTime` | Optional | Transaction timestamp. | getTransactionTimestamp(): ?\DateTime | setTransactionTimestamp(?\DateTime transactionTimestamp): void |
| `mode` | [`?string(BankTransferLedgerMode)`](../../doc/models/bank-transfer-ledger-mode.md) | Optional | Bank Transfer Ledger Mode schema. | getMode(): ?string | setMode(?string mode): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\BankTransferLedgerBuilder;
use UnivaPay\Models\BankTransferLedgerBankLedgerType;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\BankTransferLedgerMode;
use UnivaPay\ApiHelper;

$bankTransferLedger = BankTransferLedgerBuilder::init()
    ->bankLedgerType(BankTransferLedgerBankLedgerType::DEPOSIT)
    ->amount(1000)
    ->balance(1000)
    ->virtualBankAccountHolderName('TARO YAMADA')
    ->virtualBankAccountNumber('1234567')
    ->virtualAccountId('va_12345')
    ->transactionDate(DateTimeHelper::fromSimpleDate('2026-04-09'))
    ->transactionTimestamp(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->mode(BankTransferLedgerMode::LIVE)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

