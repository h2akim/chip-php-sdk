<?php

namespace Chip;

use Laravie\Codex\Discovery;

class Client
{
    public static function makeCollect(string $apiKey)
    {
        return new Collect(Discovery::client(), $apiKey);
    }

    public static function makeSend(string $apiKey, ?string $apiSecret)
    {
        return new Send(Discovery::client(), $apiKey, $apiSecret);
    }
}