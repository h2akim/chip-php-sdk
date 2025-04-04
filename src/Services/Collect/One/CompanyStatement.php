<?php

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class CompanyStatement extends Request implements \Chip\Services\Collect\Contracts\CompanyStatement
{
    use Json;

    protected $version = 'v1';

    public function all(): Response
    {
        return $this->sendJson('GET', "company_statements/", $this->getApiHeaders());
    }

    public function schedule(string $currency = 'MYR', array $query, array $body): Response
    {
        $query = http_build_query([
            'currency' => $currency,
            ...$query
        ]);
        return $this->sendJson('POST', 'company_statements/?'.$query, $this->getApiHeaders(), $body);
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "company_statements/{$id}", $this->getApiHeaders());
    }

    public function cancel(string $id): Response
    {
        return $this->sendJson('POST', "company_statements/{$id}/cancel", $this->getApiHeaders());
    }
}