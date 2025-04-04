<?php

namespace Chip\Services\Send\One;

use Chip\Request;

class SendInstruction extends Request
{
    public function list()
    {
        return $this->send('GET', 'send_instructions');
    }

    public function get(string $id)
    {
        return $this->send('GET', "send_instructions/{$id}");
    }

    public function create()
    {
        return $this->send('POST', 'send_instructions');
    }

    public function destroy(string $id)
    {
        return $this->send('DELETE', "send_instructions/{$id}");
    }

    public function resendWebhookEvent(string $id)
    {
        return $this->send('POST', "send_instructions/{$id}/resend_webhook_event");
    }
}