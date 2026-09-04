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
 * Transfer schedule configuration inherited by the merchant.
 */
class MerchantWebhookTransferScheduleConfiguration implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $waitPeriod;

    /**
     * @var string|null
     */
    private $period;

    /**
     * @var array
     */
    private $fullPeriodRequired = [];

    /**
     * @var array
     */
    private $dayOfWeek = [];

    /**
     * @var array
     */
    private $weekOfMonth = [];

    /**
     * @var array
     */
    private $dayOfMonth = [];

    /**
     * @var array
     */
    private $weeklyClosingDay = [];

    /**
     * @var array
     */
    private $weeklyPayoutDay = [];

    /**
     * Returns Wait Period.
     * ISO-8601 period before charges become payable.
     */
    public function getWaitPeriod(): ?string
    {
        return $this->waitPeriod;
    }

    /**
     * Sets Wait Period.
     * ISO-8601 period before charges become payable.
     *
     * @maps wait_period
     */
    public function setWaitPeriod(?string $waitPeriod): void
    {
        $this->waitPeriod = $waitPeriod;
    }

    /**
     * Returns Period.
     * Transfer period selected for payouts.
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }

    /**
     * Sets Period.
     * Transfer period selected for payouts.
     *
     * @maps period
     */
    public function setPeriod(?string $period): void
    {
        $this->period = $period;
    }

    /**
     * Returns Full Period Required.
     * Whether the first transfer period must be fully completed.
     */
    public function getFullPeriodRequired(): ?bool
    {
        if (count($this->fullPeriodRequired) == 0) {
            return null;
        }
        return $this->fullPeriodRequired['value'];
    }

    /**
     * Sets Full Period Required.
     * Whether the first transfer period must be fully completed.
     *
     * @maps full_period_required
     */
    public function setFullPeriodRequired(?bool $fullPeriodRequired): void
    {
        $this->fullPeriodRequired['value'] = $fullPeriodRequired;
    }

    /**
     * Unsets Full Period Required.
     * Whether the first transfer period must be fully completed.
     */
    public function unsetFullPeriodRequired(): void
    {
        $this->fullPeriodRequired = [];
    }

    /**
     * Returns Day of Week.
     * Payout day of week when using weekly schedules.
     */
    public function getDayOfWeek(): ?string
    {
        if (count($this->dayOfWeek) == 0) {
            return null;
        }
        return $this->dayOfWeek['value'];
    }

    /**
     * Sets Day of Week.
     * Payout day of week when using weekly schedules.
     *
     * @maps day_of_week
     */
    public function setDayOfWeek(?string $dayOfWeek): void
    {
        $this->dayOfWeek['value'] = $dayOfWeek;
    }

    /**
     * Unsets Day of Week.
     * Payout day of week when using weekly schedules.
     */
    public function unsetDayOfWeek(): void
    {
        $this->dayOfWeek = [];
    }

    /**
     * Returns Week of Month.
     * Week of month used by monthly schedules.
     */
    public function getWeekOfMonth(): ?int
    {
        if (count($this->weekOfMonth) == 0) {
            return null;
        }
        return $this->weekOfMonth['value'];
    }

    /**
     * Sets Week of Month.
     * Week of month used by monthly schedules.
     *
     * @maps week_of_month
     */
    public function setWeekOfMonth(?int $weekOfMonth): void
    {
        $this->weekOfMonth['value'] = $weekOfMonth;
    }

    /**
     * Unsets Week of Month.
     * Week of month used by monthly schedules.
     */
    public function unsetWeekOfMonth(): void
    {
        $this->weekOfMonth = [];
    }

    /**
     * Returns Day of Month.
     * Day of month used by monthly schedules.
     */
    public function getDayOfMonth(): ?int
    {
        if (count($this->dayOfMonth) == 0) {
            return null;
        }
        return $this->dayOfMonth['value'];
    }

    /**
     * Sets Day of Month.
     * Day of month used by monthly schedules.
     *
     * @maps day_of_month
     */
    public function setDayOfMonth(?int $dayOfMonth): void
    {
        $this->dayOfMonth['value'] = $dayOfMonth;
    }

    /**
     * Unsets Day of Month.
     * Day of month used by monthly schedules.
     */
    public function unsetDayOfMonth(): void
    {
        $this->dayOfMonth = [];
    }

    /**
     * Returns Weekly Closing Day.
     * Weekly closing day for balance aggregation.
     */
    public function getWeeklyClosingDay(): ?string
    {
        if (count($this->weeklyClosingDay) == 0) {
            return null;
        }
        return $this->weeklyClosingDay['value'];
    }

    /**
     * Sets Weekly Closing Day.
     * Weekly closing day for balance aggregation.
     *
     * @maps weekly_closing_day
     */
    public function setWeeklyClosingDay(?string $weeklyClosingDay): void
    {
        $this->weeklyClosingDay['value'] = $weeklyClosingDay;
    }

    /**
     * Unsets Weekly Closing Day.
     * Weekly closing day for balance aggregation.
     */
    public function unsetWeeklyClosingDay(): void
    {
        $this->weeklyClosingDay = [];
    }

    /**
     * Returns Weekly Payout Day.
     * Weekly payout day.
     */
    public function getWeeklyPayoutDay(): ?string
    {
        if (count($this->weeklyPayoutDay) == 0) {
            return null;
        }
        return $this->weeklyPayoutDay['value'];
    }

    /**
     * Sets Weekly Payout Day.
     * Weekly payout day.
     *
     * @maps weekly_payout_day
     */
    public function setWeeklyPayoutDay(?string $weeklyPayoutDay): void
    {
        $this->weeklyPayoutDay['value'] = $weeklyPayoutDay;
    }

    /**
     * Unsets Weekly Payout Day.
     * Weekly payout day.
     */
    public function unsetWeeklyPayoutDay(): void
    {
        $this->weeklyPayoutDay = [];
    }

    /**
     * Converts the MerchantWebhookTransferScheduleConfiguration object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MerchantWebhookTransferScheduleConfiguration object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookTransferScheduleConfiguration',
            [
                'waitPeriod' => $this->waitPeriod,
                'period' => $this->period,
                'fullPeriodRequired' => $this->getFullPeriodRequired(),
                'dayOfWeek' => $this->getDayOfWeek(),
                'weekOfMonth' => $this->getWeekOfMonth(),
                'dayOfMonth' => $this->getDayOfMonth(),
                'weeklyClosingDay' => $this->getWeeklyClosingDay(),
                'weeklyPayoutDay' => $this->getWeeklyPayoutDay(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'wait_period',
        'period',
        'full_period_required',
        'day_of_week',
        'week_of_month',
        'day_of_month',
        'weekly_closing_day',
        'weekly_payout_day'
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
        if (isset($this->waitPeriod)) {
            $json['wait_period']          = $this->waitPeriod;
        }
        if (isset($this->period)) {
            $json['period']               = $this->period;
        }
        if (!empty($this->fullPeriodRequired)) {
            $json['full_period_required'] = $this->fullPeriodRequired['value'];
        }
        if (!empty($this->dayOfWeek)) {
            $json['day_of_week']          = $this->dayOfWeek['value'];
        }
        if (!empty($this->weekOfMonth)) {
            $json['week_of_month']        = $this->weekOfMonth['value'];
        }
        if (!empty($this->dayOfMonth)) {
            $json['day_of_month']         = $this->dayOfMonth['value'];
        }
        if (!empty($this->weeklyClosingDay)) {
            $json['weekly_closing_day']   = $this->weeklyClosingDay['value'];
        }
        if (!empty($this->weeklyPayoutDay)) {
            $json['weekly_payout_day']    = $this->weeklyPayoutDay['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
