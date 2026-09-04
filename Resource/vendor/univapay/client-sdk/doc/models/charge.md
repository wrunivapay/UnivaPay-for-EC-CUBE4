
# Charge

Charge resource returned by the payments API.

*This model accepts additional fields of type array.*

## Structure

`Charge`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier. | getId(): ?string | setId(?string id): void |
| `storeId` | `?string` | Optional | Store identifier. | getStoreId(): ?string | setStoreId(?string storeId): void |
| `transactionTokenId` | `?string` | Optional | Transaction token identifier. | getTransactionTokenId(): ?string | setTransactionTokenId(?string transactionTokenId): void |
| `transactionTokenType` | [`?string(ChargeTransactionTokenType)`](../../doc/models/charge-transaction-token-type.md) | Optional | Charge Transaction Token Type schema. | getTransactionTokenType(): ?string | setTransactionTokenType(?string transactionTokenType): void |
| `subscriptionId` | `?string` | Optional | Subscription identifier. | getSubscriptionId(): ?string | setSubscriptionId(?string subscriptionId): void |
| `merchantTransactionId` | `?string` | Optional | Merchant-defined transaction identifier. | getMerchantTransactionId(): ?string | setMerchantTransactionId(?string merchantTransactionId): void |
| `requestedAmount` | `?int` | Optional | Requested amount in the smallest currency unit. | getRequestedAmount(): ?int | setRequestedAmount(?int requestedAmount): void |
| `requestedCurrency` | `?string` | Optional | Requested ISO-4217 currency code. | getRequestedCurrency(): ?string | setRequestedCurrency(?string requestedCurrency): void |
| `requestedAmountFormatted` | `?float` | Optional | Requested amount formatted for display. | getRequestedAmountFormatted(): ?float | setRequestedAmountFormatted(?float requestedAmountFormatted): void |
| `chargedAmount` | `?int` | Optional | Charged amount in the smallest currency unit. | getChargedAmount(): ?int | setChargedAmount(?int chargedAmount): void |
| `chargedCurrency` | `?string` | Optional | Charged ISO-4217 currency code. | getChargedCurrency(): ?string | setChargedCurrency(?string chargedCurrency): void |
| `chargedAmountFormatted` | `?float` | Optional | Charged amount formatted for display. | getChargedAmountFormatted(): ?float | setChargedAmountFormatted(?float chargedAmountFormatted): void |
| `feeAmount` | `?int` | Optional | Fee amount in the smallest currency unit. | getFeeAmount(): ?int | setFeeAmount(?int feeAmount): void |
| `feeCurrency` | `?string` | Optional | Fee ISO-4217 currency code. | getFeeCurrency(): ?string | setFeeCurrency(?string feeCurrency): void |
| `feeAmountFormatted` | `?float` | Optional | Fee amount formatted for display. | getFeeAmountFormatted(): ?float | setFeeAmountFormatted(?float feeAmountFormatted): void |
| `onlyDirectCurrency` | `?bool` | Optional | Whether only direct currency processing is allowed. | getOnlyDirectCurrency(): ?bool | setOnlyDirectCurrency(?bool onlyDirectCurrency): void |
| `captureAt` | `?DateTime` | Optional | Timestamp when capture should occur. | getCaptureAt(): ?\DateTime | setCaptureAt(?\DateTime captureAt): void |
| `descriptor` | `?string` | Optional | Billing descriptor. | getDescriptor(): ?string | setDescriptor(?string descriptor): void |
| `descriptorPhoneNumber` | `?string` | Optional | Billing descriptor phone number. | getDescriptorPhoneNumber(): ?string | setDescriptorPhoneNumber(?string descriptorPhoneNumber): void |
| `status` | [`?string(ChargeStatus)`](../../doc/models/charge-status.md) | Optional | Charge Status schema. | getStatus(): ?string | setStatus(?string status): void |
| `error` | [`?PaymentError`](../../doc/models/payment-error.md) | Optional | Payment error details, or null if successful. | getError(): ?PaymentError | setError(?PaymentError error): void |
| `metadata` | [`?GenericMetadata`](../../doc/models/generic-metadata.md) | Optional | A free-form dictionary for custom metadata. | getMetadata(): ?GenericMetadata | setMetadata(?GenericMetadata metadata): void |
| `mode` | [`?string(ChargeMode)`](../../doc/models/charge-mode.md) | Optional | Charge Mode schema. | getMode(): ?string | setMode(?string mode): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `merchantName` | `?string` | Optional | Merchant display name. | getMerchantName(): ?string | setMerchantName(?string merchantName): void |
| `storeName` | `?string` | Optional | Store display name. | getStoreName(): ?string | setStoreName(?string storeName): void |
| `redirect` | [`?ChargeRedirect`](../../doc/models/charge-redirect.md) | Optional | Charge Redirect schema. | getRedirect(): ?ChargeRedirect | setRedirect(?ChargeRedirect redirect): void |
| `threeDs` | [`?ChargeThreeDs`](../../doc/models/charge-three-ds.md) | Optional | Charge Three Ds schema. | getThreeDs(): ?ChargeThreeDs | setThreeDs(?ChargeThreeDs threeDs): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeBuilder;
use UnivaPay\Models\ChargeTransactionTokenType;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\ChargeStatus;
use UnivaPay\Models\Builders\PaymentErrorBuilder;
use UnivaPay\ApiHelper;
use UnivaPay\Models\Builders\GenericMetadataBuilder;
use UnivaPay\Models\ChargeMode;
use UnivaPay\Models\Builders\ChargeRedirectBuilder;
use UnivaPay\Models\Builders\ChargeThreeDsBuilder;

$charge = ChargeBuilder::init()
    ->id('6efb4e5c-690a-40f3-a4f1-0e19c5f84e98')
    ->storeId('76cf4a64-02bc-4cb3-9a28-74622e5928a1')
    ->transactionTokenId('af834c88-7a8f-47ac-aee9-0386a0f98b0d')
    ->transactionTokenType(ChargeTransactionTokenType::ONE_TIME)
    ->subscriptionId('11ef0000-0000-4000-8000-000000000001')
    ->merchantTransactionId('ORD-998877')
    ->requestedAmount(1000)
    ->requestedCurrency('JPY')
    ->requestedAmountFormatted(1000)
    ->chargedAmount(1000)
    ->chargedCurrency('JPY')
    ->chargedAmountFormatted(1000)
    ->feeAmount(30)
    ->feeCurrency('JPY')
    ->feeAmountFormatted(30)
    ->onlyDirectCurrency(false)
    ->captureAt(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
    ->descriptor('UNIVAPAY TEST')
    ->descriptorPhoneNumber('0312345678')
    ->status(ChargeStatus::PENDING)
    ->error(
        PaymentErrorBuilder::init()
            ->code(301)
            ->message('Card number error.')
            ->detail('The provided card number failed validation.')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->metadata(
        GenericMetadataBuilder::init()
            ->orderId('12345')
            ->univapayName('univapay-name8')
            ->univapayPhoneNumber('univapay-phone-number2')
            ->additionalProperty('exampleAdditionalProperty', 'String4')
            ->build()
    )
    ->mode(ChargeMode::LIVE)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50Z'))
    ->merchantName('Test Merchant')
    ->storeName('Tokyo Store')
    ->redirect(
        ChargeRedirectBuilder::init()
            ->endpoint('endpoint8')
            ->redirectId('00000316-0000-0000-0000-000000000000')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->threeDs(
        ChargeThreeDsBuilder::init()
            ->redirectEndpoint('redirect_endpoint8')
            ->mode('mode2')
            ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
            ->build()
    )
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

