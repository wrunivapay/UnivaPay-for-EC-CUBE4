<?php

namespace Plugin\UnivaPay\Entity\Master;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Master\OrderStatus;

/**
 * @ORM\Entity
 * @ORM\Table(name="mtb_order_status")
 */
class UnivaPayOrderStatus extends OrderStatus
{
    const UNIVAPAY_SUBSCRIPTION_ACTIVE = 100;
    const UNIVAPAY_SUBSCRIPTION_CANCEL = 101;
    const UNIVAPAY_SUBSCRIPTION_SUSPEND = 102;
}
