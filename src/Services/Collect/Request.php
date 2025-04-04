<?php

namespace Chip\Services\Collect;

use Chip\Services\Collect\Response;
use Chip\Services\Collect\Sanitizer as CollectSanitizer;
use Laravie\Codex\Contracts\Endpoint;
use Laravie\Codex\Contracts\Filterable;
use Laravie\Codex\Contracts\Response as ContractsResponse;
use Laravie\Codex\Filter\Sanitizer;
use Laravie\Codex\Filter\WithSanitizer;
use Laravie\Codex\Support\Versioning;
use Psr\Http\Message\ResponseInterface;

/**
 * @property \Chip\Collect $client
 */
class Request extends \Laravie\Codex\Request implements Filterable
{
    use WithSanitizer;
    
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
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];

        if (! \is_null($this->client->getApiKey())) {
            $headers['Authorization'] = 'Bearer ' . $this->client->getApiKey();
        }

        return $headers;
    }

    /**
     * Resolve reponse class
     * @param ResponseInterface $message 
     * @return Response 
     */
    protected function responseWith(ResponseInterface $message): ContractsResponse
    {
        return new Response($message);
    }

    protected function sanitizeWith(): Sanitizer
    {
        return new Sanitizer();
    }
}