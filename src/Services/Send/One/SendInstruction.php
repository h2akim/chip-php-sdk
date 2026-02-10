<?php

declare(strict_types=1);

namespace Chip\Services\Send\One;

use Chip\Services\Send\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class SendInstruction extends Request implements \Chip\Services\Send\Contracts\SendInstruction
{
    use Json;

    public function list(): Response
    {
        return $this->sendJson('GET', 'send_instructions', $this->getApiHeaders());
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "send_instructions/{$id}", $this->getApiHeaders());
    }

    public function create(array $body): Response
    {
        return $this->sendJson('POST', 'send_instructions', $this->getApiHeaders(), $body);
    }

    public function destroy(string $id): Response
    {
        return $this->sendJson('DELETE', "send_instructions/{$id}", $this->getApiHeaders());
    }

    public function resendWebhookEvent(string $id): Response
    {
        return $this->sendJson('POST', "send_instructions/{$id}/resend_webhook_event", $this->getApiHeaders());
    }
}
