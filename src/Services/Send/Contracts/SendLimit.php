<?php

declare(strict_types=1);

namespace Chip\Services\Send\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface SendLimit extends Request
{
    public function increaseBudgetAllocation(array $body = []): Response;

    public function get(string $id): Response;

    public function list(): Response;

    public function resendApprovalRequest(string $id): Response;
}
