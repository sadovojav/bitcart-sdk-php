<?php

declare(strict_types=1);

namespace Bitcart\Result\Product;

class ProductSearch
{
    public readonly int $count;
    public readonly ?string $next;
    public readonly ?string $previous;
    /** @var Product[] */
    public readonly array $result;
}
