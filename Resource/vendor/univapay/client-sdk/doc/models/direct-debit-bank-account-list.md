
# Direct Debit Bank Account List

Paginated list of direct debit bank accounts.

*This model accepts additional fields of type array.*

## Structure

`DirectDebitBankAccountList`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `items` | [`?(DirectDebitBankAccount[])`](../../doc/models/direct-debit-bank-account.md) | Optional | List of resources. | getItems(): ?array | setItems(?array items): void |
| `hasMore` | `?bool` | Optional | Whether more results are available. | getHasMore(): ?bool | setHasMore(?bool hasMore): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\DirectDebitBankAccountListBuilder;
use UnivaPay\Models\Builders\DirectDebitBankAccountBuilder;
use UnivaPay\Models\DirectDebitBankAccountType;
use UnivaPay\Models\DirectDebitRegistrationOrigin;
use UnivaPay\Models\DirectDebitBankAccountStatus;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$directDebitBankAccountList = DirectDebitBankAccountListBuilder::init()
    ->items(
        [
            DirectDebitBankAccountBuilder::init()
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
                ->build(),
            DirectDebitBankAccountBuilder::init()
                ->id('1098117')
                ->legacyStoreId('1283794')
                ->merchantId('01234567-89ab-cdef-0123-456789abcdef')
                ->userNumber('SD02688329')
                ->bankCode('0009')
                ->bankName('ﾐﾂｲｽﾐﾄﾓ')
                ->branchCode('221')
                ->bankAccountType(DirectDebitBankAccountType::CURRENT)
                ->bankAccountName('ｽｽﾞｷﾀﾛｳ')
                ->bankAccountNumber('7654321')
                ->registrationOrigin(DirectDebitRegistrationOrigin::ANYWHERE)
                ->status(DirectDebitBankAccountStatus::INACTIVE)
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

