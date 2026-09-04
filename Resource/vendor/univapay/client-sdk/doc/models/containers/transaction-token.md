
# Transaction Token

Stored transaction token resource. `payment_type` discriminates which variant applies — and therefore the concrete shape of `data` — per the mapping above.

## Data Type

`CardTransactionToken|KonbiniTransactionToken|OnlineTransactionToken|BankTransferTransactionToken|PaidyTransactionToken|QrScanTransactionToken|QrMerchantTransactionToken`

## Cases

| Type |
|  --- |
| [`CardTransactionToken`](../../../doc/models/card-transaction-token.md) |
| [`KonbiniTransactionToken`](../../../doc/models/konbini-transaction-token.md) |
| [`OnlineTransactionToken`](../../../doc/models/online-transaction-token.md) |
| [`BankTransferTransactionToken`](../../../doc/models/bank-transfer-transaction-token.md) |
| [`PaidyTransactionToken`](../../../doc/models/paidy-transaction-token.md) |
| [`QrScanTransactionToken`](../../../doc/models/qr-scan-transaction-token.md) |
| [`QrMerchantTransactionToken`](../../../doc/models/qr-merchant-transaction-token.md) |

## CardTransactionToken

### Initialization Code

#### Example

```php
$value = CardTransactionTokenBuilder::init(
    TokenResponseCardDataBuilder::init()
        ->card(
            TokenResponseCardDataCardBuilder::init()
                ->cardholder('TARO YAMADA')
                ->expMonth(12)
                ->expYear(2026)
                ->cardBin('424242')
                ->lastFour('4242')
                ->brand('visa')
                ->cardType('credit')
                ->country('JP')
                ->category('standard')
                ->issuer(null)
                ->subBrand('none')
                ->build()
        )
        ->billing(
            TokenResponseCardDataBillingBuilder::init()
                ->line1('1-1-1')
                ->line2('Shibakoen')
                ->state('Tokyo')
                ->city('Minato')
                ->country('JP')
                ->zip('105-0011')
                ->phoneNumber(
                    TokenResponsePhoneNumberBuilder::init()
                        ->countryCode(81)
                        ->localNumber('08012341234')
                        ->build()
                )
                ->build()
        )
        ->cvvAuthorize(
            TokenResponseCardDataCvvAuthorizeBuilder::init()
                ->enabled(true)
                ->status('successful')
                ->chargeId(null)
                ->credentialsId(null)
                ->currency('JPY')
                ->build()
        )
        ->cvvAuthorizeCheck(
            TokenResponseCardDataCvvAuthorizeCheckBuilder::init()
                ->status('successful')
                ->chargeId(null)
                ->date(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
                ->build()
        )
        ->threeDs(
            TokenResponseCardDataThreeDsBuilder::init()
                ->enabled(true)
                ->status(TokenResponseCardDataThreeDsStatus::SUCCESSFUL)
                ->redirectEndpoint(null)
                ->redirectId(null)
                ->exempted(false)
                ->error(
                    null
                )
                ->build()
        )
        ->build()
)
    ->id('6426bbd2-17bd-41bf-883b-1fe970db48ee')
    ->storeId('fc264608-9a9e-495e-844e-a08129a81af4')
    ->email('test@univapay.com')
    ->active(true)
    ->mode(TransactionTokenMode::LIVE)
    ->type(TransactionTokenType::ONE_TIME)
    ->usageLimit('example')
    ->confirmed(true)
    ->metadata(
        [
            'customer_id' => 'cust_12345'
        ]
    )
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->lastUsedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

## KonbiniTransactionToken

### Initialization Code

#### Example

```php
$value = KonbiniTransactionTokenBuilder::init(
    TokenResponseKonbiniDataBuilder::init()
        ->customerName('Taro Yamada')
        ->convenienceStore(BaseKonbiniDataConvenienceStore::SEVEN_ELEVEN)
        ->expirationPeriod('P7D')
        ->expirationTimeShift(null)
        ->phoneNumber(
            TokenResponsePhoneNumberBuilder::init()
                ->countryCode(81)
                ->localNumber('08012341234')
                ->build()
        )
        ->build()
)
    ->id('6426bbd2-17bd-41bf-883b-1fe970db48ee')
    ->storeId('fc264608-9a9e-495e-844e-a08129a81af4')
    ->email('test@univapay.com')
    ->active(true)
    ->mode(TransactionTokenMode::LIVE)
    ->type(TransactionTokenType::ONE_TIME)
    ->usageLimit('example')
    ->confirmed(true)
    ->metadata(
        [
            'customer_id' => 'cust_12345'
        ]
    )
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->lastUsedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

