
# Direct Debit Bank Account

A consumer bank account registered for direct debit.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitBankAccount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier of a direct debit bank account (銀行口座ID).<br><br>**Constraints**: *Pattern*: `^[0-9]+$` | getId(): ?string | setId(?string id): void |
| `legacyStoreId` | `?string` | Optional | Identifier of the merchant in the legacy direct debit system.<br><br>**Constraints**: *Pattern*: `^[0-9]+$` | getLegacyStoreId(): ?string | setLegacyStoreId(?string legacyStoreId): void |
| `merchantId` | `?string` | Optional | The merchant that owns this bank account. | getMerchantId(): ?string | setMerchantId(?string merchantId): void |
| `userNumber` | `?string` | Optional | The merchant's own membership number for the consumer (会員番号). Alphanumeric.<br><br>**Constraints**: *Pattern*: `^[a-zA-Z0-9]+$` | getUserNumber(): ?string | setUserNumber(?string userNumber): void |
| `bankCode` | `?string` | Optional | Four-digit code identifying the consumer's bank (銀行コード).<br><br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^[0-9]{4}$` | getBankCode(): ?string | setBankCode(?string bankCode): void |
| `bankName` | `?string` | Optional | Bank name in half-width katakana (銀行名).<br><br>**Constraints**: *Maximum Length*: `15` | getBankName(): ?string | setBankName(?string bankName): void |
| `branchCode` | `?string` | Optional | Three-digit code identifying the bank branch (支店コード).<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3`, *Pattern*: `^[0-9]{3}$` | getBranchCode(): ?string | setBranchCode(?string branchCode): void |
| `bankAccountType` | [`?string(DirectDebitBankAccountType)`](../../doc/models/direct-debit-bank-account-type.md) | Optional | Deposit account type (預金種類) — `regular` (普通), `current` (当座), `savings` (貯蓄) or `others` (その他). | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankAccountName` | `?string` | Optional | Account holder name (口座名義), in half-width katakana. Full-width characters are rejected by the bank.<br><br>**Constraints**: *Maximum Length*: `30`, *Pattern*: `^[A-Z0-9ｱ-ﾝﾞﾟ().\- ]{1,30}$` | getBankAccountName(): ?string | setBankAccountName(?string bankAccountName): void |
| `bankAccountNumber` | `?string` | Optional | Seven-digit account number (口座番号).<br><br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7`, *Pattern*: `^[0-9]{7}$` | getBankAccountNumber(): ?string | setBankAccountNumber(?string bankAccountNumber): void |
| `registrationOrigin` | [`?string(DirectDebitRegistrationOrigin)`](../../doc/models/direct-debit-registration-origin.md) | Optional | Where the bank account was registered from — `merchant_console` for the merchant dashboard, `anywhere` otherwise. | getRegistrationOrigin(): ?string | setRegistrationOrigin(?string registrationOrigin): void |
| `status` | [`?string(DirectDebitBankAccountStatus)`](../../doc/models/direct-debit-bank-account-status.md) | Optional | Bank account state (有効・無効・登録失敗). Only an `active` account can have transfers registered against it. `registration_failed` means the bank rejected the account details. | getStatus(): ?string | setStatus(?string status): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the resource was last updated. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitBankAccountBuilder;
use UnivaPay\Models\DirectDebitBankAccountType;
use UnivaPay\Models\DirectDebitRegistrationOrigin;
use UnivaPay\Models\DirectDebitBankAccountStatus;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$directDebitBankAccount = DirectDebitBankAccountBuilder::init()
    ->id('1098116')
    ->legacyStoreId('1283794')
    ->merchantId('01234567-89ab-cdef-0123-456789abcdef')
    ->userNumber('SD02688328')
    ->bankCode('0012')
    ->bankName('ﾗｸﾃﾝｷﾞﾝｺｳ')
    ->branchCode('120')
    ->bankAccountType(DirectDebitBankAccountType::REGULAR)
    ->bankAccountName('ﾀﾅｶﾕﾐｺ')
    ->bankAccountNumber('1234567')
    ->registrationOrigin(DirectDebitRegistrationOrigin::MERCHANT_CONSOLE)
    ->status(DirectDebitBankAccountStatus::ACTIVE)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000Z'))
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

