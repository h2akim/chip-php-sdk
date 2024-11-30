<?php

namespace Chip\Services\Send\Base;

use Chip\Request;

class BankAccount extends Request
{
    public function list()
    {
        return $this->send('GET', 'bank_accounts');
    }

    public function get(string $id)
    {
        return $this->send('GET', "bank_accounts/{$id}");
    }

    public function create()
    {
        return $this->send('POST', 'bank_accounts');
    }
    
    public function destroy(string $id)
    {
        return $this->send('DELETE', "bank_accounts/{$id}");
    }
    
    public function resendWebhookEvent(string $id)
    {
        return $this->send('POST', "bank_accounts/{$id}/resend_webhook_event");
    }
}