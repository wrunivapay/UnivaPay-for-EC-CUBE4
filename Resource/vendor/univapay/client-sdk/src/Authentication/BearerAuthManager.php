<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Authentication;

use Core\Authentication\CoreAuth;
use UnivaPay\ConfigurationDefaults;
use Core\Request\Parameters\HeaderParam;
use Core\Utils\CoreHelper;
use UnivaPay\BearerAuthCredentials;

/**
 * Utility class for authorization and token management.
 */
class BearerAuthManager extends CoreAuth implements BearerAuthCredentials
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        parent::__construct(
            HeaderParam::init(
                'Authorization',
                CoreHelper::getBearerAuthString($this->getSecretKey() . '.' . $this->getJwtToken())
            )->requiredNonEmpty()
        );
    }

    /**
     * String value for secretKey.
     */
    public function getSecretKey(): string
    {
        return $this->config['secretKey'] ?? ConfigurationDefaults::SECRET_KEY;
    }

    /**
     * String value for jwtToken.
     */
    public function getJwtToken(): string
    {
        return $this->config['jwtToken'] ?? ConfigurationDefaults::JWT_TOKEN;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $secretKey The secret key to use, together with jwtToken, for API requests.
     * @param string $jwtToken The JWT token to use, together with secretKey, for API requests.
     */
    public function equals(string $secretKey, string $jwtToken): bool
    {
        return $secretKey == $this->getSecretKey() && $jwtToken == $this->getJwtToken();
    }
}
