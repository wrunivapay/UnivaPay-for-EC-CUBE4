<?php
namespace Plugin\UnivaPay\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\UnivaPay\Entity\Config;
use Doctrine\Persistence\ManagerRegistry;

class ConfigRepository extends AbstractRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Config::class);
    }

    public function get($id = 1)
    {
        return $this->find($id);
    }
}
