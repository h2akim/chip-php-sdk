<?php

namespace Chip;

use Laravie\Codex\Discovery;

class Client
{
    public static function useCollect(string $apiKey)
    {
        return new Collect(Discovery::client(), $apiKey);
    }

    public static function useSend(string $apiKey, string $apiSecret = null)
    {
        return new Send(Discovery::client(), $apiKey, $apiSecret);
    }
}