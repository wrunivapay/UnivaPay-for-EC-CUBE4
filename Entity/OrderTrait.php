<?php
namespace Plugin\UnivaPayPlugin\Entity;

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
     * dtb_order.univapay_charge_id
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $univapay_charge_id;

    /**
     * @return string
     */
    public function getUnivapayChargeId()
    {
        return $this->univapay_charge_id;
    }

    /**
     * @param string $univapay_charge_id
     *
     * @return $this
     */
    public function setUnivapayChargeId($univapay_charge_id)
    {
        $this->univapay_charge_id = $univapay_charge_id;

        return $this;
    }
}
