<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay;

/**
 * Interface for defining the behavior of Authentication.
 */
interface BearerAuthCredentials
{
    /**
     * String value for secretKey.
     */
    public function getSecretKey(): string;

    /**
     * String value for jwtToken.
     */
    public function getJwtToken(): string;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $secretKey The secret key to use, together with jwtToken, for API requests.
     * @param string $jwtToken The JWT token to use, together with secretKey, for API requests.
     */
    public function equals(string $secretKey, string $jwtToken): bool;
}
