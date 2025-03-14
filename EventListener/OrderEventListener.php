<?php

namespace Plugin\UnivaPay\EventListener;

use Exception;
use Money\Currency;
use Money\Money;
use Symfony\Component\Workflow\Event\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Plugin\UnivaPay\Util\SDK;
use Plugin\UnivaPay\Repository\ConfigRepository;

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
        } catch (Exception $e) {
            log_error($e->getMessage());
            throw $e;
        }
    }

    public function onCancelOrder(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if ($order->getPaymentMethod() !== 'UnivaPay') {
            return;
        }

        try {
            $util = new SDK($this->configRepository->findOneById(1));
            $charge = $util->getCharge($order->getUnivapayChargeId());
            if($charge->status->getName() === "SUCCESSFUL") {
                // Capture -> Refund
                $money = new Money($charge->chargedAmountFormatted, new Currency($charge->chargedCurrency));
                $charge->createRefund($money)->awaitResult();
            } else {
                // Authorized -> Cancel
                $charge->cancel()->awaitResult();
            }
        } catch (Exception $e) {
            log_error($e->getMessage());
            throw $e;
        }
    }
}
