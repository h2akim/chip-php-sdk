<?php

declare(strict_types=1);

namespace Chip;

final class Config
{
    public string $apiKey;
    public ?string $apiSecret;
    public ?string $baseUri;
    public ?string $version;
    public bool $sandbox;

    public function __construct(
        string $apiKey,
        ?string $apiSecret = null,
        ?string $baseUri = null,
        ?string $version = null,
        bool $sandbox = false
    ) {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
        $this->baseUri = $baseUri;
        $this->version = $version;
        $this->sandbox = $sandbox;
    }

    public static function collect(string $apiKey): self
    {
        return new self($apiKey);
    }

    public static function send(string $apiKey, string $apiSecret): self
    {
        return new self($apiKey, $apiSecret);
    }

    public function withSandbox(bool $enabled = true): self
    {
        $clone = clone $this;
        $clone->sandbox = $enabled;
        return $clone;
    }

    public function withBaseUri(string $baseUri): self
    {
        $clone = clone $this;
        $clone->baseUri = $baseUri;
        return $clone;
    }

    public function withVersion(string $version): self
    {
        $clone = clone $this;
        $clone->version = $version;
        return $clone;
    }
}
