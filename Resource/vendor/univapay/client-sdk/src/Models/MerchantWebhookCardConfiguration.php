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
 * Card payment settings.
 */
class MerchantWebhookCardConfiguration implements \JsonSerializable
{
    /**
     * @var array
     */
    private $enabled = [];

    /**
     * @var array
     */
    private $debitEnabled = [];

    /**
     * @var array
     */
    private $prepaidEnabled = [];

    /**
     * @var array
     */
    private $debitAuthorizationEnabled = [];

    /**
     * @var array
     */
    private $prepaidAuthorizationEnabled = [];

    /**
     * @var array
     */
    private $forbiddenCardBrands = [];

    /**
     * @var array
     */
    private $allowedCountriesByIp = [];

    /**
     * @var array
     */
    private $foreignCardsAllowed = [];

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
     * @var array
     */
    private $onlyDirectCurrency = [];

    /**
     * @var array
     */
    private $threeDsRequired = [];

    /**
     * @var array
     */
    private $threeDsAddressRequired = [];

    /**
     * @var array
     */
    private $threeDsSkipEnabled = [];

    /**
     * @var array
     */
    private $allowDirectTokenCreation = [];

    /**
     * @var array
     */
    private $threeDsPhoneNumberRequired = [];

    /**
     * Returns Enabled.
     * Enables card payments.
     */
    public function getEnabled(): ?bool
    {
        if (count($this->enabled) == 0) {
            return null;
        }
        return $this->enabled['value'];
    }

    /**
     * Sets Enabled.
     * Enables card payments.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled['value'] = $enabled;
    }

    /**
     * Unsets Enabled.
     * Enables card payments.
     */
    public function unsetEnabled(): void
    {
        $this->enabled = [];
    }

    /**
     * Returns Debit Enabled.
     * Allows debit cards for payment flows.
     */
    public function getDebitEnabled(): ?bool
    {
        if (count($this->debitEnabled) == 0) {
            return null;
        }
        return $this->debitEnabled['value'];
    }

    /**
     * Sets Debit Enabled.
     * Allows debit cards for payment flows.
     *
     * @maps debit_enabled
     */
    public function setDebitEnabled(?bool $debitEnabled): void
    {
        $this->debitEnabled['value'] = $debitEnabled;
    }

    /**
     * Unsets Debit Enabled.
     * Allows debit cards for payment flows.
     */
    public function unsetDebitEnabled(): void
    {
        $this->debitEnabled = [];
    }

    /**
     * Returns Prepaid Enabled.
     * Allows prepaid cards for payment flows.
     */
    public function getPrepaidEnabled(): ?bool
    {
        if (count($this->prepaidEnabled) == 0) {
            return null;
        }
        return $this->prepaidEnabled['value'];
    }

    /**
     * Sets Prepaid Enabled.
     * Allows prepaid cards for payment flows.
     *
     * @maps prepaid_enabled
     */
    public function setPrepaidEnabled(?bool $prepaidEnabled): void
    {
        $this->prepaidEnabled['value'] = $prepaidEnabled;
    }

    /**
     * Unsets Prepaid Enabled.
     * Allows prepaid cards for payment flows.
     */
    public function unsetPrepaidEnabled(): void
    {
        $this->prepaidEnabled = [];
    }

    /**
     * Returns Debit Authorization Enabled.
     * Allows authorization-only flows for debit cards.
     */
    public function getDebitAuthorizationEnabled(): ?bool
    {
        if (count($this->debitAuthorizationEnabled) == 0) {
            return null;
        }
        return $this->debitAuthorizationEnabled['value'];
    }

    /**
     * Sets Debit Authorization Enabled.
     * Allows authorization-only flows for debit cards.
     *
     * @maps debit_authorization_enabled
     */
    public function setDebitAuthorizationEnabled(?bool $debitAuthorizationEnabled): void
    {
        $this->debitAuthorizationEnabled['value'] = $debitAuthorizationEnabled;
    }

    /**
     * Unsets Debit Authorization Enabled.
     * Allows authorization-only flows for debit cards.
     */
    public function unsetDebitAuthorizationEnabled(): void
    {
        $this->debitAuthorizationEnabled = [];
    }

    /**
     * Returns Prepaid Authorization Enabled.
     * Allows authorization-only flows for prepaid cards.
     */
    public function getPrepaidAuthorizationEnabled(): ?bool
    {
        if (count($this->prepaidAuthorizationEnabled) == 0) {
            return null;
        }
        return $this->prepaidAuthorizationEnabled['value'];
    }

