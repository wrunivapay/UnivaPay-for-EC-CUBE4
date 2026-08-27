<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models;

use stdClass;
use UnivaPay\ApiHelper;
use UnivaPay\Utils\DateTimeHelper;

/**
 * Webhook envelope for charge lifecycle events. Fired as `charge_updated` whenever a charge
 * transitions to a new status (e.g., `pending` → `awaiting`), and as `charge_finished` when a charge
 * reaches a terminal status (`successful`, `failed`, `error`). The `data` field contains the full
 * Charge object at the time of the event.
 */
class ChargeWebhookEvent implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $event;

    /**
     * @var Charge|null
     */
    private $data;

    /**
     * @var \DateTime
     */
    private $createdOn;

    /**
     * @param string $id
     * @param string $event
     * @param \DateTime $createdOn
     */
    public function __construct(string $id, string $event, \DateTime $createdOn)
    {
        $this->id = $id;
        $this->event = $event;
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Id.
     * Unique ID of this webhook delivery.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique ID of this webhook delivery.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Event.
     * Event type discriminator — `charge_updated` or `charge_finished`.
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * Sets Event.
     * Event type discriminator — `charge_updated` or `charge_finished`.
     *
     * @required
     * @maps event
     * @factory \UnivaPay\Models\ChargeEvent::checkValue
     */
    public function setEvent(string $event): void
    {
        $this->event = $event;
    }

    /**
     * Returns Data.
     * Charge resource returned by the payments API.
     */
    public function getData(): ?Charge
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * Charge resource returned by the payments API.
     *
     * @maps data
     */
    public function setData(?Charge $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Created On.
     * Timestamp when the event was fired.
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the event was fired.
     *
     * @required
     * @maps created_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Converts the ChargeWebhookEvent object to a human-readable string representation.
     *
     * @return string The string representation of the ChargeWebhookEvent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ChargeWebhookEvent',
            [
                'id' => $this->id,
                'event' => $this->event,
                'data' => $this->data,
                'createdOn' => $this->createdOn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['id', 'event', 'data', 'created_on'];

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        if (in_array($name, $this->propertyNames, true)) {
            throw new \InvalidArgumentException(
                "The additional property key, '$name' conflicts with one of the model's properties"
            );
        }

        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']         = $this->id;
        $json['event']      = ChargeEvent::checkValue($this->event);
        if (isset($this->data)) {
            $json['data']   = $this->data;
        }
        $json['created_on'] = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
