<?php

namespace Plugin\UnivaPay\EventListener;

use Eccube\Entity\Master\CustomerStatus;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Plugin\UnivaPay\Util\SDK;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class WithdrawEventListener implements EventSubscriberInterface
{
    private $configRepository;

    public function __construct(
        ConfigRepository $configRepository
    ) {
        $this->configRepository = $configRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            // EccubeEvents::ADMIN_CUSTOMER_EDIT_INDEX_COMPLETE => 'onCustomerWithdraw',
            EccubeEvents::FRONT_MYPAGE_WITHDRAW_INDEX_COMPLETE => 'onCustomerWithdraw',
        ];
    }

    public function onCustomerWithdraw(EventArgs $event)
    {
        // we should check if the customer has a subscription
        // maybe we should not force it rather show a warning and let use decide it
        $customer = $event->getArgument('Customer');
        if ($customer->getStatus()->getId() === CustomerStatus::WITHDRAWING) {
            log_info('customer withdraw from event listener');
        }

        // TODO: Update below logic
        $subscriptionId = '';
        $config = $this->configRepository->findOneById(1);
        $util = new SDK($config);
        foreach($customer->getOrders() as $Order) {
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
