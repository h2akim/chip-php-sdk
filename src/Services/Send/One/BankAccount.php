<?php

declare(strict_types=1);

namespace Chip\Services\Send\One;

use Chip\Services\Send\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class BankAccount extends Request implements \Chip\Services\Send\Contracts\BankAccount
{
    use Json;

    public function list(array $query = []): Response
    {
        return $this->sendJson('GET', 'send/bank_accounts', $this->getApiHeaders(), $query);
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "send/bank_accounts/{$id}", $this->getApiHeaders());
    }

    public function create(array $body): Response
    {
        return $this->sendJson('POST', 'send/bank_accounts', $this->getApiHeaders(), $body);
    }
    
    public function destroy(string $id): Response
    {
        return $this->sendJson('DELETE', "send/bank_accounts/{$id}", $this->getApiHeaders());
    }
    
    public function resendWebhookEvent(string $id): Response
    {
        return $this->sendJson('POST', "send/bank_accounts/{$id}/resend_webhook_event", $this->getApiHeaders());
    }
}
