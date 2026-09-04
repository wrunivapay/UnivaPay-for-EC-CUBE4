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
 * Merchant/store checkout configuration: enabled payment methods and their limits,
 * installment/subscription plan settings, convenience-store and bank-transfer settings, widget theme,
 * and per-brand feature support. Returned in full on every call — there is no partial-update or list
 * variant.
 */
class CheckoutInfo implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $mode;

    /**
     * @var string|null
     */
    private $recurringTokenPrivilege;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var CheckoutCardConfiguration|null
     */
    private $cardConfiguration;

    /**
     * @var CheckoutSubscriptionConfiguration|null
     */
    private $subscriptionConfiguration;

    /**
     * @var CheckoutInstallmentsConfiguration|null
     */
    private $installmentsConfiguration;

    /**
     * @var CheckoutSubscriptionPlanConfiguration|null
     */
    private $subscriptionPlanConfiguration;

    /**
     * @var CheckoutEcConfiguration|null
     */
    private $checkoutConfiguration;

    /**
     * @var CheckoutQrScanConfiguration|null
     */
    private $qrScanConfiguration;

    /**
     * @var CheckoutConvenienceConfiguration|null
     */
    private $convenienceConfiguration;

    /**
     * @var CheckoutPaidyConfiguration|null
     */
    private $paidyConfiguration;

    /**
     * @var array
     */
    private $paidyPublicKey = [];

    /**
     * @var array
     */
    private $logoImage = [];

    /**
     * @var CheckoutTheme|null
     */
    private $theme;

    /**
     * @var RecurringCvvConfirmation|null
     */
    private $recurringCardChargeCvvConfirmation;

    /**
     * @var CheckoutOnlineConfiguration|null
     */
    private $onlineConfiguration;

    /**
     * @var CheckoutBankTransferConfiguration|null
     */
    private $bankTransferConfiguration;

    /**
     * @var CheckoutSupportedBrand[]|null
     */
    private $supportedBrands;

    /**
     * Returns Mode.
     * Store processing mode reflected in the checkout configuration: `live` and `test` reflect the
     * credential used to authenticate, while `live_test` is reserved for privileged callers testing
     * against live-mode data.
     */
    public function getMode(): ?string
    {
        return $this->mode;
    }

    /**
     * Sets Mode.
     * Store processing mode reflected in the checkout configuration: `live` and `test` reflect the
     * credential used to authenticate, while `live_test` is reserved for privileged callers testing
     * against live-mode data.
     *
     * @maps mode
     * @factory \UnivaPay\Models\CheckoutMode::checkValue
     */
    public function setMode(?string $mode): void
    {
        $this->mode = $mode;
    }

    /**
     * Returns Recurring Token Privilege.
     * Level of recurring-charge privilege granted to transaction tokens created under this store: `none`
     * disallows recurring use, `bounded` allows a limited number of recurring charges, and `infinite`
     * allows unlimited recurring charges.
     */
    public function getRecurringTokenPrivilege(): ?string
    {
        return $this->recurringTokenPrivilege;
    }

    /**
     * Sets Recurring Token Privilege.
     * Level of recurring-charge privilege granted to transaction tokens created under this store: `none`
     * disallows recurring use, `bounded` allows a limited number of recurring charges, and `infinite`
     * allows unlimited recurring charges.
     *
     * @maps recurring_token_privilege
     * @factory \UnivaPay\Models\CheckoutRecurringTokenPrivilege::checkValue
     */
    public function setRecurringTokenPrivilege(?string $recurringTokenPrivilege): void
    {
        $this->recurringTokenPrivilege = $recurringTokenPrivilege;
    }

    /**
     * Returns Name.
     * Store display name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Store display name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Card Configuration.
     * Card payment settings applied to checkout.
     */
    public function getCardConfiguration(): ?CheckoutCardConfiguration
    {
        return $this->cardConfiguration;
    }

    /**
     * Sets Card Configuration.
     * Card payment settings applied to checkout.
     *
     * @maps card_configuration
     */
    public function setCardConfiguration(?CheckoutCardConfiguration $cardConfiguration): void
    {
        $this->cardConfiguration = $cardConfiguration;
    }

    /**
     * Returns Subscription Configuration.
     * Univapay-hosted subscription feature toggle.
     */
    public function getSubscriptionConfiguration(): ?CheckoutSubscriptionConfiguration
    {
        return $this->subscriptionConfiguration;
    }

    /**
     * Sets Subscription Configuration.
     * Univapay-hosted subscription feature toggle.
     *
     * @maps subscription_configuration
     */
    public function setSubscriptionConfiguration(?CheckoutSubscriptionConfiguration $subscriptionConfiguration): void
    {
        $this->subscriptionConfiguration = $subscriptionConfiguration;
    }

    /**
     * Returns Installments Configuration.
     * Installment plan configuration applied to checkout.
     */
    public function getInstallmentsConfiguration(): ?CheckoutInstallmentsConfiguration
    {
        return $this->installmentsConfiguration;
    }

    /**
     * Sets Installments Configuration.
     * Installment plan configuration applied to checkout.
     *
     * @maps installments_configuration
     */
    public function setInstallmentsConfiguration(?CheckoutInstallmentsConfiguration $installmentsConfiguration): void
    {
        $this->installmentsConfiguration = $installmentsConfiguration;
    }

    /**
     * Returns Subscription Plan Configuration.
     * Univapay-side subscription plan configuration applied to checkout.
     */
    public function getSubscriptionPlanConfiguration(): ?CheckoutSubscriptionPlanConfiguration
    {
        return $this->subscriptionPlanConfiguration;
    }

    /**
     * Sets Subscription Plan Configuration.
     * Univapay-side subscription plan configuration applied to checkout.
     *
     * @maps subscription_plan_configuration
     */
    public function setSubscriptionPlanConfiguration(
        ?CheckoutSubscriptionPlanConfiguration $subscriptionPlanConfiguration
    ): void {
        $this->subscriptionPlanConfiguration = $subscriptionPlanConfiguration;
    }

    /**
     * Returns Checkout Configuration.
     * EC checkout feature toggles for hosted email receipts and product line items.
     */
    public function getCheckoutConfiguration(): ?CheckoutEcConfiguration
    {
        return $this->checkoutConfiguration;
    }

    /**
     * Sets Checkout Configuration.
     * EC checkout feature toggles for hosted email receipts and product line items.
     *
     * @maps checkout_configuration
     */
    public function setCheckoutConfiguration(?CheckoutEcConfiguration $checkoutConfiguration): void
    {
        $this->checkoutConfiguration = $checkoutConfiguration;
    }

    /**
     * Returns Qr Scan Configuration.
     * QR-scan (CPM) payment settings applied to checkout.
     */
    public function getQrScanConfiguration(): ?CheckoutQrScanConfiguration
    {
        return $this->qrScanConfiguration;
    }

    /**
     * Sets Qr Scan Configuration.
     * QR-scan (CPM) payment settings applied to checkout.
     *
     * @maps qr_scan_configuration
     */
    public function setQrScanConfiguration(?CheckoutQrScanConfiguration $qrScanConfiguration): void
    {
        $this->qrScanConfiguration = $qrScanConfiguration;
    }

    /**
     * Returns Convenience Configuration.
     * Convenience-store (konbini) payment settings applied to checkout.
     */
    public function getConvenienceConfiguration(): ?CheckoutConvenienceConfiguration
    {
        return $this->convenienceConfiguration;
    }

    /**
     * Sets Convenience Configuration.
     * Convenience-store (konbini) payment settings applied to checkout.
     *
     * @maps convenience_configuration
     */
    public function setConvenienceConfiguration(?CheckoutConvenienceConfiguration $convenienceConfiguration): void
    {
        $this->convenienceConfiguration = $convenienceConfiguration;
    }

    /**
     * Returns Paidy Configuration.
     * Paidy payment feature toggle.
     */
    public function getPaidyConfiguration(): ?CheckoutPaidyConfiguration
    {
        return $this->paidyConfiguration;
    }

    /**
     * Sets Paidy Configuration.
     * Paidy payment feature toggle.
     *
     * @maps paidy_configuration
     */
    public function setPaidyConfiguration(?CheckoutPaidyConfiguration $paidyConfiguration): void
    {
        $this->paidyConfiguration = $paidyConfiguration;
    }

    /**
     * Returns Paidy Public Key.
     * Public key used to initialize the Paidy widget. `null` when Paidy is not configured for this store.
     */
    public function getPaidyPublicKey(): ?string
    {
        if (count($this->paidyPublicKey) == 0) {
            return null;
        }
        return $this->paidyPublicKey['value'];
    }

    /**
     * Sets Paidy Public Key.
     * Public key used to initialize the Paidy widget. `null` when Paidy is not configured for this store.
     *
     * @maps paidy_public_key
     */
    public function setPaidyPublicKey(?string $paidyPublicKey): void
    {
        $this->paidyPublicKey['value'] = $paidyPublicKey;
    }

    /**
     * Unsets Paidy Public Key.
     * Public key used to initialize the Paidy widget. `null` when Paidy is not configured for this store.
     */
    public function unsetPaidyPublicKey(): void
    {
        $this->paidyPublicKey = [];
    }

    /**
     * Returns Logo Image.
     * URL of the store's checkout logo image. `null` when no logo is configured. Note: this response field
     * is `logo_image`, but the corresponding store-configuration update field is `logo_url` — the two
     * names do not round-trip automatically.
     */
    public function getLogoImage(): ?string
    {
        if (count($this->logoImage) == 0) {
            return null;
        }
        return $this->logoImage['value'];
    }

    /**
     * Sets Logo Image.
     * URL of the store's checkout logo image. `null` when no logo is configured. Note: this response field
     * is `logo_image`, but the corresponding store-configuration update field is `logo_url` — the two
     * names do not round-trip automatically.
     *
     * @maps logo_image
     */
    public function setLogoImage(?string $logoImage): void
    {
        $this->logoImage['value'] = $logoImage;
    }

    /**
     * Unsets Logo Image.
     * URL of the store's checkout logo image. `null` when no logo is configured. Note: this response field
     * is `logo_image`, but the corresponding store-configuration update field is `logo_url` — the two
     * names do not round-trip automatically.
     */
    public function unsetLogoImage(): void
    {
        $this->logoImage = [];
    }

    /**
     * Returns Theme.
     * Widget theme applied to checkout.
     */
    public function getTheme(): ?CheckoutTheme
    {
        return $this->theme;
    }

    /**
     * Sets Theme.
     * Widget theme applied to checkout.
     *
     * @maps theme
     */
    public function setTheme(?CheckoutTheme $theme): void
    {
        $this->theme = $theme;
    }

    /**
     * Returns Recurring Card Charge Cvv Confirmation.
     * CVV re-confirmation policy applied to recurring card charges (subscriptions and tokens with
     * recurring privilege).
     */
    public function getRecurringCardChargeCvvConfirmation(): ?RecurringCvvConfirmation
    {
        return $this->recurringCardChargeCvvConfirmation;
    }

    /**
     * Sets Recurring Card Charge Cvv Confirmation.
     * CVV re-confirmation policy applied to recurring card charges (subscriptions and tokens with
     * recurring privilege).
     *
     * @maps recurring_card_charge_cvv_confirmation
     */
    public function setRecurringCardChargeCvvConfirmation(
        ?RecurringCvvConfirmation $recurringCardChargeCvvConfirmation
    ): void {
        $this->recurringCardChargeCvvConfirmation = $recurringCardChargeCvvConfirmation;
    }

    /**
     * Returns Online Configuration.
     * Online redirect/wallet payment feature toggle.
     */
    public function getOnlineConfiguration(): ?CheckoutOnlineConfiguration
    {
        return $this->onlineConfiguration;
    }

    /**
     * Sets Online Configuration.
     * Online redirect/wallet payment feature toggle.
     *
     * @maps online_configuration
     */
    public function setOnlineConfiguration(?CheckoutOnlineConfiguration $onlineConfiguration): void
    {
        $this->onlineConfiguration = $onlineConfiguration;
    }

    /**
     * Returns Bank Transfer Configuration.
     * Bank transfer (振込) payment settings applied to checkout.
     */
    public function getBankTransferConfiguration(): ?CheckoutBankTransferConfiguration
    {
        return $this->bankTransferConfiguration;
    }

    /**
     * Sets Bank Transfer Configuration.
     * Bank transfer (振込) payment settings applied to checkout.
     *
     * @maps bank_transfer_configuration
     */
    public function setBankTransferConfiguration(?CheckoutBankTransferConfiguration $bankTransferConfiguration): void
    {
        $this->bankTransferConfiguration = $bankTransferConfiguration;
    }

    /**
     * Returns Supported Brands.
     * Feature support and capability flags for every payment-type / brand combination the store can accept.
     *
     * @return CheckoutSupportedBrand[]|null
     */
    public function getSupportedBrands(): ?array
    {
        return $this->supportedBrands;
    }

    /**
     * Sets Supported Brands.
     * Feature support and capability flags for every payment-type / brand combination the store can accept.
     *
     * @maps supported_brands
     *
     * @param CheckoutSupportedBrand[]|null $supportedBrands
     */
    public function setSupportedBrands(?array $supportedBrands): void
    {
        $this->supportedBrands = $supportedBrands;
    }

    /**
     * Converts the CheckoutInfo object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutInfo object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutInfo',
            [
                'mode' => $this->mode,
                'recurringTokenPrivilege' => $this->recurringTokenPrivilege,
                'name' => $this->name,
                'cardConfiguration' => $this->cardConfiguration,
                'subscriptionConfiguration' => $this->subscriptionConfiguration,
                'installmentsConfiguration' => $this->installmentsConfiguration,
                'subscriptionPlanConfiguration' => $this->subscriptionPlanConfiguration,
                'checkoutConfiguration' => $this->checkoutConfiguration,
                'qrScanConfiguration' => $this->qrScanConfiguration,
                'convenienceConfiguration' => $this->convenienceConfiguration,
                'paidyConfiguration' => $this->paidyConfiguration,
                'paidyPublicKey' => $this->getPaidyPublicKey(),
                'logoImage' => $this->getLogoImage(),
                'theme' => $this->theme,
                'recurringCardChargeCvvConfirmation' => $this->recurringCardChargeCvvConfirmation,
                'onlineConfiguration' => $this->onlineConfiguration,
                'bankTransferConfiguration' => $this->bankTransferConfiguration,
                'supportedBrands' => $this->supportedBrands,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'mode',
        'recurring_token_privilege',
        'name',
        'card_configuration',
        'subscription_configuration',
        'installments_configuration',
        'subscription_plan_configuration',
        'checkout_configuration',
        'qr_scan_configuration',
        'convenience_configuration',
        'paidy_configuration',
        'paidy_public_key',
        'logo_image',
        'theme',
        'recurring_card_charge_cvv_confirmation',
        'online_configuration',
        'bank_transfer_configuration',
        'supported_brands'
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
        if (isset($this->mode)) {
            $json['mode']                                   = CheckoutMode::checkValue($this->mode);
        }
        if (isset($this->recurringTokenPrivilege)) {
            $json['recurring_token_privilege']              =
                CheckoutRecurringTokenPrivilege::checkValue(
                    $this->recurringTokenPrivilege
                );
        }
        if (isset($this->name)) {
            $json['name']                                   = $this->name;
        }
        if (isset($this->cardConfiguration)) {
            $json['card_configuration']                     = $this->cardConfiguration;
        }
        if (isset($this->subscriptionConfiguration)) {
            $json['subscription_configuration']             = $this->subscriptionConfiguration;
        }
        if (isset($this->installmentsConfiguration)) {
            $json['installments_configuration']             = $this->installmentsConfiguration;
        }
        if (isset($this->subscriptionPlanConfiguration)) {
            $json['subscription_plan_configuration']        = $this->subscriptionPlanConfiguration;
        }
        if (isset($this->checkoutConfiguration)) {
            $json['checkout_configuration']                 = $this->checkoutConfiguration;
        }
        if (isset($this->qrScanConfiguration)) {
            $json['qr_scan_configuration']                  = $this->qrScanConfiguration;
        }
        if (isset($this->convenienceConfiguration)) {
            $json['convenience_configuration']              = $this->convenienceConfiguration;
        }
        if (isset($this->paidyConfiguration)) {
            $json['paidy_configuration']                    = $this->paidyConfiguration;
        }
        if (!empty($this->paidyPublicKey)) {
            $json['paidy_public_key']                       = $this->paidyPublicKey['value'];
        }
        if (!empty($this->logoImage)) {
            $json['logo_image']                             = $this->logoImage['value'];
        }
        if (isset($this->theme)) {
            $json['theme']                                  = $this->theme;
        }
        if (isset($this->recurringCardChargeCvvConfirmation)) {
            $json['recurring_card_charge_cvv_confirmation'] = $this->recurringCardChargeCvvConfirmation;
        }
        if (isset($this->onlineConfiguration)) {
            $json['online_configuration']                   = $this->onlineConfiguration;
        }
        if (isset($this->bankTransferConfiguration)) {
            $json['bank_transfer_configuration']            = $this->bankTransferConfiguration;
        }
        if (isset($this->supportedBrands)) {
            $json['supported_brands']                       = $this->supportedBrands;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
