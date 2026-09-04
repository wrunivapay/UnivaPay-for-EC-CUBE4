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
 * Webhook envelope whose `data` payload is a Cancel resource.
 */
class CancelWebhookCallback implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $event;

    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $createdOn;

    /**
     * @var Cancel|null
     */
    private $data;

    /**
     * @param string $id
     * @param \DateTime $createdOn
     */
    public function __construct(string $id, \DateTime $createdOn)
    {
        $this->id = $id;
        $this->createdOn = $createdOn;
    }

    /**
     * Returns Event.
     * Event type discriminator — always `cancel_finished` for this callback.
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * Sets Event.
     * Event type discriminator — always `cancel_finished` for this callback.
     *
     * @maps event
     * @factory \UnivaPay\Models\CancelEvent::checkValue
     */
    public function setEvent(?string $event): void
    {
        $this->event = $event;
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
     * Returns Data.
     * Represents a cancellation request for a charge.
     */
    public function getData(): ?Cancel
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * Represents a cancellation request for a charge.
     *
     * @maps data
     */
    public function setData(?Cancel $data): void
    {
        $this->data = $data;
    }

    /**
     * Converts the CancelWebhookCallback object to a human-readable string representation.
     *
     * @return string The string representation of the CancelWebhookCallback object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CancelWebhookCallback',
            [
                'event' => $this->event,
                'id' => $this->id,
                'createdOn' => $this->createdOn,
                'data' => $this->data,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = ['event', 'id', 'created_on', 'data'];

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
        if (isset($this->event)) {
            $json['event']  = CancelEvent::checkValue($this->event);
        }
        $json['id']         = $this->id;
        $json['created_on'] = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        if (isset($this->data)) {
            $json['data']   = $this->data;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
