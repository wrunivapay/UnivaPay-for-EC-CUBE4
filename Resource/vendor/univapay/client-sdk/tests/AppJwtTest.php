<?php

declare(strict_types=1);

/*
 * Custom test (not auto-generated): pins the App Token claim-decoding contract
 * behind getCurrentMerchantId() / getCurrentStoreId().
 *
 * This contract is implemented seven times -- once per SDK -- and has already
 * drifted twice: the Python SDK accepted non-canonical UUIDs that the others
 * rejected, and the TypeScript SDK rejected a payload segment carrying '='
 * padding that the others accepted. Neither was caught by a test, because none
 * existed.
 *
 * So the cases below are deliberately a *shared table*: keep them identical in
 * all seven SDKs. The failure being guarded against is the languages disagreeing
 * with each other, which no single-language suite can see.
 *
 * Everything here is synthetic and offline -- no network, no environment, no
 * real credential. It must pass in CI, where no token is configured.
 */

namespace UnivaPay\Tests;

use PHPUnit\Framework\TestCase;
use UnivaPay\Authentication\BearerAuthCredentialsBuilder;
use UnivaPay\UnivapayClientSdkClient;
use UnivaPay\UnivapayClientSdkClientBuilder;

class AppJwtTest extends TestCase
{
    private const MERCHANT_ID = '11ec8e24-0ecf-2c5a-923c-331b915dc311';
    private const STORE_ID = '11ec8e24-b133-6c68-b54d-971717202e9b';

    private static function base64url(string $bytes, bool $padded = false): string
    {
        $encoded = strtr(base64_encode($bytes), '+/', '-_');

        return $padded ? $encoded : rtrim($encoded, '=');
    }

    /** Builds a JWT carrying $claims. Header and signature are inert. */
    private static function jwt(array $claims, bool $padded = false): string
    {
        $header = self::base64url('{"alg":"HS256","typ":"JWT"}');

        return $header . '.' . self::base64url(json_encode($claims), $padded) . '.c2ln';
    }

    /** Builds a JWT whose payload segment is $payload, base64url-encoded. */
    private static function rawJwt(string $payload): string
    {
        return 'aGRy.' . self::base64url($payload) . '.c2ln';
    }

    private static function clientWith(string $jwtToken): UnivapayClientSdkClient
    {
        return UnivapayClientSdkClientBuilder::init()
            ->bearerAuthCredentials(
                BearerAuthCredentialsBuilder::init('not-a-real-secret', $jwtToken)
            )
            ->build();
    }

    public function testReadsBothIdsFromStoreLevelToken(): void
    {
        $client = self::clientWith(self::jwt([
            'merchant_id' => self::MERCHANT_ID,
            'store_id' => self::STORE_ID,
        ]));

        $this->assertSame(self::MERCHANT_ID, $client->getCurrentMerchantId());
        $this->assertSame(self::STORE_ID, $client->getCurrentStoreId());
    }

    public function testReadsMerchantFromMerchantLevelTokenAndReportsNoStore(): void
    {
        // A merchant-level token carries no store_id claim at all. Null here is
        // the correct answer, not a decoding failure.
        $client = self::clientWith(self::jwt(['merchant_id' => self::MERCHANT_ID]));

        $this->assertSame(self::MERCHANT_ID, $client->getCurrentMerchantId());
        $this->assertNull($client->getCurrentStoreId());
    }

    public function testAcceptsPayloadSegmentThatCarriesPadding(): void
    {
        // The TypeScript SDK once rejected exactly this, making it the only one
        // of the seven to return null for a padded -- but still valid -- token.
        $client = self::clientWith(self::jwt([
            'merchant_id' => self::MERCHANT_ID,
            'store_id' => self::STORE_ID,
        ], true));

        $this->assertSame(self::MERCHANT_ID, $client->getCurrentMerchantId());
        $this->assertSame(self::STORE_ID, $client->getCurrentStoreId());
    }

    /**
     * @dataProvider unusableInputProvider
     */
    public function testReturnsNullNeverThrowsForUnusableInput(string $token): void
    {
        $this->assertNull(self::clientWith($token)->getCurrentStoreId());
    }

    public static function unusableInputProvider(): array
    {
        return [
            'a claim that is JSON null' => [self::jwt(['store_id' => null])],
            'a claim that is not a string' => [self::jwt(['store_id' => 42])],
            'an undashed 32-character UUID' => [self::jwt(['store_id' => str_replace('-', '', self::STORE_ID)])],
            'a braced UUID' => [self::jwt(['store_id' => '{' . self::STORE_ID . '}'])],
            'a urn:uuid: prefixed UUID' => [self::jwt(['store_id' => 'urn:uuid:' . self::STORE_ID])],
            'short hex groups (1-1-1-1-1)' => [self::jwt(['store_id' => '1-1-1-1-1'])],
            'a UUID with a trailing newline' => [self::jwt(['store_id' => self::STORE_ID . "\n"])],
            'a UUID padded with spaces' => [self::jwt(['store_id' => ' ' . self::STORE_ID . ' '])],
            'a two-segment token' => ['aGRy.c2ln'],
            'a payload that is not base64url' => ['aGRy.!!!!.c2ln'],
            'a payload that is a JSON array' => [self::rawJwt('[1,2]')],
            'a payload that is not JSON' => [self::rawJwt('definitely not json')],
            'an empty string' => [''],
            // The Authorization header value is {secret}.{jwt} -- four segments
            // once split. Pasting that whole value into the jwtToken field is the
            // mistake the guide warns about, and it must degrade to null, not to
            // a wrong id.
            'the combined {secret}.{jwt} header value' => ['c2VjcmV0.' . self::jwt(['store_id' => self::STORE_ID])],
        ];
    }

    public function testReturnsNullWhenNoCredentialsConfigured(): void
    {
        $client = UnivapayClientSdkClientBuilder::init()->build();

        $this->assertNull($client->getCurrentMerchantId());
        $this->assertNull($client->getCurrentStoreId());
    }
}
