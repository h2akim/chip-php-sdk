<?php

namespace Chip;

use Http\Client\Common\HttpMethodsClient;
use Laravie\Codex\Discovery;

class Client
{
    public static function makeCollect(string $apiKey, ?HttpMethodsClient $httpClient)
    {
        return new Collect($httpClient ?? Discovery::client(), $apiKey);
    }

    public static function makeSend(string $apiKey, ?string $apiSecret, ?HttpMethodsClient $httpClient)
    {
        return new Send($httpClient ?? Discovery::client(), $apiKey, $apiSecret);
    }
}