    /**
     * Sets Prepaid Authorization Enabled.
     * Allows authorization-only flows for prepaid cards.
     *
     * @maps prepaid_authorization_enabled
     */
    public function setPrepaidAuthorizationEnabled(?bool $prepaidAuthorizationEnabled): void
    {
        $this->prepaidAuthorizationEnabled['value'] = $prepaidAuthorizationEnabled;
    }

    /**
     * Unsets Prepaid Authorization Enabled.
     * Allows authorization-only flows for prepaid cards.
     */
    public function unsetPrepaidAuthorizationEnabled(): void
    {
        $this->prepaidAuthorizationEnabled = [];
    }

    /**
     * Returns Forbidden Card Brands.
     * Card brands rejected by merchant policy.
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
     * Card brands rejected by merchant policy.
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
     * Card brands rejected by merchant policy.
     */
    public function unsetForbiddenCardBrands(): void
    {
        $this->forbiddenCardBrands = [];
    }

    /**
     * Returns Allowed Countries by Ip.
     * Source IP country codes allowed for card payments.
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
     * Source IP country codes allowed for card payments.
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
     * Source IP country codes allowed for card payments.
     */
    public function unsetAllowedCountriesByIp(): void
    {
        $this->allowedCountriesByIp = [];
    }

    /**
     * Returns Foreign Cards Allowed.
     * Allows cards issued outside the primary operating country.
     */
    public function getForeignCardsAllowed(): ?bool
    {
        if (count($this->foreignCardsAllowed) == 0) {
            return null;
        }
        return $this->foreignCardsAllowed['value'];
    }

    /**
     * Sets Foreign Cards Allowed.
     * Allows cards issued outside the primary operating country.
     *
     * @maps foreign_cards_allowed
     */
    public function setForeignCardsAllowed(?bool $foreignCardsAllowed): void
    {
        $this->foreignCardsAllowed['value'] = $foreignCardsAllowed;
    }

    /**
     * Unsets Foreign Cards Allowed.
     * Allows cards issued outside the primary operating country.
     */
    public function unsetForeignCardsAllowed(): void
    {
        $this->foreignCardsAllowed = [];
    }

    /**
     * Returns Fail on New Email.
     * Rejects card charges from previously unseen customer email addresses.
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
     * Rejects card charges from previously unseen customer email addresses.
     *
     * @maps fail_on_new_email
     */
    public function setFailOnNewEmail(?bool $failOnNewEmail): void
    {
        $this->failOnNewEmail['value'] = $failOnNewEmail;
    }

    /**
     * Unsets Fail on New Email.
     * Rejects card charges from previously unseen customer email addresses.
     */
    public function unsetFailOnNewEmail(): void
    {
        $this->failOnNewEmail = [];
    }

    /**
     * Returns Card Limit.
     * Maximum number of cards allowed per customer context.
     */
    public function getCardLimit(): ?int
    {
        if (count($this->cardLimit) == 0) {
            return null;
        }
        return $this->cardLimit['value'];
    }

    /**
     * Sets Card Limit.
     * Maximum number of cards allowed per customer context.
     *
     * @maps card_limit
     */
    public function setCardLimit(?int $cardLimit): void
    {
        $this->cardLimit['value'] = $cardLimit;
    }

    /**
     * Unsets Card Limit.
     * Maximum number of cards allowed per customer context.
     */
    public function unsetCardLimit(): void
    {
        $this->cardLimit = [];
    }

    /**
     * Returns Allow Empty Cvv.
     * Allows card flows without providing a CVV.
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
     * Allows card flows without providing a CVV.
     *
     * @maps allow_empty_cvv
     */
    public function setAllowEmptyCvv(?bool $allowEmptyCvv): void
    {
        $this->allowEmptyCvv['value'] = $allowEmptyCvv;
    }

    /**
     * Unsets Allow Empty Cvv.
     * Allows card flows without providing a CVV.
     */
    public function unsetAllowEmptyCvv(): void
    {
        $this->allowEmptyCvv = [];
    }

    /**
     * Returns Only Direct Currency.
     * Limits card processing to direct-settlement currencies only.
     */
    public function getOnlyDirectCurrency(): ?bool
    {
        if (count($this->onlyDirectCurrency) == 0) {
            return null;
        }
        return $this->onlyDirectCurrency['value'];
    }

