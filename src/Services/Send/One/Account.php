<?php

namespace Chip\Services\Send\One;

use Chip\Services\Send\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class Account extends Request implements \Chip\Services\Send\Contracts\Account
{

    use Json;

    public function list(): Response
    {
        return $this->send('GET', "send/accounts/", $this->getApiHeaders());
    }
}