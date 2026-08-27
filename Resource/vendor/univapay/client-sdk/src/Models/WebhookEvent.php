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
 * Represents a single delivery attempt of a webhook event, including the payload sent and the delivery
 * outcome.
 */
class WebhookEvent implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $webhookId;

    /**
     * @var string|null
     */
    private $event;

    /**
     * @var array|null
     */
    private $data;

    /**
     * @var bool|null
     */
    private $successful;

    /**
     * @var \DateTime|null
     */
    private $firedOn;

    /**
     * @var array
     */
    private $errorMessage = [];

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * Returns Id.
     * Unique identifier for the webhook event.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Unique identifier for the webhook event.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Webhook Id.
     * ID of the parent webhook.
     */
    public function getWebhookId(): ?string
    {
        return $this->webhookId;
    }

    /**
     * Sets Webhook Id.
     * ID of the parent webhook.
     *
     * @maps webhook_id
     */
    public function setWebhookId(?string $webhookId): void
    {
        $this->webhookId = $webhookId;
    }

    /**
     * Returns Event.
     * Event type that triggers a webhook notification.
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * Sets Event.
     * Event type that triggers a webhook notification.
     *
     * @maps event
     * @factory \UnivaPay\Models\WebhookTrigger::checkValue
     */
    public function setEvent(?string $event): void
    {
        $this->event = $event;
    }

    /**
     * Returns Data.
     * Domain object payload for webhook deliveries. The actual structure depends on the event type — see
     * each webhook callback schema for the specific payload shape.
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * Domain object payload for webhook deliveries. The actual structure depends on the event type — see
     * each webhook callback schema for the specific payload shape.
     *
     * @maps data
     */
    public function setData(?array $data): void
    {
        $this->data = $data;
    }

    /**
     * Returns Successful.
     * Whether the webhook delivery was acknowledged (HTTP 2xx).
     */
    public function getSuccessful(): ?bool
    {
        return $this->successful;
    }

    /**
     * Sets Successful.
     * Whether the webhook delivery was acknowledged (HTTP 2xx).
     *
     * @maps successful
     */
    public function setSuccessful(?bool $successful): void
    {
        $this->successful = $successful;
    }

    /**
     * Returns Fired On.
     * Timestamp when the webhook was dispatched.
     */
    public function getFiredOn(): ?\DateTime
    {
        return $this->firedOn;
    }

    /**
     * Sets Fired On.
     * Timestamp when the webhook was dispatched.
     *
     * @maps fired_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setFiredOn(?\DateTime $firedOn): void
    {
        $this->firedOn = $firedOn;
    }

    /**
     * Returns Error Message.
     * Error message if delivery failed.
     */
    public function getErrorMessage(): ?string
    {
        if (count($this->errorMessage) == 0) {
            return null;
        }
        return $this->errorMessage['value'];
    }

    /**
     * Sets Error Message.
     * Error message if delivery failed.
     *
     * @maps error_message
     */
    public function setErrorMessage(?string $errorMessage): void
    {
        $this->errorMessage['value'] = $errorMessage;
    }

    /**
     * Unsets Error Message.
     * Error message if delivery failed.
     */
    public function unsetErrorMessage(): void
    {
        $this->errorMessage = [];
    }

    /**
     * Returns Created On.
     * Timestamp when the event was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the event was created.
     *
     * @maps created_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Converts the WebhookEvent object to a human-readable string representation.
     *
     * @return string The string representation of the WebhookEvent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WebhookEvent',
            [
                'id' => $this->id,
                'webhookId' => $this->webhookId,
                'event' => $this->event,
                'data' => $this->data,
                'successful' => $this->successful,
                'firedOn' => $this->firedOn,
                'errorMessage' => $this->getErrorMessage(),
                'createdOn' => $this->createdOn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'webhook_id',
        'event',
        'data',
        'successful',
        'fired_on',
        'error_message',
        'created_on'
    ];

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
        if (isset($this->id)) {
            $json['id']            = $this->id;
        }
        if (isset($this->webhookId)) {
            $json['webhook_id']    = $this->webhookId;
        }
        if (isset($this->event)) {
            $json['event']         = WebhookTrigger::checkValue($this->event);
        }
        if (isset($this->data)) {
            $json['data']          = $this->data;
        }
        if (isset($this->successful)) {
            $json['successful']    = $this->successful;
        }
        if (isset($this->firedOn)) {
            $json['fired_on']      = DateTimeHelper::toRfc3339DateTime($this->firedOn);
        }
        if (!empty($this->errorMessage)) {
            $json['error_message'] = $this->errorMessage['value'];
        }
        if (isset($this->createdOn)) {
            $json['created_on']    = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
