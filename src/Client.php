<?php

declare(strict_types=1);

namespace Chip;

use Http\Client\Common\HttpMethodsClientInterface;
use Laravie\Codex\Discovery;

class Client
{
    /**
     * @param string|Config $apiKey
     */
    public static function makeCollect($apiKey, ?HttpMethodsClientInterface $httpClient = null): Collect
    {
        $config = $apiKey instanceof Config ? $apiKey : Config::collect($apiKey);
        return new Collect($httpClient ?? Discovery::client(), $config);
    }

    /**
     * @param string|Config $apiKey
     */
    public static function makeSend(
        $apiKey,
        ?string $apiSecret = null,
        ?HttpMethodsClientInterface $httpClient = null
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
