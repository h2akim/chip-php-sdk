<?php

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class Client extends Request implements \Chip\Services\Collect\Contracts\Client
{
    use Json;

    protected $version = 'v1';

    public function all(): Response
    {
        return $this->sendJson('GET', "clients/", $this->getApiHeaders());
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "clients/{$id}/", $this->getApiHeaders());
    }

    public function create(array $body): Response
    {
        return $this->sendJson('POST', 'clients/', $this->getApiHeaders(), $body);
    }

    public function update(string $id, array $body): Response
    {
        return $this->sendJson('PUT', "clients/{$id}/", $this->getApiHeaders(), $body);
    }

    public function patch(string $id, array $body): Response
    {
        return $this->sendJson('PATCH', "clients/{$id}/", $this->getApiHeaders(), $body);
    }

    public function destroy(string $id): Response
    {
        return $this->sendJson('DELETE', "clients/{$id}/", $this->getApiHeaders());
    }

    public function allRecurringTokens(string $id): Response
    {
        return $this->sendJson('GET', "clients/{$id}/recurring_tokens/", $this->getApiHeaders());
    }

    public function getRecurringToken(string $id, string $purchaseId): Response
    {
        return $this->sendJson('GET', "clients/{$id}/recurring_tokens/{$purchaseId}/", $this->getApiHeaders());
    }

    public function destroyRecurringToken(string $id, string $purchaseId): Response
    {
        return $this->sendJson('DELETE', "clients/{$id}/recurring_tokens/{$purchaseId}/", $this->getApiHeaders());
    }
}