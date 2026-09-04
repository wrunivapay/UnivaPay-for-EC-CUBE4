
# Token Response Bank Transfer Data

Token Response Bank Transfer Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseBankTransferData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brand` | `?string` | Optional | The bank brand identifier (e.g., 'aozora_bank'). | getBrand(): ?string | setBrand(?string brand): void |
| `expirationPeriod` | `?string` | Optional | ISO 8601 duration format (e.g., 'PT168H'). | getExpirationPeriod(): ?string | setExpirationPeriod(?string expirationPeriod): void |
| `expirationTimeShift` | `?string` | Optional | Time shift applied to the expiration, typically pushing it to the end of the day  in a specific timezone (e.g., '23:59:59+09:00'). | getExpirationTimeShift(): ?string | setExpirationTimeShift(?string expirationTimeShift): void |
| `bankCode` | `?string` | Optional | Bank code value. | getBankCode(): ?string | setBankCode(?string bankCode): void |
| `bankName` | `?string` | Optional | Bank name value. | getBankName(): ?string | setBankName(?string bankName): void |
| `branchCode` | `?string` | Optional | Bank branch code. | getBranchCode(): ?string | setBranchCode(?string branchCode): void |
| `branchName` | `?string` | Optional | Bank branch name. | getBranchName(): ?string | setBranchName(?string branchName): void |
| `accountNumber` | `?string` | Optional | Bank account number. | getAccountNumber(): ?string | setAccountNumber(?string accountNumber): void |
| `accountHolderName` | `?string` | Optional | Bank account holder name. | getAccountHolderName(): ?string | setAccountHolderName(?string accountHolderName): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseBankTransferDataBuilder;

$tokenResponseBankTransferData = TokenResponseBankTransferDataBuilder::init()
    ->brand('aozora_bank')
    ->expirationPeriod('PT168H')
    ->expirationTimeShift('23:59:59+09:00')
    ->bankCode('0310')
    ->bankName('GMOあおぞらネット銀行')
    ->branchCode('123')
    ->branchName('Test Branch')
    ->accountNumber('1234567')
    ->accountHolderName('TARO YAMADA')
    ->build();
```

