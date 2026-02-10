<?php

declare(strict_types=1);

namespace Chip\Services\Send\One;

use Chip\Services\Send\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class Group extends Request implements \Chip\Services\Send\Contracts\Group
{
    use Json;

    public function list(array $query = []): Response
    {
        return $this->sendJson('GET', 'groups/', $this->getApiHeaders(), $query);
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "groups/{$id}/", $this->getApiHeaders());
    }

    public function create(array $body): Response
    {
        return $this->sendJson('POST', 'groups/', $this->getApiHeaders(), $body);
    }

    public function update(string $id, array $query): Response
    {
        $query = http_build_query($query);
        return $this->sendJson('PATCH', "groups/{$id}/?".$query, $this->getApiHeaders());
    }
    
    public function destroy(string $id): Response
    {
        return $this->sendJson('DELETE', "groups/{$id}/", $this->getApiHeaders());
    }
}
