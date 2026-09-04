<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Authentication;

use Core\Utils\CoreHelper;

/**
 * Utility class for initializing BearerAuth security credentials.
 */
class BearerAuthCredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for BearerAuthCredentialsBuilder
     *
     * @param string $secretKey
     * @param string $jwtToken
     */
    public static function init(string $secretKey, string $jwtToken): self
    {
        return new self(['secretKey' => $secretKey, 'jwtToken' => $jwtToken]);
    }

    /**
     * Setter for SecretKey.
     *
     * @param string $secretKey
     *
     * @return $this
     */
    public function secretKey(string $secretKey): self
    {
        $this->config['secretKey'] = $secretKey;
        return $this;
    }

    /**
     * Setter for JwtToken.
     *
     * @param string $jwtToken
     *
     * @return $this
     */
    public function jwtToken(string $jwtToken): self
    {
        $this->config['jwtToken'] = $jwtToken;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
