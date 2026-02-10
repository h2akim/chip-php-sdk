<?php

declare(strict_types=1);

namespace Chip\Services\Collect\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface Purchase extends Request
{
    public function create(array $body): Response;

    public function get(string $id): Response;

    public function cancel(string $id): Response;

    public function release(string $id): Response;

    public function capture(string $id, ?int $amount = null): Response;

    public function charge(string $id, string $recurringToken): Response;

    public function destroyRecurringToken(string $id): Response;

    public function refund(string $id, int $amount): Response;

    public function markAsPaid(string $id, ?int $paidOn = null): Response;

    public function resendInvoice(string $id): Response;
}
