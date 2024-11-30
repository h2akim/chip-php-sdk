<?php

namespace Chip;

use Http\Client\Common\HttpMethodsClient as HttpClient;

class Collect extends \Laravie\Codex\Client
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

    protected function getResourceNamespace(): string
    {
        return sprintf('%s\%s', __NAMESPACE__, 'Services\\Collect');
    }
}