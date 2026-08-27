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
 * Required if plan_type is fixed_cycles.
 */
class InstallmentFixedCycles
{
    /**
     * 3 cycles
     */
    public const CYCLES_3 = 3;

    /**
     * 5 cycles
     */
    public const CYCLES_5 = 5;

    /**
     * 6 cycles
     */
    public const CYCLES_6 = 6;

    /**
     * 10 cycles
     */
    public const CYCLES_10 = 10;

    /**
     * 12 cycles
     */
    public const CYCLES_12 = 12;

    /**
     * 15 cycles
     */
    public const CYCLES_15 = 15;

    /**
     * 18 cycles
     */
    public const CYCLES_18 = 18;

    /**
     * 20 cycles
     */
    public const CYCLES_20 = 20;

    /**
     * 24 cycles
     */
    public const CYCLES_24 = 24;

    private const _ALL_VALUES = [
        self::CYCLES_3,
        self::CYCLES_5,
        self::CYCLES_6,
        self::CYCLES_10,
        self::CYCLES_12,
        self::CYCLES_15,
        self::CYCLES_18,
        self::CYCLES_20,
        self::CYCLES_24
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|int $value Value or a list/map of values to be checked
     *
     * @return array|null|int Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for InstallmentFixedCycles.");
    }
}
