<?php

declare(strict_types=1);

namespace Bitcart\Result\Store;

class StoreSearch
{
    public readonly int $count;
    public readonly ?string $next;
    public readonly ?string $previous;
    /** @var Store[] */
    public readonly array $result;
}
