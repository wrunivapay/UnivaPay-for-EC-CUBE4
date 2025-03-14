<?php

namespace Plugin\UnivaPay\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Workflow\Event\Event;

class SubscriptionEventListener implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            'workflow.order.transition.cancel_subscription' => 'onCancelSubscription',
        ];
    }

    public function onCancelSubscription(Event $event)
    {
        log_info("cancel_subscription");
        // $order = $event->getEntity();
        // if (!$order instanceof \Eccube\Entity\Order) {
        //     return;
        // }

        // $orderId = $order->getId();
        // log_info("Order ID: ". $orderId);

        // Add cancel to GPP here
    }
}
