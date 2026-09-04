<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay;

use Psr\Log\LogLevel;

/**
 * Default values for the configuration parameters of the client.
 */
class ConfigurationDefaults
{
    public const TIMEOUT = 30;

    public const ENABLE_RETRIES = false;

    public const NUMBER_OF_RETRIES = 0;

    public const RETRY_INTERVAL = 1;

    public const BACK_OFF_FACTOR = 2;

    public const MAXIMUM_RETRY_WAIT_TIME = 0;

    public const RETRY_ON_TIMEOUT = true;

    public const HTTP_STATUS_CODES_TO_RETRY =
        [408, 413, 429, 500, 502, 503, 504, 521, 522, 524, 408, 413, 429, 500, 502, 503, 504, 521, 522, 524];

    public const HTTP_METHODS_TO_RETRY = ['GET', 'PUT', 'GET', 'PUT'];

    public const ENVIRONMENT = Environment::PRODUCTION;

    public const BASE_URL = 'https://api.univapay.com';

    public const DIRECT_DEBIT_BASE_URL = 'https://direct-debit.gopay-services.com';

    public const ACCESS_TOKEN = '';

    public const PROXY_CONFIGURATION = [
        'port' => 0,
        'tunnel' => false,
        'address' => '',
        'auth' => ['user' => '', 'pass' => '', 'method' => CURLAUTH_BASIC]
    ];

    public const LOGGER_ALLOWED_LEVELS = [
        LogLevel::EMERGENCY,
        LogLevel::ALERT,
        LogLevel::CRITICAL,
        LogLevel::ERROR,
        LogLevel::WARNING,
        LogLevel::NOTICE,
        LogLevel::INFO,
        LogLevel::DEBUG
    ];

    public const LOGGER_LEVEL = LogLevel::INFO;

    public const LOGGER_MASK_SENSITIVE_HEADERS = true;

    public const LOGGER_INCLUDE_QUERY_IN_PATH = false;

    public const LOGGER_LOG_BODY = false;

    public const LOGGER_LOG_HEADERS = false;

    public const LOGGER_EXCLUDE_HEADERS = [];

    public const LOGGER_INCLUDE_HEADERS = [];

    public const LOGGER_UNMASK_HEADERS = [];

    /**
     * @var array Associative list of all default configurations
     */
    public const _ALL = [
        'timeout' => self::TIMEOUT,
        'enableRetries' => self::ENABLE_RETRIES,
        'numberOfRetries' => self::NUMBER_OF_RETRIES,
        'retryInterval' => self::RETRY_INTERVAL,
        'backOffFactor' => self::BACK_OFF_FACTOR,
        'maximumRetryWaitTime' => self::MAXIMUM_RETRY_WAIT_TIME,
        'retryOnTimeout' => self::RETRY_ON_TIMEOUT,
        'httpStatusCodesToRetry' => self::HTTP_STATUS_CODES_TO_RETRY,
        'httpMethodsToRetry' => self::HTTP_METHODS_TO_RETRY,
        'environment' => self::ENVIRONMENT,
        'baseUrl' => self::BASE_URL,
        'directDebitBaseUrl' => self::DIRECT_DEBIT_BASE_URL,
        'accessToken' => self::ACCESS_TOKEN,
        'loggingConfiguration' => null,
        'proxyConfiguration' => self::PROXY_CONFIGURATION,
        // Hand-authored: this SDK authenticates with a secret key plus a JWT token
        // rather than the single access token codegen assumes. Appended here rather
        // than replacing the generated ACCESS_TOKEN entry above, because that entry
        // sits directly beside the lines codegen rewrites whenever the server list
        // changes — editing it conflicts on every regeneration.
        'secretKey' => self::SECRET_KEY,
        'jwtToken' => self::JWT_TOKEN
    ];

    public const SECRET_KEY = '';

    public const JWT_TOKEN = '';
}
