<?php
namespace Plugin\UnivaPayPlugin;

use Eccube\Common\EccubeNav;

class UnivaPayPluginNav implements EccubeNav
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
