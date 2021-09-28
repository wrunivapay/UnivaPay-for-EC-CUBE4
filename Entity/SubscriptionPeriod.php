<?php
    namespace Plugin\UnivaPay\Entity;

    use Doctrine\ORM\Mapping as ORM;
    use Eccube\Entity\Master\AbstractMasterEntity;

    /**
     * SubscriptionPeriod
     *
     * @ORM\Table(name="plg_univa_pay_subscription_period")
     * @ORM\Entity(repositoryClass="Plugin\UnivaPay\Repository\SubscriptionPeriodRepository")
     */
    class SubscriptionPeriod extends AbstractMasterEntity
    {
        const DAILY = 1;
        const WEEKLY = 2;
        const BITWEEKLY = 3;
        const MONTHLY = 4;
        const QUARTERLY = 5;
        const SEMIANNUALLY = 6;
        const ANNUALLY = 7;
    }
