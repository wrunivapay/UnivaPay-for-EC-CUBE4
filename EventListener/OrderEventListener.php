<?php

namespace Plugin\UnivaPay\EventListener;

use Eccube\Entity\Order;
use Plugin\UnivaPay\Util\Constants;
use Plugin\UnivaPay\Util\SDK;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Workflow\Event\Event;

// Listener to update charge status on Univapay
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
    
    private function isUnivapayPayment(Order $order) : bool {
        return $order->getPaymentMethod() === Constants::UNIVAPAY_PAYMENT_METHOD;
    }

    public function onPayOrder(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if (!$this->isUnivapayPayment($order)) return;

        $util = new SDK($this->configRepository->findOneById(1));
        $charge = $util->getCharge($order->getUnivapayChargeId());
        $util->captureCharge($charge);
    }

    public function onCancelOrder(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if (!$this->isUnivapayPayment($order)) return;

        $util = new SDK($this->configRepository->findOneById(1));
        $charge = $util->getCharge($order->getUnivapayChargeId());
        
        switch($charge->getStatus()) {
            case 'authorized':
                $util->createChargeCancel($charge);
                break;
            case 'successful':
                $refund = $util->getRefunds($charge->getId());
                if ($refund->getTotalHits() > 0) break;

                $util->createChargeRefund($charge);
                break;
            default:
                break;
        }
    }
}
