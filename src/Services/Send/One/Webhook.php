<?php

namespace Chip\Services\Send\One\One;

use Chip\Request;

class Webhook extends Request
{
    public function list()
    {
        return $this->send('GET', 'webhooks');
    }

    public function get(string $id)
    {
        return $this->send('GET', "webhooks/{$id}");
    }

    public function create()
    {
        return $this->send('POST', 'webhooks');
    }

    public function update(string $id)
    {
        return $this->send('PATCH', "webhooks/{$id}");
    }
    
    public function destroy(string $id)
    {
        return $this->send('DELETE', "webhooks/{$id}");
    }
}