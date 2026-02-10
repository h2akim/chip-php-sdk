<?php

declare(strict_types=1);

namespace Chip\Services\Collect\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface CompanyStatement extends Request
{
    public function all(): Response;

    public function list(): Response;

    public function schedule(array $query = [], array $body = [], string $currency = 'MYR'): Response;

    public function get(string $id): Response;

    public function cancel(string $id): Response;
}
