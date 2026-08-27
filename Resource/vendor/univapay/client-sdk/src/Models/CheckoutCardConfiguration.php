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

/**
 * Card payment settings applied to checkout.
 */
class CheckoutCardConfiguration implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var bool|null
     */
    private $debitEnabled;

    /**
     * @var bool|null
     */
    private $prepaidEnabled;

    /**
     * @var bool|null
     */
    private $debitAuthorizationEnabled;

    /**
     * @var bool|null
     */
    private $prepaidAuthorizationEnabled;

    /**
     * @var bool|null
     */
    private $onlyDirectCurrency;

    /**
     * @var array
     */
    private $forbiddenCardBrands = [];

    /**
     * @var array
     */
    private $allowedCountriesByIp = [];

    /**
     * @var bool|null
     */
    private $foreignCardsAllowed;

    /**
     * @var array
     */
    private $failOnNewEmail = [];

    /**
     * @var array
     */
    private $cardLimit = [];

    /**
     * @var array
     */
    private $allowEmptyCvv = [];

    /**
     * @var bool|null
     */
    private $allowDirectTokenCreation;

    /**
     * @var bool|null
     */
    private $threeDsRequired;

    /**
     * @var bool|null
     */
    private $threeDsAddressRequired;

    /**
     * @var bool|null
     */
    private $threeDsSkipEnabled;

    /**
     * @var bool|null
     */
    private $threeDsPhoneNumberRequired;

    /**
     * Returns Enabled.
     * Whether card payments are enabled.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Whether card payments are enabled.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Debit Enabled.
     * Whether debit cards are allowed.
     */
    public function getDebitEnabled(): ?bool
    {
        return $this->debitEnabled;
    }

    /**
     * Sets Debit Enabled.
     * Whether debit cards are allowed.
     *
     * @maps debit_enabled
     */
    public function setDebitEnabled(?bool $debitEnabled): void
    {
        $this->debitEnabled = $debitEnabled;
    }

    /**
     * Returns Prepaid Enabled.
     * Whether prepaid cards are allowed.
     */
    public function getPrepaidEnabled(): ?bool
    {
        return $this->prepaidEnabled;
    }

    /**
     * Sets Prepaid Enabled.
     * Whether prepaid cards are allowed.
     *
     * @maps prepaid_enabled
     */
    public function setPrepaidEnabled(?bool $prepaidEnabled): void
    {
        $this->prepaidEnabled = $prepaidEnabled;
    }

    /**
     * Returns Debit Authorization Enabled.
     * Whether authorization-only flows are allowed for debit cards.
     */
    public function getDebitAuthorizationEnabled(): ?bool
    {
        return $this->debitAuthorizationEnabled;
    }

    /**
     * Sets Debit Authorization Enabled.
     * Whether authorization-only flows are allowed for debit cards.
     *
     * @maps debit_authorization_enabled
     */
    public function setDebitAuthorizationEnabled(?bool $debitAuthorizationEnabled): void
    {
        $this->debitAuthorizationEnabled = $debitAuthorizationEnabled;
    }

    /**
     * Returns Prepaid Authorization Enabled.
     * Whether authorization-only flows are allowed for prepaid cards.
     */
    public function getPrepaidAuthorizationEnabled(): ?bool
    {
        return $this->prepaidAuthorizationEnabled;
    }

    /**
     * Sets Prepaid Authorization Enabled.
     * Whether authorization-only flows are allowed for prepaid cards.
     *
     * @maps prepaid_authorization_enabled
     */
    public function setPrepaidAuthorizationEnabled(?bool $prepaidAuthorizationEnabled): void
    {
        $this->prepaidAuthorizationEnabled = $prepaidAuthorizationEnabled;
    }

    /**
     * Returns Only Direct Currency.
     * Whether card processing is restricted to direct-settlement currencies.
     */
    public function getOnlyDirectCurrency(): ?bool
    {
        return $this->onlyDirectCurrency;
    }

    /**
     * Sets Only Direct Currency.
     * Whether card processing is restricted to direct-settlement currencies.
     *
     * @maps only_direct_currency
     */
    public function setOnlyDirectCurrency(?bool $onlyDirectCurrency): void
    {
        $this->onlyDirectCurrency = $onlyDirectCurrency;
    }

    /**
     * Returns Forbidden Card Brands.
     * Card brands rejected by merchant policy. Common values include `visa`, `mastercard`,
     * `american_express`, `maestro`, `discover`, `jcb`, `diners_club`, `private_label`, and `unionpay`;
     * gateway-specific brands the platform cannot map appear as `unmapped_<raw value>`. `null` when no
     * brand is forbidden.
     *
     * @return string[]|null
     */
    public function getForbiddenCardBrands(): ?array
    {
        if (count($this->forbiddenCardBrands) == 0) {
            return null;
        }
        return $this->forbiddenCardBrands['value'];
    }

    /**
     * Sets Forbidden Card Brands.
     * Card brands rejected by merchant policy. Common values include `visa`, `mastercard`,
     * `american_express`, `maestro`, `discover`, `jcb`, `diners_club`, `private_label`, and `unionpay`;
     * gateway-specific brands the platform cannot map appear as `unmapped_<raw value>`. `null` when no
     * brand is forbidden.
     *
     * @maps forbidden_card_brands
     *
     * @param string[]|null $forbiddenCardBrands
     */
    public function setForbiddenCardBrands(?array $forbiddenCardBrands): void
    {
        $this->forbiddenCardBrands['value'] = $forbiddenCardBrands;
    }

    /**
     * Unsets Forbidden Card Brands.
     * Card brands rejected by merchant policy. Common values include `visa`, `mastercard`,
     * `american_express`, `maestro`, `discover`, `jcb`, `diners_club`, `private_label`, and `unionpay`;
     * gateway-specific brands the platform cannot map appear as `unmapped_<raw value>`. `null` when no
     * brand is forbidden.
     */
    public function unsetForbiddenCardBrands(): void
    {
        $this->forbiddenCardBrands = [];
    }

    /**
     * Returns Allowed Countries by Ip.
     * ISO 3166-1 alpha-2 country codes allowed to originate card payments by IP geolocation. `null` when
     * unrestricted.
     *
     * @return string[]|null
     */
    public function getAllowedCountriesByIp(): ?array
    {
        if (count($this->allowedCountriesByIp) == 0) {
            return null;
        }
        return $this->allowedCountriesByIp['value'];
    }

    /**
     * Sets Allowed Countries by Ip.
     * ISO 3166-1 alpha-2 country codes allowed to originate card payments by IP geolocation. `null` when
     * unrestricted.
     *
     * @maps allowed_countries_by_ip
     *
     * @param string[]|null $allowedCountriesByIp
     */
    public function setAllowedCountriesByIp(?array $allowedCountriesByIp): void
    {
        $this->allowedCountriesByIp['value'] = $allowedCountriesByIp;
    }

    /**
     * Unsets Allowed Countries by Ip.
     * ISO 3166-1 alpha-2 country codes allowed to originate card payments by IP geolocation. `null` when
     * unrestricted.
     */
    public function unsetAllowedCountriesByIp(): void
    {
        $this->allowedCountriesByIp = [];
    }

    /**
     * Returns Foreign Cards Allowed.
     * Whether cards issued outside the primary operating country are allowed.
     */
    public function getForeignCardsAllowed(): ?bool
    {
        return $this->foreignCardsAllowed;
    }

    /**
     * Sets Foreign Cards Allowed.
     * Whether cards issued outside the primary operating country are allowed.
     *
     * @maps foreign_cards_allowed
     */
    public function setForeignCardsAllowed(?bool $foreignCardsAllowed): void
    {
        $this->foreignCardsAllowed = $foreignCardsAllowed;
    }

    /**
     * Returns Fail on New Email.
     * Whether to reject card charges from previously unseen customer email addresses. `null` when not
     * configured.
     */
    public function getFailOnNewEmail(): ?bool
    {
        if (count($this->failOnNewEmail) == 0) {
            return null;
        }
        return $this->failOnNewEmail['value'];
    }

    /**
     * Sets Fail on New Email.
     * Whether to reject card charges from previously unseen customer email addresses. `null` when not
     * configured.
     *
     * @maps fail_on_new_email
     */
    public function setFailOnNewEmail(?bool $failOnNewEmail): void
    {
        $this->failOnNewEmail['value'] = $failOnNewEmail;
    }

    /**
     * Unsets Fail on New Email.
     * Whether to reject card charges from previously unseen customer email addresses. `null` when not
     * configured.
     */
    public function unsetFailOnNewEmail(): void
    {
        $this->failOnNewEmail = [];
    }

    /**
     * Returns Card Limit.
     * Per-card spending limit. `null` when no limit is configured.
     */
    public function getCardLimit(): ?CardLimit
    {
        if (count($this->cardLimit) == 0) {
            return null;
        }
        return $this->cardLimit['value'];
    }

    /**
     * Sets Card Limit.
     * Per-card spending limit. `null` when no limit is configured.
     *
     * @maps card_limit
     */
    public function setCardLimit(?CardLimit $cardLimit): void
    {
        $this->cardLimit['value'] = $cardLimit;
    }

    /**
     * Unsets Card Limit.
     * Per-card spending limit. `null` when no limit is configured.
     */
    public function unsetCardLimit(): void
    {
        $this->cardLimit = [];
    }

    /**
     * Returns Allow Empty Cvv.
     * Whether card flows may proceed without a CVV. `null` when not configured.
     */
    public function getAllowEmptyCvv(): ?bool
    {
        if (count($this->allowEmptyCvv) == 0) {
            return null;
        }
        return $this->allowEmptyCvv['value'];
    }

    /**
     * Sets Allow Empty Cvv.
     * Whether card flows may proceed without a CVV. `null` when not configured.
     *
     * @maps allow_empty_cvv
     */
    public function setAllowEmptyCvv(?bool $allowEmptyCvv): void
    {
        $this->allowEmptyCvv['value'] = $allowEmptyCvv;
    }

    /**
     * Unsets Allow Empty Cvv.
     * Whether card flows may proceed without a CVV. `null` when not configured.
     */
    public function unsetAllowEmptyCvv(): void
    {
        $this->allowEmptyCvv = [];
    }

    /**
     * Returns Allow Direct Token Creation.
     * Whether direct card token creation is allowed without a hosted capture flow.
     */
    public function getAllowDirectTokenCreation(): ?bool
    {
        return $this->allowDirectTokenCreation;
    }

    /**
     * Sets Allow Direct Token Creation.
     * Whether direct card token creation is allowed without a hosted capture flow.
     *
     * @maps allow_direct_token_creation
     */
    public function setAllowDirectTokenCreation(?bool $allowDirectTokenCreation): void
    {
        $this->allowDirectTokenCreation = $allowDirectTokenCreation;
    }

    /**
     * Returns Three Ds Required.
     * Whether 3-D Secure is required for eligible card flows.
     */
    public function getThreeDsRequired(): ?bool
    {
        return $this->threeDsRequired;
    }

    /**
     * Sets Three Ds Required.
     * Whether 3-D Secure is required for eligible card flows.
     *
     * @maps three_ds_required
     */
    public function setThreeDsRequired(?bool $threeDsRequired): void
    {
        $this->threeDsRequired = $threeDsRequired;
    }

    /**
     * Returns Three Ds Address Required.
     * Whether billing address data is required when running 3-D Secure.
     */
    public function getThreeDsAddressRequired(): ?bool
    {
        return $this->threeDsAddressRequired;
    }

    /**
     * Sets Three Ds Address Required.
     * Whether billing address data is required when running 3-D Secure.
     *
     * @maps three_ds_address_required
     */
    public function setThreeDsAddressRequired(?bool $threeDsAddressRequired): void
    {
        $this->threeDsAddressRequired = $threeDsAddressRequired;
    }

    /**
     * Returns Three Ds Skip Enabled.
     * Whether privileged callers may request a 3-D Secure skip.
     */
    public function getThreeDsSkipEnabled(): ?bool
    {
        return $this->threeDsSkipEnabled;
    }

    /**
     * Sets Three Ds Skip Enabled.
     * Whether privileged callers may request a 3-D Secure skip.
     *
     * @maps three_ds_skip_enabled
     */
    public function setThreeDsSkipEnabled(?bool $threeDsSkipEnabled): void
    {
        $this->threeDsSkipEnabled = $threeDsSkipEnabled;
    }

    /**
     * Returns Three Ds Phone Number Required.
     * Whether a phone number is required when running 3-D Secure.
     */
    public function getThreeDsPhoneNumberRequired(): ?bool
    {
        return $this->threeDsPhoneNumberRequired;
    }

    /**
     * Sets Three Ds Phone Number Required.
     * Whether a phone number is required when running 3-D Secure.
     *
     * @maps three_ds_phone_number_required
     */
    public function setThreeDsPhoneNumberRequired(?bool $threeDsPhoneNumberRequired): void
    {
        $this->threeDsPhoneNumberRequired = $threeDsPhoneNumberRequired;
    }

    /**
     * Converts the CheckoutCardConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutCardConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutCardConfiguration',
            [
                'enabled' => $this->enabled,
                'debitEnabled' => $this->debitEnabled,
                'prepaidEnabled' => $this->prepaidEnabled,
                'debitAuthorizationEnabled' => $this->debitAuthorizationEnabled,
                'prepaidAuthorizationEnabled' => $this->prepaidAuthorizationEnabled,
                'onlyDirectCurrency' => $this->onlyDirectCurrency,
                'forbiddenCardBrands' => $this->getForbiddenCardBrands(),
                'allowedCountriesByIp' => $this->getAllowedCountriesByIp(),
                'foreignCardsAllowed' => $this->foreignCardsAllowed,
                'failOnNewEmail' => $this->getFailOnNewEmail(),
                'cardLimit' => $this->getCardLimit(),
                'allowEmptyCvv' => $this->getAllowEmptyCvv(),
                'allowDirectTokenCreation' => $this->allowDirectTokenCreation,
                'threeDsRequired' => $this->threeDsRequired,
                'threeDsAddressRequired' => $this->threeDsAddressRequired,
                'threeDsSkipEnabled' => $this->threeDsSkipEnabled,
                'threeDsPhoneNumberRequired' => $this->threeDsPhoneNumberRequired,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'enabled',
        'debit_enabled',
        'prepaid_enabled',
        'debit_authorization_enabled',
        'prepaid_authorization_enabled',
        'only_direct_currency',
        'forbidden_card_brands',
        'allowed_countries_by_ip',
        'foreign_cards_allowed',
        'fail_on_new_email',
        'card_limit',
        'allow_empty_cvv',
        'allow_direct_token_creation',
        'three_ds_required',
        'three_ds_address_required',
        'three_ds_skip_enabled',
        'three_ds_phone_number_required'
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
        if (isset($this->enabled)) {
            $json['enabled']                        = $this->enabled;
        }
        if (isset($this->debitEnabled)) {
            $json['debit_enabled']                  = $this->debitEnabled;
        }
        if (isset($this->prepaidEnabled)) {
            $json['prepaid_enabled']                = $this->prepaidEnabled;
        }
        if (isset($this->debitAuthorizationEnabled)) {
            $json['debit_authorization_enabled']    = $this->debitAuthorizationEnabled;
        }
        if (isset($this->prepaidAuthorizationEnabled)) {
            $json['prepaid_authorization_enabled']  = $this->prepaidAuthorizationEnabled;
        }
        if (isset($this->onlyDirectCurrency)) {
            $json['only_direct_currency']           = $this->onlyDirectCurrency;
        }
        if (!empty($this->forbiddenCardBrands)) {
            $json['forbidden_card_brands']          = $this->forbiddenCardBrands['value'];
        }
        if (!empty($this->allowedCountriesByIp)) {
            $json['allowed_countries_by_ip']        = $this->allowedCountriesByIp['value'];
        }
        if (isset($this->foreignCardsAllowed)) {
            $json['foreign_cards_allowed']          = $this->foreignCardsAllowed;
        }
        if (!empty($this->failOnNewEmail)) {
            $json['fail_on_new_email']              = $this->failOnNewEmail['value'];
        }
        if (!empty($this->cardLimit)) {
            $json['card_limit']                     = $this->cardLimit['value'];
        }
        if (!empty($this->allowEmptyCvv)) {
            $json['allow_empty_cvv']                = $this->allowEmptyCvv['value'];
        }
        if (isset($this->allowDirectTokenCreation)) {
            $json['allow_direct_token_creation']    = $this->allowDirectTokenCreation;
        }
        if (isset($this->threeDsRequired)) {
            $json['three_ds_required']              = $this->threeDsRequired;
        }
        if (isset($this->threeDsAddressRequired)) {
            $json['three_ds_address_required']      = $this->threeDsAddressRequired;
        }
        if (isset($this->threeDsSkipEnabled)) {
            $json['three_ds_skip_enabled']          = $this->threeDsSkipEnabled;
        }
        if (isset($this->threeDsPhoneNumberRequired)) {
            $json['three_ds_phone_number_required'] = $this->threeDsPhoneNumberRequired;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
