<?php

declare(strict_types=1);

namespace Chip\Services\Send\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface BankAccount extends Request
{
    public function list(array $query = []): Response;

    public function get(string $id): Response;

    public function create(array $body): Response;

    public function destroy(string $id): Response;

    public function resendWebhookEvent(string $id): Response;
}
