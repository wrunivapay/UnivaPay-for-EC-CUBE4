<?php
    namespace Plugin\UnivaPay\Repository;

    use Eccube\Repository\AbstractRepository;
    use Plugin\UnivaPay\Entity\SubscriptionPeriod;
    use Symfony\Bridge\Doctrine\RegistryInterface;

    class SubscriptionPeriodRepository extends AbstractRepository
    {
        public function __construct(RegistryInterface $registry)
        {
            parent::__construct($registry, SubscriptionPeriod::class);
        }
    }
