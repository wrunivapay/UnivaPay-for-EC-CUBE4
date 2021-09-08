<?php
namespace Plugin\UnivaPayPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Entity\Master\AbstractMasterEntity;

/**
 * PaymentStatus
 *
 * @ORM\Table(name="plg_univapay_payment_status")
 * @ORM\Entity(repositoryClass="Plugin\UnivaPayPlugin\Repository\PaymentStatusRepository")
 */
class PaymentStatus extends AbstractMasterEntity
{
    /**
     * 定数名は適宜変更してください.
     */

    /**
     * 未決済
     */
    const OUTSTANDING = 1;
    /**
     * 有効性チェック済
     */
    const ENABLED = 2;
    /**
     * 仮売上
     */
    const PROVISIONAL_SALES = 3;
    /**
     * 実売上
     */
    const ACTUAL_SALES = 4;
    /**
     * キャンセル
     */
    const CANCEL = 5;
}
