<?php

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Multipart;
use Laravie\Codex\Contracts\Response;

class Purchase extends Request implements \Chip\Services\Collect\Contracts\Client
{
    use Multipart;

    protected $version = 'v1';

    public function create(array $body): Response
    {
        return $this->stream('POST', 'purchases/', $this->getApiHeaders(), $body);
    }

    public function get(string $id): Response
    {
        return $this->send('GET', "purchases/{$id}/", $this->getApiHeaders());
    }

    public function cancel(string $id): Response
    {
        return $this->send('POST', "purchases/{$id}/cancel/", $this->getApiHeaders());
    }

    public function release(string $id): Response
    {
        return $this->send('POST', "purchases/{$id}/cancel/", $this->getApiHeaders());
    }

    public function capture(string $id, int $amount): Response
    {
        return $this->send('POST', "purchases/{$id}/capture/", $this->getApiHeaders(), [
            'amount' => $amount,
        ]);
    }

    public function charge(string $id, string $recurringToken): Response
    {
        return $this->send('POST', "purchases/{$id}/charge/", $this->getApiHeaders(), [
            'recurring_token' => $recurringToken,
        ]);
    }

    public function destroyRecurringToken(string $id): Response
    {
        return $this->send('POST', "purchases/{$id}/delete_recurring_token/", $this->getApiHeaders());
    }

    public function refund(string $id, int $amount): Response
    {
        return $this->send('POST', "purchases/{$id}/refund/", $this->getApiHeaders(), [
            'amount' => $amount,
        ]);
    }

    public function markAsPaid(string $id, ?int $paidOn): Response
    {
        $body = [];
        if ($paidOn) $body['paid_on'] = $paidOn;
        return $this->send('POST', "purchases/{$id}/cancel/", $this->getApiHeaders(), $body);
    }

    public function resendInvoice(string $id): Response
    {
        return $this->send('POST', "purchases/{$id}/resend_invoice/", $this->getApiHeaders());
    }
}