<?php

declare(strict_types=1);

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class PaymentMethod extends Request implements \Chip\Services\Collect\Contracts\PaymentMethod
{
    use Json;

    protected $version = 'v1';

    public function all(string $brandId, array $query = [], string $currency = 'MYR'): Response
    {
        return $this->sendJson('GET', 'payment_methods/', $this->getApiHeaders(), [
            'brand_id' => $brandId,
            'currency' => $currency,
            ...$query
        ]);
    }

    public function list(string $brandId, array $query = [], string $currency = 'MYR'): Response
    {
        return $this->all($brandId, $query, $currency);
    }
}
