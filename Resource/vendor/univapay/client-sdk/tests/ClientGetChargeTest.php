<?php

declare(strict_types=1);

/*
 * Custom test (not auto-generated): pins getCharge($chargeId) -- the
 * store-scoped convenience call that reads the store id from the configured App
 * Token instead of making the caller pass (and persist) one.
 *
 * Two things are guarded here.
 *
 * First the *guard*: when the configured token carries no usable store_id, the
 * call must fail before a request is built. Interpolating a missing id would
 * send GET /stores//charges/{id} -- a confusing 4xx instead of a clear
 * client-side failure -- so the failure cases assert not just the throw but
 * that the controller was never reached.
 *
 * Second the *delegation*: on the happy path this must behave exactly like
 * ChargesApi::getCharge($storeId, $chargeId, $polling), forwarding every
 * argument and returning the response untouched. Anything else and the shortcut
 * would be a second, subtly different way to fetch a charge.
 *
 * Everything here is synthetic and offline -- no network, no environment, no
 * real credential. The controller is replaced with a PHPUnit double injected
 * over the client's private $charges field, which is the seam this SDK offers.
 *
 * Note the SDK test harness injects UNIVAPAY_CLIENT_SDK_JWT_TOKEN=test-jwt,
 * which is not a JWT at all, so a test resting on an env-built client would
 * silently exercise only the failure path. Hence the locally built clients.
 *
 * Seven SDKs are expected to share this contract; keep the case table aligned
 * when porting.
 */

namespace UnivaPay\Tests;

use PHPUnit\Framework\TestCase;
use ReflectionProperty;
use RuntimeException;
use UnivaPay\Apis\ChargesApi;
use UnivaPay\Authentication\BearerAuthCredentialsBuilder;
use UnivaPay\Http\ApiResponse;
use UnivaPay\UnivapayClientSdkClient;
use UnivaPay\UnivapayClientSdkClientBuilder;

class ClientGetChargeTest extends TestCase
{
    private const MERCHANT_ID = '11ec8e24-0ecf-2c5a-923c-331b915dc311';
    private const STORE_ID = '11ec8e24-b133-6c68-b54d-971717202e9b';
    private const CHARGE_ID = '11ec8e24-c5f5-6f2e-b9b0-1f4d3c6a9e10';

    /** Builds a JWT carrying $claims. Header and signature are inert. */
    private static function jwt(array $claims): string
    {
        $encode = function (string $bytes): string {
            return rtrim(strtr(base64_encode($bytes), '+/', '-_'), '=');
        };

        return $encode('{"alg":"HS256","typ":"JWT"}') . '.'
            . $encode(json_encode($claims)) . '.c2ln';
    }

    private static function storeToken(): string
    {
        return self::jwt([
            'merchant_id' => self::MERCHANT_ID,
            'store_id' => self::STORE_ID,
        ]);
    }

    private static function merchantToken(): string
    {
        return self::jwt(['merchant_id' => self::MERCHANT_ID]);
    }

    private static function clientWith(?string $jwtToken): UnivapayClientSdkClient
    {
        $builder = UnivapayClientSdkClientBuilder::init();
        if ($jwtToken !== null) {
            $builder->bearerAuthCredentials(
                BearerAuthCredentialsBuilder::init('not-a-real-secret', $jwtToken)
            );
        }

        return $builder->build();
    }

    /** Puts a double in place of the generated controller, so no HTTP is issued. */
    private function watch(UnivapayClientSdkClient $client): ChargesApi
    {
        $double = $this->createMock(ChargesApi::class);
        $field = new ReflectionProperty(UnivapayClientSdkClient::class, 'charges');
        $field->setAccessible(true);
        $field->setValue($client, $double);

        return $double;
    }

    // ── The guard: no usable store_id ────────────────────────────────────────

    /**
     * @dataProvider tokensWithoutAStore
     */
    public function testThrowsAndIssuesNoRequest(?string $jwtToken): void
    {
        $client = self::clientWith($jwtToken);
        $double = $this->watch($client);
        $double->expects($this->never())->method('getCharge');

        $this->assertNull($client->getCurrentStoreId(), 'precondition: no store id');

        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessageMatches('/store-level App Token/');
        $client->getCharge(self::CHARGE_ID);
    }

    public static function tokensWithoutAStore(): array
    {
        return [
            'a merchant-level token' => [self::merchantToken()],
            'no configured credentials' => [null],
            'a malformed token' => ['not.a-jwt'],
            'a store_id that is not a UUID' => [self::jwt([
                'merchant_id' => self::MERCHANT_ID,
                'store_id' => 'store-1',
            ])],
        ];
    }

    public function testNeverPutsTheCredentialInTheMessage(): void
    {
        $client = self::clientWith(self::merchantToken());
        $this->watch($client);

        try {
            $client->getCharge(self::CHARGE_ID);
            $this->fail('expected RuntimeException');
        } catch (RuntimeException $e) {
            $message = $e->getMessage();
            $this->assertStringContainsString('getCharge(storeId, chargeId)', $message);
            $this->assertStringNotContainsString(self::merchantToken(), $message);
            $this->assertStringNotContainsString(self::MERCHANT_ID, $message);
            $this->assertStringNotContainsString(self::STORE_ID, $message);
        }
    }

    // ── The delegation: store id taken from the token ────────────────────────

    public function testDelegatesWithTheStoreIdFromTheToken(): void
    {
        $client = self::clientWith(self::storeToken());
        $response = $this->createMock(ApiResponse::class);
        $double = $this->watch($client);
        $double->expects($this->once())
            ->method('getCharge')
            ->with(self::STORE_ID, self::CHARGE_ID, null)
            ->willReturn($response);

        $this->assertSame($response, $client->getCharge(self::CHARGE_ID));
    }

    public function testForwardsThePollingFlag(): void
    {
        $client = self::clientWith(self::storeToken());
        $double = $this->watch($client);
        $double->expects($this->once())
            ->method('getCharge')
            ->with(self::STORE_ID, self::CHARGE_ID, true)
            ->willReturn($this->createMock(ApiResponse::class));

        $client->getCharge(self::CHARGE_ID, true);
    }

    public function testReusesOneControllerAcrossCalls(): void
    {
        $client = self::clientWith(self::storeToken());

        $this->assertSame($client->getChargesApi(), $client->getChargesApi());
    }
}
