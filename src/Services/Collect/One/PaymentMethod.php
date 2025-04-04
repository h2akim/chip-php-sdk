<?php

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class PaymentMethod extends Request implements \Chip\Services\Collect\Contracts\PaymentMethod
{
    use Json;

    protected $version = 'v1';

    public function sendJson(string $brandId, string $currency = 'MYR', array $body): Response
    {
        return $this->send('GET', 'payment_methods/', $this->getApiHeaders(), [
            'brand_id' => $brandId,
            'currency' => $currency,
            ...$body
        ]);
    }
}