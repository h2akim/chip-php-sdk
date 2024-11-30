<?php

namespace Chip;

use Http\Client\Common\HttpMethodsClient as HttpClient;

class Send extends \Laravie\Codex\Client
{
    public function __construct(
        HttpClient $http,
        protected string $apiKey,
        protected ?string $apiSecret = null
    ) {
        $this->http = $http;
    }

    protected $supportedVersions = [
        'v1' => 'Base'
    ];

    public function account()
    {
        return $this->uses('Account');
    }

    public function bankAccount()
    {
        return $this->uses('BankAccount');
    }

    public function group()
    {
        return $this->uses('Group');
    }

    public function sendInstruction()
    {
        return $this->uses('SendInstruction');
    }

    public function sendLimit()
    {
        return $this->uses('SendLimit');
    }

    public function webhook()
    {
        return $this->uses('Webhook');
    }

    protected function getResourceNamespace(): string
    {
        return sprintf('%s\%s', __NAMESPACE__, 'Services\\Send');
    }
}