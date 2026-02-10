<?php

declare(strict_types=1);

namespace Chip\Services\Collect\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface PublicKey extends Request
{
    public function get(): Response;
}