    /**
     * Sets Only Direct Currency.
     * Limits card processing to direct-settlement currencies only.
     *
     * @maps only_direct_currency
     */
    public function setOnlyDirectCurrency(?bool $onlyDirectCurrency): void
    {
        $this->onlyDirectCurrency['value'] = $onlyDirectCurrency;
    }

    /**
     * Unsets Only Direct Currency.
     * Limits card processing to direct-settlement currencies only.
     */
    public function unsetOnlyDirectCurrency(): void
    {
        $this->onlyDirectCurrency = [];
    }

    /**
     * Returns Three Ds Required.
     * Requires 3-D Secure for eligible card flows.
     */
    public function getThreeDsRequired(): ?bool
    {
        if (count($this->threeDsRequired) == 0) {
            return null;
        }
        return $this->threeDsRequired['value'];
    }

    /**
     * Sets Three Ds Required.
     * Requires 3-D Secure for eligible card flows.
     *
     * @maps three_ds_required
     */
    public function setThreeDsRequired(?bool $threeDsRequired): void
    {
        $this->threeDsRequired['value'] = $threeDsRequired;
    }

    /**
     * Unsets Three Ds Required.
     * Requires 3-D Secure for eligible card flows.
     */
    public function unsetThreeDsRequired(): void
    {
        $this->threeDsRequired = [];
    }

    /**
     * Returns Three Ds Address Required.
     * Requires billing address data when running 3-D Secure.
     */
    public function getThreeDsAddressRequired(): ?bool
    {
        if (count($this->threeDsAddressRequired) == 0) {
            return null;
        }
        return $this->threeDsAddressRequired['value'];
    }

    /**
     * Sets Three Ds Address Required.
     * Requires billing address data when running 3-D Secure.
     *
     * @maps three_ds_address_required
     */
    public function setThreeDsAddressRequired(?bool $threeDsAddressRequired): void
    {
        $this->threeDsAddressRequired['value'] = $threeDsAddressRequired;
    }

    /**
     * Unsets Three Ds Address Required.
     * Requires billing address data when running 3-D Secure.
     */
    public function unsetThreeDsAddressRequired(): void
    {
        $this->threeDsAddressRequired = [];
    }

    /**
     * Returns Three Ds Skip Enabled.
     * Allows privileged callers to request 3-D Secure skip mode.
     */
    public function getThreeDsSkipEnabled(): ?bool
    {
        if (count($this->threeDsSkipEnabled) == 0) {
            return null;
        }
        return $this->threeDsSkipEnabled['value'];
    }

    /**
     * Sets Three Ds Skip Enabled.
     * Allows privileged callers to request 3-D Secure skip mode.
     *
     * @maps three_ds_skip_enabled
     */
    public function setThreeDsSkipEnabled(?bool $threeDsSkipEnabled): void
    {
        $this->threeDsSkipEnabled['value'] = $threeDsSkipEnabled;
    }

    /**
     * Unsets Three Ds Skip Enabled.
     * Allows privileged callers to request 3-D Secure skip mode.
     */
    public function unsetThreeDsSkipEnabled(): void
    {
        $this->threeDsSkipEnabled = [];
    }

    /**
     * Returns Allow Direct Token Creation.
     * Allows direct card token creation without hosted capture flows.
     */
    public function getAllowDirectTokenCreation(): ?bool
    {
        if (count($this->allowDirectTokenCreation) == 0) {
            return null;
        }
        return $this->allowDirectTokenCreation['value'];
    }

    /**
     * Sets Allow Direct Token Creation.
     * Allows direct card token creation without hosted capture flows.
     *
     * @maps allow_direct_token_creation
     */
    public function setAllowDirectTokenCreation(?bool $allowDirectTokenCreation): void
    {
        $this->allowDirectTokenCreation['value'] = $allowDirectTokenCreation;
    }

    /**
     * Unsets Allow Direct Token Creation.
     * Allows direct card token creation without hosted capture flows.
     */
    public function unsetAllowDirectTokenCreation(): void
    {
        $this->allowDirectTokenCreation = [];
    }

    /**
     * Returns Three Ds Phone Number Required.
     * Requires a phone number when running 3-D Secure.
     */
    public function getThreeDsPhoneNumberRequired(): ?bool
    {
        if (count($this->threeDsPhoneNumberRequired) == 0) {
            return null;
        }
        return $this->threeDsPhoneNumberRequired['value'];
    }

