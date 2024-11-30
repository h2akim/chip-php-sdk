<?php

namespace Chip\Services\Send;

class Checksum
{
    public static function create(string $apiKey, string $apiSecret)
    {
        $data = sprintf("%s%s", time(), $apiKey);
        return hash_hmac('sha512', $data, $apiSecret);
    }
}