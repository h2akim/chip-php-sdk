<?php

namespace Chip\Services\Send;

class Checksum
{
    public static function create(int $epoch, string $apiKey, string $apiSecret)
    {
        $data = sprintf("%s%s", $epoch, $apiKey);
        return hash_hmac('sha512', $data, $apiSecret);
    }
}