    /**
     * Sets Three Ds Phone Number Required.
     * Requires a phone number when running 3-D Secure.
     *
     * @maps three_ds_phone_number_required
     */
    public function setThreeDsPhoneNumberRequired(?bool $threeDsPhoneNumberRequired): void
    {
        $this->threeDsPhoneNumberRequired['value'] = $threeDsPhoneNumberRequired;
    }

    /**
     * Unsets Three Ds Phone Number Required.
     * Requires a phone number when running 3-D Secure.
     */
    public function unsetThreeDsPhoneNumberRequired(): void
    {
        $this->threeDsPhoneNumberRequired = [];
    }

    /**
     * Converts the MerchantWebhookCardConfiguration object to a human-readable string representation.
     *
     * @return string The string representation of the MerchantWebhookCardConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookCardConfiguration',
            [
                'enabled' => $this->getEnabled(),
                'debitEnabled' => $this->getDebitEnabled(),
                'prepaidEnabled' => $this->getPrepaidEnabled(),
                'debitAuthorizationEnabled' => $this->getDebitAuthorizationEnabled(),
                'prepaidAuthorizationEnabled' => $this->getPrepaidAuthorizationEnabled(),
                'forbiddenCardBrands' => $this->getForbiddenCardBrands(),
                'allowedCountriesByIp' => $this->getAllowedCountriesByIp(),
                'foreignCardsAllowed' => $this->getForeignCardsAllowed(),
                'failOnNewEmail' => $this->getFailOnNewEmail(),
                'cardLimit' => $this->getCardLimit(),
                'allowEmptyCvv' => $this->getAllowEmptyCvv(),
                'onlyDirectCurrency' => $this->getOnlyDirectCurrency(),
                'threeDsRequired' => $this->getThreeDsRequired(),
                'threeDsAddressRequired' => $this->getThreeDsAddressRequired(),
                'threeDsSkipEnabled' => $this->getThreeDsSkipEnabled(),
                'allowDirectTokenCreation' => $this->getAllowDirectTokenCreation(),
                'threeDsPhoneNumberRequired' => $this->getThreeDsPhoneNumberRequired(),
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
        'forbidden_card_brands',
        'allowed_countries_by_ip',
        'foreign_cards_allowed',
        'fail_on_new_email',
        'card_limit',
        'allow_empty_cvv',
        'only_direct_currency',
        'three_ds_required',
        'three_ds_address_required',
        'three_ds_skip_enabled',
        'allow_direct_token_creation',
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
        if (!empty($this->enabled)) {
            $json['enabled']                        = $this->enabled['value'];
        }
        if (!empty($this->debitEnabled)) {
            $json['debit_enabled']                  = $this->debitEnabled['value'];
        }
        if (!empty($this->prepaidEnabled)) {
            $json['prepaid_enabled']                = $this->prepaidEnabled['value'];
        }
        if (!empty($this->debitAuthorizationEnabled)) {
            $json['debit_authorization_enabled']    = $this->debitAuthorizationEnabled['value'];
        }
        if (!empty($this->prepaidAuthorizationEnabled)) {
            $json['prepaid_authorization_enabled']  = $this->prepaidAuthorizationEnabled['value'];
        }
        if (!empty($this->forbiddenCardBrands)) {
            $json['forbidden_card_brands']          = $this->forbiddenCardBrands['value'];
        }
        if (!empty($this->allowedCountriesByIp)) {
            $json['allowed_countries_by_ip']        = $this->allowedCountriesByIp['value'];
        }
        if (!empty($this->foreignCardsAllowed)) {
            $json['foreign_cards_allowed']          = $this->foreignCardsAllowed['value'];
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
        if (!empty($this->onlyDirectCurrency)) {
            $json['only_direct_currency']           = $this->onlyDirectCurrency['value'];
        }
        if (!empty($this->threeDsRequired)) {
            $json['three_ds_required']              = $this->threeDsRequired['value'];
        }
        if (!empty($this->threeDsAddressRequired)) {
            $json['three_ds_address_required']      = $this->threeDsAddressRequired['value'];
        }
        if (!empty($this->threeDsSkipEnabled)) {
            $json['three_ds_skip_enabled']          = $this->threeDsSkipEnabled['value'];
        }
        if (!empty($this->allowDirectTokenCreation)) {
            $json['allow_direct_token_creation']    = $this->allowDirectTokenCreation['value'];
        }
        if (!empty($this->threeDsPhoneNumberRequired)) {
            $json['three_ds_phone_number_required'] = $this->threeDsPhoneNumberRequired['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
