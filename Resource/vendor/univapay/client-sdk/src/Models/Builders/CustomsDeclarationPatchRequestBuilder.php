<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationPatchRequest;

/**
 * Builder for model CustomsDeclarationPatchRequest
 *
 * @see CustomsDeclarationPatchRequest
 */
class CustomsDeclarationPatchRequestBuilder
{
    /**
     * @var CustomsDeclarationPatchRequest
     */
    private $instance;

    private function __construct(CustomsDeclarationPatchRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Patch Request Builder object.
     *
     * @param string $merchantCustomsNo
     */
    public static function init(string $merchantCustomsNo): self
    {
        return new self(new CustomsDeclarationPatchRequest($merchantCustomsNo));
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
     * Initializes a new Customs Declaration Patch Request object.
     */
    public function build(): CustomsDeclarationPatchRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
