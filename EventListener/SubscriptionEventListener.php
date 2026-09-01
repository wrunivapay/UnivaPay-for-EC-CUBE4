<?php

namespace Plugin\UnivaPay\EventListener;

use Exception;
use Eccube\Entity\MailHistory;
use Eccube\Repository\BaseInfoRepository;
use Eccube\Repository\MailHistoryRepository;
use Eccube\Repository\MailTemplateRepository;
use Plugin\UnivaPay\Util\SDK;
use Plugin\UnivaPay\Util\Constants;
use Plugin\UnivaPay\Repository\ConfigRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Workflow\Event\Event;

class SubscriptionEventListener implements EventSubscriberInterface
{
    private $baseInfo;
    private $configRepository;
    private $mailer;
    private $mailHistoryRepository;
    private $mailTemplateRepository;
    private $session;
    private $twig;

    public function __construct(
        BaseInfoRepository $baseInfoRepository,
        ConfigRepository $configRepository,
        MailHistoryRepository $mailHistoryRepository,
        MailTemplateRepository $mailTemplateRepository,
        SessionInterface $session,
        \Swift_Mailer $mailer,
        \Twig\Environment $twig
    ) {
        $this->baseInfo = $baseInfoRepository->get();
        $this->configRepository = $configRepository;
        $this->mailHistoryRepository = $mailHistoryRepository;
        $this->mailTemplateRepository = $mailTemplateRepository;
        $this->session = $session;
        $this->mailer = $mailer;
        $this->twig = $twig;
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

        $util = new SDK($this->configRepository->findOneById(1));
        $util->suspendSubscription($order->getUnivapaySubscriptionId());
    }

    public function onCancelSubscription(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if ($order->getPaymentMethod() !== 'UnivaPay') {
            return;
        }

        log_info('サブスク停止処理開始', ['order' => $order->getId()]);

        $util = new SDK($this->configRepository->findOneById(1));
        $util->cancelSubscription($order->getUnivapaySubscriptionId());

        // $subscription = $util->getSubscription($order->getUnivapaySubscriptionId());
        // if ($subscription->status === 'canceled') {
        //     $this->sendEmailCancelSubscription($order);
        // }
    }

    public function onResumeSubscription(Event $event)
    {
        $order = $event->getSubject()->getOrder();

        if ($order->getPaymentMethod() !== 'UnivaPay') {
            return;
        }

        $util = new SDK($this->configRepository->findOneById(1));
        $util->unsuspendSubscription($order->getUnivapaySubscriptionId());
    }

    private function sendEmailCancelSubscription($order)
    {
        log_info('サブスク停止メール送信開始');

        $MailTemplate = $this->mailTemplateRepository->findOneBy([
            'name' => Constants::MAIL_TEMPLATE_UNIVAPAY_SUBSCRIPTION_CANCEL
        ]);

        $body = $this->twig->render($MailTemplate->getFileName(), [
            'BaseInfo' => $this->baseInfo,
            'Customer' => $order->getCustomer(),
            'Order' => $order,
        ]);

        $message = (new \Swift_Message())
            ->setSubject('['.$this->baseInfo->getShopName().'] '.$MailTemplate->getMailSubject())
            ->setFrom([$this->baseInfo->getEmail01() => $this->baseInfo->getShopName()])
            ->setTo([$order->getEmail()])
            ->setBcc($this->baseInfo->getEmail01())
            ->setReplyTo($this->baseInfo->getEmail03())
            ->setReturnPath($this->baseInfo->getEmail04());

        $message->setBody($body);

        $count = $this->mailer->send($message);

        $MailHistory = new MailHistory();
        $MailHistory->setMailSubject($message->getSubject())
            ->setMailBody($message->getBody())
            ->setOrder($order)
            ->setSendDate(new \DateTime());

        $multipart = $message->getChildren();
        if (count($multipart) > 0) {
            $MailHistory->setMailHtmlBody($multipart[0]->getBody());
        }
        $this->mailHistoryRepository->save($MailHistory);

        log_info('サブスク停止メール送信完了', ['count' => $count]);
    }
}
