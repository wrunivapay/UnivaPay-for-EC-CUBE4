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
 * Hex colors applied to the checkout widget. Always resolves to the platform defaults shown here when
 * not customized — never `null`.
 */
class CheckoutThemeColors implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $mainBackground;

    /**
     * @var string|null
     */
    private $secondaryBackground;

    /**
     * @var string|null
     */
    private $mainColor;

    /**
     * @var string|null
     */
    private $mainText;

    /**
     * @var string|null
     */
    private $primaryText;

    /**
     * @var string|null
     */
    private $secondaryText;

    /**
     * @var string|null
     */
    private $baseText;

    /**
     * @var string|null
     */
    private $bodyBackground;

    /**
     * Returns Main Background.
     * Main background color.
     */
    public function getMainBackground(): ?string
    {
        return $this->mainBackground;
    }

    /**
     * Sets Main Background.
     * Main background color.
     *
     * @maps main_background
     */
    public function setMainBackground(?string $mainBackground): void
    {
        $this->mainBackground = $mainBackground;
    }

    /**
     * Returns Secondary Background.
     * Secondary background color.
     */
    public function getSecondaryBackground(): ?string
    {
        return $this->secondaryBackground;
    }

    /**
     * Sets Secondary Background.
     * Secondary background color.
     *
     * @maps secondary_background
     */
    public function setSecondaryBackground(?string $secondaryBackground): void
    {
        $this->secondaryBackground = $secondaryBackground;
    }

    /**
     * Returns Main Color.
     * Main accent color.
     */
    public function getMainColor(): ?string
    {
        return $this->mainColor;
    }

    /**
     * Sets Main Color.
     * Main accent color.
     *
     * @maps main_color
     */
    public function setMainColor(?string $mainColor): void
    {
        $this->mainColor = $mainColor;
    }

    /**
     * Returns Main Text.
     * Main text color.
     */
    public function getMainText(): ?string
    {
        return $this->mainText;
    }

    /**
     * Sets Main Text.
     * Main text color.
     *
     * @maps main_text
     */
    public function setMainText(?string $mainText): void
    {
        $this->mainText = $mainText;
    }

    /**
     * Returns Primary Text.
     * Primary text color.
     */
    public function getPrimaryText(): ?string
    {
        return $this->primaryText;
    }

    /**
     * Sets Primary Text.
     * Primary text color.
     *
     * @maps primary_text
     */
    public function setPrimaryText(?string $primaryText): void
    {
        $this->primaryText = $primaryText;
    }

    /**
     * Returns Secondary Text.
     * Secondary text color.
     */
    public function getSecondaryText(): ?string
    {
        return $this->secondaryText;
    }

    /**
     * Sets Secondary Text.
     * Secondary text color.
     *
     * @maps secondary_text
     */
    public function setSecondaryText(?string $secondaryText): void
    {
        $this->secondaryText = $secondaryText;
    }

    /**
     * Returns Base Text.
     * Base text color.
     */
    public function getBaseText(): ?string
    {
        return $this->baseText;
    }

    /**
     * Sets Base Text.
     * Base text color.
     *
     * @maps base_text
     */
    public function setBaseText(?string $baseText): void
    {
        $this->baseText = $baseText;
    }

    /**
     * Returns Body Background.
     * Body background color.
     */
    public function getBodyBackground(): ?string
    {
        return $this->bodyBackground;
    }

    /**
     * Sets Body Background.
     * Body background color.
     *
     * @maps body_background
     */
    public function setBodyBackground(?string $bodyBackground): void
    {
        $this->bodyBackground = $bodyBackground;
    }

    /**
     * Converts the CheckoutThemeColors object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutThemeColors object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutThemeColors',
            [
                'mainBackground' => $this->mainBackground,
                'secondaryBackground' => $this->secondaryBackground,
                'mainColor' => $this->mainColor,
                'mainText' => $this->mainText,
                'primaryText' => $this->primaryText,
                'secondaryText' => $this->secondaryText,
                'baseText' => $this->baseText,
                'bodyBackground' => $this->bodyBackground,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    protected $propertyNames = [
        'main_background',
        'secondary_background',
        'main_color',
        'main_text',
        'primary_text',
        'secondary_text',
        'base_text',
        'body_background'
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
        if (isset($this->mainBackground)) {
            $json['main_background']      = $this->mainBackground;
        }
        if (isset($this->secondaryBackground)) {
            $json['secondary_background'] = $this->secondaryBackground;
        }
        if (isset($this->mainColor)) {
            $json['main_color']           = $this->mainColor;
        }
        if (isset($this->mainText)) {
            $json['main_text']            = $this->mainText;
        }
        if (isset($this->primaryText)) {
            $json['primary_text']         = $this->primaryText;
        }
        if (isset($this->secondaryText)) {
            $json['secondary_text']       = $this->secondaryText;
        }
        if (isset($this->baseText)) {
            $json['base_text']            = $this->baseText;
        }
        if (isset($this->bodyBackground)) {
            $json['body_background']      = $this->bodyBackground;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
