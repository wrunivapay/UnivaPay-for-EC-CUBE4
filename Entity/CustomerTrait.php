<?php
namespace Plugin\UnivaPayForECCUBE4\Entity;

use Eccube\Annotation\EntityExtension;
use Doctrine\ORM\Mapping as ORM;

/**
 * @EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait
{
    /**
     * カードの記憶用カラム.
     *
     * @var string
     * @ORM\Column(type="smallint", nullable=true)
     */
    public $univapay_cards;
}
