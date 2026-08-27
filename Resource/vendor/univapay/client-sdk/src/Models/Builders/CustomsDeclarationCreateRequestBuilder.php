<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Models\Builders;

use Core\Utils\CoreHelper;
use UnivaPay\Models\CustomsDeclarationCreateRequest;

/**
 * Builder for model CustomsDeclarationCreateRequest
 *
 * @see CustomsDeclarationCreateRequest
 */
class CustomsDeclarationCreateRequestBuilder
{
    /**
     * @var CustomsDeclarationCreateRequest
     */
    private $instance;

    private function __construct(CustomsDeclarationCreateRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Declaration Create Request Builder object.
     *
     * @param string $customs
     * @param string $merchantCustomsNo
     * @param string $certificateId
     * @param string $certificateName
     */
    public static function init(
        string $customs,
        string $merchantCustomsNo,
        string $certificateId,
        string $certificateName
    ): self {
        return new self(
            new CustomsDeclarationCreateRequest($customs, $merchantCustomsNo, $certificateId, $certificateName)
        );
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
     * Initializes a new Customs Declaration Create Request object.
     */
    public function build(): CustomsDeclarationCreateRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
