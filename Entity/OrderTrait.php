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
     * 決済IDを保持するカラム.
     *
     * dtb_order.univa_pay_charge_id
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $univa_pay_charge_id;

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
}
