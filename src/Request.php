<?php

namespace Chip;

use Laravie\Codex\Contracts\Filterable;
use Laravie\Codex\Contracts\Sanitizer;
use Laravie\Codex\Filter\WithSanitizer;

class Request extends \Laravie\Codex\Request implements Filterable
{
    use WithSanitizer;

    // protected function sanitizeWith(): Sanitizer
    // {
    //     return new Sanitizer();
    // }
}