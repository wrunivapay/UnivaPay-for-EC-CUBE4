
# Subscription Payment

Represents a single scheduled or historical payment for a subscription.

*This model accepts additional fields of type array.*

## Structure

`SubscriptionPayment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | Unique identifier. | getId(): ?string | setId(?string id): void |
| `dueDate` | `?DateTime` | Optional | Scheduled due date. | getDueDate(): ?\DateTime | setDueDate(?\DateTime dueDate): void |
| `zoneId` | `?string` | Optional | IANA Timezone ID. | getZoneId(): ?string | setZoneId(?string zoneId): void |
| `amount` | `?int` | Optional | Amount in the smallest currency unit. | getAmount(): ?int | setAmount(?int amount): void |
| `currency` | `?string` | Optional | ISO-4217 currency code. | getCurrency(): ?string | setCurrency(?string currency): void |
| `amountFormatted` | `?float` | Optional | Amount formatted for display. | getAmountFormatted(): ?float | setAmountFormatted(?float amountFormatted): void |
| `isPaid` | `?bool` | Optional | Indicates whether this specific payment cycle has been successfully charged. | getIsPaid(): ?bool | setIsPaid(?bool isPaid): void |
| `isLastPayment` | `?bool` | Optional | Indicates if this is the final payment in a limited-cycle subscription. | getIsLastPayment(): ?bool | setIsLastPayment(?bool isLastPayment): void |
| `createdOn` | `?DateTime` | Optional | Timestamp when the resource was created. | getCreatedOn(): ?\DateTime | setCreatedOn(?\DateTime createdOn): void |
| `updatedOn` | `?DateTime` | Optional | Timestamp when the resource was last updated. | getUpdatedOn(): ?\DateTime | setUpdatedOn(?\DateTime updatedOn): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\SubscriptionPaymentBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\ApiHelper;

$subscriptionPayment = SubscriptionPaymentBuilder::init()
    ->id('11e89a0a-8cee-d660-b984-3fcaaed46e7c')
    ->dueDate(DateTimeHelper::fromSimpleDate('2018-08-21'))
    ->zoneId('Asia/Tokyo')
    ->amount(10000)
    ->currency('JPY')
    ->amountFormatted(10000)
    ->isPaid(false)
    ->isLastPayment(false)
    ->createdOn(DateTimeHelper::fromRfc3339DateTime('2018-08-07T06:24:33.961256Z'))
    ->updatedOn(DateTimeHelper::fromRfc3339DateTime('2018-08-07T06:24:33.961256Z'))
    ->additionalProperty('exampleAdditionalProperty', ApiHelper::deserialize('{"key1":"val1","key2":"val2"}'))
    ->build();
```

