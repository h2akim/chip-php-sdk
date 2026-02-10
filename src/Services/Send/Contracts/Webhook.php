<?php

declare(strict_types=1);

namespace Chip\Services\Send\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface Webhook extends Request
{
    public function list(): Response;

    public function get(string $id): Response;

    public function create(array $body): Response;

    public function update(string $id, array $body): Response;

    public function destroy(string $id): Response;
}
