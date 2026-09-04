
# Merchant Webhook User Transactions Configuration

Merchant transaction notification settings.

*This model accepts additional fields of type array.*

## Structure

`MerchantWebhookUserTransactionsConfiguration`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `enabled` | `?bool` | Optional | Enables merchant transaction notifications. | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `notifyCustomer` | `?bool` | Optional | Sends transaction notifications to the customer. | getNotifyCustomer(): ?bool | setNotifyCustomer(?bool notifyCustomer): void |
| `notifyOnTest` | `?bool` | Optional | Sends notifications for test-mode events. | getNotifyOnTest(): ?bool | setNotifyOnTest(?bool notifyOnTest): void |
| `notifyOnRecurringTokenCreation` | `?bool` | Optional | Sends notifications when a recurring token is created. | getNotifyOnRecurringTokenCreation(): ?bool | setNotifyOnRecurringTokenCreation(?bool notifyOnRecurringTokenCreation): void |
| `notifyOnRecurringTokenCvvFailed` | `?bool` | Optional | Sends notifications when recurring-token CVV confirmation fails. | getNotifyOnRecurringTokenCvvFailed(): ?bool | setNotifyOnRecurringTokenCvvFailed(?bool notifyOnRecurringTokenCvvFailed): void |
| `notifyOnWebhookFailure` | `?bool` | Optional | Sends notifications after repeated webhook delivery failures. | getNotifyOnWebhookFailure(): ?bool | setNotifyOnWebhookFailure(?bool notifyOnWebhookFailure): void |
| `notifyOnWebhookDisabled` | `?bool` | Optional | Sends notifications when webhook delivery is disabled. | getNotifyOnWebhookDisabled(): ?bool | setNotifyOnWebhookDisabled(?bool notifyOnWebhookDisabled): void |
| `notifyUserOnFailedTransactions` | `?bool` | Optional | Sends merchant notifications for failed transactions. | getNotifyUserOnFailedTransactions(): ?bool | setNotifyUserOnFailedTransactions(?bool notifyUserOnFailedTransactions): void |
| `notifyCustomerOnFailedTransactions` | `?bool` | Optional | Sends customer notifications for failed transactions. | getNotifyCustomerOnFailedTransactions(): ?bool | setNotifyCustomerOnFailedTransactions(?bool notifyCustomerOnFailedTransactions): void |
| `notifyUserOnConvenienceInstructions` | `?bool` | Optional | Sends merchant notifications with convenience-store payment instructions. | getNotifyUserOnConvenienceInstructions(): ?bool | setNotifyUserOnConvenienceInstructions(?bool notifyUserOnConvenienceInstructions): void |
| `notifyOnSubscriptions` | `?bool` | Optional | Sends notifications for subscription lifecycle events. | getNotifyOnSubscriptions(): ?bool | setNotifyOnSubscriptions(?bool notifyOnSubscriptions): void |
| `notifyOnAuthorizations` | `?bool` | Optional | Sends notifications for authorization-only charges. | getNotifyOnAuthorizations(): ?bool | setNotifyOnAuthorizations(?bool notifyOnAuthorizations): void |
| `notifyOnCvvAuthorizations` | `?bool` | Optional | Sends notifications for CVV authorization events. | getNotifyOnCvvAuthorizations(): ?bool | setNotifyOnCvvAuthorizations(?bool notifyOnCvvAuthorizations): void |
| `notifyOnCancels` | `?bool` | Optional | Sends notifications when charges are canceled. | getNotifyOnCancels(): ?bool | setNotifyOnCancels(?bool notifyOnCancels): void |
| `customerReferLinkEnabled` | `?bool` | Optional | Includes customer self-service links in supported notifications. | getCustomerReferLinkEnabled(): ?bool | setCustomerReferLinkEnabled(?bool customerReferLinkEnabled): void |
| `notifyOnConvenienceExpiry` | `?bool` | Optional | Sends notifications when convenience payments expire. | getNotifyOnConvenienceExpiry(): ?bool | setNotifyOnConvenienceExpiry(?bool notifyOnConvenienceExpiry): void |
| `notifyOnRecurringTokenCreationWithThreeDs` | `?bool` | Optional | Sends notifications when recurring tokens are created through 3-D Secure. | getNotifyOnRecurringTokenCreationWithThreeDs(): ?bool | setNotifyOnRecurringTokenCreationWithThreeDs(?bool notifyOnRecurringTokenCreationWithThreeDs): void |
| `notifyOnChargebacks` | `?bool` | Optional | Sends notifications for chargeback events. | getNotifyOnChargebacks(): ?bool | setNotifyOnChargebacks(?bool notifyOnChargebacks): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\MerchantWebhookUserTransactionsConfigurationBuilder;

$merchantWebhookUserTransactionsConfiguration = MerchantWebhookUserTransactionsConfigurationBuilder::init()
    ->enabled(true)
    ->notifyCustomer(true)
    ->notifyOnTest(false)
    ->notifyOnWebhookFailure(true)
    ->notifyOnWebhookDisabled(true)
    ->notifyOnSubscriptions(true)
    ->build();
```

