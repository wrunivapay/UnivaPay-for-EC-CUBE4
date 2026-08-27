<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Utils;

class NumberHelper
{
    /**
     * Cast an integer or float JSON value to float, returning null for null input.
     *
     * APIMatic's mapTypes() uses strict type matching, which rejects PHP int values
     * for float-typed setters. This factory is applied before that check so that
     * integer amounts like 1000 are accepted wherever a float is expected.
     *
     * @param int|float|null $value
     */
    public static function toFloat($value): ?float
    {
        return $value !== null ? (float) $value : null;
    }
}
