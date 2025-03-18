<?php

namespace Plugin\UnivaPay\EventListener;

use Exception;
use Plugin\UnivaPay\Util\SDK;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Workflow\Event\Event;
use Univapay\Enums\SubscriptionStatus;

class SubscriptionEventListener implements EventSubscriberInterface
{
    private $configRepository;
    private $session;

    public function __construct(
        ConfigRepository $configRepository,
        SessionInterface $session
    ) {
        $this->configRepository = $configRepository;
        $this->session = $session;
    }

    public static function getSubscribedEvents()
    {
        return [
            'workflow.order.transition.subscription_suspend' => 'onSuspendSubscription',
            'workflow.order.transition.subscription_cancel' => 'onCancelSubscription',
            'workflow.order.transition.subscription_resume' => 'onResumeSubscription',
        ];
    }

    public function onSuspendSubscription(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if ($order->getPaymentMethod() !== 'UnivaPay') {
            return;
        }

        try {
            $util = new SDK($this->configRepository->findOneById(1));
            $subscription = $util->getSubscription($order->getUnivapaySubscriptionId());
            $subscription->patch(
                null,
                null,
                null,
                null,
                SubscriptionStatus::SUSPENDED()
            );
            $subscription->awaitResult(5);
        } catch (Exception $e) {
            $this->handleError($e->getMessage());
        }
    }

    public function onCancelSubscription(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if ($order->getPaymentMethod() !== 'UnivaPay') {
            return;
        }

        try {
            $util = new SDK($this->configRepository->findOneById(1));
            $subscription = $util->getSubscription($order->getUnivapaySubscriptionId());
            $subscription->cancel();
            $subscription->awaitResult(5);
        } catch (Exception $e) {
            $this->handleError($e->getMessage());
        }
    }

    public function onResumeSubscription(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if ($order->getPaymentMethod() !== 'UnivaPay') {
            return;
        }

        try {
            $util = new SDK($this->configRepository->findOneById(1));
            $subscription = $util->getSubscription($order->getUnivapaySubscriptionId());
            $subscription->patch(
                null,
                null,
                null,
                null,
                SubscriptionStatus::CURRENT()
            );
            $subscription->awaitResult(5);
        } catch (Exception $e) {
            $this->handleError($e->getMessage());
        }
    }

    private function handleError($message)
    {
        log_error($message);
        if ($this->session->has('_security_admin')) {
            $this->session->getFlashBag()->add('eccube.admin.error', $message);
        } else {
            $this->session->getFlashBag()->add('eccube.front.error', $message);
        }
    }
}
