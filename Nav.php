<?php

namespace Plugin\UnivaPay;

use Eccube\Common\EccubeNav;

class Nav implements EccubeNav
{
    /**
     * @return array
     */
    public static function getNav()
    {
        return [
            // 'order' => [
            //     'children' => [
            //         'univapay_webhook_events' => [
            //             'name' => 'univa_pay.admin.order.webhook.events.menu',
            //             'url' => 'univapay_webhook_events'
            //         ]
            //     ]
            // ]
        ];
    }
}
