<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\UnivaPayForECCUBE4;

use Eccube\Common\EccubeTwigBlock;

class UnivaPayForECCUBE4TwigBlock implements EccubeTwigBlock
{
    /**
     * @return array
     */
    public static function getTwigBlock()
    {
        return [
            '@UnivaPayForECCUBE4/credit.twig',
            '@UnivaPayForECCUBE4/credit_confirm.twig',
        ];
    }
}
