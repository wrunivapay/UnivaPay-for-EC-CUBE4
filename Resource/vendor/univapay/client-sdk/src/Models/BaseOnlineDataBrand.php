<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Base Online Data Brand schema. `alipay_china`, `alipay_hk`, `gcash`, `dana`, `truemoney`, `kakaopay`,
 * `tng`, `rabbit_line_pay`, `bpi`, `boost`, `tinaba`, `naver_pay`, `toss_pay`, `maya`, `grab_sg`,
 * `kredivo_id`, `k_plus`, and `kaspi_kz` are Alipay+ regional wallets routed through the
 * `alipay_plus_online` gateway family.
 */
class BaseOnlineDataBrand
{
    public const ALIPAY_ONLINE = 'alipay_online';

    public const ALIPAY_PLUS_ONLINE = 'alipay_plus_online';

    public const PAY_PAY_ONLINE = 'pay_pay_online';

    public const WE_CHAT_ONLINE = 'we_chat_online';

    public const D_BARAI_ONLINE = 'd_barai_online';

    public const ALIPAY_CHINA = 'alipay_china';

    public const ALIPAY_HK = 'alipay_hk';

    public const GCASH = 'gcash';

    public const DANA = 'dana';

    public const TRUEMONEY = 'truemoney';

    public const KAKAOPAY = 'kakaopay';

    public const TNG = 'tng';

    public const RABBIT_LINE_PAY = 'rabbit_line_pay';

    public const BPI = 'bpi';

    public const BOOST = 'boost';

    public const TINABA = 'tinaba';

    public const NAVER_PAY = 'naver_pay';

    public const TOSS_PAY = 'toss_pay';

    public const MAYA = 'maya';

    public const GRAB_SG = 'grab_sg';

    public const KREDIVO_ID = 'kredivo_id';

    public const K_PLUS = 'k_plus';

    public const KASPI_KZ = 'kaspi_kz';

    private const _ALL_VALUES = [
        self::ALIPAY_ONLINE,
        self::ALIPAY_PLUS_ONLINE,
        self::PAY_PAY_ONLINE,
        self::WE_CHAT_ONLINE,
        self::D_BARAI_ONLINE,
        self::ALIPAY_CHINA,
        self::ALIPAY_HK,
        self::GCASH,
        self::DANA,
        self::TRUEMONEY,
        self::KAKAOPAY,
        self::TNG,
        self::RABBIT_LINE_PAY,
        self::BPI,
        self::BOOST,
        self::TINABA,
        self::NAVER_PAY,
        self::TOSS_PAY,
        self::MAYA,
        self::GRAB_SG,
        self::KREDIVO_ID,
        self::K_PLUS,
        self::KASPI_KZ
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for BaseOnlineDataBrand.");
    }
}
