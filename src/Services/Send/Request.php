<?php

namespace Chip\Services\Send;

use Chip\Services\Send\Response;
use Laravie\Codex\Contracts\Endpoint;
use Laravie\Codex\Contracts\Filterable;
use Laravie\Codex\Contracts\Response as ContractsResponse;
use Laravie\Codex\Filter\Sanitizer;
use Laravie\Codex\Filter\WithSanitizer;
use Psr\Http\Message\ResponseInterface;

/**
 * @property \Chip\Send $client
 */
class Request extends \Laravie\Codex\Request implements Filterable
{
    use WithSanitizer;

    protected function getApiHeaders(): array
    {
        $epoch = time();

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'epoch' => $epoch,
            'checksum' => Checksum::create($epoch, $this->client->getApiKey(), $this->client->getSecretKey()),
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