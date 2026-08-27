<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CheckoutBankTransferConfiguration;
use UnivaPay\Models\CheckoutCardConfiguration;
use UnivaPay\Models\CheckoutConvenienceConfiguration;
use UnivaPay\Models\CheckoutEcConfiguration;
use UnivaPay\Models\CheckoutInfo;
use UnivaPay\Models\CheckoutInstallmentsConfiguration;
use UnivaPay\Models\CheckoutOnlineConfiguration;
use UnivaPay\Models\CheckoutPaidyConfiguration;
use UnivaPay\Models\CheckoutQrScanConfiguration;
use UnivaPay\Models\CheckoutSubscriptionConfiguration;
use UnivaPay\Models\CheckoutSubscriptionPlanConfiguration;
use UnivaPay\Models\CheckoutSupportedBrand;
use UnivaPay\Models\CheckoutTheme;
use UnivaPay\Models\RecurringCvvConfirmation;

/**
 * Builder for model CheckoutInfo
 *
 * @see CheckoutInfo
 */
class CheckoutInfoBuilder
{
    /**
     * @var CheckoutInfo
     */
    private $instance;

    private function __construct(CheckoutInfo $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Info Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutInfo());
    }

    /**
     * Sets mode field.
     *
     * @param string|null $value
     */
    public function mode(?string $value): self
    {
        $this->instance->setMode($value);
        return $this;
    }

    /**
     * Sets recurring token privilege field.
     *
     * @param string|null $value
     */
    public function recurringTokenPrivilege(?string $value): self
    {
        $this->instance->setRecurringTokenPrivilege($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets card configuration field.
     *
     * @param CheckoutCardConfiguration|null $value
     */
    public function cardConfiguration(?CheckoutCardConfiguration $value): self
    {
        $this->instance->setCardConfiguration($value);
        return $this;
    }

    /**
     * Sets subscription configuration field.
     *
     * @param CheckoutSubscriptionConfiguration|null $value
     */
    public function subscriptionConfiguration(?CheckoutSubscriptionConfiguration $value): self
    {
        $this->instance->setSubscriptionConfiguration($value);
        return $this;
    }

    /**
     * Sets installments configuration field.
     *
     * @param CheckoutInstallmentsConfiguration|null $value
     */
    public function installmentsConfiguration(?CheckoutInstallmentsConfiguration $value): self
    {
        $this->instance->setInstallmentsConfiguration($value);
        return $this;
    }

    /**
     * Sets subscription plan configuration field.
     *
     * @param CheckoutSubscriptionPlanConfiguration|null $value
     */
    public function subscriptionPlanConfiguration(?CheckoutSubscriptionPlanConfiguration $value): self
    {
        $this->instance->setSubscriptionPlanConfiguration($value);
        return $this;
    }

    /**
     * Sets checkout configuration field.
     *
     * @param CheckoutEcConfiguration|null $value
     */
    public function checkoutConfiguration(?CheckoutEcConfiguration $value): self
    {
        $this->instance->setCheckoutConfiguration($value);
        return $this;
    }

    /**
     * Sets qr scan configuration field.
     *
     * @param CheckoutQrScanConfiguration|null $value
     */
    public function qrScanConfiguration(?CheckoutQrScanConfiguration $value): self
    {
        $this->instance->setQrScanConfiguration($value);
        return $this;
    }

    /**
     * Sets convenience configuration field.
     *
     * @param CheckoutConvenienceConfiguration|null $value
     */
    public function convenienceConfiguration(?CheckoutConvenienceConfiguration $value): self
    {
        $this->instance->setConvenienceConfiguration($value);
        return $this;
    }

    /**
     * Sets paidy configuration field.
     *
     * @param CheckoutPaidyConfiguration|null $value
     */
    public function paidyConfiguration(?CheckoutPaidyConfiguration $value): self
    {
        $this->instance->setPaidyConfiguration($value);
        return $this;
    }

    /**
     * Sets paidy public key field.
     *
     * @param string|null $value
     */
    public function paidyPublicKey(?string $value): self
    {
        $this->instance->setPaidyPublicKey($value);
        return $this;
    }

    /**
     * Unsets paidy public key field.
     */
    public function unsetPaidyPublicKey(): self
    {
        $this->instance->unsetPaidyPublicKey();
        return $this;
    }

    /**
     * Sets logo image field.
     *
     * @param string|null $value
     */
    public function logoImage(?string $value): self
    {
        $this->instance->setLogoImage($value);
        return $this;
    }

    /**
     * Unsets logo image field.
     */
    public function unsetLogoImage(): self
    {
        $this->instance->unsetLogoImage();
        return $this;
    }

    /**
     * Sets theme field.
     *
     * @param CheckoutTheme|null $value
     */
    public function theme(?CheckoutTheme $value): self
    {
        $this->instance->setTheme($value);
        return $this;
    }

    /**
     * Sets recurring card charge cvv confirmation field.
     *
     * @param RecurringCvvConfirmation|null $value
     */
    public function recurringCardChargeCvvConfirmation(?RecurringCvvConfirmation $value): self
    {
        $this->instance->setRecurringCardChargeCvvConfirmation($value);
        return $this;
    }

    /**
     * Sets online configuration field.
     *
     * @param CheckoutOnlineConfiguration|null $value
     */
    public function onlineConfiguration(?CheckoutOnlineConfiguration $value): self
    {
        $this->instance->setOnlineConfiguration($value);
        return $this;
    }

    /**
     * Sets bank transfer configuration field.
     *
     * @param CheckoutBankTransferConfiguration|null $value
     */
    public function bankTransferConfiguration(?CheckoutBankTransferConfiguration $value): self
    {
        $this->instance->setBankTransferConfiguration($value);
        return $this;
    }

    /**
     * Sets supported brands field.
     *
     * @param CheckoutSupportedBrand[]|null $value
     */
    public function supportedBrands(?array $value): self
    {
        $this->instance->setSupportedBrands($value);
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
     * Initializes a new Checkout Info object.
     */
    public function build(): CheckoutInfo
    {
        return CoreHelper::clone($this->instance);
    }
}
