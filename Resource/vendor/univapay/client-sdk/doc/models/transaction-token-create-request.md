
# Transaction Token Create Request

Request payload for creating a transaction token, which represents a payment method to charge against.

*This model accepts additional fields of type array.*

## Structure

`TransactionTokenCreateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentType` | [`string(TransactionTokenCreateRequestPaymentType)`](../../doc/models/transaction-token-create-request-payment-type.md) | Required | Transaction Token Create Request Payment Type schema. | getPaymentType(): string | setPaymentType(string paymentType): void |
| `type` | [`string(TransactionTokenCreateRequestType)`](../../doc/models/transaction-token-create-request-type.md) | Required | Transaction Token Create Request Type schema. | getType(): string | setType(string type): void |
| `email` | `?string` | Optional | Customer email address. | getEmail(): ?string | setEmail(?string email): void |
| `usageLimit` | `?string` | Optional | Usage limit applied to the token. | getUsageLimit(): ?string | setUsageLimit(?string usageLimit): void |
| `ipAddress` | `?string` | Optional | Consumer's IPv4 address. **Required** when `data.brand` is `we_chat_online` and `data.call_method` is `web` or `http_get`. | getIpAddress(): ?string | setIpAddress(?string ipAddress): void |
| `metadata` | [`?TransactionTokenCreateRequestMetadata`](../../doc/models/transaction-token-create-request-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?TransactionTokenCreateRequestMetadata | setMetadata(?TransactionTokenCreateRequestMetadata metadata): void |
| `data` | [TokenCreateCardData](../../doc/models/token-create-card-data.md)\|[TokenCreateKonbiniData](../../doc/models/token-create-konbini-data.md)\|[TokenCreateOnlineData](../../doc/models/token-create-online-data.md)\|[TokenCreateBankTransferData](../../doc/models/token-create-bank-transfer-data.md)\|[TokenCreatePaidyData](../../doc/models/token-create-paidy-data.md)\|[TokenCreateQrScanData](../../doc/models/token-create-qr-scan-data.md)\|[TokenCreateQrMerchantData](../../doc/models/token-create-qr-merchant-data.md) | Required | Transaction Token Create Request Data schema. | getData(): | setData( data): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionTokenCreateRequestBuilder;
use UnivaPay\Models\TransactionTokenCreateRequestPaymentType;
use UnivaPay\Models\TransactionTokenCreateRequestType;
use UnivaPay\Models\Builders\TokenCreateCardDataBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\TransactionTokenCreateRequestMetadataBuilder;

$transactionTokenCreateRequest = TransactionTokenCreateRequestBuilder::init(
    TransactionTokenCreateRequestPaymentType::CARD,
    TransactionTokenCreateRequestType::ONE_TIME,
    TokenCreateCardDataBuilder::init(
        '4242424242424242',
        '12',
        '2026'
    )
        ->cardholder('cardholder4')
        ->cvv('cvv6')
        ->line1('line10')
        ->line2('line22')
        ->state('state6')
        ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
        ->build()
)
    ->email('user@example.com')
    ->usageLimit('daily')
    ->ipAddress('198.51.100.14')
    ->metadata(
        TransactionTokenCreateRequestMetadataBuilder::init()
            ->univapayReferenceId('ref-998877')
            ->univapayCustomerId('0fd29949-07d5-4a91-8eaf-fbce0897d944')
            ->univapayName('univapay-name8')
            ->univapayPhoneNumber('univapay-phone-number2')
            ->additionalProperty('exampleAdditionalProperty', 'String8')
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

