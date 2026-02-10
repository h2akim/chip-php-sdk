<?php

declare(strict_types=1);

namespace Chip\Services\Collect\Models;

use Chip\Exceptions\InvalidArgumentException;

abstract class Model implements \JsonSerializable
{
    protected array $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function __get(string $key): mixed
    {
        if (! array_key_exists($key, $this->data)) {
            throw new InvalidArgumentException(
                "Property {$key} does not exists for " . static::class
            );
        }

        return $this->data[$key];
    }

    public function __set(string $key, mixed $value): void
    {
        $this->data[$key] = $value;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function jsonSerialize(): mixed
    {
        return $this->data;
    }
}
