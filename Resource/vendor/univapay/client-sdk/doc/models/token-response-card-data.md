
# Token Response Card Data

Token Response Card Data schema.

*This model accepts additional fields of type array.*

## Structure

`TokenResponseCardData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `card` | [`?TokenResponseCardDataCard`](../../doc/models/token-response-card-data-card.md) | Optional | Token Response Card Data Card schema. | getCard(): ?TokenResponseCardDataCard | setCard(?TokenResponseCardDataCard card): void |
| `billing` | [`?TokenResponseCardDataBilling`](../../doc/models/token-response-card-data-billing.md) | Optional | Token Response Card Data Billing schema. | getBilling(): ?TokenResponseCardDataBilling | setBilling(?TokenResponseCardDataBilling billing): void |
| `cvvAuthorize` | [`?TokenResponseCardDataCvvAuthorize`](../../doc/models/token-response-card-data-cvv-authorize.md) | Optional | Token Response Card Data Cvv Authorize schema. | getCvvAuthorize(): ?TokenResponseCardDataCvvAuthorize | setCvvAuthorize(?TokenResponseCardDataCvvAuthorize cvvAuthorize): void |
| `cvvAuthorizeCheck` | [`?TokenResponseCardDataCvvAuthorizeCheck`](../../doc/models/token-response-card-data-cvv-authorize-check.md) | Optional | Token Response Card Data Cvv Authorize Check schema. | getCvvAuthorizeCheck(): ?TokenResponseCardDataCvvAuthorizeCheck | setCvvAuthorizeCheck(?TokenResponseCardDataCvvAuthorizeCheck cvvAuthorizeCheck): void |
| `threeDs` | [`?TokenResponseCardDataThreeDs`](../../doc/models/token-response-card-data-three-ds.md) | Optional | Token Response Card Data Three Ds schema. | getThreeDs(): ?TokenResponseCardDataThreeDs | setThreeDs(?TokenResponseCardDataThreeDs threeDs): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\TokenResponseCardDataBuilder;
use UnivaPay\Models\Builders\TokenResponseCardDataCardBuilder;
use UnivaPay\Models\Builders\TokenResponseCardDataBillingBuilder;
use UnivaPay\Models\Builders\TokenResponsePhoneNumberBuilder;
use UnivaPay\Models\Builders\TokenResponseCardDataCvvAuthorizeBuilder;
use UnivaPay\Models\Builders\TokenResponseCardDataCvvAuthorizeCheckBuilder;
use UnivaPay\Utils\DateTimeHelper;
use UnivaPay\Models\Builders\TokenResponseCardDataThreeDsBuilder;
use UnivaPay\Models\TokenResponseCardDataThreeDsStatus;

$tokenResponseCardData = TokenResponseCardDataBuilder::init()
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
    ->build();
```

