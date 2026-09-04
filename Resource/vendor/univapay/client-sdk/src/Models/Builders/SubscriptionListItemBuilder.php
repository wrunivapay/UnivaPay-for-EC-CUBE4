<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\GenericMetadata;
use UnivaPay\Models\SubscriptionInstallmentPlanResponse;
use UnivaPay\Models\SubscriptionListItem;
use UnivaPay\Models\SubscriptionNextPayment;
use UnivaPay\Models\SubscriptionPlanSettings;
use UnivaPay\Models\SubscriptionScheduleSettings;
use UnivaPay\Models\SubscriptionThreeDs;
use UnivaPay\Models\SubscriptionUserData;

/**
 * Builder for model SubscriptionListItem
 *
 * @see SubscriptionListItem
 */
class SubscriptionListItemBuilder
{
    /**
     * @var SubscriptionListItem
     */
    private $instance;

    private function __construct(SubscriptionListItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription List Item Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionListItem());
    }

    /**
     * Sets id field.
     *
     * @param string|null $value
     */
    public function id(?string $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets store id field.
     *
     * @param string|null $value
     */
    public function storeId(?string $value): self
    {
        $this->instance->setStoreId($value);
        return $this;
    }

    /**
     * Sets transaction token id field.
     *
     * @param string|null $value
     */
    public function transactionTokenId(?string $value): self
    {
        $this->instance->setTransactionTokenId($value);
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param int|null $value
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets amount formatted field.
     *
     * @param float|null $value
     */
    public function amountFormatted(?float $value): self
    {
        $this->instance->setAmountFormatted($value);
        return $this;
    }

    /**
     * Sets initial amount field.
     *
     * @param int|null $value
     */
    public function initialAmount(?int $value): self
    {
        $this->instance->setInitialAmount($value);
        return $this;
    }

    /**
     * Unsets initial amount field.
     */
    public function unsetInitialAmount(): self
    {
        $this->instance->unsetInitialAmount();
        return $this;
    }

    /**
     * Sets initial amount formatted field.
     *
     * @param float|null $value
     */
    public function initialAmountFormatted(?float $value): self
    {
        $this->instance->setInitialAmountFormatted($value);
        return $this;
    }

    /**
     * Unsets initial amount formatted field.
     */
    public function unsetInitialAmountFormatted(): self
    {
        $this->instance->unsetInitialAmountFormatted();
        return $this;
    }

    /**
     * Sets subsequent cycles start field.
     *
     * @param \DateTime|null $value
     */
    public function subsequentCyclesStart(?\DateTime $value): self
    {
        $this->instance->setSubsequentCyclesStart($value);
        return $this;
    }

    /**
     * Unsets subsequent cycles start field.
     */
    public function unsetSubsequentCyclesStart(): self
    {
        $this->instance->unsetSubsequentCyclesStart();
        return $this;
    }

    /**
     * Sets schedule settings field.
     *
     * @param SubscriptionScheduleSettings|null $value
     */
    public function scheduleSettings(?SubscriptionScheduleSettings $value): self
    {
        $this->instance->setScheduleSettings($value);
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
     * Sets first charge capture after field.
     *
     * @param string|null $value
     */
    public function firstChargeCaptureAfter(?string $value): self
    {
        $this->instance->setFirstChargeCaptureAfter($value);
        return $this;
    }

    /**
     * Unsets first charge capture after field.
     */
    public function unsetFirstChargeCaptureAfter(): self
    {
        $this->instance->unsetFirstChargeCaptureAfter();
        return $this;
    }

    /**
     * Sets first charge authorization only field.
     *
     * @param bool|null $value
     */
    public function firstChargeAuthorizationOnly(?bool $value): self
    {
        $this->instance->setFirstChargeAuthorizationOnly($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets metadata field.
     *
     * @param GenericMetadata|null $value
     */
    public function metadata(?GenericMetadata $value): self
    {
        $this->instance->setMetadata($value);
        return $this;
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
     * Sets created on field.
     *
     * @param \DateTime|null $value
     */
    public function createdOn(?\DateTime $value): self
    {
        $this->instance->setCreatedOn($value);
        return $this;
    }

    /**
     * Sets three ds field.
     *
     * @param SubscriptionThreeDs|null $value
     */
    public function threeDs(?SubscriptionThreeDs $value): self
    {
        $this->instance->setThreeDs($value);
        return $this;
    }

    /**
     * Sets period field.
     *
     * @param string|null $value
     */
    public function period(?string $value): self
    {
        $this->instance->setPeriod($value);
        return $this;
    }

    /**
     * Sets cyclical period field.
     *
     * @param string|null $value
     */
    public function cyclicalPeriod(?string $value): self
    {
        $this->instance->setCyclicalPeriod($value);
        return $this;
    }

    /**
     * Unsets cyclical period field.
     */
    public function unsetCyclicalPeriod(): self
    {
        $this->instance->unsetCyclicalPeriod();
        return $this;
    }

    /**
     * Sets next payment field.
     *
     * @param SubscriptionNextPayment|null $value
     */
    public function nextPayment(?SubscriptionNextPayment $value): self
    {
        $this->instance->setNextPayment($value);
        return $this;
    }

    /**
     * Sets cycles left field.
     *
     * @param int|null $value
     */
    public function cyclesLeft(?int $value): self
    {
        $this->instance->setCyclesLeft($value);
        return $this;
    }

    /**
     * Unsets cycles left field.
     */
    public function unsetCyclesLeft(): self
    {
        $this->instance->unsetCyclesLeft();
        return $this;
    }

    /**
     * Sets subscription plan field.
     *
     * @param SubscriptionPlanSettings|null $value
     */
    public function subscriptionPlan(?SubscriptionPlanSettings $value): self
    {
        $this->instance->setSubscriptionPlan($value);
        return $this;
    }

    /**
     * Sets installment plan field.
     *
     * @param SubscriptionInstallmentPlanResponse|null $value
     */
    public function installmentPlan(?SubscriptionInstallmentPlanResponse $value): self
    {
        $this->instance->setInstallmentPlan($value);
        return $this;
    }

    /**
     * Sets charge id field.
     *
     * @param string|null $value
     */
    public function chargeId(?string $value): self
    {
        $this->instance->setChargeId($value);
        return $this;
    }

    /**
     * Unsets charge id field.
     */
    public function unsetChargeId(): self
    {
        $this->instance->unsetChargeId();
        return $this;
    }

    /**
     * Sets amount left field.
     *
     * @param int|null $value
     */
    public function amountLeft(?int $value): self
    {
        $this->instance->setAmountLeft($value);
        return $this;
    }

    /**
     * Unsets amount left field.
     */
    public function unsetAmountLeft(): self
    {
        $this->instance->unsetAmountLeft();
        return $this;
    }

    /**
     * Sets amount left formatted field.
     *
     * @param float|null $value
     */
    public function amountLeftFormatted(?float $value): self
    {
        $this->instance->setAmountLeftFormatted($value);
        return $this;
    }

    /**
     * Unsets amount left formatted field.
     */
    public function unsetAmountLeftFormatted(): self
    {
        $this->instance->unsetAmountLeftFormatted();
        return $this;
    }

    /**
     * Sets merchant name field.
     *
     * @param string|null $value
     */
    public function merchantName(?string $value): self
    {
        $this->instance->setMerchantName($value);
        return $this;
    }

    /**
     * Sets store name field.
     *
     * @param string|null $value
     */
    public function storeName(?string $value): self
    {
        $this->instance->setStoreName($value);
        return $this;
    }

    /**
     * Sets payment type field.
     *
     * @param string|null $value
     */
    public function paymentType(?string $value): self
    {
        $this->instance->setPaymentType($value);
        return $this;
    }

    /**
     * Sets next payment date field.
     *
     * @param \DateTime|null $value
     */
    public function nextPaymentDate(?\DateTime $value): self
    {
        $this->instance->setNextPaymentDate($value);
        return $this;
    }

    /**
     * Sets user data field.
     *
     * @param SubscriptionUserData|null $value
     */
    public function userData(?SubscriptionUserData $value): self
    {
        $this->instance->setUserData($value);
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
     * Initializes a new Subscription List Item object.
     */
    public function build(): SubscriptionListItem
    {
        return CoreHelper::clone($this->instance);
    }
}
