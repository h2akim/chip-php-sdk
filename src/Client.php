<?php

declare(strict_types=1);

namespace Chip;

use Http\Client\Common\HttpMethodsClient;
use Laravie\Codex\Discovery;

class Client
{
    public static function makeCollect(string|Config $apiKey, ?HttpMethodsClient $httpClient = null): Collect
    {
        $config = $apiKey instanceof Config ? $apiKey : Config::collect($apiKey);
        return new Collect($httpClient ?? Discovery::client(), $config);
    }

    public static function makeSend(
        string|Config $apiKey,
        ?string $apiSecret = null,
        ?HttpMethodsClient $httpClient = null
    ): Send
    {
        if ($apiKey instanceof Config) {
            $config = $apiKey;
        } else {
            if ($apiSecret === null) {
                throw new \InvalidArgumentException('API secret is required for Send client.');
            }
            $config = Config::send($apiKey, $apiSecret);
        }

        return new Send($httpClient ?? Discovery::client(), $config);
    }
}
