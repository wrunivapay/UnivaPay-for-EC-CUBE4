<?php

namespace Plugin\UnivaPay\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="plg_univa_pay_webhook_events")
 * @ORM\Entity(repositoryClass="Plugin\UnivaPay\Repository\WebhookEventsRepository")
 */
class WebhookEvents
{
    /**
     * @var string
     *
     * @ORM\Column(name="webhook_id", type="string", length=36, nullable=false)
     * @ORM\Id
     */
    private $webhookId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="charge_id", type="string", length=36, nullable=false)
     */
    private $chargeId;

    /**
     * @var string
     *
     * @ORM\Column(name="subscription_id", type="string", length=36, nullable=false)
     */
    private $subscriptionId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime")
     */
    private $create_date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="datetime")
     */
    private $update_date;


    public function getWebhookId(): string
    {
        return $this->webhookId;
    }

    public function setWebhookId(string $value): self
    {
        $this->webhookId = $value;
        return $this;
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }

    public function setOrderId(int $value): self
    {
        $this->orderId = $value;
        return $this;
    }

    public function getChargeId(): string
    {
        return $this->chargeId;
    }    

    public function setChargeId(string $value): self
    {
        $this->chargeId = $value;
        return $this;
    }

    public function getSubscriptionId(): string
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(string $value): self
    {
        $this->subscriptionId = $value;
        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $value): self
    {
        $this->status = $value;
        return $this;
    }

    public function getCreateDate(): \DateTime
    {
        return $this->create_date;
    }

    public function setCreateDate(\DateTime $value): self
    {
        $this->create_date = $value;
        return $this;
    }

    public function getUpdateDate(): \DateTime
    {
        return $this->update_date;
    }

    public function setUpdateDate(\DateTime $value): self
    {
        $this->update_date = $value;
        return $this;
    }
}
