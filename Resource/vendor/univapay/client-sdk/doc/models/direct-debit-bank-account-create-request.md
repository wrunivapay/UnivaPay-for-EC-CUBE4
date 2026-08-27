
# Direct Debit Bank Account Create Request

Request payload for registering a consumer bank account for direct debit.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitBankAccountCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `userNumber` | `string` | Required | The merchant's own membership number for the consumer (会員番号). Alphanumeric.<br><br>**Constraints**: *Pattern*: `^[a-zA-Z0-9]+$` | getUserNumber(): string | setUserNumber(string userNumber): void |
| `bankCode` | `string` | Required | Four-digit code identifying the consumer's bank (銀行コード).<br><br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `4`, *Pattern*: `^[0-9]{4}$` | getBankCode(): string | setBankCode(string bankCode): void |
| `bankName` | `string` | Required | Bank name in half-width katakana (銀行名).<br><br>**Constraints**: *Maximum Length*: `15` | getBankName(): string | setBankName(string bankName): void |
| `branchCode` | `string` | Required | Three-digit code identifying the bank branch (支店コード).<br><br>**Constraints**: *Minimum Length*: `3`, *Maximum Length*: `3`, *Pattern*: `^[0-9]{3}$` | getBranchCode(): string | setBranchCode(string branchCode): void |
| `bankAccountType` | [`string(DirectDebitBankAccountType)`](../../doc/models/direct-debit-bank-account-type.md) | Required | Deposit account type (預金種類) — `regular` (普通), `current` (当座), `savings` (貯蓄) or `others` (その他). | getBankAccountType(): string | setBankAccountType(string bankAccountType): void |
| `bankAccountName` | `string` | Required | Account holder name (口座名義), in half-width katakana. Full-width characters are rejected by the bank.<br><br>**Constraints**: *Maximum Length*: `30`, *Pattern*: `^[A-Z0-9ｱ-ﾝﾞﾟ().\- ]{1,30}$` | getBankAccountName(): string | setBankAccountName(string bankAccountName): void |
| `bankAccountNumber` | `string` | Required | Seven-digit account number (口座番号).<br><br>**Constraints**: *Minimum Length*: `7`, *Maximum Length*: `7`, *Pattern*: `^[0-9]{7}$` | getBankAccountNumber(): string | setBankAccountNumber(string bankAccountNumber): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitBankAccountCreateRequestBuilder;
use UnivaPay\Models\DirectDebitBankAccountType;
use UnivaPay\ApiHelper;

$directDebitBankAccountCreateRequest = DirectDebitBankAccountCreateRequestBuilder::init(
    'SD02688328',
    '0012',
    'ﾗｸﾃﾝｷﾞﾝｺｳ',
    '120',
    DirectDebitBankAccountType::REGULAR,
    'ﾀﾅｶﾕﾐｺ',
    '1234567'
)
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

