<?php

declare(strict_types=1);

namespace Chip\Tests;

use Chip\Client;
use Chip\Config;
use Chip\Services\Send\Checksum;
use Chip\Tests\Support\FakeHttpMethodsClient;
use PHPUnit\Framework\TestCase;

class SendClientTest extends TestCase
{
    public function test_webhook_list_sets_auth_and_checksum_headers(): void
    {
        $http = new FakeHttpMethodsClient();
        $send = Client::makeSend(Config::send('api-key', 'api-secret'), null, $http);

        $send->webhook()->list();

        $call = $http->lastCall();
        $headers = $call['headers'];

        $this->assertSame('GET', $call['method']);
        $this->assertSame('https://api.chip-in.asia/api/webhooks', (string) $call['uri']);
        $this->assertSame('Bearer api-key', $headers['Authorization']);
        $this->assertArrayHasKey('epoch', $headers);
        $this->assertArrayHasKey('checksum', $headers);
        $this->assertSame(
            Checksum::create((int) $headers['epoch'], 'api-key', 'api-secret'),
            $headers['checksum']
        );
    }

    public function test_sandbox_endpoint_is_used_when_enabled(): void
    {
        $http = new FakeHttpMethodsClient();
        $config = Config::send('api-key', 'api-secret')->withSandbox(true);
        $send = Client::makeSend($config, null, $http);

        $send->account()->list();

        $call = $http->lastCall();

        $this->assertSame('https://staging-api.chip-in.asia/api/send/accounts/', (string) $call['uri']);
    }

    public function test_make_send_requires_secret(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $http = new FakeHttpMethodsClient();
        Client::makeSend('api-key', null, $http);
    }
}
