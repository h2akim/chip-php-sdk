<?php

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class Webhook extends Request implements \Chip\Services\Collect\Contracts\Webhook
{
    use Json;

    protected $version = 'v1';

    public function all(): Response
    {
        return $this->sendJson('GET', 'webhooks/', $this->getApiHeaders());
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "webhooks/{$id}/", $this->getApiHeaders());
    }
    public function create(array $body): Response
    {
        return $this->sendJson('POST', 'webhooks/', $this->getApiHeaders(), $body);
    }

    public function update(string $id, array $body): Response
    {
        return $this->sendJson('PUT', "webhooks/{$id}/", $this->getApiHeaders(), $body);
    }

    public function destroy(string $id): Response
    {
        return $this->sendJson('DELETE', "webhooks/{$id}/", $this->getApiHeaders());
    }
}