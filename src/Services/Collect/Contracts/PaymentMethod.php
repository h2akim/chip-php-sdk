<?php

declare(strict_types=1);

namespace Chip\Services\Collect\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface PaymentMethod extends Request
{
    public function all(string $brandId, array $query = [], string $currency = 'MYR'): Response;

    public function list(string $brandId, array $query = [], string $currency = 'MYR'): Response;
}
