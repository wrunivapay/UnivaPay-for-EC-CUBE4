<?php
namespace Plugin\UnivaPay;

use Eccube\Event\TemplateEvent;
use Eccube\Event\EventArgs;
use Eccube\Event\EccubeEvents;
use Eccube\Application;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Plugin\UnivaPay\Util\SDK;

class UnivaPayEvent implements EventSubscriberInterface
{
    /** @var ConfigRepository */
    protected $Config;
    /**
     * UnivaPayEvent constructor.
     *
     * @param ConfigRepository $configRepository
     */
    public function __construct(
        ConfigRepository $configRepository
    ) {
        $this->Config = $configRepository;
    }
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
            'Shopping/confirm.twig' => 'onShoppingConfirmTwig',
            'Mypage/history.twig' => 'onMypageHistoryTwig',
            '@admin/Product/product.twig' => 'onAdminProductEditTwig',
            EccubeEvents::FRONT_MYPAGE_WITHDRAW_INDEX_COMPLETE => 'onMypageWithdraw'
        ];
    }

    public function onAdminOrderEditTwig(TemplateEvent $event)
    {
        $event->addSnippet('@UnivaPay/admin/order_edit.twig');
    }

    public function onShoppingConfirmTwig(TemplateEvent $event)
    {
        $event->addSnippet('@UnivaPay/shopping_confirm.twig');
    }

    public function onMypageHistoryTwig(TemplateEvent $event) {
        $event->addSnippet('@UnivaPay/mypage_history.twig');
    }

    public function onAdminProductEditTwig(TemplateEvent $event)
    {
        $event->addSnippet('@UnivaPay/admin/product_edit.twig');
    }

    public function onMypageWithdraw(EventArgs $event)
    {
        $Customer = $event->getArgument('Customer');
        $subscriptionId = '';
        $config = $this->Config->findOneById(1);
        $util = new SDK($config);
        foreach($Customer->getOrders() as $Order) {
            $nowSubscription = $Order->getUnivaPaySubscriptionId();
            if($nowSubscription && $nowSubscription !== $subscriptionId) {
                $subscriptionId = $nowSubscription;
                $subscription = $util->getSubscription($subscriptionId);
                if($subscription && $subscription->status->getValue() === 'current')
                    $subscription = $subscription->cancel();
            }
        }
    }
}
