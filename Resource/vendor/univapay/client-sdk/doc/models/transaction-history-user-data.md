
# Transaction History User Data

Payment-type-specific details for this row. This is a single flat object covering every payment type — the fields actually populated depend on `payment_type` (documented per field below). Fields not applicable to a given payment type are omitted.

*This model accepts additional fields of type array.*

## Structure

`TransactionHistoryUserData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string(TransactionHistoryType)`](../../doc/models/transaction-history-type.md) | Optional | Whether this row represents a charge or a refund. | getType(): ?string | setType(?string type): void |
| `cardholderName` | `?string` | Optional | Cardholder name. Present for `card` and `apple_pay` rows only. | getCardholderName(): ?string | setCardholderName(?string cardholderName): void |
| `cardholderEmailAddress` | `?string` | Optional | Cardholder/customer email address. Present for every payment type except `konbini`'s legacy alias fields; always non-null for `bank_transfer` rows, nullable for every other type. | getCardholderEmailAddress(): ?string | setCardholderEmailAddress(?string cardholderEmailAddress): void |
| `cardholderPhoneNumber` | `?string` | Optional | Cardholder phone number. Present for `paidy` rows only. | getCardholderPhoneNumber(): ?string | setCardholderPhoneNumber(?string cardholderPhoneNumber): void |
| `customerName` | `?string` | Optional | Customer name as entered at checkout. Present for `konbini` rows only (empty string when not provided). | getCustomerName(): ?string | setCustomerName(?string customerName): void |
| `convenienceStore` | `?string` | Optional | Legacy duplicate of `brand`. Present for `konbini` rows only. | getConvenienceStore(): ?string | setConvenienceStore(?string convenienceStore): void |
| `brand` | `?string` | Optional | Raw brand identifier for the payment method. Present for every payment type; the value set is payment-type-specific (e.g. card brands for `card`/`apple_pay`, QR brands for `qr_scan`/`qr_merchant`, online-wallet brands for `online`, convenience-store brands for `konbini`, `paidy` for `paidy` rows). Nullable for `qr_scan`, `qr_merchant`, and `online`; always non-null for the other types. | getBrand(): ?string | setBrand(?string brand): void |
| `gateway` | `?string` | Optional | Raw gateway identifier that processed the payment. Present for every payment type. | getGateway(): ?string | setGateway(?string gateway): void |
| `serviceProvider` | [`?string(TransactionHistoryServiceProvider)`](../../doc/models/transaction-history-service-provider.md) | Optional | Service provider, or `null` when not reported. | getServiceProvider(): ?string | setServiceProvider(?string serviceProvider): void |
| `refunds` | [`?(TransactionHistoryRefund[])`](../../doc/models/transaction-history-refund.md) | Optional | Refunds issued against this charge. Present for charge rows only (`type: charge`); absent for refund rows. | getRefunds(): ?array | setRefunds(?array refunds): void |
| `reason` | [`?string(TransactionHistoryRefundReason)`](../../doc/models/transaction-history-refund-reason.md) | Optional | Refund reason, or `null` when unset. | getReason(): ?string | setReason(?string reason): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TransactionHistoryUserDataBuilder;
use UnivaPay\Models\TransactionHistoryType;
use UnivaPay\Models\TransactionHistoryServiceProvider;
use UnivaPay\Models\Builders\TransactionHistoryRefundBuilder;
use UnivaPay\Models\TransactionHistoryRefundStatus;

$transactionHistoryUserData = TransactionHistoryUserDataBuilder::init()
    ->type(TransactionHistoryType::CHARGE)
    ->cardholderName('Some Guy')
    ->cardholderEmailAddress('test4@univapay.com')
    ->brand('visa')
    ->gateway('test')
    ->serviceProvider(TransactionHistoryServiceProvider::CREDIT)
    ->refunds(
        [
            TransactionHistoryRefundBuilder::init()
                ->refundId('11ef0000-0000-4000-8000-000000000010')
                ->amount(500)
                ->currency('JPY')
                ->amountFormatted(500)
                ->status(TransactionHistoryRefundStatus::SUCCESSFUL)
                ->build()
        ]
    )
    ->build();
```

