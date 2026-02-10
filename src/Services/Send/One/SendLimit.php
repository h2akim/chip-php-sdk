<?php

declare(strict_types=1);

namespace Chip\Services\Send\One;

use Chip\Services\Send\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class SendLimit extends Request implements \Chip\Services\Send\Contracts\SendLimit
{
    use Json;

    public function increaseBudgetAllocation(array $body = []): Response
    {
        return $this->sendJson('POST', 'send_limits', $this->getApiHeaders(), $body);
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "send_limits/{$id}", $this->getApiHeaders());
    }

    public function list(): Response
    {
        return $this->sendJson('GET', 'send_limits', $this->getApiHeaders());
    }

    public function resendApprovalRequest(string $id): Response
    {
        return $this->sendJson('POST', "send_limits/{$id}/resend_approval_requests", $this->getApiHeaders());
    }
}
