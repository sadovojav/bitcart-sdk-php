<?php

declare(strict_types=1);

namespace Bitcart\Result\Crypto;

class CryptoSearch
{
    public readonly int $count;
    public readonly ?string $next;
    public readonly ?string $previous;
    public readonly array $result;
}