## OnlineTransactionToken

### Initialization Code

#### Example

```php
$value = OnlineTransactionTokenBuilder::init(
    TokenResponseOnlineDataBuilder::init()
        ->brand(BaseOnlineDataBrand::WE_CHAT_ONLINE)
        ->callMethod(BaseOnlineDataCallMethod::WEB)
        ->userIdentifier('wechat_open_id_12345')
        ->build()
)
    ->id('6426bbd2-17bd-41bf-883b-1fe970db48ee')
    ->storeId('fc264608-9a9e-495e-844e-a08129a81af4')
    ->email('test@univapay.com')
    ->active(true)
    ->mode(TransactionTokenMode::LIVE)
    ->type(TransactionTokenType::ONE_TIME)
    ->usageLimit('example')
    ->confirmed(true)
    ->metadata(
        [
            'customer_id' => 'cust_12345'
        ]
    )
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->lastUsedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

## BankTransferTransactionToken

### Initialization Code

#### Example

```php
$value = BankTransferTransactionTokenBuilder::init(
    TokenResponseBankTransferDataBuilder::init()
        ->brand('aozora_bank')
        ->expirationPeriod('PT168H')
        ->expirationTimeShift('23:59:59+09:00')
        ->bankCode('0310')
        ->bankName('GMOあおぞらネット銀行')
        ->branchCode('123')
        ->branchName('Test Branch')
        ->accountNumber('1234567')
        ->accountHolderName('TARO YAMADA')
        ->build()
)
    ->id('6426bbd2-17bd-41bf-883b-1fe970db48ee')
    ->storeId('fc264608-9a9e-495e-844e-a08129a81af4')
    ->email('test@univapay.com')
    ->active(true)
    ->mode(TransactionTokenMode::LIVE)
    ->type(TransactionTokenType::ONE_TIME)
    ->usageLimit('example')
    ->confirmed(true)
    ->metadata(
        [
            'customer_id' => 'cust_12345'
        ]
    )
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->lastUsedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

## PaidyTransactionToken

### Initialization Code

#### Example

```php
$value = PaidyTransactionTokenBuilder::init(
    TokenResponsePaidyDataBuilder::init(
        'paidy-token-abc123'
    )
        ->phoneNumber('08012341234')
        ->shippingAddress(
            TokenResponsePaidyDataShippingAddressBuilder::init()
                ->zip('105-0011')
                ->line1('1-1-1')
                ->city('Minato')
                ->state('Tokyo')
                ->build()
        )
        ->build()
)
    ->id('6426bbd2-17bd-41bf-883b-1fe970db48ee')
    ->storeId('fc264608-9a9e-495e-844e-a08129a81af4')
    ->email('test@univapay.com')
    ->active(true)
    ->mode(TransactionTokenMode::LIVE)
    ->type(TransactionTokenType::ONE_TIME)
    ->usageLimit('example')
    ->confirmed(true)
    ->metadata(
        [
            'customer_id' => 'cust_12345'
        ]
    )
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->lastUsedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

## QrScanTransactionToken

### Initialization Code

#### Example

```php
$value = QrScanTransactionTokenBuilder::init(
    TokenResponseQrScanDataBuilder::init()
        ->brand('pay_pay')
        ->build()
)
    ->id('6426bbd2-17bd-41bf-883b-1fe970db48ee')
    ->storeId('fc264608-9a9e-495e-844e-a08129a81af4')
    ->email('test@univapay.com')
    ->active(true)
    ->mode(TransactionTokenMode::LIVE)
    ->type(TransactionTokenType::ONE_TIME)
    ->usageLimit('example')
    ->confirmed(true)
    ->metadata(
        [
            'customer_id' => 'cust_12345'
        ]
    )
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->lastUsedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

## QrMerchantTransactionToken

### Initialization Code

#### Example

```php
$value = QrMerchantTransactionTokenBuilder::init(
    TokenResponseQrMerchantDataBuilder::init()
        ->qrImageUrl('71001234567890202604141200450')
        ->brand('pay_pay_merchant')
        ->build()
)
    ->id('6426bbd2-17bd-41bf-883b-1fe970db48ee')
    ->storeId('fc264608-9a9e-495e-844e-a08129a81af4')
    ->email('test@univapay.com')
    ->active(true)
    ->mode(TransactionTokenMode::LIVE)
    ->type(TransactionTokenType::ONE_TIME)
    ->usageLimit('example')
    ->confirmed(true)
    ->metadata(
        [
            'customer_id' => 'cust_12345'
        ]
    )
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->lastUsedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->build();
```

