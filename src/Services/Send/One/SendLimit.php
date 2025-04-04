<?php

namespace Chip\Services\Send\One;

use Chip\Request;

class SendLimit extends Request
{
    public function increaseBudgetAllocation()
    {
        return $this->send('POST', 'send_limits');
    }

    public function get(string $id)
    {
        return $this->send('GET', "send_limits/{$id}");
    }

    public function list()
    {
        return $this->send('GET', 'send_limits');
    }

    public function resendApprovalRequest(string $id)
    {
        return $this->send('POST', "send_limits/{$id}/resend_approval_requests");
    }
}