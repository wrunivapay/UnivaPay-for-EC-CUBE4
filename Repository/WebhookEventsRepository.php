<?php

namespace Plugin\UnivaPay\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\UnivaPay\Entity\WebhookEvents;
use Symfony\Bridge\Doctrine\RegistryInterface;

class WebhookEventsRepository extends AbstractRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, WebhookEvents::class);
    }
}
