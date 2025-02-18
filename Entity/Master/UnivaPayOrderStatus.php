<?php

namespace Plugin\UnivaPay\Entity\Master;

use Eccube\Entity\Master\OrderStatus;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="mtb_order_status")
 */
class UnivaPayOrderStatus extends OrderStatus
{
    const UNIVAPAY_SUBSCRIPTION = 100;
}
