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
 * Merchant resource returned by the backend `FullMerchantWithGroupRoles` formatter for merchant-
 * authenticated callers.
 */
class Merchant implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var array
     */
    private $verificationDataId = [];

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var array
     */
    private $notificationEmail = [];

    /**
     * @var array
     */
    private $financeNotificationEmail = [];

    /**
     * @var bool|null
     */
    private $verified;

    /**
     * @var MerchantWebhookConfiguration|null
     */
    private $configuration;

    /**
     * @var \DateTime|null
     */
    private $createdOn;

    /**
     * Returns Id.
     * Merchant identifier.
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Merchant identifier.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Verification Data Id.
     * Verification data identifier associated with the merchant.
     */
    public function getVerificationDataId(): ?string
    {
        if (count($this->verificationDataId) == 0) {
            return null;
        }
        return $this->verificationDataId['value'];
    }

    /**
     * Sets Verification Data Id.
     * Verification data identifier associated with the merchant.
     *
     * @maps verification_data_id
     */
    public function setVerificationDataId(?string $verificationDataId): void
    {
        $this->verificationDataId['value'] = $verificationDataId;
    }

    /**
     * Unsets Verification Data Id.
     * Verification data identifier associated with the merchant.
     */
    public function unsetVerificationDataId(): void
    {
        $this->verificationDataId = [];
    }

    /**
     * Returns Name.
     * Merchant display name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Merchant display name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Email.
     * Primary merchant email address.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * Primary merchant email address.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Notification Email.
     * Merchant notification email address.
     */
    public function getNotificationEmail(): ?string
    {
        if (count($this->notificationEmail) == 0) {
            return null;
        }
        return $this->notificationEmail['value'];
    }

    /**
     * Sets Notification Email.
     * Merchant notification email address.
     *
     * @maps notification_email
     */
    public function setNotificationEmail(?string $notificationEmail): void
    {
        $this->notificationEmail['value'] = $notificationEmail;
    }

    /**
     * Unsets Notification Email.
     * Merchant notification email address.
     */
    public function unsetNotificationEmail(): void
    {
        $this->notificationEmail = [];
    }

    /**
     * Returns Finance Notification Email.
     * Merchant finance notification email address.
     */
    public function getFinanceNotificationEmail(): ?string
    {
        if (count($this->financeNotificationEmail) == 0) {
            return null;
        }
        return $this->financeNotificationEmail['value'];
    }

    /**
     * Sets Finance Notification Email.
     * Merchant finance notification email address.
     *
     * @maps finance_notification_email
     */
    public function setFinanceNotificationEmail(?string $financeNotificationEmail): void
    {
        $this->financeNotificationEmail['value'] = $financeNotificationEmail;
    }

    /**
     * Unsets Finance Notification Email.
     * Merchant finance notification email address.
     */
    public function unsetFinanceNotificationEmail(): void
    {
        $this->financeNotificationEmail = [];
    }

    /**
     * Returns Verified.
     * Whether the merchant has completed verification.
     */
    public function getVerified(): ?bool
    {
        return $this->verified;
    }

    /**
     * Sets Verified.
     * Whether the merchant has completed verification.
     *
     * @maps verified
     */
    public function setVerified(?bool $verified): void
    {
        $this->verified = $verified;
    }

    /**
     * Returns Configuration.
     * Merchant configuration snapshot as serialized by the backend.
     */
    public function getConfiguration(): ?MerchantWebhookConfiguration
    {
        return $this->configuration;
    }

    /**
     * Sets Configuration.
     * Merchant configuration snapshot as serialized by the backend.
     *
     * @maps configuration
     */
    public function setConfiguration(?MerchantWebhookConfiguration $configuration): void
    {
        $this->configuration = $configuration;
    }

    /**
     * Returns Created On.
     * Timestamp when the merchant was created.
     */
    public function getCreatedOn(): ?\DateTime
    {
        return $this->createdOn;
    }

    /**
     * Sets Created On.
     * Timestamp when the merchant was created.
     *
     * @maps created_on
     * @factory \UnivaPay\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedOn(?\DateTime $createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * Converts the Merchant object to a human-readable string representation.
     *
     * @return string The string representation of the Merchant object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Merchant',
            [
                'id' => $this->id,
                'verificationDataId' => $this->getVerificationDataId(),
                'name' => $this->name,
                'email' => $this->email,
                'notificationEmail' => $this->getNotificationEmail(),
                'financeNotificationEmail' => $this->getFinanceNotificationEmail(),
                'verified' => $this->verified,
                'configuration' => $this->configuration,
                'createdOn' => $this->createdOn,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'id',
        'verification_data_id',
        'name',
        'email',
        'notification_email',
        'finance_notification_email',
        'verified',
        'configuration',
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
            $json['id']                         = $this->id;
        }
        if (!empty($this->verificationDataId)) {
            $json['verification_data_id']       = $this->verificationDataId['value'];
        }
        if (isset($this->name)) {
            $json['name']                       = $this->name;
        }
        if (isset($this->email)) {
            $json['email']                      = $this->email;
        }
        if (!empty($this->notificationEmail)) {
            $json['notification_email']         = $this->notificationEmail['value'];
        }
        if (!empty($this->financeNotificationEmail)) {
            $json['finance_notification_email'] = $this->financeNotificationEmail['value'];
        }
        if (isset($this->verified)) {
            $json['verified']                   = $this->verified;
        }
        if (isset($this->configuration)) {
            $json['configuration']              = $this->configuration;
        }
        if (isset($this->createdOn)) {
            $json['created_on']                 = DateTimeHelper::toRfc3339DateTime($this->createdOn);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
