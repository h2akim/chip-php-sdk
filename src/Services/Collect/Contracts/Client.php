<?php

declare(strict_types=1);

namespace Chip\Services\Collect\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface Client extends Request
{
    public function all(): Response;

    public function list(): Response;

    public function get(string $id): Response;

    public function create(array $body): Response;

    public function update(string $id, array $body): Response;

    public function patch(string $id, array $body): Response;

    public function destroy(string $id): Response;

    public function allRecurringTokens(string $id): Response;

    public function getRecurringToken(string $id, string $purchaseId): Response;

    public function destroyRecurringToken(string $id, string $purchaseId): Response;
}
