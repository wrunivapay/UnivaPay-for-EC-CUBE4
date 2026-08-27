
# Base Online Data Brand

Base Online Data Brand schema. `alipay_china`, `alipay_hk`, `gcash`, `dana`, `truemoney`, `kakaopay`, `tng`, `rabbit_line_pay`, `bpi`, `boost`, `tinaba`, `naver_pay`, `toss_pay`, `maya`, `grab_sg`, `kredivo_id`, `k_plus`, and `kaspi_kz` are Alipay+ regional wallets routed through the `alipay_plus_online` gateway family.

## Enumeration

`BaseOnlineDataBrand`

## Fields

| Name |
|  --- |
| `ALIPAY_ONLINE` |
| `ALIPAY_PLUS_ONLINE` |
| `PAY_PAY_ONLINE` |
| `WE_CHAT_ONLINE` |
| `D_BARAI_ONLINE` |
| `ALIPAY_CHINA` |
| `ALIPAY_HK` |
| `GCASH` |
| `DANA` |
| `TRUEMONEY` |
| `KAKAOPAY` |
| `TNG` |
| `RABBIT_LINE_PAY` |
| `BPI` |
| `BOOST` |
| `TINABA` |
| `NAVER_PAY` |
| `TOSS_PAY` |
| `MAYA` |
| `GRAB_SG` |
| `KREDIVO_ID` |
| `K_PLUS` |
| `KASPI_KZ` |

## Example

```php
use UnivaPay\Models\BaseOnlineDataBrand;

$baseOnlineDataBrand = BaseOnlineDataBrand::ALIPAY_HK;
```

