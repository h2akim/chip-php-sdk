<?php

declare(strict_types=1);

namespace Chip\Services\Collect;

use Chip\Services\Common\BaseRequest;
use Laravie\Codex\Contracts\Endpoint;

/**
 * @property \Chip\Collect $client
 */
class Request extends BaseRequest
{
    
    /**
     * Get URI Endpoint.
     *
     * @param  array<int, string>|string  $path
     */
    protected function getApiEndpoint($path = []): Endpoint
    {
        $paths = is_array($path) ? $path : [$path];

        array_unshift($paths, $this->getVersion());

        return parent::getApiEndpoint($paths);
    }

    protected function getApiHeaders(): array
    {
        $headers = [];
        if (! \is_null($this->client->getApiKey())) {
            $headers['Authorization'] = 'Bearer ' . $this->client->getApiKey();
        }

        return $headers;
    }
}
