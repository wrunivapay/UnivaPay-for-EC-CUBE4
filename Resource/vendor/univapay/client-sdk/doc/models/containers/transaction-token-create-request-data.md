
# Transaction Token Create Request Data

Transaction Token Create Request Data schema.

## Data Type

`TokenCreateCardData|TokenCreateKonbiniData|TokenCreateOnlineData|TokenCreateBankTransferData|TokenCreatePaidyData|TokenCreateQrScanData|TokenCreateQrMerchantData`

## Cases

| Type |
|  --- |
| [`TokenCreateCardData`](../../../doc/models/token-create-card-data.md) |
| [`TokenCreateKonbiniData`](../../../doc/models/token-create-konbini-data.md) |
| [`TokenCreateOnlineData`](../../../doc/models/token-create-online-data.md) |
| [`TokenCreateBankTransferData`](../../../doc/models/token-create-bank-transfer-data.md) |
| [`TokenCreatePaidyData`](../../../doc/models/token-create-paidy-data.md) |
| [`TokenCreateQrScanData`](../../../doc/models/token-create-qr-scan-data.md) |
| [`TokenCreateQrMerchantData`](../../../doc/models/token-create-qr-merchant-data.md) |

## TokenCreateCardData

### Initialization Code

#### Example

```php
$value = TokenCreateCardDataBuilder::init(
    '4242424242424242',
    '12',
    '2026'
)->build();
```

## TokenCreateKonbiniData

### Initialization Code

#### Example

```php
$value = TokenCreateKonbiniDataBuilder::init(
    'Taro Yamada',
    BaseKonbiniDataConvenienceStore::SEVEN_ELEVEN,
    TokenCreatePhoneNumberBuilder::init(
        '81',
        '08012341234'
    )->build()
)
    ->expirationPeriod('P7D')
    ->expirationTimeShift('23:59:59+09:00')
    ->build();
```

## TokenCreateOnlineData

### Initialization Code

#### Example

```php
$value = TokenCreateOnlineDataBuilder::init(
    BaseOnlineDataBrand::WE_CHAT_ONLINE,
    BaseOnlineDataCallMethod::WEB
)
    ->userIdentifier('wechat_open_id_12345')
    ->build();
```

## TokenCreateBankTransferData

### Initialization Code

#### Example

```php
$value = TokenCreateBankTransferDataBuilder::init(
    'aozora_bank'
)
    ->expirationPeriod('PT168H')
    ->expirationTimeShift('23:59:59+09:00')
    ->name('Taro Yamada')
    ->build();
```

## TokenCreatePaidyData

### Initialization Code

#### Example

```php
$value = TokenCreatePaidyDataBuilder::init(
    'paidy-token-abc123',
    TokenCreatePaidyDataShippingAddressBuilder::init(
        '105-0011'
    )
        ->line1('1-1-1')
        ->city('Minato')
        ->state('Tokyo')
        ->build()
)
    ->phoneNumber('08012341234')
    ->build();
```

## TokenCreateQrScanData

### Initialization Code

#### Example

```php
$value = TokenCreateQrScanDataBuilder::init(
    '091234567890123456789012345'
)->build();
```

## TokenCreateQrMerchantData

### Initialization Code

#### Example

```php
$value = TokenCreateQrMerchantDataBuilder::init(
    'pay_pay_merchant'
)->build();
```

