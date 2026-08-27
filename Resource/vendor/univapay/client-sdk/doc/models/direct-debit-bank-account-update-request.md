
# Direct Debit Bank Account Update Request

Request payload for updating a registered bank account. Omitted fields are left unchanged.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitBankAccountUpdateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userNumber` | `?string` | Optional | The merchant's own membership number for the consumer (会員番号). Alphanumeric.<br><br>**Constraints**: *Pattern*: `^[a-zA-Z0-9]+$` | getUserNumber(): ?string | setUserNumber(?string userNumber): void |
| `bankCode` | `?string` | Optional | Four-digit code identifying the consumer's bank (銀行コード).<br><br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^[0-9]{4}$` | getBankCode(): ?string | setBankCode(?string bankCode): void |
| `bankName` | `?string` | Optional | Bank name in half-width katakana (銀行名).<br><br>**Constraints**: *Maximum Length*: `15` | getBankName(): ?string | setBankName(?string bankName): void |
| `branchCode` | `?string` | Optional | Three-digit code identifying the bank branch (支店コード).<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3`, *Pattern*: `^[0-9]{3}$` | getBranchCode(): ?string | setBranchCode(?string branchCode): void |
| `bankAccountType` | [`?string(DirectDebitBankAccountType)`](../../doc/models/direct-debit-bank-account-type.md) | Optional | Deposit account type (預金種類) — `regular` (普通), `current` (当座), `savings` (貯蓄) or `others` (その他). | getBankAccountType(): ?string | setBankAccountType(?string bankAccountType): void |
| `bankAccountName` | `?string` | Optional | Account holder name (口座名義), in half-width katakana. Full-width characters are rejected by the bank.<br><br>**Constraints**: *Maximum Length*: `30`, *Pattern*: `^[A-Z0-9ｱ-ﾝﾞﾟ().\- ]{1,30}$` | getBankAccountName(): ?string | setBankAccountName(?string bankAccountName): void |
| `bankAccountNumber` | `?string` | Optional | Seven-digit account number (口座番号).<br><br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7`, *Pattern*: `^[0-9]{7}$` | getBankAccountNumber(): ?string | setBankAccountNumber(?string bankAccountNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitBankAccountUpdateRequestBuilder;
use UnivaPay\Models\DirectDebitBankAccountType;
use UnivaPay\ApiHelper;

$directDebitBankAccountUpdateRequest = DirectDebitBankAccountUpdateRequestBuilder::init()
    ->userNumber('SD02688328')
    ->bankCode('0012')
    ->bankName('ﾗｸﾃﾝｷﾞﾝｺｳ')
    ->branchCode('120')
    ->bankAccountType(DirectDebitBankAccountType::REGULAR)
    ->bankAccountName('ﾀﾅｶﾕﾐｺ')
    ->bankAccountNumber('1234567')
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

