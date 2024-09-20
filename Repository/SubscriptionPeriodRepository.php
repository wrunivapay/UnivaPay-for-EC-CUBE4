<?php
    namespace Plugin\UnivaPay\Repository;

    use Eccube\Repository\AbstractRepository;
    use Plugin\UnivaPay\Entity\SubscriptionPeriod;
    use Doctrine\Persistence\ManagerRegistry;

    class SubscriptionPeriodRepository extends AbstractRepository
    {
        public function __construct(ManagerRegistry $registry)
        {
            parent::__construct($registry, SubscriptionPeriod::class);
        }
    }
