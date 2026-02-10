<?php

declare(strict_types=1);

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class Account extends Request implements \Chip\Services\Collect\Contracts\Account
{
    use Json;

    protected $version = 'v1';

    public function balance(array $body = [], string $currency = 'MYR'): Response
    {
        return $this->sendJson('GET', 'accounts/json/balance/', $this->getApiHeaders(), [
            'currency' => $currency,
            ...$body
        ]);
    }

    public function turnover(array $body = [], string $currency = 'MYR'): Response
    {
        return $this->sendJson('GET', 'accounts/json/turnover/', $this->getApiHeaders(), [
            'currency' => $currency,
            ...$body
        ]);
    }
}
