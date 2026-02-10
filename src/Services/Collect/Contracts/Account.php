<?php

declare(strict_types=1);

namespace Chip\Services\Collect\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface Account extends Request
{
    public function balance(array $body = [], string $currency = 'MYR'): Response;

    public function turnover(array $body = [], string $currency = 'MYR'): Response;
}
