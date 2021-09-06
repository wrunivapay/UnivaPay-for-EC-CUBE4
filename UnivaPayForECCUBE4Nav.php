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

use Eccube\Common\EccubeNav;

class UnivaPayForECCUBE4Nav implements EccubeNav
{
    /**
     * @return array
     */
    public static function getNav()
    {
        return [
            'order' => [
                'children' => [
                    'univapay_admin_payment_status' => [
                        'name' => 'univapay.admin.nav.payment_list',
                        'url' => 'univapay_admin_payment_status',
                    ],
                ],
            ],
        ];
    }
}
