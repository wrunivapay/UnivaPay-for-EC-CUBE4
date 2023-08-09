<?php
namespace Plugin\UnivaPay\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;

/**
 * @EntityExtension("Eccube\Entity\Order")
 */
trait OrderTrait
{
    /**
     * 決済IDを保持するカラム
     *
     * dtb_order.univa_pay_charge_id
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $univa_pay_charge_id;

    /**
     * 検索用に定期課金IDを保持するカラム
     *
     * dtb_order.univa_pay_subscription_id
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $univa_pay_subscription_id;

    /**
     * 定期課金用に金額を保持するカラム
     *
     * dtb_order.univa_pay_charge_amount
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $univa_pay_charge_amount;

    /**
     * @return string
     */
    public function getUnivapayChargeId()
    {
        return $this->univa_pay_charge_id;
    }

    /**
     * @param string $univa_pay_charge_id
     *
     * @return $this
     */
    public function setUnivapayChargeId($univa_pay_charge_id)
    {
        $this->univa_pay_charge_id = $univa_pay_charge_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnivapaySubscriptionId()
    {
        return $this->univa_pay_subscription_id;
    }

    /**
     * @param string $univa_pay_subscription_id
     *
     * @return $this
     */
    public function setUnivapaySubscriptionId($univa_pay_subscription_id)
    {
        $this->univa_pay_subscription_id = $univa_pay_subscription_id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnivapayChargeAmount()
    {
        return $this->univa_pay_charge_amount;
    }

    /**
     * @param string $univa_pay_charge_amount
     *
     * @return $this
     */
    public function setUnivapayChargeAmount($univa_pay_charge_amount)
    {
        $this->univa_pay_charge_amount = $univa_pay_charge_amount;

        return $this;
    }
}
