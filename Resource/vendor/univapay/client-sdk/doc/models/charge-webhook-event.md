
# Charge Webhook Event

Webhook envelope for charge lifecycle events. Fired as `charge_updated` whenever a charge transitions to a new status (e.g., `pending` → `awaiting`), and as `charge_finished` when a charge reaches a terminal status (`successful`, `failed`, `error`). The `data` field contains the full Charge object at the time of the event.

*This model accepts additional fields of type array.*

## Structure

`ChargeWebhookEvent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `string` | Required | Unique ID of this webhook delivery. | getId(): string | setId(string id): void |
| `event` | [`string(ChargeEvent)`](../../doc/models/charge-event.md) | Required | Event type discriminator — `charge_updated` or `charge_finished`. | getEvent(): string | setEvent(string event): void |
| `data` | [`?Charge`](../../doc/models/charge.md) | Optional | Charge resource returned by the payments API. | getData(): ?Charge | setData(?Charge data): void |
| `createdOn` | `DateTime` | Required | Timestamp when the event was fired. | getCreatedOn(): \DateTime | setCreatedOn(\DateTime createdOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\ChargeWebhookEventBuilder;
use UnivaPay\Models\ChargeEvent;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\ChargeBuilder;
use UnivaPay\Models\ChargeTransactionTokenType;
use UnivaPay\Models\ChargeStatus;
use UnivaPay\Models\ChargeMode;

$chargeWebhookEvent = ChargeWebhookEventBuilder::init(
    '11ef0000-0000-4000-8000-000000000001',
    ChargeEvent::CHARGE_UPDATED,
    DateTimeHelper::fromRfc3339DateTimeRequired('2026-04-09T07:35:50.000000Z')
)
    ->data(
        ChargeBuilder::init()
            ->id('6efb4e5c-690a-40f3-a4f1-0e19c5f84e98')
            ->storeId('11edf541-c42d-653c-8c3d-dfe0a55f95c0')
            ->transactionTokenId('11ef32a7-3a71-8662-803f-1bc27702eeec')
            ->transactionTokenType(ChargeTransactionTokenType::RECURRING)
            ->subscriptionId('11ef335e-9aa5-c54a-8313-7f9847da313a')
            ->requestedAmount(1250)
            ->requestedCurrency('USD')
            ->requestedAmountFormatted(12.5)
            ->chargedAmount(1250)
            ->chargedCurrency('USD')
            ->chargedAmountFormatted(12.5)
            ->onlyDirectCurrency(false)
            ->status(ChargeStatus::SUCCESSFUL)
            ->error(
                null
            )
            ->mode(ChargeMode::TEST)
            ->createdOn(DateTimeHelper::fromRfc3339DateTime('2024-06-26T01:51:30.000000Z'))
            ->build()
    )
    ->build();
```

