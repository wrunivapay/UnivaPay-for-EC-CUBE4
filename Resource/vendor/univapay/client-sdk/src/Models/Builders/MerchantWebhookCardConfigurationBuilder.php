<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\MerchantWebhookCardConfiguration;

/**
 * Builder for model MerchantWebhookCardConfiguration
 *
 * @see MerchantWebhookCardConfiguration
 */
class MerchantWebhookCardConfigurationBuilder
{
    /**
     * @var MerchantWebhookCardConfiguration
     */
    private $instance;

    private function __construct(MerchantWebhookCardConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Merchant Webhook Card Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new MerchantWebhookCardConfiguration());
    }

    /**
     * Sets enabled field.
     *
     * @param bool|null $value
     */
    public function enabled(?bool $value): self
    {
        $this->instance->setEnabled($value);
        return $this;
    }

    /**
     * Unsets enabled field.
     */
    public function unsetEnabled(): self
    {
        $this->instance->unsetEnabled();
        return $this;
    }

    /**
     * Sets debit enabled field.
     *
     * @param bool|null $value
     */
    public function debitEnabled(?bool $value): self
    {
        $this->instance->setDebitEnabled($value);
        return $this;
    }

    /**
     * Unsets debit enabled field.
     */
    public function unsetDebitEnabled(): self
    {
        $this->instance->unsetDebitEnabled();
        return $this;
    }

    /**
     * Sets prepaid enabled field.
     *
     * @param bool|null $value
     */
    public function prepaidEnabled(?bool $value): self
    {
        $this->instance->setPrepaidEnabled($value);
        return $this;
    }

    /**
     * Unsets prepaid enabled field.
     */
    public function unsetPrepaidEnabled(): self
    {
        $this->instance->unsetPrepaidEnabled();
        return $this;
    }

    /**
     * Sets debit authorization enabled field.
     *
     * @param bool|null $value
     */
    public function debitAuthorizationEnabled(?bool $value): self
    {
        $this->instance->setDebitAuthorizationEnabled($value);
        return $this;
    }

    /**
     * Unsets debit authorization enabled field.
     */
    public function unsetDebitAuthorizationEnabled(): self
    {
        $this->instance->unsetDebitAuthorizationEnabled();
        return $this;
    }

    /**
     * Sets prepaid authorization enabled field.
     *
     * @param bool|null $value
     */
    public function prepaidAuthorizationEnabled(?bool $value): self
    {
        $this->instance->setPrepaidAuthorizationEnabled($value);
        return $this;
    }

    /**
     * Unsets prepaid authorization enabled field.
     */
    public function unsetPrepaidAuthorizationEnabled(): self
    {
        $this->instance->unsetPrepaidAuthorizationEnabled();
        return $this;
    }

    /**
     * Sets forbidden card brands field.
     *
     * @param string[]|null $value
     */
    public function forbiddenCardBrands(?array $value): self
    {
        $this->instance->setForbiddenCardBrands($value);
        return $this;
    }

    /**
     * Unsets forbidden card brands field.
     */
    public function unsetForbiddenCardBrands(): self
    {
        $this->instance->unsetForbiddenCardBrands();
        return $this;
    }

    /**
     * Sets allowed countries by ip field.
     *
     * @param string[]|null $value
     */
    public function allowedCountriesByIp(?array $value): self
    {
        $this->instance->setAllowedCountriesByIp($value);
        return $this;
    }

    /**
     * Unsets allowed countries by ip field.
     */
    public function unsetAllowedCountriesByIp(): self
    {
        $this->instance->unsetAllowedCountriesByIp();
        return $this;
    }

    /**
     * Sets foreign cards allowed field.
     *
     * @param bool|null $value
     */
    public function foreignCardsAllowed(?bool $value): self
    {
        $this->instance->setForeignCardsAllowed($value);
        return $this;
    }

    /**
     * Unsets foreign cards allowed field.
     */
    public function unsetForeignCardsAllowed(): self
    {
        $this->instance->unsetForeignCardsAllowed();
        return $this;
    }

    /**
     * Sets fail on new email field.
     *
     * @param bool|null $value
     */
    public function failOnNewEmail(?bool $value): self
    {
        $this->instance->setFailOnNewEmail($value);
        return $this;
    }

    /**
     * Unsets fail on new email field.
     */
    public function unsetFailOnNewEmail(): self
    {
        $this->instance->unsetFailOnNewEmail();
        return $this;
    }

    /**
     * Sets card limit field.
     *
     * @param int|null $value
     */
    public function cardLimit(?int $value): self
    {
        $this->instance->setCardLimit($value);
        return $this;
    }

    /**
     * Unsets card limit field.
     */
    public function unsetCardLimit(): self
    {
        $this->instance->unsetCardLimit();
        return $this;
    }

    /**
     * Sets allow empty cvv field.
     *
     * @param bool|null $value
     */
    public function allowEmptyCvv(?bool $value): self
    {
        $this->instance->setAllowEmptyCvv($value);
        return $this;
    }

    /**
     * Unsets allow empty cvv field.
     */
    public function unsetAllowEmptyCvv(): self
    {
        $this->instance->unsetAllowEmptyCvv();
        return $this;
    }

    /**
     * Sets only direct currency field.
     *
     * @param bool|null $value
     */
    public function onlyDirectCurrency(?bool $value): self
    {
        $this->instance->setOnlyDirectCurrency($value);
        return $this;
    }

    /**
     * Unsets only direct currency field.
     */
    public function unsetOnlyDirectCurrency(): self
    {
        $this->instance->unsetOnlyDirectCurrency();
        return $this;
    }

    /**
     * Sets three ds required field.
     *
     * @param bool|null $value
     */
    public function threeDsRequired(?bool $value): self
    {
        $this->instance->setThreeDsRequired($value);
        return $this;
    }

    /**
     * Unsets three ds required field.
     */
    public function unsetThreeDsRequired(): self
    {
        $this->instance->unsetThreeDsRequired();
        return $this;
    }

    /**
     * Sets three ds address required field.
     *
     * @param bool|null $value
     */
    public function threeDsAddressRequired(?bool $value): self
    {
        $this->instance->setThreeDsAddressRequired($value);
        return $this;
    }

    /**
     * Unsets three ds address required field.
     */
    public function unsetThreeDsAddressRequired(): self
    {
        $this->instance->unsetThreeDsAddressRequired();
        return $this;
    }

    /**
     * Sets three ds skip enabled field.
     *
     * @param bool|null $value
     */
    public function threeDsSkipEnabled(?bool $value): self
    {
        $this->instance->setThreeDsSkipEnabled($value);
        return $this;
    }

    /**
     * Unsets three ds skip enabled field.
     */
    public function unsetThreeDsSkipEnabled(): self
    {
        $this->instance->unsetThreeDsSkipEnabled();
        return $this;
    }

    /**
     * Sets allow direct token creation field.
     *
     * @param bool|null $value
     */
    public function allowDirectTokenCreation(?bool $value): self
    {
        $this->instance->setAllowDirectTokenCreation($value);
        return $this;
    }

    /**
     * Unsets allow direct token creation field.
     */
    public function unsetAllowDirectTokenCreation(): self
    {
        $this->instance->unsetAllowDirectTokenCreation();
        return $this;
    }

    /**
     * Sets three ds phone number required field.
     *
     * @param bool|null $value
     */
    public function threeDsPhoneNumberRequired(?bool $value): self
    {
        $this->instance->setThreeDsPhoneNumberRequired($value);
        return $this;
    }

    /**
     * Unsets three ds phone number required field.
     */
    public function unsetThreeDsPhoneNumberRequired(): self
    {
        $this->instance->unsetThreeDsPhoneNumberRequired();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Merchant Webhook Card Configuration object.
     */
    public function build(): MerchantWebhookCardConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
