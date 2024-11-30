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

    protected function getResourceNamespace(): string
    {
        return __NAMESPACE__;
    }
}