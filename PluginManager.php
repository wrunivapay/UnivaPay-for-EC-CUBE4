<?php
namespace Plugin\UnivaPayPlugin;

use Eccube\Entity\Payment;
use Eccube\Plugin\AbstractPluginManager;
use Eccube\Repository\PaymentRepository;
use Plugin\UnivaPayPlugin\Entity\Config;
use Plugin\UnivaPayPlugin\Service\Method\CreditCard;
use Plugin\UnivaPayPlugin\Service\Method\Subscription;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PluginManager extends AbstractPluginManager
{
    public function disable(array $meta, ContainerInterface $container)
    {
        exec('composer remove univapay/php-sdk');
    }

    public function enable(array $meta, ContainerInterface $container)
    {
        $this->createTokenPayment($container);
        $this->createSubscriptionPayment($container);
        $this->createConfig($container);
        // pluginディレクトリ内のcomposer.jsonはオーナーズストア以外からインストールした場合反映されないため強制的にインストール
        exec('composer require univapay/php-sdk:5.2.1');
    }

    private function createTokenPayment(ContainerInterface $container)
    {
        $entityManager = $container->get('doctrine')->getManager();
        $paymentRepository = $container->get(PaymentRepository::class);

        $Payment = $paymentRepository->findOneBy([], ['sort_no' => 'DESC']);
        $sortNo = $Payment ? $Payment->getSortNo() + 1 : 1;

        $Payment = $paymentRepository->findOneBy(['method_class' => CreditCard::class]);
        if ($Payment) {
            return;
        }

        $Payment = new Payment();
        $Payment->setCharge(0);
        $Payment->setSortNo($sortNo);
        $Payment->setVisible(true);
        $Payment->setMethod('UnivaPay');
        $Payment->setMethodClass(CreditCard::class);

        $entityManager->persist($Payment);
        $entityManager->flush($Payment);
    }

    private function createSubscriptionPayment(ContainerInterface $container)
    {
        $entityManager = $container->get('doctrine')->getManager();
        $paymentRepository = $container->get(PaymentRepository::class);

        $Payment = $paymentRepository->findOneBy([], ['sort_no' => 'DESC']);
        $sortNo = $Payment ? $Payment->getSortNo() + 1 : 1;

        $Payment = $paymentRepository->findOneBy(['method_class' => Subscription::class]);
        if ($Payment) {
            return;
        }

        $Payment = new Payment();
        $Payment->setCharge(0);
        $Payment->setSortNo($sortNo);
        $Payment->setVisible(true);
        $Payment->setMethod('UnivaPay(Subscription)');
        $Payment->setMethodClass(Subscription::class);

        $entityManager->persist($Payment);
        $entityManager->flush($Payment);
    }


    private function createConfig(ContainerInterface $container)
    {
        $entityManager = $container->get('doctrine.orm.entity_manager');
        $Config = $entityManager->find(Config::class, 1);
        if ($Config) {
            return;
        }

        $Config = new Config();
        $Config->setAppId('');
        $Config->setAppSecret('');
        $Config->setWidgetUrl('https://other-widget.gyro-n.money');
        $Config->setApiUrl('https://api.gyro-n.money');
        $Config->setCapture(false);

        $entityManager->persist($Config);
        $entityManager->flush($Config);
    }
}
