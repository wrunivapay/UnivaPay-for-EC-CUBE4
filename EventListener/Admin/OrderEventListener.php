<?php

namespace Plugin\UnivaPay\EventListener\Admin;

use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Plugin\UnivaPay\Util\Constants;
use Plugin\UnivaPay\Util\SDK;
use Univapay\Enums\ChargeStatus;
use Univapay\Enums\SubscriptionStatus;

class OrderEventListener implements EventSubscriberInterface
{
    private $util;
    private $configRepository;

    public function __construct(
        ConfigRepository $configRepository
    ) {
        $this->configRepository = $configRepository;
    }

    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::ADMIN_ORDER_EDIT_INDEX_INITIALIZE => 'onOrderEditIndex',
            EccubeEvents::ADMIN_ORDER_EDIT_INDEX_COMPLETE => 'onOrderEditIndex',
        ];
    }

    public function onOrderEditIndex(EventArgs $event)
    {
        $order = $event->getArgument('TargetOrder');
        if (!$order || $order->getPaymentMethod() !== Constants::UNIVAPAY_PAYMENT_METHOD) {
            return;
        }

        $subscriptionId = $order->getUnivapaySubscriptionId();
        if ($subscriptionId) {
            $order = $this->handleSubscription($order, $subscriptionId);
        }

        $chargeId = $order->getUnivapayChargeId();
        if ($chargeId) {
            $order = $this->handleCharge($order, $chargeId);
        }

        $event->setArgument('TargetOrder', $order);
    }

    private function handleSubscription($order, $subscriptionId): object
    {
        $this->util = new SDK($this->configRepository->find(1));
        $subscription = $this->util->getSubscription($subscriptionId);
        $order->univapaySubscription = $subscription;
        switch($subscription->status)
        {
            case SubscriptionStatus::UNVERIFIED():
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.unverified');
                break;
            case SubscriptionStatus::UNCONFIRMED():
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.unconfirmed');
                break;
            case SubscriptionStatus::UNPAID():
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.unpaid');
                break;
            case SubscriptionStatus::AUTHORIZED():
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.unauthorized');
                break;
            case SubscriptionStatus::CURRENT():
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.current');
                break;
            case SubscriptionStatus::SUSPENDED():
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.suspended');
                break;
            case SubscriptionStatus::CANCELED():
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.canceled');
                break;
            case SubscriptionStatus::COMPLETED():
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.completed');
                break;
            default:
                $order->univapaySubscriptionStatus = '';
        }
        return $order;
    }

    private function handleCharge($order, $chargeId): object
    {
        $this->util = new SDK($this->configRepository->find(1));
        $charge = $this->util->getCharge($chargeId);
        $order->univapayCharge = $charge;
        $order->univapayRefund = $charge->listRefunds();
        return $order;
    }
}
