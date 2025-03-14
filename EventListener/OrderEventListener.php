<?php

namespace Plugin\UnivaPay\EventListener;

use Symfony\Component\Workflow\Event\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Plugin\UnivaPay\Util\SDK;
use Plugin\UnivaPay\Repository\ConfigRepository;

class OrderEventListener implements EventSubscriberInterface
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
            'workflow.order.transition.pay' => 'onPayOrder',
            'workflow.order.transition.cancel' => 'onCancelOrder',
        ];
    }

    // Capture charge to Univapay
    public function onPayOrder(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if ($order->getPaymentMethod() !== 'UnivaPay') {
            return;
        }

        try {
            $util = new SDK($this->configRepository->findOneById(1));
            $charge = $util->getCharge($order->getUnivapayChargeId());
            $charge->capture()->awaitResult();
        } catch (\Exception $e) {
            log_error($e->getMessage());
        }
    }

    // Cancel charge to Univapay
    public function onCancelOrder(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if ($order->getPaymentMethod() !== 'UnivaPay') {
            return;
        }

        try {
            $util = new SDK($this->configRepository->findOneById(1));
            $charge = $util->getCharge($order->getUnivapayChargeId());
            $charge->cancel()->awaitResult();
        } catch (\Exception $e) {
            log_error($e->getMessage());
        }
    }
}
