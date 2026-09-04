<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Tests;

use Core\Types\CallbackCatcher;
use UnivaPay\Authentication\BearerAuthCredentialsBuilder;
use UnivaPay\UnivapayClientSdkClient;
use UnivaPay\UnivapayClientSdkClientBuilder;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): UnivapayClientSdkClient
    {
        $clientBuilder = UnivapayClientSdkClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(
        UnivapayClientSdkClientBuilder $builder
    ): UnivapayClientSdkClientBuilder {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        UnivapayClientSdkClientBuilder $builder
    ): UnivapayClientSdkClientBuilder {
        $timeout = getenv('UNIVAPAY_CLIENT_SDK_TIMEOUT');
        $numberOfRetries = getenv('UNIVAPAY_CLIENT_SDK_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('UNIVAPAY_CLIENT_SDK_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('UNIVAPAY_CLIENT_SDK_ENVIRONMENT');
        $baseUrl = getenv('UNIVAPAY_CLIENT_SDK_BASE_URL');
        $directDebitBaseUrl = getenv('UNIVAPAY_CLIENT_SDK_DIRECT_DEBIT_BASE_URL');
        $accessToken = getenv('UNIVAPAY_CLIENT_SDK_ACCESS_TOKEN');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($numberOfRetries) && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if (!empty($maximumRetryWaitTime) && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        if (!empty($baseUrl)) {
            $builder->baseUrl($baseUrl);
        }

        if (!empty($directDebitBaseUrl)) {
            $builder->directDebitBaseUrl($directDebitBaseUrl);
        }

        if (!empty($accessToken)) {
            $builder->bearerAuthCredentials(BearerAuthCredentialsBuilder::init($accessToken));
        }

        // Hand-authored: BearerAuthCredentialsBuilder::init() takes a secret key and a
        // JWT token in this SDK, so the generated single-token branch above never fires
        // (UNIVAPAY_CLIENT_SDK_ACCESS_TOKEN is not set by scripts/test-sdks.sh). Appended
        // here rather than rewriting that branch, which sits beside the lines codegen
        // rewrites whenever the server list changes.
        $secretKey = getenv('UNIVAPAY_CLIENT_SDK_SECRET_KEY');
        $jwtToken = getenv('UNIVAPAY_CLIENT_SDK_JWT_TOKEN');
        if (!empty($secretKey) && !empty($jwtToken)) {
            $builder->bearerAuthCredentials(BearerAuthCredentialsBuilder::init($secretKey, $jwtToken));
        }

        return $builder;
    }
}
