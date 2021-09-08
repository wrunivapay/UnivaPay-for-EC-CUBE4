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
     * トークンを保持するカラム.
     *
     * dtb_order.univapay_token
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $univapay_token;

    /**
     * クレジットカード番号の末尾4桁.
     * 永続化は行わず, 注文確認画面で表示する.
     *
     * @var string
     */
    private $univapay_card_no_last4;

    /**
     * 決済ステータスを保持するカラム.
     *
     * dtb_order.univapay_payment_status_id
     *
     * @var UnivaPayPluginPaymentStatus
     * @ORM\ManyToOne(targetEntity="Plugin\UnivaPayPlugin\Entity\PaymentStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="univapay_payment_status_id", referencedColumnName="id")
     * })
     */
    private $UnivaPayPluginPaymentStatus;

    /**
     * @return string
     */
    public function getUnivapayToken()
    {
        return $this->univapay_token;
    }

    /**
     * @param string $univapay_token
     *
     * @return $this
     */
    public function setUnivapayToken($univapay_token)
    {
        $this->univapay_token = $univapay_token;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnivapayNoLast4()
    {
        return $this->univapay_card_no_last4;
    }

    /**
     * @param string $univapay_card_no_last4
     */
    public function setUnivapayCardNoLast4($univapay_card_no_last4)
    {
        $this->univapay_card_no_last4 = $univapay_card_no_last4;
    }

    /**
     * @return PaymentStatus
     */
    public function getUnivaPayPluginPaymentStatus()
    {
        return $this->UnivaPayPluginPaymentStatus;
    }

    /**
     * @param PaymentStatus $UnivaPayPluginPaymentStatus|null
     */
    public function setUnivaPayPluginPaymentStatus(PaymentStatus $UnivaPayPluginPaymentStatus = null)
    {
        $this->UnivaPayPluginPaymentStatus = $UnivaPayPluginPaymentStatus;
    }
}
