<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay;

use CoreInterfaces\Http\HttpConfigurations;
use UnivaPay\Authentication\BearerAuthCredentialsBuilder;
use UnivaPay\Logging\LoggingConfigurationBuilder;
use UnivaPay\Proxy\ProxyConfigurationBuilder;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get base URL for the API
     */
    public function getBaseUrl(): string;

    /**
     * Get base URL for the Direct Debit API
     */
    public function getDirectDebitBaseUrl(): string;

    /**
     * Get the credentials to use with BearerAuth
     */
    public function getBearerAuthCredentials(): BearerAuthCredentials;

    /**
     * Get the credentials builder instance to update credentials for BearerAuth
     */
    public function getBearerAuthCredentialsBuilder(): ?BearerAuthCredentialsBuilder;

    /**
     * Represents the logging configurations for API calls.
     */
    public function getLoggingConfigurationBuilder(): ?LoggingConfigurationBuilder;

    /**
     * Represents the proxy configurations for API calls.
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string;
}
