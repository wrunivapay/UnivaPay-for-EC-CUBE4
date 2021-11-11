<?php
namespace Plugin\UnivaPay\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\UnivaPay\Entity\Config;
use Symfony\Bridge\Doctrine\RegistryInterface;

class ConfigRepository extends AbstractRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Config::class);
    }

    public function get($id = 1)
    {
        return $this->find($id);
    }
}
