<?php
namespace Plugin\UnivaPayPlugin;

use Eccube\Common\EccubeTwigBlock;

class UnivaPayPluginTwigBlock implements EccubeTwigBlock
{
    /**
     * @return array
     */
    public static function getTwigBlock()
    {
        return [
            '@UnivaPayPlugin/credit.twig',
            '@UnivaPayPlugin/credit_confirm.twig',
        ];
    }
}
