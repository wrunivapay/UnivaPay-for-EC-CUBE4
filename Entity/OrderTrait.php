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
     * 決済ステータスを保持するカラム.
     *
     * dtb_order.univapay_payment_status_id
     *
     * @var UnivaPayPaymentStatus
     * @ORM\ManyToOne(targetEntity="Plugin\UnivaPayPlugin\Entity\PaymentStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="univapay_payment_status_id", referencedColumnName="id")
     * })
     */
    private $UnivaPayPaymentStatus;

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

    /**
     * @return PaymentStatus
     */
    public function getUnivaPayPaymentStatus()
    {
        return $this->UnivaPayPaymentStatus;
    }

    /**
     * @param PaymentStatus $UnivaPayPaymentStatus|null
     */
    public function setUnivaPayPaymentStatus(PaymentStatus $UnivaPayPaymentStatus = null)
    {
        $this->UnivaPayPaymentStatus = $UnivaPayPaymentStatus;
    }
}
