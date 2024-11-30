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
        'v1' => 'Send'
    ];

    protected function getResourceNamespace(): string
    {
        return sprintf('%s\%s', __NAMESPACE__, 'Services');
    }
}