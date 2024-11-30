<?php

namespace Chip\Services\Send\Base;

use Chip\Request;

class Group extends Request
{
    public function list()
    {
        return $this->send('GET', 'groups');
    }

    public function get(string $id)
    {
        return $this->send('GET', "groups/{$id}");
    }

    public function create()
    {
        return $this->send('POST', 'groups');
    }

    public function update(string $id)
    {
        return $this->send('PATCH', "groups/{$id}");
    }
    
    public function destroy(string $id)
    {
        return $this->send('DELETE', "groups/{$id}");
    }
}