
# Base Online Data

Base Online Data schema.

*This model accepts additional fields of type array.*

## Structure

`BaseOnlineData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `brand` | [`?string(BaseOnlineDataBrand)`](../../doc/models/base-online-data-brand.md) | Optional | Base Online Data Brand schema. `alipay_china`, `alipay_hk`, `gcash`, `dana`, `truemoney`, `kakaopay`, `tng`, `rabbit_line_pay`, `bpi`, `boost`, `tinaba`, `naver_pay`, `toss_pay`, `maya`, `grab_sg`, `kredivo_id`, `k_plus`, and `kaspi_kz` are Alipay+ regional wallets routed through the `alipay_plus_online` gateway family. | getBrand(): ?string | setBrand(?string brand): void |
| `callMethod` | [`?string(BaseOnlineDataCallMethod)`](../../doc/models/base-online-data-call-method.md) | Optional | Base Online Data Call Method schema. | getCallMethod(): ?string | setCallMethod(?string callMethod): void |
| `osType` | [`?string(BaseOnlineDataOsType)`](../../doc/models/base-online-data-os-type.md) | Optional | Base Online Data Os Type schema. | getOsType(): ?string | setOsType(?string osType): void |
| `userIdentifier` | `?string` | Optional | Consumer specific identifier required by some gateways for fraud prevention. | getUserIdentifier(): ?string | setUserIdentifier(?string userIdentifier): void |
| `userIdentifierSource` | [`?string(BaseOnlineDataUserIdentifierSource)`](../../doc/models/base-online-data-user-identifier-source.md) | Optional | The source of the user identifier | getUserIdentifierSource(): ?string | setUserIdentifierSource(?string userIdentifierSource): void |
| `additionalProperties` | `array<string, array>` | Optional | - | findAdditionalProperty(string key): array | additionalProperty(string key, array value): void |

## Example

```php
use UnivaPay\Models\Builders\BaseOnlineDataBuilder;

$baseOnlineData = BaseOnlineDataBuilder::init()->build();
```

