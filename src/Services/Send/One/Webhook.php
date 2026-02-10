<?php

declare(strict_types=1);

namespace Chip\Services\Send\One;

use Chip\Services\Send\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class Webhook extends Request implements \Chip\Services\Send\Contracts\Webhook
{
    use Json;

    public function list(): Response
    {
        return $this->sendJson('GET', 'webhooks', $this->getApiHeaders());
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "webhooks/{$id}", $this->getApiHeaders());
    }

    public function create(array $body): Response
    {
        return $this->sendJson('POST', 'webhooks', $this->getApiHeaders(), $body);
    }

    public function update(string $id, array $body): Response
    {
        return $this->sendJson('PATCH', "webhooks/{$id}", $this->getApiHeaders(), $body);
    }

    public function destroy(string $id): Response
    {
        return $this->sendJson('DELETE', "webhooks/{$id}", $this->getApiHeaders());
    }
}
