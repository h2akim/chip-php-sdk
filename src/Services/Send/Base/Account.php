<?php

namespace Chip\Services\Send\Base;

use Chip\Request;

class Account extends Request
{
    public function list()
    {
        return $this->send('GET', "accounts");
    }
}