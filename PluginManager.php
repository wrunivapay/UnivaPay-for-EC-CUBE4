<?php
namespace Plugin\UnivaPay;

use Eccube\Entity\Payment;
use Eccube\Plugin\AbstractPluginManager;
use Eccube\Repository\PaymentRepository;
use Plugin\UnivaPay\Entity\Config;
use Plugin\UnivaPay\Entity\SubscriptionPeriod;
use Plugin\UnivaPay\Service\Method\CreditCard;
use Plugin\UnivaPay\Service\Method\Subscription;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PluginManager extends AbstractPluginManager
{
    public function disable(array $meta, ContainerInterface $container)
    {
        // ほとんどの環境でエラーが出るためそのままにしておく
        // exec('composer remove univapay/php-sdk');
    }

    public function enable(array $meta, ContainerInterface $container)
    {
        $this->createTokenPayment($container);
        $this->createSubscriptionPayment($container);
        $this->createConfig($container);
        $this->createSubscriptionPeriod($container);
        // pluginディレクトリ内のcomposer.jsonはオーナーズストア以外からインストールした場合反映されないため強制的にインストール
        exec('composer require univapay/php-sdk:5.2.1');
        exec('composer clear-cache');
        exec('composer dump-autoload');
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
        $Config->setWidgetUrl('https://widget.univapay.com');
        $Config->setApiUrl('https://api.univapay.com');
        $Config->setCapture(false);

        $entityManager->persist($Config);
        $entityManager->flush($Config);
    }

    private function createMasterData(ContainerInterface $container, array $statuses, $class)
    {
        $entityManager = $container->get('doctrine')->getManager();
        $i = 0;
        foreach ($statuses as $id => $name) {
            $PaymentStatus = $entityManager->find($class, $id);
            if (!$PaymentStatus) {
                $PaymentStatus = new $class;
            }
            $PaymentStatus->setId($id);
            $PaymentStatus->setName($name);
            $PaymentStatus->setSortNo($i++);
            $entityManager->persist($PaymentStatus);
            $entityManager->flush($PaymentStatus);
        }
    }

    private function createSubscriptionPeriod(ContainerInterface $container) {
        $statuses = [
            SubscriptionPeriod::DAILY => '毎日',
            SubscriptionPeriod::WEEKLY => '毎週',
            SubscriptionPeriod::BIWEEKLY => '隔週',
            SubscriptionPeriod::MONTHLY => '毎月',
            SubscriptionPeriod::BIMONTHLY => '隔月',
            SubscriptionPeriod::QUARTERLY => '3ヶ月',
            SubscriptionPeriod::SEMIANNUALLY => '6ヶ月',
            SubscriptionPeriod::ANNUALLY => '毎年',
        ];
        $this->createMasterData($container, $statuses, SubscriptionPeriod::class);
    }
}
