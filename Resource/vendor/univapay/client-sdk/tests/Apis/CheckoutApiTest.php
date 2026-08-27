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
use UnivaPay\Apis\CheckoutApi;

class CheckoutApiTest extends BaseTestController
{
    /**
     * @var CheckoutApi CheckoutApi instance
     */
    protected static $controller;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass(): void
    {
        self::$controller = parent::getClient()->getCheckoutApi();
    }

    public function testGetCheckoutInfo()
    {
        // Perform API call
        $result = self::$controller->getCheckoutInfo()->getResult();

        $headers = [];
        $headers['Content-Type'] = ['application/json', true];

        // Assert result with expected response
        $this->newTestCase($result)
            ->expectStatus(200)
            ->allowExtraHeaders()
            ->expectHeaders($headers)
            ->bodyMatcher(KeysBodyMatcher::init(TestParam::object(
                '{"mode":"test","recurring_token_privilege":"none","name":"Test store","card_co' .
                'nfiguration":{"enabled":true,"debit_enabled":true,"prepaid_enabled":true,"debit' .
                '_authorization_enabled":false,"prepaid_authorization_enabled":false,"only_direc' .
                't_currency":false,"forbidden_card_brands":null,"allowed_countries_by_ip":null,"' .
                'foreign_cards_allowed":true,"fail_on_new_email":null,"card_limit":null,"allow_e' .
                'mpty_cvv":null,"allow_direct_token_creation":true,"three_ds_required":false,"th' .
                'ree_ds_address_required":false,"three_ds_skip_enabled":false,"three_ds_phone_nu' .
                'mber_required":true},"subscription_configuration":{"enabled":true},"installment' .
                's_configuration":{"enabled":true,"card_processor":{"revolving":true,"fixed_cycl' .
                'e":true},"supported_payment_types":["card"],"min_charge_amount":{"amount":1000,' .
                '"amount_formatted":1000,"currency":"JPY"},"max_payout_period":"P2Y","only_with_' .
                'processor":true},"subscription_plan_configuration":{"enabled":true,"fixed_cycle' .
                '":true,"fixed_cycle_amount":true,"supported_payment_types":["card"],"min_charge' .
                '_amount":null,"max_payout_period":null},"checkout_configuration":{"ec_email":{"' .
                'enabled":false},"ec_products":{"enabled":false}},"qr_scan_configuration":{"enab' .
                'led":true,"forbidden_qr_scan_gateways":null},"convenience_configuration":{"enab' .
                'led":true,"expiration":"PT720H","expiration_time_shift":{"enabled":false}},"pai' .
                'dy_configuration":{"enabled":true},"paidy_public_key":null,"logo_image":null,"t' .
                'heme":{"colors":{"main_background":"#FFFFFF","secondary_background":"#F5F8FC","' .
                'main_color":"#4C5F85","main_text":"#FFFFFF","primary_text":"#4C5F85","secondary' .
                '_text":"#4C5F85","base_text":"#4C5F85","body_background":"#FFFFFF"}},"recurring' .
                '_card_charge_cvv_confirmation":{"enabled":false,"threshold":null},"online_confi' .
                'guration":{"enabled":true},"bank_transfer_configuration":{"enabled":true,"match' .
                '_amount":"disabled","expiration":"PT72H","expiration_time_shift":{"enabled":fal' .
                'se},"virtual_bank_accounts_threshold":5,"virtual_bank_accounts_fetch_count":10,' .
                '"default_extension_period":"PT168H","maximum_extension_period":"PT168H","automa' .
                'tic_extension_enabled":false,"charge_request_notification_enabled":false,"charg' .
                'e_request_canceled_notification_enabled":false,"charge_expired_notification_ena' .
                'bled":false,"deposit_received_notification_enabled":false,"deposit_insufficient' .
                '_notification_enabled":false,"deposit_exceeded_notification_enabled":false,"ext' .
                'ension_notification_enabled":false,"remind_notification_period":"PT168H","remin' .
                'd_notification_enabled":false},"supported_brands":[{"payment_type":"card","bran' .
                'd":"visa","card_brand":"visa","dynamic_info":false,"support_auth_capture":true,' .
                '"requires_full_name":false,"requires_cvv":true,"countries_allowed":null,"suppor' .
                'ted_currencies":null,"cvv_auth":false,"installment_capable":true,"mcp_capable":' .
                'false,"mcp_only":false},{"payment_type":"qr_merchant","brand":"alipay_merchant_' .
                'qr","qr_brand":"alipay_merchant_qr","dynamic_info":false,"support_auth_capture"' .
                ':false,"requires_full_name":false,"requires_cvv":false,"countries_allowed":null' .
                ',"supported_currencies":null,"cvv_auth":false,"installment_capable":false,"mcp_' .
                'capable":false,"mcp_only":false}]}'
            )))
            ->assert();
    }
}
