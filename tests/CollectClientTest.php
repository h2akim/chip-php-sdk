<?php

declare(strict_types=1);

namespace Chip\Tests;

use Chip\Client;
use Chip\Config;
use Chip\Tests\Support\FakeHttpMethodsClient;
use PHPUnit\Framework\TestCase;

class CollectClientTest extends TestCase
{
    public function test_purchase_get_builds_versioned_endpoint_and_auth_header(): void
    {
        $http = new FakeHttpMethodsClient();
        $collect = Client::makeCollect(Config::collect('api-key'), $http);

        $collect->purchase()->get('purchase-id');

        $call = $http->lastCall();

        $this->assertSame('GET', $call['method']);
        $this->assertSame('https://gate.chip-in.asia/api/v1/purchases/purchase-id/', (string) $call['uri']);
        $this->assertSame('Bearer api-key', $call['headers']['Authorization']);
        $this->assertSame('application/json', $call['headers']['Content-Type']);
    }

    public function test_payment_method_query_included_in_url(): void
    {
        $http = new FakeHttpMethodsClient();
        $collect = Client::makeCollect(Config::collect('api-key'), $http);

        $collect->paymentMethod()->all('brand-1', ['type' => 'card'], 'MYR');

        $call = $http->lastCall();

        $this->assertSame('GET', $call['method']);
        $this->assertStringContainsString('payment_methods', (string) $call['uri']);
        $this->assertStringContainsString('brand_id=brand-1', (string) $call['uri']);
        $this->assertStringContainsString('currency=MYR', (string) $call['uri']);
        $this->assertStringContainsString('type=card', (string) $call['uri']);
    }

    public function test_custom_base_uri_is_used(): void
    {
        $http = new FakeHttpMethodsClient();
        $config = Config::collect('api-key')->withBaseUri('https://example.test/api');
        $collect = Client::makeCollect($config, $http);

        $collect->publicKey()->get();

        $call = $http->lastCall();

        $this->assertSame('https://example.test/api/v1/public_key/', (string) $call['uri']);
    }
}
