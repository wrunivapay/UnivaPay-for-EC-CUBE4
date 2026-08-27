<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Tests\Apis;

use Core\TestCase\BodyMatchers\KeysBodyMatcher;
use Core\TestCase\TestParam;
use UnivaPay\Apis\MerchantsApi;

class MerchantsApiTest extends BaseTestController
{
    /**
     * @var MerchantsApi MerchantsApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getMerchantsApi();
    }

    public function testGetCurrentMerchant()
    {
        // Perform API call
        $result = self::$controller->getCurrentMerchant()->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"id":"11ef0000-0000-4000-8000-000000000020","verification_data_id":"11ef0000-' .
                '0000-4000-8000-000000000021","name":"Example Merchant","email":"owner@example.c' .
                'om","notification_email":"alerts@example.com","finance_notification_email":"fin' .
                'ance@example.com","verified":true,"configuration":{"percent_fee":3.6,"country":' .
                '"JP","language":"ja","minimum_charge_amounts":[{"amount":100,"currency":"JPY"}]' .
                ',"maximum_charge_amounts":[{"amount":100000,"currency":"JPY"}],"user_transactio' .
                'ns_configuration":{"enabled":true,"notify_customer":true,"notify_on_webhook_fai' .
                'lure":true},"card_configuration":{"enabled":true,"debit_enabled":true,"prepaid_' .
                'enabled":false,"three_ds_required":true},"online_configuration":{"enabled":true' .
                '},"bank_transfer_configuration":{"enabled":true,"match_amount":true,"expiration' .
                '":"P7D"},"qr_scan_configuration":{"enabled":true,"forbidden_qr_scan_gateways":[' .
                '"wechat"]},"convenience_configuration":{"enabled":true,"expiration":"P3D"},"pai' .
                'dy_configuration":{"enabled":false},"recurring_token_configuration":{"recurring' .
                '_type":"infinite","charge_wait_period":"P7D","card_charge_cvv_confirmation":{"e' .
                'nabled":false}},"security_configuration":{"card_charge_cooldown":"PT5M","subscr' .
                'iption_cooldown":"PT10M","restrict_ip_after_failed_charge":{"enabled":true,"cou' .
                'nt":5,"cooldown":"PT1H"},"refund_percent_limit":100,"confirmation_required":fal' .
                'se,"min_refund_threshold":100,"limit_refund_by_sales":{"enabled":true,"period":' .
                '"monthly","rolling_window":true}},"installments_configuration":{"enabled":true,' .
                '"card_processor":{"revolving":true,"fixed_cycle":true},"supported_payment_types' .
                '":["card"],"min_charge_amount":{"amount":3000,"currency":"JPY"},"max_payout_per' .
                'iod":"P12M","only_with_processor":true},"card_brand_percent_fees":{"visa":3.6,"' .
                'mastercard":3.6,"jcb":3.8}},"created_on":"2026-04-09T07:35:50.000000Z"}'
            )))
            ->assert();
    }
}
