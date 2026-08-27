
# Token Webhook Event

Webhook envelope for transaction token lifecycle events. Fired as `token_created` when a token is created, `token_updated` on metadata changes, `token_three_d_s_updated` on 3-D Secure data changes, `token_cvv_auth_updated` on CVV authorization changes, `token_cvv_auth_check_updated` on CVV auth check changes, `token_replaced` when a token is replaced by a new one (e.g., after a card update), and `recurring_token_deleted` when a recurring token is deleted. The `data` field contains the full TransactionToken object at the time of the event.

*This model accepts additional fields of type array.*

## Structure

`TokenWebhookEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique ID of this webhook delivery. | getId(): string | setId(string id): void |
| `event` | [`string(TokenEvent)`](../../doc/models/token-event.md) | Required | Event type discriminator — `token_created`, `token_updated`, `token_three_d_s_updated`, `token_cvv_auth_updated`, `token_cvv_auth_check_updated`, `token_replaced`, or `recurring_token_deleted`. | getEvent(): string | setEvent(string event): void |
| `data` | [CardTransactionToken](../../doc/models/card-transaction-token.md)\|[KonbiniTransactionToken](../../doc/models/konbini-transaction-token.md)\|[OnlineTransactionToken](../../doc/models/online-transaction-token.md)\|[BankTransferTransactionToken](../../doc/models/bank-transfer-transaction-token.md)\|[PaidyTransactionToken](../../doc/models/paidy-transaction-token.md)\|[QrScanTransactionToken](../../doc/models/qr-scan-transaction-token.md)\|[QrMerchantTransactionToken](../../doc/models/qr-merchant-transaction-token.md)\|null | Optional | Stored transaction token resource. `payment_type` discriminates which variant applies — and therefore the concrete shape of `data` — per the mapping above. | getData(): | setData( data): void |
| `createdOn` | `DateTime` | Required | Timestamp when the event was fired. | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenWebhookEventBuilder;
use UnivaPay\Models\TokenEvent;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\CardTransactionTokenBuilder;
use UnivaPay\Models\Builders\TokenResponseCardDataBuilder;
use UnivaPay\Models\Builders\TokenResponseCardDataCardBuilder;
use UnivaPay\Models\TransactionTokenMode;
use UnivaPay\Models\TransactionTokenType;

$tokenWebhookEvent = TokenWebhookEventBuilder::init(
    '11ef0000-0000-4000-8000-000000000001',
    TokenEvent::TOKEN_CREATED,
    DateTimeHelper::fromRfc3339DateTimeRequired('2026-04-09T07:35:50.000000Z')
)
    ->data(
        CardTransactionTokenBuilder::init(
            TokenResponseCardDataBuilder::init()
                ->card(
                    TokenResponseCardDataCardBuilder::init()
                        ->cardholder('TARO YAMADA')
                        ->expMonth(12)
                        ->expYear(2026)
                        ->lastFour('4242')
                        ->brand('visa')
                        ->build()
                )
                ->build()
        )
            ->id('6426bbd2-17bd-41bf-883b-1fe970db48ee')
            ->storeId('fc264608-9a9e-495e-844e-a08129a81af4')
            ->email('test@univapay.com')
            ->active(true)
            ->mode(TransactionTokenMode::LIVE)
            ->type(TransactionTokenType::RECURRING)
            ->confirmed(true)
            ->metadata(
                [
                    'customer_id' => 'cust_12345'
                ]
            )
            ->createdOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
            ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2026-04-09T07:35:50.000000Z'))
            ->build()
    )
    ->build();
```

