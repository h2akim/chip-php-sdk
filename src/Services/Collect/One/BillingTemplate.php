<?php

declare(strict_types=1);

namespace Chip\Services\Collect\One;

use Chip\Services\Collect\Request;
use Laravie\Codex\Concerns\Request\Json;
use Laravie\Codex\Contracts\Response;

class BillingTemplate extends Request implements \Chip\Services\Collect\Contracts\BillingTemplate
{
    use Json;

    protected $version = 'v1';

    public function all(): Response
    {
        return $this->sendJson('GET', 'billing_templates/', $this->getApiHeaders());
    }

    public function list(): Response
    {
        return $this->all();
    }

    public function create(array $body): Response
    {
        return $this->sendJson('POST', 'billing_templates/', $this->getApiHeaders(), $body);
    }

    public function get(string $id): Response
    {
        return $this->sendJson('GET', "billing_templates/{$id}/", $this->getApiHeaders());
    }

    public function update(string $id, array $body): Response
    {
        return $this->sendJson('PUT', "billing_templates/{$id}/", $this->getApiHeaders(), $body);
    }

    public function destroy(string $id): Response
    {
        return $this->sendJson('DELETE', "billing_templates/{$id}/", $this->getApiHeaders());
    }

    public function sendInvoice(string $id, array $body): Response
    {
        return $this->sendJson('POST', "billing_templates/{$id}/send_invoice/", $this->getApiHeaders(), $body);
    }

    public function addSubscriber(string $id, array $body): Response
    {
        return $this->sendJson('POST', "billing_templates/{$id}/add_subscriber/", $this->getApiHeaders(), $body);
    }

    public function allClients(string $id): Response
    {
        return $this->sendJson('GET', "billing_templates/{$id}/clients/", $this->getApiHeaders());
    }

    public function getClient(string $id, string $clientId): Response
    {
        return $this->sendJson('GET', "billing_templates/{$id}/clients/{$clientId}/", $this->getApiHeaders());
    }

    public function updateClient(string $id, string $clientId, array $body): Response
    {
        return $this->sendJson('PUT', "billing_templates/{$id}/clients/{$clientId}/", $this->getApiHeaders(), $body);
    }
}
