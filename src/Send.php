<?php

namespace Chip;

use Http\Client\Common\HttpMethodsClient as HttpClient;

class Send extends \Laravie\Codex\Client
{
    /**
     * Chip Asia API endpoint.
     *
     * @var string
     */
    protected $apiEndpoint = 'https://api.chip-in.asia/api';

    public function __construct(
        HttpClient $http,
        protected string $apiKey,
        protected ?string $apiSecret = null
    ) {
        $this->http = $http;
    }

    protected $supportedVersions = [
        'v1' => 'One'
    ];

    public function useSandbox(): self
    {
        return $this->useCustomApiEndpoint('https://staging-api.chip-in.asia/api');
    }

    public function account(?string $version = null): Services\Send\Contracts\Account
    {
        return $this->uses('Account', $version);
    }

    public function bankAccount(?string $version = null): Services\Send\Contracts\BankAccount
    {
        return $this->uses('BankAccount', $version);
    }

    public function group(?string $version = null): Services\Send\Contracts\Group
    {
        return $this->uses('Group', $version);
    }

    public function sendInstruction(?string $version = null): Services\Send\Contracts\SendInstruction
    {
        return $this->uses('SendInstruction', $version);
    }

    public function sendLimit(?string $version = null): Services\Send\Contracts\SendLimit
    {
        return $this->uses('SendLimit', $version);
    }

    public function webhook(?string $version = null): Services\Send\Contracts\Webhook
    {
        return $this->uses('Webhook', $version);
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

    public function setSecretKey(?string $apiSecret): self
    {
        $this->apiSecret = $apiSecret;
        return $this;
    }

    public function getSecretKey(): ?string
    {
        return $this->apiSecret;
    }

    protected function getResourceNamespace(): string
    {
        return sprintf('%s\%s', __NAMESPACE__, 'Services\\Send');
    }
}