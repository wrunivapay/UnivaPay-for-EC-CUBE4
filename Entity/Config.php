<?php
namespace Plugin\UnivaPayPlugin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="plg_univapay_config")
 * @ORM\Entity(repositoryClass="Plugin\UnivaPayPlugin\Repository\ConfigRepository")
 */
class Config
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="api_url", type="string", length=1024, nullable=true)
     */
    private $api_url;

    /**
     * @var string
     *
     * @ORM\Column(name="app_id", type="string", length=512, nullable=true)
     */
    private $app_id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getApiUrl()
    {
        return $this->api_url;
    }

    /**
     * @param string $api_url
     *
     * @return $this;
     */
    public function setApiUrl($api_url)
    {
        $this->api_url = $api_url;

        return $this;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * @param string $app_id
     *
     * @return $this;
     */
    public function setAppId($app_id)
    {
        $this->app_id = $app_id;

        return $this;
    }
}
