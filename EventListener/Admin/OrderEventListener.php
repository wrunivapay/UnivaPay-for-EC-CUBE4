<?php

namespace Plugin\UnivaPay\EventListener\Admin;

use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Plugin\UnivaPay\Util\Constants;
use Plugin\UnivaPay\Util\SDK;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class OrderEventListener implements EventSubscriberInterface
{
    /** @var ConfigRepository */
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
        $util = new SDK($this->configRepository->findAll()[0]);
        $subscription = $util->getSubscription($subscriptionId);
        $order->univapaySubscription = $subscription;
        switch ($subscription->getStatus()) {
            case 'unverified':
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.unverified');
                break;
            case 'unconfirmed':
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.unconfirmed');
                break;
            case 'unpaid':
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.unpaid');
                break;
            case 'authorized':
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.unauthorized');
                break;
            case 'current':
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.current');
                break;
            case 'suspended':
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.suspended');
                break;
            case 'canceled':
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.canceled');
                break;
            case 'completed':
                $order->univapaySubscriptionStatus = trans('univa_pay.admin.subscription.status.completed');
                break;
            default:
                $order->univapaySubscriptionStatus = '';
        }

        return $order;
    }

    private function handleCharge($order, string $chargeId): object
    {
        $util = new SDK($this->configRepository->findAll()[0]);
        $charge = $util->getCharge($chargeId);
        $order->univapayCharge = $charge;
        $order->univapayRefund = $util->getRefunds($chargeId);

        return $order;
    }
}
