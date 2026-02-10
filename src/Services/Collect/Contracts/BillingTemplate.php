<?php

declare(strict_types=1);

namespace Chip\Services\Collect\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface BillingTemplate extends Request
{
    public function all(): Response;

    public function list(): Response;

    public function create(array $body): Response;

    public function get(string $id): Response;

    public function update(string $id, array $body): Response;

    public function destroy(string $id): Response;

    public function sendInvoice(string $id, array $body): Response;

    public function addSubscriber(string $id, array $body): Response;

    public function allClients(string $id): Response;

    public function getClient(string $id, string $clientId): Response;

    public function updateClient(string $id, string $clientId, array $body): Response;
}
