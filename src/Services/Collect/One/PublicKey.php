<?php

declare(strict_types=1);

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class PublicKey extends Request implements \Chip\Services\Collect\Contracts\PublicKey
{
    use Json;

    protected $version = 'v1';

    public function get(): Response
    {
        return $this->sendJson('GET', 'public_key/', $this->getApiHeaders());
    }
}
