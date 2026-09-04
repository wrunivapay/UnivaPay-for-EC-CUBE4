<?php

declare(strict_types=1);

/*
 * UnivapayClientSdk
 *
 * This file was automatically generated for Univapay by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace UnivaPay\Tests\Events\Webhooks;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use UnivaPay\Events\Webhooks\TokenHandler;
use UnivaPay\Models\TokenWebhookEvent;

class TokenHandlerTest extends TestCase
{
    public function testTokenCreated()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"token_created","data":{"id":"6426bbd2-17bd-41bf-883b-1fe970db48ee","store_id":"fc264608-9a9e-495e-844e-a08129a81af4","email":"test@univapay.com","payment_type":"card","active":true,"mode":"live","type":"recurring","confirmed":true,"metadata":{"customer_id":"cust_12345"},"created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:35:50.000000Z","data":{"card":{"cardholder":"TARO YAMADA","exp_month":12,"exp_year":2026,"brand":"visa","last_four":"4242","card_bin":"card_bin0","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"cvv_authorize":{"enabled":true,"status":"current","charge_id":null,"credentials_id":null,"currency":"JPY","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"billing":null,"cvv_authorize_check":null,"three_ds":null,"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof TokenWebhookEvent);
    }

    public function testTokenUpdated()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"token_updated","data":{"id":"6426bbd2-17bd-41bf-883b-1fe970db48ee","store_id":"fc264608-9a9e-495e-844e-a08129a81af4","email":"test@univapay.com","payment_type":"card","active":true,"mode":"live","type":"recurring","confirmed":true,"metadata":{"customer_id":"cust_12345"},"created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:35:50.000000Z","data":{"card":{"cardholder":"TARO YAMADA","exp_month":12,"exp_year":2026,"brand":"visa","last_four":"4242","card_bin":"card_bin0","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"cvv_authorize":{"enabled":true,"status":"current","charge_id":null,"credentials_id":null,"currency":"JPY","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"billing":null,"cvv_authorize_check":null,"three_ds":null,"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof TokenWebhookEvent);
    }

    public function testTokenThreeDsUpdated()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"token_three_d_s_updated","data":{"id":"6426bbd2-17bd-41bf-883b-1fe970db48ee","store_id":"fc264608-9a9e-495e-844e-a08129a81af4","email":"test@univapay.com","payment_type":"card","active":true,"mode":"live","type":"recurring","confirmed":true,"metadata":{"customer_id":"cust_12345"},"created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:35:50.000000Z","data":{"card":{"cardholder":"TARO YAMADA","exp_month":12,"exp_year":2026,"brand":"visa","last_four":"4242","card_bin":"card_bin0","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"cvv_authorize":{"enabled":true,"status":"current","charge_id":null,"credentials_id":null,"currency":"JPY","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"billing":null,"cvv_authorize_check":null,"three_ds":null,"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof TokenWebhookEvent);
    }

    public function testTokenCvvAuthUpdated()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"token_cvv_auth_updated","data":{"id":"6426bbd2-17bd-41bf-883b-1fe970db48ee","store_id":"fc264608-9a9e-495e-844e-a08129a81af4","email":"test@univapay.com","payment_type":"card","active":true,"mode":"live","type":"recurring","confirmed":true,"metadata":{"customer_id":"cust_12345"},"created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:35:50.000000Z","data":{"card":{"cardholder":"TARO YAMADA","exp_month":12,"exp_year":2026,"brand":"visa","last_four":"4242","card_bin":"card_bin0","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"cvv_authorize":{"enabled":true,"status":"current","charge_id":null,"credentials_id":null,"currency":"JPY","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"billing":null,"cvv_authorize_check":null,"three_ds":null,"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof TokenWebhookEvent);
    }

    public function testTokenCvvAuthCheckUpdated()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"token_cvv_auth_check_updated","data":{"id":"6426bbd2-17bd-41bf-883b-1fe970db48ee","store_id":"fc264608-9a9e-495e-844e-a08129a81af4","email":"test@univapay.com","payment_type":"card","active":true,"mode":"live","type":"recurring","confirmed":true,"metadata":{"customer_id":"cust_12345"},"created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:35:50.000000Z","data":{"card":{"cardholder":"TARO YAMADA","exp_month":12,"exp_year":2026,"brand":"visa","last_four":"4242","card_bin":"card_bin0","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"cvv_authorize":{"enabled":true,"status":"current","charge_id":null,"credentials_id":null,"currency":"JPY","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"billing":null,"cvv_authorize_check":null,"three_ds":null,"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof TokenWebhookEvent);
    }

    public function testTokenReplaced()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"token_replaced","data":{"id":"6426bbd2-17bd-41bf-883b-1fe970db48ee","store_id":"fc264608-9a9e-495e-844e-a08129a81af4","email":"test@univapay.com","payment_type":"card","active":true,"mode":"live","type":"recurring","confirmed":true,"metadata":{"customer_id":"cust_12345"},"created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:35:50.000000Z","data":{"card":{"cardholder":"TARO YAMADA","exp_month":12,"exp_year":2026,"brand":"visa","last_four":"4242","card_bin":"card_bin0","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"cvv_authorize":{"enabled":true,"status":"current","charge_id":null,"credentials_id":null,"currency":"JPY","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"billing":null,"cvv_authorize_check":null,"three_ds":null,"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof TokenWebhookEvent);
    }

    public function testRecurringTokenDeleted()
    {
        $payload = '{"id":"11ef0000-0000-4000-8000-000000000001","event":"recurring_token_deleted","data":{"id":"6426bbd2-17bd-41bf-883b-1fe970db48ee","store_id":"fc264608-9a9e-495e-844e-a08129a81af4","email":"test@univapay.com","payment_type":"card","active":true,"mode":"live","type":"recurring","confirmed":true,"metadata":{"customer_id":"cust_12345"},"created_on":"2026-04-09T07:35:50.000000Z","updated_on":"2026-04-09T07:35:50.000000Z","data":{"card":{"cardholder":"TARO YAMADA","exp_month":12,"exp_year":2026,"brand":"visa","last_four":"4242","card_bin":"card_bin0","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"cvv_authorize":{"enabled":true,"status":"current","charge_id":null,"credentials_id":null,"currency":"JPY","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"billing":null,"cvv_authorize_check":null,"three_ds":null,"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"exampleAdditionalProperty":{"key1":"val1","key2":"val2"}},"created_on":"2026-04-09T07:35:50.000000Z","exampleAdditionalProperty":{"key1":"val1","key2":"val2"}}';
        $result = self::parsePayload($payload);
        $this->assertTrue($result instanceof TokenWebhookEvent);
    }

    private function parsePayload(string $payload)
    {
        $request = new Request([], [], [], [], [], [], $payload);
        return TokenHandler::parseEvent($request);
    }
}
