<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * https://www.ec-cube.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\UnivaPayForECCUBE4\Entity;

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
     * dtb_order.sample_payment_token
     *
     * @var string
     * @ORM\Column(type="string", nullable=true)
     */
    private $sample_payment_token;

    /**
     * クレジットカード番号の末尾4桁.
     * 永続化は行わず, 注文確認画面で表示する.
     *
     * @var string
     */
    private $sample_payment_card_no_last4;

    /**
     * コンビニ用種別を保持するカラム.
     *
     * dtb_order.sample_payment_cvs_type_id
     *
     * @var CvsType
     * @ORM\ManyToOne(targetEntity="Plugin\UnivaPayForECCUBE4\Entity\CvsType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sample_payment_cvs_type_id", referencedColumnName="id")
     * })
     */
    private $UnivaPayForECCUBE4CvsType;


    /**
     * 決済ステータスを保持するカラム.
     *
     * dtb_order.sample_payment_payment_status_id
     *
     * @var UnivaPayForECCUBE4PaymentStatus
     * @ORM\ManyToOne(targetEntity="Plugin\UnivaPayForECCUBE4\Entity\PaymentStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sample_payment_payment_status_id", referencedColumnName="id")
     * })
     */
    private $UnivaPayForECCUBE4PaymentStatus;

    /**
     * コンビニ用決済ステータスを保持するカラム.
     *
     * dtb_order.sample_payment_payment_status_id
     *
     * @var UnivaPayForECCUBE4CvsPaymentStatus
     * @ORM\ManyToOne(targetEntity="Plugin\UnivaPayForECCUBE4\Entity\CvsPaymentStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sample_payment_cvs_payment_status_id", referencedColumnName="id")
     * })
     */
    private $UnivaPayForECCUBE4CvsPaymentStatus;

    /**
     * @return string
     */
    public function getUnivaPayForECCUBE4Token()
    {
        return $this->sample_payment_token;
    }

    /**
     * @param string $sample_payment_token
     *
     * @return $this
     */
    public function setUnivaPayForECCUBE4Token($sample_payment_token)
    {
        $this->sample_payment_token = $sample_payment_token;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnivaPayForECCUBE4CardNoLast4()
    {
        return $this->sample_payment_card_no_last4;
    }

    /**
     * @param string $sample_payment_card_no_last4
     */
    public function setUnivaPayForECCUBE4CardNoLast4($sample_payment_card_no_last4)
    {
        $this->sample_payment_card_no_last4 = $sample_payment_card_no_last4;
    }

    /**
     * @return CvsType
     */
    public function getUnivaPayForECCUBE4CvsType()
    {
        return $this->UnivaPayForECCUBE4CvsType;
    }

    /**
     * @param CvsType $UnivaPayForECCUBE4CvsType
     */
    public function setUnivaPayForECCUBE4CvsType(CvsType $UnivaPayForECCUBE4CvsType)
    {
        $this->UnivaPayForECCUBE4CvsType = $UnivaPayForECCUBE4CvsType;
    }

    /**
     * @return PaymentStatus
     */
    public function getUnivaPayForECCUBE4PaymentStatus()
    {
        return $this->UnivaPayForECCUBE4PaymentStatus;
    }

    /**
     * @param PaymentStatus $UnivaPayForECCUBE4PaymentStatus|null
     */
    public function setUnivaPayForECCUBE4PaymentStatus(PaymentStatus $UnivaPayForECCUBE4PaymentStatus = null)
    {
        $this->UnivaPayForECCUBE4PaymentStatus = $UnivaPayForECCUBE4PaymentStatus;
    }

    /**
     * @return CvsPaymentStatus
     */
    public function getUnivaPayForECCUBE4CvsPaymentStatus()
    {
        return $this->UnivaPayForECCUBE4CvsPaymentStatus;
    }

    /**
     * @param CvsPaymentStatus $UnivaPayForECCUBE4CvsPaymentStatus|null
     */
    public function setUnivaPayForECCUBE4CvsPaymentStatus(CvsPaymentStatus $UnivaPayForECCUBE4CvsPaymentStatus = null)
    {
        $this->UnivaPayForECCUBE4CvsPaymentStatus = $UnivaPayForECCUBE4CvsPaymentStatus;
    }
}
