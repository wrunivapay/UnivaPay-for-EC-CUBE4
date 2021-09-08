<?php
namespace Plugin\UnivaPayForECCUBE4;

use Eccube\Event\TemplateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class UnivaPayForECCUBE4Event implements EventSubscriberInterface
{
    /**
     * リッスンしたいサブスクライバのイベント名の配列を返します。
     * 配列のキーはイベント名、値は以下のどれかをしてします。
     * - 呼び出すメソッド名
     * - 呼び出すメソッド名と優先度の配列
     * - 呼び出すメソッド名と優先度の配列の配列
     * 優先度を省略した場合は0
     *
     * 例：
     * - array('eventName' => 'methodName')
     * - array('eventName' => array('methodName', $priority))
     * - array('eventName' => array(array('methodName1', $priority), array('methodName2')))
     *
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            '@admin/Order/edit.twig' => 'onAdminOrderEditTwig',
            'Shopping/confirm.twig' => 'onShoppingConfirmEditTwig'
        ];
    }

    public function onAdminOrderEditTwig(TemplateEvent $event)
    {
        $event->addSnippet('@UnivaPayForECCUBE4/admin/order_edit.twig');
    }

    public function onShoppingConfirmEditTwig(TemplateEvent $event)
    {
        $event->addSnippet('@UnivaPayForECCUBE4/shopping_confirm.twig');
    }
}
