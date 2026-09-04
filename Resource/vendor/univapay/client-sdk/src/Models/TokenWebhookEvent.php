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
 * Webhook envelope for transaction token lifecycle events. Fired as `token_created` when a token is
 * created, `token_updated` on metadata changes, `token_three_d_s_updated` on 3-D Secure data changes,
 * `token_cvv_auth_updated` on CVV authorization changes, `token_cvv_auth_check_updated` on CVV auth
 * check changes, `token_replaced` when a token is replaced by a new one (e.g., after a card update),
 * and `recurring_token_deleted` when a recurring token is deleted. The `data` field contains the full
 * TransactionToken object at the time of the event.
 */
class TokenWebhookEvent implements \JsonSerializable
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
     * @var CardTransactionToken|KonbiniTransactionToken|OnlineTransactionToken|BankTransferTransactionToken|PaidyTransactionToken|QrScanTransactionToken|QrMerchantTransactionToken|null
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
     * Event type discriminator — `token_created`, `token_updated`, `token_three_d_s_updated`,
     * `token_cvv_auth_updated`, `token_cvv_auth_check_updated`, `token_replaced`, or
     * `recurring_token_deleted`.
     */
    public function getEvent(): string
    {
        return $this->event;
    }

    /**
     * Sets Event.
     * Event type discriminator — `token_created`, `token_updated`, `token_three_d_s_updated`,
     * `token_cvv_auth_updated`, `token_cvv_auth_check_updated`, `token_replaced`, or
     * `recurring_token_deleted`.
     *
     * @required
     * @maps event
     * @factory \UnivaPay\Models\TokenEvent::checkValue
     */
    public function setEvent(string $event): void
    {
        $this->event = $event;
    }

    /**
     * Returns Data.
     * Stored transaction token resource. `payment_type` discriminates which variant applies — and
     * therefore the concrete shape of `data` — per the mapping above.
     *
     * @return CardTransactionToken|KonbiniTransactionToken|OnlineTransactionToken|BankTransferTransactionToken|PaidyTransactionToken|QrScanTransactionToken|QrMerchantTransactionToken|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets Data.
     * Stored transaction token resource. `payment_type` discriminates which variant applies — and
     * therefore the concrete shape of `data` — per the mapping above.
     *
     * @maps data
     * @mapsBy anyOf(oneOf{paymentType2}(CardTransactionToken{card2},KonbiniTransactionToken{konbini2},OnlineTransactionToken{online2},BankTransferTransactionToken{bankTransfer2},PaidyTransactionToken{paidy2},QrScanTransactionToken{qrScan2},QrMerchantTransactionToken{qrMerchant2}),null)
     *
     * @param CardTransactionToken|KonbiniTransactionToken|OnlineTransactionToken|BankTransferTransactionToken|PaidyTransactionToken|QrScanTransactionToken|QrMerchantTransactionToken|null $data
     */
    public function setData($data): void
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
     * Converts the TokenWebhookEvent object to a human-readable string representation.
     *
     * @return string The string representation of the TokenWebhookEvent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TokenWebhookEvent',
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
        $json['event']      = TokenEvent::checkValue($this->event);
        if (isset($this->data)) {
            $json['data']   =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->data,
                    'anyOf(oneOf{paymentType2}(CardTransactionToken{card2},KonbiniTransactionToken{ko' .
                    'nbini2},OnlineTransactionToken{online2},BankTransferTransactionToken{bankTransfe' .
                    'r2},PaidyTransactionToken{paidy2},QrScanTransactionToken{qrScan2},QrMerchantTran' .
                    'sactionToken{qrMerchant2}),null)'
                );
        }
        $json['created_on'] = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
