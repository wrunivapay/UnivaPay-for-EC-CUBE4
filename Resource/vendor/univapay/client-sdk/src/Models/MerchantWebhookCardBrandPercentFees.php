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
use UnivaPay\Utils\NumberHelper;

/**
 * Per-card-brand percent fee overrides.
 */
class MerchantWebhookCardBrandPercentFees implements \JsonSerializable
{
    /**
     * @var array
     */
    private $visa = [];

    /**
     * @var array
     */
    private $americanExpress = [];

    /**
     * @var array
     */
    private $mastercard = [];

    /**
     * @var array
     */
    private $maestro = [];

    /**
     * @var array
     */
    private $discover = [];

    /**
     * @var array
     */
    private $jcb = [];

    /**
     * @var array
     */
    private $dinersClub = [];

    /**
     * @var array
     */
    private $unionPay = [];

    /**
     * @var array
     */
    private $privateLabel = [];

    /**
     * Returns Visa.
     * Percent fee override applied to Visa transactions.
     */
    public function getVisa(): ?float
    {
        if (count($this->visa) == 0) {
            return null;
        }
        return $this->visa['value'];
    }

    /**
     * Sets Visa.
     * Percent fee override applied to Visa transactions.
     *
     * @maps visa
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setVisa(?float $visa): void
    {
        $this->visa['value'] = $visa;
    }

    /**
     * Unsets Visa.
     * Percent fee override applied to Visa transactions.
     */
    public function unsetVisa(): void
    {
        $this->visa = [];
    }

    /**
     * Returns American Express.
     * Percent fee override applied to American Express transactions.
     */
    public function getAmericanExpress(): ?float
    {
        if (count($this->americanExpress) == 0) {
            return null;
        }
        return $this->americanExpress['value'];
    }

    /**
     * Sets American Express.
     * Percent fee override applied to American Express transactions.
     *
     * @maps american_express
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setAmericanExpress(?float $americanExpress): void
    {
        $this->americanExpress['value'] = $americanExpress;
    }

    /**
     * Unsets American Express.
     * Percent fee override applied to American Express transactions.
     */
    public function unsetAmericanExpress(): void
    {
        $this->americanExpress = [];
    }

    /**
     * Returns Mastercard.
     * Percent fee override applied to Mastercard transactions.
     */
    public function getMastercard(): ?float
    {
        if (count($this->mastercard) == 0) {
            return null;
        }
        return $this->mastercard['value'];
    }

    /**
     * Sets Mastercard.
     * Percent fee override applied to Mastercard transactions.
     *
     * @maps mastercard
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setMastercard(?float $mastercard): void
    {
        $this->mastercard['value'] = $mastercard;
    }

    /**
     * Unsets Mastercard.
     * Percent fee override applied to Mastercard transactions.
     */
    public function unsetMastercard(): void
    {
        $this->mastercard = [];
    }

    /**
     * Returns Maestro.
     * Percent fee override applied to Maestro transactions.
     */
    public function getMaestro(): ?float
    {
        if (count($this->maestro) == 0) {
            return null;
        }
        return $this->maestro['value'];
    }

    /**
     * Sets Maestro.
     * Percent fee override applied to Maestro transactions.
     *
     * @maps maestro
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setMaestro(?float $maestro): void
    {
        $this->maestro['value'] = $maestro;
    }

    /**
     * Unsets Maestro.
     * Percent fee override applied to Maestro transactions.
     */
    public function unsetMaestro(): void
    {
        $this->maestro = [];
    }

    /**
     * Returns Discover.
     * Percent fee override applied to Discover transactions.
     */
    public function getDiscover(): ?float
    {
        if (count($this->discover) == 0) {
            return null;
        }
        return $this->discover['value'];
    }

    /**
     * Sets Discover.
     * Percent fee override applied to Discover transactions.
     *
     * @maps discover
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setDiscover(?float $discover): void
    {
        $this->discover['value'] = $discover;
    }

    /**
     * Unsets Discover.
     * Percent fee override applied to Discover transactions.
     */
    public function unsetDiscover(): void
    {
        $this->discover = [];
    }

    /**
     * Returns Jcb.
     * Percent fee override applied to JCB transactions.
     */
    public function getJcb(): ?float
    {
        if (count($this->jcb) == 0) {
            return null;
        }
        return $this->jcb['value'];
    }

