<?php

declare(strict_types=1);

namespace Chip\Services\Send;

class Checksum
{
    public static function create(int $epoch, string $apiKey, string $apiSecret): string
    {
        $data = sprintf("%s%s", $epoch, $apiKey);
        return hash_hmac('sha512', $data, $apiSecret);
    }
}
