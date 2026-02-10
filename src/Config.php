<?php

declare(strict_types=1);

namespace Chip;

final class Config
{
    public function __construct(
        public string $apiKey,
        public ?string $apiSecret = null,
        public ?string $baseUri = null,
        public ?string $version = null,
        public bool $sandbox = false
    ) {
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
