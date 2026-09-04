
# Direct Debit Bank Transfer

A single scheduled pull of funds from a registered bank account. The bank account details are copied onto the transfer at registration time, so later edits to the account do not change past transfers.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitBankTransfer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier of a direct debit bank transfer (振替ID).<br><br>**Constraints**: *Pattern*: `^[0-9]+$` | getId(): ?string | setId(?string id): void |
| `legacyStoreId` | `?string` | Optional | Identifier of the merchant in the legacy direct debit system.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` | getLegacyStoreId(): ?string | setLegacyStoreId(?string legacyStoreId): void |
| `merchantId` | `?string` | Optional | The merchant that owns this transfer. | getMerchantId(): ?string | setMerchantId(?string merchantId): void |
| `bankAccountId` | `?string` | Optional | Unique identifier of a direct debit bank account (銀行口座ID).<br><br>**Constraints**: *Pattern*: `^[0-9]+$` | getBankAccountId(): ?string | setBankAccountId(?string bankAccountId): void |
| `userNumber` | `?string` | Optional | The merchant's own membership number for the consumer (会員番号). Alphanumeric.<br><br>**Constraints**: *Pattern*: `^[a-zA-Z0-9]+$` | getUserNumber(): ?string | setUserNumber(?string userNumber): void |
| `bankCode` | `?string` | Optional | Four-digit code identifying the consumer's bank (銀行コード).<br><br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^[0-9]{4}$` | getBankCode(): ?string | setBankCode(?string bankCode): void |
| `bankName` | `?string` | Optional | Bank name in half-width katakana (銀行名).<br><br>**Constraints**: *Maximum Length*: `15` | getBankName(): ?string | setBankName(?string bankName): void |
| `branchCode` | `?string` | Optional | Three-digit code identifying the bank branch (支店コード).<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3`, *Pattern*: `^[0-9]{3}$` | getBranchCode(): ?string | setBranchCode(?string branchCode): void |
| `bankAccountType` | [`?string(DirectDebitBankAccountType)`](../../doc/models/direct-debit-bank-account-type.md) | Optional | Deposit account type (預金種類) — `regular` (普通), `current` (当座), `savings` (貯蓄) or `others` (その他). | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankAccountName` | `?string` | Optional | Account holder name (口座名義), in half-width katakana. Full-width characters are rejected by the bank.<br><br>**Constraints**: *Maximum Length*: `30`, *Pattern*: `^[A-Z0-9ｱ-ﾝﾞﾟ().\- ]{1,30}$` | getBankAccountName(): ?string | setBankAccountName(?string bankAccountName): void |
| `bankAccountNumber` | `?string` | Optional | Seven-digit account number (口座番号).<br><br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7`, *Pattern*: `^[0-9]{7}$` | getBankAccountNumber(): ?string | setBankAccountNumber(?string bankAccountNumber): void |
| `amount` | `?int` | Optional | Transfer amount in JPY. Must be a positive, non-zero whole number.<br><br>**Constraints**: `>= 1` | getAmount(): ?int | setAmount(?int amount): void |
| `debitDate` | [`?string(DirectDebitDebitDate)`](../../doc/models/direct-debit-debit-date.md) | Optional | Monthly debit cycle — funds are pulled on either the 14th or the 27th. | getDebitDate(): ?string | setDebitDate(?string debitDate): void |
| `calculatedDebitDate` | `?DateTime` | Optional | The actual business day on which funds are pulled (計算された振替日), derived from the debit cycle. | getCalculatedDebitDate(): ?\DateTime | setCalculatedDebitDate(?\DateTime calculatedDebitDate): void |
| `lock` | [`?string(DirectDebitBankTransferLock)`](../../doc/models/direct-debit-bank-transfer-lock.md) | Optional | Whether the transfer can still be edited. Transfers are `unlocked` until the upload deadline for their debit cycle passes, after which they are `locked` and can no longer be changed or deleted. | getLock(): ?string | setLock(?string lock): void |
| `status` | [`?string(DirectDebitBankTransferStatus)`](../../doc/models/direct-debit-bank-transfer-status.md) | Optional | Transfer state. `awaiting` until the bank reports back, then `successful` or `failed`. Results are reflected days after the debit date, not immediately. | getStatus(): ?string | setStatus(?string status): void |
| `error` | [`?string(DirectDebitBankTransferError)`](../../doc/models/direct-debit-bank-transfer-error.md) | Optional | Failure reason, or null while the transfer is awaiting a result or has succeeded. | getError(): ?string | setError(?string error): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the resource was last updated. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitBankTransferBuilder;
use UnivaPay\Models\DirectDebitBankAccountType;
use UnivaPay\Models\DirectDebitDebitDate;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\DirectDebitBankTransferLock;
use UnivaPay\Models\DirectDebitBankTransferStatus;
use UnivaPay\Models\DirectDebitBankTransferError;
use UnivaPay\ApiHelper;

$directDebitBankTransfer = DirectDebitBankTransferBuilder::init()
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
    ->error(DirectDebitBankTransferError::INSUFFICIENT_FUNDS)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000Z'))
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