    /**
     * Sets Jcb.
     * Percent fee override applied to JCB transactions.
     *
     * @maps jcb
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setJcb(?float $jcb): void
    {
        $this->jcb['value'] = $jcb;
    }

    /**
     * Unsets Jcb.
     * Percent fee override applied to JCB transactions.
     */
    public function unsetJcb(): void
    {
        $this->jcb = [];
    }

    /**
     * Returns Diners Club.
     * Percent fee override applied to Diners Club transactions.
     */
    public function getDinersClub(): ?float
    {
        if (count($this->dinersClub) == 0) {
            return null;
        }
        return $this->dinersClub['value'];
    }

    /**
     * Sets Diners Club.
     * Percent fee override applied to Diners Club transactions.
     *
     * @maps diners_club
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setDinersClub(?float $dinersClub): void
    {
        $this->dinersClub['value'] = $dinersClub;
    }

    /**
     * Unsets Diners Club.
     * Percent fee override applied to Diners Club transactions.
     */
    public function unsetDinersClub(): void
    {
        $this->dinersClub = [];
    }

    /**
     * Returns Union Pay.
     * Percent fee override applied to UnionPay transactions.
     */
    public function getUnionPay(): ?float
    {
        if (count($this->unionPay) == 0) {
            return null;
        }
        return $this->unionPay['value'];
    }

    /**
     * Sets Union Pay.
     * Percent fee override applied to UnionPay transactions.
     *
     * @maps union_pay
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setUnionPay(?float $unionPay): void
    {
        $this->unionPay['value'] = $unionPay;
    }

    /**
     * Unsets Union Pay.
     * Percent fee override applied to UnionPay transactions.
     */
    public function unsetUnionPay(): void
    {
        $this->unionPay = [];
    }

    /**
     * Returns Private Label.
     * Percent fee override applied to private-label card transactions.
     */
    public function getPrivateLabel(): ?float
    {
        if (count($this->privateLabel) == 0) {
            return null;
        }
        return $this->privateLabel['value'];
    }

    /**
     * Sets Private Label.
     * Percent fee override applied to private-label card transactions.
     *
     * @maps private_label
     * @factory \UnivaPay\Utils\NumberHelper::toFloat
     */
    public function setPrivateLabel(?float $privateLabel): void
    {
        $this->privateLabel['value'] = $privateLabel;
    }

    /**
     * Unsets Private Label.
     * Percent fee override applied to private-label card transactions.
     */
    public function unsetPrivateLabel(): void
    {
        $this->privateLabel = [];
    }

    /**
     * Converts the MerchantWebhookCardBrandPercentFees object to a human-readable string representation.
     *
     * @return string The string representation of the MerchantWebhookCardBrandPercentFees object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MerchantWebhookCardBrandPercentFees',
            [
                'visa' => $this->getVisa(),
                'americanExpress' => $this->getAmericanExpress(),
                'mastercard' => $this->getMastercard(),
                'maestro' => $this->getMaestro(),
                'discover' => $this->getDiscover(),
                'jcb' => $this->getJcb(),
                'dinersClub' => $this->getDinersClub(),
                'unionPay' => $this->getUnionPay(),
                'privateLabel' => $this->getPrivateLabel(),
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'visa',
        'american_express',
        'mastercard',
        'maestro',
        'discover',
        'jcb',
        'diners_club',
        'union_pay',
        'private_label'
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
        if (!empty($this->visa)) {
            $json['visa']             = $this->visa['value'];
        }
        if (!empty($this->americanExpress)) {
            $json['american_express'] = $this->americanExpress['value'];
        }
        if (!empty($this->mastercard)) {
            $json['mastercard']       = $this->mastercard['value'];
        }
        if (!empty($this->maestro)) {
            $json['maestro']          = $this->maestro['value'];
        }
        if (!empty($this->discover)) {
            $json['discover']         = $this->discover['value'];
        }
        if (!empty($this->jcb)) {
            $json['jcb']              = $this->jcb['value'];
        }
        if (!empty($this->dinersClub)) {
            $json['diners_club']      = $this->dinersClub['value'];
        }
        if (!empty($this->unionPay)) {
            $json['union_pay']        = $this->unionPay['value'];
        }
        if (!empty($this->privateLabel)) {
            $json['private_label']    = $this->privateLabel['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
