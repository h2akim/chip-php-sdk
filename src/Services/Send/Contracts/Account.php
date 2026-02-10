<?php

declare(strict_types=1);

namespace Chip\Services\Send\Contracts;

use Laravie\Codex\Contracts\Request;
use Laravie\Codex\Contracts\Response;

interface Account extends Request
{
    public function list(): Response;
}
