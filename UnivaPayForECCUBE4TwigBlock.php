<?php
namespace Plugin\UnivaPayForECCUBE4;

use Eccube\Common\EccubeTwigBlock;

class UnivaPayForECCUBE4TwigBlock implements EccubeTwigBlock
{
    /**
     * @return array
     */
    public static function getTwigBlock()
    {
        return [
            '@UnivaPayForECCUBE4/credit.twig',
            '@UnivaPayForECCUBE4/credit_confirm.twig',
        ];
    }
}
