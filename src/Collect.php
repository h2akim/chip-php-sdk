<?php

namespace Chip;

use Http\Client\Common\HttpMethodsClient as HttpClient;

class Collect extends \Laravie\Codex\Client
{
    /**
     * Chip Asia API endpoint.
     *
     * @var string
     */
    protected $apiEndpoint = 'https://gate.chip-in.asia/api';

    /**
     * Default API version.
     *
     * @var string
     */
    protected $defaultVersion = 'v1';

    public function __construct(
        HttpClient $http,
        protected string $apiKey,
    ) {
        $this->http = $http;
    }

    protected $supportedVersions = [
        'v1' => 'One'
    ];

    public function account(?string $version = null): Services\Collect\Contracts\Account
    {
        return $this->uses('Account', $version);
    }

    public function purchase(?string $version = null): Services\Collect\Contracts\Purchase
    {
        return $this->uses('Purchase', $version);
    }

    public function paymentMethod(?string $version = null): Services\Collect\Contracts\PaymentMethod
    {
        return $this->uses('PaymentMethod', $version);
    }

    public function billingTemplate(?string $version = null): Services\Collect\Contracts\BillingTemplate
    {
        return $this->uses('BillingTemplate', $version);
    }

    public function client(?string $version = null): Services\Collect\Contracts\Client
    {
        return $this->uses('Client', $version);
    }

    public function webhook(?string $version = null): Services\Collect\Contracts\Webhook
    {
        return $this->uses('Webhook', $version);
    }

    public function publicKey(?string $version = null): Services\Collect\Contracts\PublicKey
    {
        return $this->uses('PublicKey', $version);
    }

    public function companyStatement(?string $version = null): Services\Collect\Contracts\CompanyStatement
    {
        return $this->uses('CompanyStatement', $version);
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    protected function getResourceNamespace(): string
    {
        return sprintf('%s\%s', __NAMESPACE__, 'Services\\Collect');
    }
}