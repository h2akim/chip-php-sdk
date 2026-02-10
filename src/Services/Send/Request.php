<?php

declare(strict_types=1);

namespace Chip\Services\Send;

use Chip\Exceptions\InvalidArgumentException;
use Chip\Services\Common\BaseRequest;

/**
 * @property \Chip\Send $client
 */
class Request extends BaseRequest
{

    protected function getApiHeaders(): array
    {
        if ($this->client->getApiKey() === null) {
            throw new InvalidArgumentException('API key is required for Send requests.');
        }
        if ($this->client->getSecretKey() === null) {
            throw new InvalidArgumentException('API secret is required for Send requests.');
        }

        $epoch = time();

        $headers = [
            'epoch' => $epoch,
            'checksum' => Checksum::create($epoch, $this->client->getApiKey(), $this->client->getSecretKey()),
        ];

        if (! \is_null($this->client->getApiKey())) {
            $headers['Authorization'] = 'Bearer ' . $this->client->getApiKey();
        }

        return $headers;
    }
}
